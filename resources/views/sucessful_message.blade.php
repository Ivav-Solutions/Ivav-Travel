@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Success', 'subtitle' => 'Success Message'])
@endsection

@section('page-content')
<!-- Start Free Quote Area -->
<div class="free-quote-area ptb-100">
    <div class="container">
        <div class="free-quote-inner">
            <div class="section-title" style="color: #fff; font-size: 20px; font-weight: 700">
                <h2>Form Submitted Successfully</h2>
                <p style="color: #fff;">Thank you for consulting us today, A message has been sent to your mail!</p>
                <p style="color: #fff;">Kindly make payment to</p>

                Bank name: PROVIDUS BANK <br>
                Account name: MY IVAV LTD <br>
                Account number: 1100308308

                <p style="color: #fff;">Consultation fee: #100,000</p>

                <p style="color: #fff;">Please, attach your payment receipt here and forward it to info@ivavtravel.com with your name as the Subject.</p>

                <p style="color: #fff;">Your booking will be confirmed upon receipt of payment. Thanks!</p>
            </div>
        </div>
    </div>
</div>
<!-- End Free Quote Area -->
@endsection