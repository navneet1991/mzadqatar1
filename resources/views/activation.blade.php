@extends('layouts.app')
@section('title', ' Activation page')
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
                    <p class="color-grey f-size-14  margin-t-10">سجل دخولك او قم بالتسجيل باستخدام احدى الطرق التالية حتى تتمتع بالمميزات الكاملة للموقع و متابعة اعلاناتك</p>
                    <hr class="margin-t-30">
                </div>
            </div>
            <div>
                <div class="col-md-7 col-sm-7 col-xs-12">

                    <h1 class="f-size-20 bold color-dark-grey margin-t-30 padding-0">تفعيل الرقم</h1>
                    <p class="color-purple f-size-15 margin-t-25">تم ارسال تنبيه لك من فضلك ادخل علي تنبيهاتك من علي التطبيق وادخل كود التعفيل المرسل لك</p>

                    <form action="{{url('/activate')}}" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('errors.error')
                        <fieldset>

                            <div class="form-group margin-t-30">

                                <input type="text" class="form-control" placeholder="ادخل كود التفعيل" name="code">

                                <button class="btn btn-warning f-size-14 margin-t-40 margin-b-20">تفعيل</button>


                            </div>

                        </fieldset>
                    </form>

                    <div>
                        <p class="f-size-18 margin-t-15">لم يصلك الكود ؟ <span class="color-purple">ارسل الكود مرة اخرى</span> ( لابد من الانتظار 10 دقائق لمعاودة الارسال)</p>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <img src="assets/images/activation_app_img.jpg" alt="activation-app-image" class="img-responsive center-block margin-t-40 margin-b-40">
                </div>

            </div>
        </div>
    </div>
@endsection