@extends('layouts.admin_frontend')



@section('banner')
@includeIf('layouts.banner')
@endsection

@section('page-content')

@section('header')
@includeIf('layouts.admin_header')
@endsection

<!--**********************************
				Sidebar start
			***********************************-->
@section('sidebar')
@includeIf('layouts.admin_sidebar')
@endsection
<!--**********************************
				Sidebar end
			***********************************-->

<!--**********************************
				Content body start
			***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Transactions</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Transactions</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card-header border-0 pb-3 ">
                <div class="mr-auto pr-3">
                    <h4 class="text-black font-w700 fs-24">All Transactions</h4>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive ">
                    <table class="table table-responsive-lg mb-4 dataTablesCard card-table text-black" id="example5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Consultation ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Amount</th>
                                <th>Transaction ID</th>
                                <th>Ref ID</th>
                                <th>Paid At</th>
                                <th>Channel</th>
                                <th>Ip Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="text-black">{{$transaction->consultation_id}}</td>
                                <td>{{$transaction->name}}</td>
                                <td class="text-black">{{$transaction->email}}</td>
                                <td class="text-black">{{$transaction->amount}}</td>
                                <td>{{$transaction->transaction_id}}</td>
                                <td class="text-black">{{$transaction->ref_id}}</td>
                                <td>{{$transaction->paid_at}}</td>
                                <td class="text-black">{{$transaction->channel}}</td>
                                <td class="text-black">{{$transaction->ip_address}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($transaction->status == 'success')
										<a class="btn btn-rounded btn-success mr-auto text-nowrap" href="#">{{$transaction->status}}</a>
                                        @else
                                        <a class="btn btn-rounded btn-danger mr-auto text-nowrap" href="#">{{$transaction->status}}</a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
				Content body end
			***********************************-->

<!--**********************************
				Footer start
			***********************************-->
@section('footer')
@includeIf('layouts.admin_footer')
@endsection
<!--**********************************
				Footer end
			***********************************-->
@endsection