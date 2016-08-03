@extends('layouts.app')
@section('title', ' Update Password')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb margin-t-40">
                    <li><a href="javacript:void(0);" class="f-size-12">الرئيسية</a></li>
                    <li><a href="javacript:void(0);" class="active bold f-size-12">استعادة كلمة المرور</a></li>
                </ol>
            </div>
            <div class="margin-t-30">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="list">
                        <ul>
                            <li><a href="javacript:void(0);">استعادة كلمة المرور</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p class="color-grey f-size-14  margin-t-10">تحديث كلمة المرور الخاصة بك</p>
                    <hr class="margin-t-30">
                </div>
            </div>



            <div>
                <div class="col-md-6 col-sm-6 col-xs-12">

                    <form action="{{url('/update-password-mobile')}}" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{Session::get('mobile')}}" name="mobile">
                        @include('errors.error')
                        <fieldset>

                            <h1 class="f-size-18 bold color-dark-grey margin-t-15 padding-0">تحديث كلمة المرور الخاصة بك</h1>
                            <div class="form-group margin-t-30">
                                <label class="margin-b-20">كلمة المرور</label>
                                <input type="password" class="form-control" placeholder="●●●●●●●●●●●●●●●●●●" name="password1">
                            </div>

                            <div class="form-group margin-t-30">
                                <label class="margin-b-20">تأكيد كلمة المرور</label>
                                <input type="password" class="form-control" placeholder="●●●●●●●●●●●●●●●●●●" name="password2">
                            </div>

                            <button  class="btn btn-warning f-size-14 margin-t-20 margin-b-20">تحديث كلمة المرور</button>

                        </fieldset>
                    </form>


                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 ">

                    <img src="{{url('/')}}/assets/images/lock_img.jpg" alt="lock" class="img-responsive  margin-t-100 margin-b-40 center-block">

                </div>

            </div>

        </div>
    </div>
@endsection