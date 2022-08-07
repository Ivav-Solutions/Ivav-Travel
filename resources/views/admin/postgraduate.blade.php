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
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Post Graduate</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Post Graduate</a></li>
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
                                <th>CV</th>
                                <th>Do You Have Dependent</th>
                                <th>Number of Dependence</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($postgraduates as $postgraduate)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="text-black">{{$postgraduate->name}}</td>
                                <td>{{$postgraduate->email}}</td>
                                <td class="text-black">{{$postgraduate->phone_number}}</td>
                                <td class="text-black">{{$postgraduate->marital_status}}</td>
                                <td>{{$postgraduate->services}}</td>
                                <td class="text-black">
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-rounded btn-primary mr-auto text-nowrap" href="{{route('admin.download.cv', Crypt::encrypt($postgraduate->cv))}}">Download</a>
                                    </div>
                                </td>
                                <td>{{$postgraduate->do_you_have_dependent}}</td>
                                <td class="text-black">{{$postgraduate->number_of_dependence}}</td>
                                <td class="text-black">{{$postgraduate->date}}</td>
                                <td class="text-black">{{$postgraduate->time}}</td>
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