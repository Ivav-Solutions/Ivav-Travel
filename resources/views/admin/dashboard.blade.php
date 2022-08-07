@extends('layouts.admin_frontend')

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
        <div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
            <div class="mr-auto  d-lg-block mb-3">
                <h2 class="text-black mb-0 font-w700">Dashboard</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-xxl-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="d-inline-block position-relative donut-chart-sale mr-4">
                                <span class="donut2" data-peity='{ "fill": ["rgb(246, 67, 67, 1)", "rgba(241, 241, 241,1)"],   "innerRadius": 45, "radius": 10}'>{{$totalConsultations->count()}}/100</span>
                                <small class="text-black">{{$totalConsultations->count()}}%</small>
                            </div>
                            <div class="media-body ">
                                <h2 class="fs-36 text-black font-w700">{{$totalConsultations->count()}}</h2>
                                <p class="fs-18 mb-0 text-black font-w500">Total Consultation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="d-inline-block position-relative donut-chart-sale mr-4">
                                <span class="donut2" data-peity='{ "fill": ["rgb(30, 51, 242, 1)", "rgba(241, 241, 241,1)"],   "innerRadius": 45, "radius": 10}'>{{$totalTransactions->count()}}/100</span>
                                <small class="text-black">{{$totalTransactions->count()}}%</small>
                            </div>
                            <div class="media-body mr-3">
                                <h2 class="fs-36 text-black font-w700">{{$totalTransactions->count()}}</h2>
                                <p class="fs-18 mb-0 text-black font-w500">Total Transaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-header border-0 pb-3 ">
                <div class="mr-auto pr-3">
                    <h4 class="text-black font-w700 fs-24">Latest Consultations</h4>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive ">
                    <table class="table table-responsive-lg mb-4 dataTablesCard card-table text-black" id="example5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Marital Status</th>
                                <th>Service</th>
                                <th>Date Submitted</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($consultations as $consultation)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="text-black">{{$consultation->name}}</td>
                                <td>{{$consultation->email}}</td>
                                <td class="text-black">{{$consultation->phone_number}}</td>
                                <td class="text-black">{{$consultation->marital_status}}</td>
                                <td>{{$consultation->services}}</td>
                                <td>{{$consultation->created_at->toDayDateTimeString()}}</td>
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