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
                    <h4>UK Global Talent Program</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">UK Global Talent Program</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card-header border-0 pb-3 ">
                <div class="mr-auto pr-3">
                    <h4 class="text-black font-w700 fs-24">All</h4>
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
                                <th>Do You Have Dependent</th>
                                <th>Number of Dependence</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($globaltalents as $globaltalent)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="text-black">{{$globaltalent->name}}</td>
                                <td>{{$globaltalent->email}}</td>
                                <td class="text-black">{{$globaltalent->phone_number}}</td>
                                <td class="text-black">{{$globaltalent->marital_status}}</td>
                                <td>{{$globaltalent->services}}</td>
                                <td>{{$globaltalent->do_you_have_dependent}}</td>
                                <td class="text-black">{{$globaltalent->number_of_dependence}}</td>
                                <td class="text-black">{{$globaltalent->date}}</td>
                                <td class="text-black">{{$globaltalent->time}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($globaltalent->payment_status == 'Success')
										<a class="btn btn-rounded btn-success mr-auto text-nowrap" href="#">{{$globaltalent->payment_status}}</a>
                                        @else
                                        <a class="btn btn-rounded btn-danger mr-auto text-nowrap" href="#">{{$globaltalent->payment_status}}</a>
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