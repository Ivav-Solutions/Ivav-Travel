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
            <div class="section-title">
                <h2>Form Submitted Successfully</h2>
                <p>Thank you for consulting us today, A message has been sent to your mail!</p>
            </div>
        </div>
    </div>
</div>
<!-- End Free Quote Area -->
@endsection