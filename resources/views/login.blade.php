@extends('layouts.app')
@section('title', ' login page')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb margin-t-40">
                    <li><a href="javacript:void(0);" class="f-size-12">الرئيسية</a></li>
                    <li><a href="login.html" class="active bold f-size-12">تسجيل دخول</a></li>
                </ol>
            </div>

            <div class="margin-t-30">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="list">
                        <ul>
                            <li><a href="javacript:void(0);">دخول /</a></li>
                            <li><a href="register.html">تسجيل</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p class="color-grey f-size-14 margin-t-10">سجل دخولك او قم بالتسجيل باستخدام احدى الطرق التالية حتى تتمتع بالمميزات الكاملة للموقع و متابعة اعلاناتك</p>
                    <hr class="margin-t-30">
                </div>
            </div>


            <div>
                <div class="col-md-5 col-sm-5 col-xs-12">

                    <form>

                        <fieldset>

                            <h1 class="f-size-20 bold color-dark-grey margin-t-15 padding-0">تسجيل دخول</h1>

                            <div class="form-group margin-t-40 padding-0">
                                <label class="margin-b-20">رقم الجوال</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="  رقم الجوال( قطر فقط)" aria-describedby="basic-addon2">
                                    <span class="input-group-addon small-box" id="basic-addon2"> <span class="margin-l-15"> | </span> 974 +  </span>
                                </div>
                            </div>
                            <div class="form-group margin-t-30  padding-0">
                                <label class="margin-b-20">كلمة المرور</label>
                                <input type="password" class="form-control" placeholder="●●●●●●●●●●●●●●●●●●">
                            </div>
                        </fieldset>
                    </form>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12 ">
                            <a href="login.html" class="btn btn-warning f-size-14 margin-t-40 margin-b-30"><img src="assets/images/login.png"  alt="login" class="margin-l-5">تسجيل  دخول</a>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <a href="app-login.html" class="btn btn-warning2 f-size-14 margin-t-40 margin-b-30 login-app-btn "><img src="assets/images/mob_img.jpg"  alt="mob"> تسجيل دخول بحسابك على التطبيق</a>
                        </div>
                    </div>
                    <div>
                        <ul class="links-list">
                            <li><a href="reset-password.html">نسيت كلمة المرور ؟</a>
                            <li><a href="reset-password.html" class="current">استعادة كلمة المرور</a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 hidden-xs">
                    <img src="assets/images/seprator.jpg" alt="seprtor" class=" margin-t-60 margin-r-50">
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12 ">

                    <h1 class="f-size-20 bold color-dark-grey margin-t-15">تسجيل عضوية جديدة</h1>

                    <a href="javascript:void(0);" class="btn btn-info btn-block f-size-14 margin-t-80 margin-b-30"> <img src="assets/images/user_img.jpg"  alt="mob" class="margin-l-15">سجل جديد</a>

                    <a href="javascript:void(0);" class="btn btn-info btn-block f-size-14 margin-t-80 margin-b-30"> <img src="assets/images/mob_img.jpg"  alt="mob" class="margin-l-15">تسجيل عضوية  بحسابك على التطبيق</a>

                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                    <img src="assets/images/seprator.jpg" alt="seprtor" class="pull-right margin-t-60 hidden-xs">
                </div>
            </div>
        </div>
    </div>
@endsection