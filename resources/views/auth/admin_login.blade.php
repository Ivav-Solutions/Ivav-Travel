@extends('layouts.frontend')

@section('page-content')
    <!-- Start Profile Authentication Area -->
    <div class="profile-authentication-area">
        <div class="logo">
            <a href="/" class="d-inline-block"><img src="{{URL::asset('assets/img/ivavtravel_logo.png')}}" alt="logo"></a>
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="signin-form">
                        <h2>Admin Login In</h2>
                        @includeIf('layouts.error_template')
                        <form class="sign-div" method="POST" action="{{ route('login.admin') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="email" name="email"> 
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <button type="submit">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Profile Authentication Area -->
@endsection