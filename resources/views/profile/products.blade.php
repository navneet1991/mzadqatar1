@extends('layouts.app')
@section('title', ' Products')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb margin-t-40">
                    <li><a href="javacript:void(0);" class="f-size-12">الرئيسية</a></li>
                    <li><a href="javacript:void(0);" class="active bold f-size-12">اعلاناتى</a></li>
                </ol>
            </div>

            <div class="margin-t-30">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="list">
                        <ul>
                            <li><a href="javacript:void(0);">اعلاناتى</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <br>
                   <p>    اهلا : <strong><?php echo $sessions['phone'] ?></strong>     &nbsp;  &nbsp; <a href="{{url('profile/logout')}}">تسجيل خروج</a> - <a href="{{url('profile/profile')}}">تعديل حسابك </a> - <a href="{{url('profile/add')}}">اضافة منتج  </a> </p>
                    <p class="color-grey f-size-14 margin-t-10">يمكنك هنا متابعة الاعلانات التى قمت بإضافتها سابقا</p>
                    <hr class="margin-t-30">
                </div>
            </div>
            <div>
                @foreach($products as $prod)


                 <div  class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box margin-t-10">
                        <img src="../assets/images/car_image.jpg" alt="car" class="img-responsive img-rounded margin-b-20 wd100">
                        <div class="box-inner">
                            <h3 class="color-purple margin-0 padding-0">{{$prod->product_name}}</h3>
                            <hr class="margin-t-15 margin-b-10">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <h6 class="margin-t-1 f-size-15 color-dark-grey">{{$prod->product_price}}  ر.ق</h6>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 brdr-right2">
                                    <h6 class="margin-t-1 f-size-15 color-dark-grey txt-space">{{$prod->comment}} <img src="../assets/images/message_icon.jpg" class="pull-left icon-space" alt="message"></h6>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 brdr-right">
                                    <h6 class="margin-t-1 f-size-15 color-dark-grey">{{$prod->likes}}  <img src="../assets/images/like_icon.jpg" class="icon-space pull-left" alt="like"></h6>
                                </div>
                            </div>

                            <hr class="margin-t-15 margin-b-10">

                            <div class="row">

                                <div class="col-md-4 col-sm-4 col-xs-4">

                                    <p class="f-size-12 color-dark-grey resend margin-t-5">اعادة ارسال <img src="../assets/images/resend_icon.jpg" class="pull-left icon-space" alt="resend"> </p>

                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-4 brdr-right2">
                                    <p class="f-size-12 color-dark-grey modification margin-t-5">تعديل  <img src="../assets/images/modification_icon.jpg " class="pull-left icon-space" alt="modification">   </p>

                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 brdr-right">
                                    <p class="f-size-12 color-dark-grey margin-t-5">حذف <img src="../assets/images/delete_img.jpg" class="pull-left icon-space" alt="delete"> </p>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>

                @endforeach;


            </div>



        </div>
    </div>
@endsection