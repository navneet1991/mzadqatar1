@extends('layouts.app')
@section('title', ' Add Page')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb margin-t-40">
                    <li><a href="{{url('/')}}" class="f-size-12">الرئيسية</a></li>
                    <li><a href="javacript:void(0);" class="active bold f-size-12">اضافة منتج جديد</a></li>
                </ol>
            </div>

            <div class="margin-t-30">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="list">
                        <ul>

                            <li><a href="javacript:void(0);">اضافة منتج جديد</a></li>
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

                   <form action="{{url('profile/add')}}" method="POST"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                       @include('errors.error')
                        <fieldset>

                            <h1 class="f-size-20 bold color-dark-grey margin-t-15 padding-0">اضافة منتج جديد</h1>

                            <div class="form-group margin-t-40">
                                <label class="margin-b-20">اسم المنتج (عربى) </label>
                                <div >
                                    <input type="text" class="form-control" placeholder=" اسم المنتج (عربى) " aria-describedby="basic-addon2" name="name_ar">
                                </div>
                            </div>

                            <div class="form-group margin-t-40">
                                <label class="margin-b-20">اسم المنتج (english) </label>
                                <div >
                                    <input type="text" class="form-control" placeholder=" اسم المنتج (English)  "  name="name_en">
                                </div>
                            </div>
                            <div class="form-group margin-t-40">
                                <label class="margin-b-20">سعر المنتج  </label>
                                <div >
                                    <input type="text" class="form-control" placeholder=" ر.ق  "  name="price">
                                </div>
                            </div>
                            <div class="form-group margin-t-40">
                                <label class="margin-b-20">التعريف بالمنتج  (عربى)</label>
                                <textarea  class="form-control" placeholder="نبذة عن المنتج (عربى)" name="desc_ar" rows="3"></textarea>
                            </div>
                            <div class="form-group margin-t-40">
                                <label class="margin-b-20">  التعريف بالمنتج  (english)</label>
                                <textarea  class="form-control" placeholder="نبذة عن المنتج (english) " name="desc_en" rows="3"></textarea>
                            </div>

                            <div class="form-group margin-t-40">
                                <label class="margin-b-20">المدينة  </label>
                                <div >
                                    <select  class="form-control"  name="city">
                                        <option value="2">الدوحة</option>
                                        <option value="2">الدوحة</option>
                                        <option value="2">الدوحة</option>
                                        <option value="2">الدوحة</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group margin-t-40">
                                <label class="margin-b-20">التصنيف  </label>
                                <div >
                                    <select  class="form-control"  name="category">
                                        <option value="2">عقارات</option>
                                        <option value="2">عقارات</option>
                                        <option value="2">عقارات</option>
                                        <option value="2">عقارات</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group margin-t-40">
                                <label class="margin-b-20">صور  المنتج </label>
                                <div class="input-group">
                                    <input type="file" class="form-control"  aria-describedby="basic-addon2" name="phone">

                                </div>
                            </div>





                        </fieldset>



                       <div class="row">
                           <div class="col-md-4 col-sm-12 col-xs-12 ">
                               <button  class="btn btn-warning f-size-14 margin-t-40 margin-b-30"><img src="../assets/images/regiser_icon.png"  width="32" height="32" alt="register_icon" class="margin-l-5">اضافة منتج</button>
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