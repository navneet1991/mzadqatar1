@extends('layouts.app')
@section('title', ' Register Page')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb margin-t-40">
                    <li><a href="javacript:void(0);" class="f-size-12">الرئيسية</a></li>
                    <li><a href="javacript:void(0);" class="active bold f-size-12">تسجيل دخول</a></li>
                </ol>
            </div>

            <div class="margin-t-30">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="list">
                        <ul>
                            <li><a href="javacript:void(0);">دخول /</a></li>
                            <li><a href="javacript:void(0);">تسجيل</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p class="color-grey f-size-14  margin-t-10">سجل دخولك او قم بالتسجيل باستخدام احدى الطرق التالية حتى تتمتع بالمميزات الكاملة للموقع و متابعة اعلاناتك</p>
                    <hr class="margin-t-30">
                </div>


            <div>
                <div class="col-md-5 col-sm-5 col-xs-12 ">

                   <form action="{{url('profile/register')}}" method="POST"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                       @include('errors.error')
                        <fieldset>

                            <h1 class="f-size-20 bold color-dark-grey margin-t-15 padding-0">تسجيل جديد</h1>

                            <div class="form-group margin-t-40">
                                <label class="margin-b-20">رقم الجوال</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="  رقم الجوال( قطر فقط)" aria-describedby="basic-addon2" name="phone">
                                    <span class="input-group-addon small-box" id="basic-addon2"> <span class="margin-l-15"> | </span> 974 +  </span>
                                </div>
                            </div>


                            <div class="form-group margin-t-30">
                                <label class="margin-b-20">البريد الإلكترونى</label>
                                <input type="text" class="form-control" placeholder="mail@website.com" name="email">
                            </div>


                            <div class="form-group margin-t-30">
                                <label class="margin-b-20">كلمة المرور</label>
                                <input type="password" class="form-control" placeholder="●●●●●●●●●●●●●●●●●●" name="password1">
                            </div>

                            <div class="form-group margin-t-30">
                                <label class="margin-b-20">تأكيد كلمة المرور</label>
                                <input type="password" class="form-control" placeholder="●●●●●●●●●●●●●●●●●●" name="password2">
                            </div>




                        </fieldset>



                       <div class="row">
                           <div class="col-md-4 col-sm-12 col-xs-12 ">
                               <button  class="btn btn-warning f-size-14 margin-t-40 margin-b-30"><img src="../assets/images/regiser_icon.png"  width="32" height="32" alt="register_icon" class="margin-l-5">تسجيل جديد</button>
                           </div>
                           <div class="col-md-4 col-sm-12 col-xs-12">
                               <a href="{{url('profile/login')}}" class="btn btn-warning2 f-size-14 margin-t-40 margin-b-30 login-app-btn "><img src="../assets/images/login.png"  alt="mob"> تسجيل  دخول</a>
                           </div>
                       </div>
                    </form>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-md-5 col-sm-5 col-xs-12">

                    <div class="right-box margin-t-20 margin-b-20">

                        <h2 class="f-size-20 color-purple bold margin-0 padding-0">لماذا تقوم بالتسجيل </h2>

                        <p class="f-size-18 color-grey padding-t-15">بعض المميزات عند قيامك بالتسجيل فى مزاد قطر</p>

                        <hr>

                        <ul class="list-features pull-right">

                            <li> <i class="fa fa-check"></i>  اضافة اعلاناتك و متابعتها اول بأول</li>
                            <li> <i class="fa fa-check"></i>  امكانية حفظ الاعلانات المفضلة بقائمة خاصة بك</li>
                            <li> <i class="fa fa-check"></i>  تبيهات باخر الاعلانات المضافة و المميزة  </li>
                            <li> <i class="fa fa-check"></i> تصفح شامل و غير محدود للموقع </li>
                            <li> <i class="fa fa-check"></i> بعض المميزات عند قيامك بالتسجيل فى مزاد قطر</li>
                            <li> <i class="fa fa-check"></i> بعض المميزات عند قيامك بالتسجيل فى مزاد قطر </li>
                            <li> <i class="fa fa-check"></i> بعض المميزات عند قيامك بالتسجيل فى مزاد قطر </li>
                            <li> <i class="fa fa-check"></i> بعض المميزات عند قيامك بالتسجيل فى مزاد قطر </li>



                        </ul>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection