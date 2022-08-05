<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Consultation;
use App\Models\Transaction;
use Illuminate\Support\Carbon;

class HomePageController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }
    
    public function about_us() {
        return view('about');
    }
    
    public function under_graduate() {
        return view('under_graduate');
    }

    public function post_graduate() {
        return view('post_graduate');
    }

    public function uk_global_talent_program()
    {
        return view('uk_global_talent_program');
    }

    public function uk_study_program(Request $request) 
    {
        //Validate Request
        $this->validate($request, [
            'phone_number' => 'numeric',
            'cv' => 'required|mimes:pdf,docx'
        ]);

        if (request()->hasFile('cv')) {
            $filename = request()->cv->getClientOriginalName();
            request()->cv->storeAs('cv', $filename, 'public');
        }

        Consultation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'marital_status' => $request->marital_status,
            'services' => $request->service,
            'cv' => $filename,
            'do_you_have_dependent' => $request->are_you_dependent,
            'number_of_dependence' => $request->number_of_dependence,
            'time' => $request->time,
            'date' => $request->date,
            'payment_status' => 'Success'
        ]);   

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'marital_status' => $request->marital_status,
            'service' => $request->service,
            'do_you_have_dependent' => $request->are_you_dependent,
            'number_of_dependence' => $request->number_of_dependence,
            'time' => $request->time,
            'date' => $request->date,
        );

        /** Send message to the admin */
        Mail::send('emails.consultation', $data, function ($m) use ($data) {
            $m->to($data['email'])->subject('Consultation Details');
        });


        return back()->with('success_report', 'Thank you for consulting us today, A message has been sent to your mail!');
    }

    public function post_uk_global_talent_program(Request $request) 
    {
        //Validate Request
        $this->validate($request, [
            'phone_number' => 'numeric'
        ]);

        $Consultation = Consultation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'marital_status' => $request->marital_status,
            'services' => $request->service,
            'do_you_have_dependent' => $request->are_you_dependent,
            'number_of_dependence' => $request->number_of_dependence,
            'time' => $request->time,
            'date' => $request->date
        ]);   

        $SECRET_KEY = config('app.paystack_secret_key');;

        $url = "https://api.paystack.co/transaction/initialize";

        $fields = [
            'email' => $request->email,
            'amount' => 100000 * 100,
            'callback_url' => url('/payment/callback'),
            'metadata' => [
                'consultation_id' => $Consultation->id,
                'name' => $request->name
            ]
        ];

        $fields_string = http_build_query($fields);
        //open connection
        $ch = curl_init();
        
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer $SECRET_KEY",
            "Cache-Control: no-cache",
        ));
        
        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        
        //execute post
        $paystack_result = curl_exec($ch);
        
        $result = json_decode($paystack_result);

        //  return $result;
        $authorization_url = $result->data->authorization_url;
        $paystack_status = $result->status;

        // return dd($result->status);

        if ($paystack_status == true) {
            return redirect()->to($authorization_url);
        } else {
            return back()->with('failure_report', 'Payment failed. Response not ok, please try again!');
        }
    }

    public function handleGatewayCallback()
    {
        $SECRET_KEY = config('app.paystack_secret_key');
        
        $curl = curl_init();

        $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
            if(!$reference){
            die('No reference supplied');
        }
  
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $SECRET_KEY",
                "Cache-Control: no-cache",
            ),
        ));
        
        $paystack_response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
            
        $result = json_decode($paystack_response);
        
        if ($err) {
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        } else {
            // dd($result);
            $consultation = Consultation::findorfail($result->data->metadata->consultation_id);
            $consultation->payment_status = "Success";
            $consultation->save();


            Transaction::create([
                'consultation_id' => $result->data->metadata->consultation_id,
                'name' => $result->data->metadata->name,
                'email' => $result->data->customer->email,
                'amount' => ($result->data->amount / 100),
                'transaction_id' => $result->data->id,
                'ref_id' => $result->data->reference,
                'paid_at' => $result->data->paid_at,
                'channel' => $result->data->channel,
                'ip_address' => $result->data->ip_address,
                'status' => $result->data->status,
            ]);

            $data = array(
                'name' => $consultation->name,
                'email' => $consultation->email,
                'phone_number' => $consultation->phone_number,
                'marital_status' => $consultation->marital_status,
                'service' => $consultation->services,
                'do_you_have_dependent' => $consultation->do_you_have_dependent,
                'number_of_dependence' => $consultation->number_of_dependence,
                'time' => $consultation->time,
                'date' => $consultation->date,
            );
    
            /** Send message to the admin */
            Mail::send('emails.consultation', $data, function ($m) use ($data) {
                $m->to($data['email'])->subject('Consultation Details');
            });

            return redirect()->route('consultation.successful');
        }
    }

    public function consultation_successfully()
    {
        return view('sucessful_message');
    }
    
    public function faq() 
    {
        return view('faq');
    }

    public function contact() 
    {
        return view('contact');
    }  

    public function contactConfirm(Request $request) 
    {
        //Validate Request
        $this->validate($request, [
            'phone' => 'numeric',
        ]);

        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'created_at' => now(),
            'admin' => 'promiseezema11@gmail.com',
        );
        /** Send message to the admin */
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject('Contact Form Notification');
        });

        return back()->with('success_report', 'Thanks for contacting us, We will get in touch with you shortly!');
    }

    public function book_consultation()
    {
        return view('book_consultation');
    }

    public function request_quote(Request $request)
    {
        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => request()->name,
            'email' => request()->email,
            'service' => request()->service,
        );

        if($request->service == "Under Graduate")
        {
            /** Send message to the admin */
            Mail::send('emails.undergraduate', $data, function ($m) use ($data) {
                $m->to($data['email'])->subject('Get A Quote');
            });
        }

        if($request->service == "Post Graduate")
        {
            /** Send message to the admin */
            Mail::send('emails.postgraduate', $data, function ($m) use ($data) {
                $m->to($data['email'])->subject('Get A Quote');
            });
        }

        if($request->service == "UK Global Talent Program")
        {
            /** Send message to the admin */
            Mail::send('emails.uk_global_talent_program', $data, function ($m) use ($data) {
                $m->to($data['email'])->subject('Get A Quote');
            });
        }

        return back()->with('success_report', 'Thank you for requesting for a quote, kindly check your mail to see our quote!');
    }

    public function admin_login()
    {
        return view ('auth.admin_login');
    }
}
