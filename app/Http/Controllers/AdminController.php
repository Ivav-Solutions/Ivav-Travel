<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalConsultations = Consultation::latest()->get();
        $totalTransactions = Transaction::latest()->get();
        $consultations = Consultation::latest()->take(5)->get();

        return view('admin.dashboard',[
            'totalConsultations' => $totalConsultations,
            'totalTransactions' => $totalTransactions,
            'consultations' => $consultations
        ]);
    }

    public function undergraduate()
    {
        $undergraduates = Consultation::latest()->where('services', 'Under Graduate')->get();

        return view('admin.undergraduate', [
            'undergraduates' => $undergraduates
        ]);
    }

    public function postgraduate()
    {
        $postgraduates = Consultation::latest()->where('services', 'Post Graduate')->get();

        return view('admin.postgraduate', [
            'postgraduates' => $postgraduates
        ]);
    }

    public function uk_global_talent_program()
    {
        $globaltalents = Consultation::latest()->where('services', '!=', 'Post Graduate')
                                                ->where('services', '!=', 'Under Graduate')->get();

        return view('admin.uk_global_talent_program', [
            'globaltalents' => $globaltalents
        ]);
    }

    public function transactions()
    {
        $transactions = Transaction::latest()->get();

        return view('admin.transactions', [
            'transactions' => $transactions
        ]);
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function download($id) {
        $documentFinder = Crypt::decrypt($id);
        
        $consultation = Consultation::findorfail($documentFinder);

        $documents = explode(",", $consultation->documents);
        foreach($documents as $document) 
        {     
            // dd($documents);       
            return Storage::download('public/documents/'.$consultation->name.'/'.$documents);
        }
        
        return Storage::download('public/documents/'.$consultation->name.'/'.$document);
    }

    public function update_profile(Request $request) 
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
        ]);

        $user = User::findorfail(Auth::user()->id);
        
        if($user->email == $request->email)
        {
            $user->update([
                'name' => $request->name,
            ]); 
        } else {
            $this->validate($request, [
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]); 
        }
        
        return back()->with('success_report', 'Profile Updated Successfully');
    }

    public function update_password (Request $request) 
    {
        $this->validate($request, [
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::findorfail(Auth::user()->id);
        
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success_report', 'Password Updated Successfully');
    }

}
