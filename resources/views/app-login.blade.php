@extends('layouts.app')
@section('title', ' Application Login page')
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
                <div class="col-md-6 col-sm-6 col-xs-12">

                    <form action="{{url('/applogin')}}" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <fieldset>

                            <h1 class="f-size-20 bold color-dark-grey margin-t-15 padding-0">تسجيل دخول بحسابك على التطبيق</h1>

                            <div class="form-group margin-t-40 padding-0">
                                <label class="margin-b-20">رقم الجوال</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="ادخل رقم جوالك على التطبيق ( قطر فقط)  " aria-describedby="basic-addon2" name="mobile">
                                    <span class="input-group-addon small-box" id="basic-addon2"> <span class="margin-l-15"> | </span> 974 +  </span>
                                </div>
                            </div>

                            <button class="btn btn-warning f-size-14 margin-t-30 margin-b-30">تسجيل</button>




                        </fieldset>
                    </form>
                    <div>
                        <ul class="links-list">
                            <li><a href="javascript:void(0;)">لا تملك التطبيق ؟</a>
                            <li><a href="javascript:void(0;)" class="current"> احصل على التطبيق الآن</a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">


                    <img src="assets/images/App_img.jpg" alt="app_img" class="img-responsive margin-t-25 margin-b-40 center-block">


                </div>


            </div>


        </div>
    </div>
@endsection