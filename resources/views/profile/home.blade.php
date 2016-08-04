@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href="{{url('profile/register')}}" >Register</a>  <a href="{{url('profile/login')}}" >Login</a> </div>
                <div class="span12"><img src="assets/images/header-logo.png"></div>

            </div>
        </div>
    </div>
</div>
@endsection
