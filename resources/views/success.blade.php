@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Success', 'subtitle' => 'Success Message'])
@endsection

@section('page-content')
<div class="modal" id="myModal" style="top: 30% !important;" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Make A Deposit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <p>Would you like to make a deposit?</p>
                    <button type="submit" onclick="show()" class="btn btn-primary">Yes</button>
                    <button type="submit" onclick="hide()" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                </div>
                <div class="mt-4 mb-3">
                    @includeIf('layouts.error_template')
                </div>
                <div id="display_box" style="display: none;">
                    <hr>
                    <form action="{{ route('make.payment', Crypt::encrypt($consultation->id)) }}" method="post">
                    @csrf
                        
                        <div class="form-group mb-3">
                            <label>Amount</label>
                            <input type="number" name="amount" class="form-control" placeholder="Amount" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Make Payment</button>
                    </form>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div> -->
        </div>
    </div>
</div>
<!-- Start Free Quote Area -->
<div class="free-quote-area ptb-100">
    <div class="container">
        <div class="free-quote-inner">
            <div class="section-title" style="color: #fff; font-size: 20px; font-weight: 700">
                <h2>Form Submitted Successfully</h2>
                <p style="color: #fff;">Thank you for consulting us today, A message has been sent to your mail!</p>

                <p style="color: #fff;">Your booking will be confirmed upon receipt of payment. Thanks!</p>
            </div>
        </div>
    </div>
</div>
<!-- End Free Quote Area -->
<script>
    window.onload=function(){
        // var delayMs = 1500; // delay in milliseconds
        
        // setTimeout(function(){
            $('#myModal').modal('show');
        // }, delayMs);
    };

    function show() {
        document.getElementById('display_box').style.display = 'block';
    }

    function hide() {
        document.getElementById('display_box').style.display = 'none';
    }
</script>
@endsection