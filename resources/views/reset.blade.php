@extends('layouts.app')
@section('title', ' Reset Password')
@section('content')
    <div class="container">
        @include('errors.error');
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
                    <p class="color-grey f-size-14  margin-t-10">استعد كلمة المرور الخاصة بحسابك عن طريق البريد الإلكترونى او عن طريق التطبيق</p>
                    <hr class="margin-t-30">
                </div>
            </div>



            <div>
                <div class="col-md-6 col-sm-6 col-xs-12">

                    <form action="{{url('/reset-password-email')}}" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <fieldset>

                            <h1 class="f-size-18 bold color-dark-grey margin-t-15 padding-0">استخدم احدى الطرق التالية لاستعادة كلمة المرور الخاصة بك</h1>
                            <div class="form-group margin-t-30  padding-0">
                                <label class="margin-b-20">عن طريق البريد الإلكترونى</label>
                                <input type="text" class="form-control" name="email" placeholder="ادخل عنوان البريد الالكترونى">
                            </div>

                            <button  class="btn btn-warning f-size-14 margin-t-20 margin-b-20">استعادة كلمة المرور</button>
                    </form>
                    <form action="{{url('/reset-password-mobile')}}" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group margin-t-30 padding-0">
                                <label class="margin-b-20">او عن طريق رقم الجوال</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="mobile" placeholder="ادخل رقم جوالك على التطبيق ( قطر فقط)" aria-describedby="basic-addon2">
                                    <span class="input-group-addon small-box" id="basic-addon2"> <span class="margin-l-15"> | </span> 974 +  </span>
                                </div>
                            </div>

                            <button  class="btn btn-warning f-size-14 margin-t-20 margin-b-20">استعادة كلمة المرور</button>

                        </fieldset>
                    </form>


                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 ">

                    <img src="assets/images/lock_img.jpg" alt="lock" class="img-responsive  margin-t-100 margin-b-40 center-block">

                </div>

            </div>

        </div>
    </div>
@endsection