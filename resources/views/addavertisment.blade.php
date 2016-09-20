<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EnglishArabic</title>
    <link href="{{url('/')}}/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/assets/css/media.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800italic,800,900,900italic' rel='stylesheet' type='text/css'>
    <link href="assets/css/icon_style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/assets/css/jasny-bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>


        .form-control::-moz-placeholder { color: #232830; opacity: 1;}
        .btn-select{ background:#fcfcfc; border:1px solid #ededed;}
        .btn.dropdown-toggle.btn-select {
            height: 51px;
        }
        .btn-group{ box-shadow:none !important;}
    </style>
</head>
<body>

<!--header-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-3 col-sm-3 col-xs-12">
                <a href="index.html"><img src="{{url('/')}}/assets/images/logo.png" alt="logo" class="img-responsive logo margin-t-10"></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="advertisement brdr-left brdr-right margin-t-20">
                    <a href="javascript:void(0);" class="btn btn-info btn-block btn-adv font-wt-600 f-size-15"><i class="fa fa-plus"></i> Add your ad for free</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 pad-left pad-right">
                <h3 class="text-center f-size-16 color-grey margin-t-15 margin-b-6">Download Mzad Qatar app</h3>
                <center>
                    <a href="javascript:void(0);"><img src="{{url('/')}}/assets/images/download_app_store_btn.png"  alt="app-store"></a>
                    <a href="javascript:void(0);"><img src="{{url('/')}}/assets/images/download_google_store_btn.png" alt="android-store"></a>
                </center>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="btn-group margin-t-20 brdr-left padding-l-10">

                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        EN <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">EN</a></li>
                        <li><a href="#">العربية</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!--navigation-->
<div class="clearfix"></div>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="btn-group hidden-xs" style="height:50px; left:-13%;">
                <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="top:0 !important;">
                    <i class="fa fa-caret-down color-white car-user-txt"></i>
                    <img src="{{url('/')}}/assets/images/eslam_img.png" alt="user" class="img-circle margin-r-20"> <span class="color-white f-size-16 bold user-txt"> Eslam Khalil</span>
                    <p class="f-size-14 color-white font-wt-500 company-txt">Company</p>
                </a>
                <div class="dropdown-menu padding-10" style="left:12%;">
                    <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Company</a>
                </div>
            </div>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="javascript:void(0);"><i class="icon icon-Megaphone margin-r-10"></i> My Ads</a></li>
                <li><a href="javascript:void(0);"><i class="icon icon-Heart margin-r-10"></i> Favorites</a></li>
                <li><a href="javascript:void(0);"><i class="icon icon-Mail margin-r-10"></i> Contact us</a></li>
            </ul>
            <ul class="navbar navbar-right">
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="googleplus"><i class="fa fa-google-plus color-white padding-r-21 padding-t-28"></i></a>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="instagram"><i class="fa fa-instagram color-white padding-r-21 padding-t-28"></i></a>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter color-white padding-r-21 padding-t-28"></i></a>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook color-white  padding-t-28 padding-r-21"></i></a>
            </ul>
        </div>
    </div>
</nav>

<!--Mobile profile dropdown-->

<div class="container">
    <div class="row">
        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-xs">
            <div class="btn-group margin-t-20 margin-b-20" style="height:70px; background:#b12076;">
                <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="top:0 !important;">
                    <i class="fa fa-caret-down color-white car-user-txt"></i>
                    <img src="{{url('/')}}/assets/images/eslam_img.png" alt="user" class="img-circle margin-r-20"> <span class="color-white f-size-16 bold user-txt"> Eslam Khalil</span>
                    <p class="f-size-14 color-white font-wt-500 company-txt">Company</p>
                </a>
                <div class="dropdown-menu padding-10">
                    <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Company</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--bread crumb-->

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 margin-t-15">
            <div class="btn-group">
                <a href="javascript:void(0);" class="btn btn-catg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon icon-Layers color-light-grey f-size-30 text-left pull-left margin-r-10"></i>
                    <span class="color-purple font-wt-600 f-size-16 margin-l-15">All Categories</span>
                    <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Furniture</a></li>
                    <li><a href="#">Cars</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <i class="icon icon-House fa-2x light-grey pull-left margin-t-30"></i>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-10">
            <div class="margin-t-30">
                <ol class="breadcrumb adding-adv">
                    <li><a href="javascript:void(0);">Home</a></li>
                    <li class="active"><a href="javascript:void(0);">Adding advertise</a></li>
                </ol>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <a href="#search" style="text-decoration:none;" class="pull-right search2"><i class="icon icon-Search f-size-30 color-light-grey"></i></a>
            <div id="search">
                <button type="button" class="close">×</button>
                <form>
                    <input type="search" value="" placeholder="Type keyword(s) here" />
                    <button type="submit" class="btn btn-info"><i class="icon icon-Search f-size-30 search-full"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--comments section-->

<div class="comment-section">
    <div class="container">
        <div class="row white-box padding-b-30 wizard margin-0">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <h4 class="bold color-black margin-t-35 adding-adv-txt">Adding Advertise</h4>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist" style="border-bottom:none;">

                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                1
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled" id="2step">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 1">
                         <span class="round-tab">
                               1
                         </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled wizard-round-boxes">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 2">
                            <span class="round-tab">
                               2
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="step 3">
                            <span class="round-tab">
                                3
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <hr class="margin-b-0 margin-t-10">
                </div>
            </div>

            <div>

                <form role="form"  id="data"  class="upload-form" action="adposting" method="post" enctype="multipart/form-data">
                    <div class="tab-content">

                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="f-size-16 color-purple bold margin-b-25">Advertise Category</h2>

                                </div>
                            </div>

                            <div>
                                @foreach ($category_name as $category_name=>$value)
                                    <div class="col-md-3 col-sm-3 col-xs-12 steps-boxes">
                                        <a id="{{ $value->category_id }}" class="btn btn-adding f-size-16 font-wt-600 boxid" href="javascript:void(0);"><i class="icon icon-Truck bold color-purple f-size-21"></i> {{ $value->category_name }}</a>
                                    </div>
                                @endforeach
                            </div>

                            <div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <hr>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

                                    <p class="f-size-13 margin-t-10 color-black"><i class="fa fa-info margin-r-10"></i>
                                        Make sure to complete all the data correctly, missing or wrong data could make your advertise to less being viewed or deleted.</p>

                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <button type="button" class="btn btn-prv next-step" id="btn_first_wz">Next1</button>

                                </div>

                            </div>

                        </div>



                        <div class="tab-pane" role="tabpanel" id="step2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="f-size-16 color-purple bold margin-b-25">Advertise Category</h2>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 select-box">
                                <a href="javascript:void(0);" id="selected_cat" class="btn btn-adding-select f-size-16 font-wt-600"><i class="icon icon-Truck bold color-purple f-size-21"></i> Furniture</a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <a href="javascript:void(0);" id="change-category" class="change-category">
                                    <i class="fa fa fa-undo"></i> Change Category
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <div id="subcategory_id">

                                </div>

                            </div>

                            <div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <hr>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                                    <p class="f-size-13 margin-t-10 color-black"><i class="fa fa-info margin-r-10"></i>
                                        Make sure to complete all the data correctly, missing or wrong data could make your advertise to less being viewed or deleted.</p>

                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                    <button id="second_frm" class="btn btn-nxt next-step" type="button">Next</button>
                                    <button class="btn btn-prv2 prev-step" type="button">Previous</button>

                                </div>

                            </div>

                        </div>





                        <div class="tab-pane" role="tabpanel" id="step3">
                            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                                <h2 class="f-size-16 color-purple bold margin-b-25">Advertise Details</h2>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12">
                                <h2 class="f-size-16 color-purple bold margin-b-25 catg-txt">Category</h2>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 category-adv-box">
                                <ol class="breadcrumb margin-t-12 category-adv">
                                    <li><a href="javascript:void(0);">Cars</a></li>
                                    <li><a href="javascript:void(0);">BMW</a></li>
                                </ol>
                            </div>

                            <div class="clearfix"></div>
                            <div>
                                <!--<form role="form">-->
                                <fieldset>
                                    <div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adv-boxes-spacing">
                                            <input type="text" name="product_name" placeholder="Title of Advertisement" class="form-control advertise-box margin-b-10">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input type="text" name="productNameArabic" placeholder="عنوان الإعلان" class="form-control arabic-input-box margin-b-10">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adv-boxes-spacing">
                                            <input type="text" name="cityId" placeholder="Location" class="form-control advertise-box">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adv-boxes-spacing">
                                                    <input type="text" name="product_price" placeholder="Price" class="form-control advertise-box margin-b-10">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <select class="selectpicker margin-b-10" name="categoryAdvertiseTypeId">
                                                        <option>Ad type</option>
                                                        <option>Baseline</option>
                                                        <option>Comfortline</option>
                                                        <option>Highline</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adv-boxes-spacing drop-box">
                                            <select class="selectpicker margin-b-10">
                                                <option>Manufacturer</option>
                                                <option>Acura</option>
                                                <option>Alfa Romeo</option>
                                                <option>Aston Martin</option>
                                                <option>Audi</option>
                                                <option>Bentley</option>
                                                <option>BMW</option>
                                                <option>Bugatti</option>
                                                <option>Buick</option>
                                            </select>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adv-boxes-spacing drop-box">
                                            <select class="selectpicker margin-b-10" name>
                                                <option>Model</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adv-boxes-spacing drop-box">
                                            <select class="selectpicker margin-b-10">
                                                <option>Type</option>
                                                <option>Hatchback</option>
                                                <option>Sedan</option>
                                                <option>SUV</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adv-boxes-spacing drop-box">
                                            <select class="selectpicker margin-b-10">
                                                <option>Year</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 drop-box">
                                            <select class="selectpicker margin-b-10">
                                                <option>Gear</option>
                                                <option>AGS</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adv-boxes-spacing drop-box">
                                            <select class="selectpicker margin-b-10">
                                                <option>C.C</option>
                                                <option>AGS</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adv-boxes-spacing drop-box">
                                            <input type="text" placeholder="Horse power" class="form-control advertise-box margin-b-10">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adv-boxes-spacing drop-box">
                                            <input type="text" placeholder="Kilometers" class="form-control advertise-box margin-b-10">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adv-boxes-spacing">
                                            <textarea name="product_Description" id="product_Description" placeholder="Description" cols="7" rows="5" class="form-control description-box"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <textarea name="productDescriptionArabic" placeholder="الوصف للاعلان" cols="7" rows="5" class="form-control arabic-description-box"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p style="display:none;" class="error-txt margin-t-30" id="desc_title"><i class="fa fa-info-circle margin-r-10"></i>Title should not exceed 201 letters</p>
                                        </div>
                                    </div>
                                </fieldset>
                                <!--</form>-->
                            </div>
                            <div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <hr>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                                    <p class="f-size-13 margin-t-10 color-black"><i class="fa fa-info margin-r-10"></i>
                                        Make sure to complete all the data correctly, missing or wrong data could make your advertise to less being viewed or deleted.</p>

                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                    <button type="button" id="details_ad" class="btn btn-nxt next-step">Next</button>
                                    <button type="button" class="btn btn-prv2 prev-step">Previous</button>

                                </div>

                            </div>

                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                                <h2 class="f-size-16 color-purple bold margin-b-25">Advertise Photos</h2>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12">
                                <h2 class="f-size-16 color-purple bold margin-b-25 catg-txt">Category</h2>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 category-adv-box">
                                <ol class="breadcrumb margin-t-12 category-adv">
                                    <li><a href="javascript:void(0);">Cars</a></li>
                                    <li><a href="javascript:void(0);">BMW</a></li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>

                            <div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 photobox">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden" name="file_main">
                                        <div class="fileinput-preview thumb-txtbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-3x brown-color"></i> </span>
                            <p class="f-size-16 margin-t-20">Main advertise photo</p>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 change-btn" style="line-height:32px;">Change</span><input type="file" name="filemain" id="file_main" ></span>
                                            <a href="#" class="btn btn-danger fileinput-exists remove-btn" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 adv-boxes-spacing margin-t-25 margin-b-25">
                                    <div class=" margin-l-40 photos-section">
                                        <p class="bold f-size-14 color-black">Photos must be:</p>
                                        <p>- 600px x 600px at least<br>
                                            - 5mb max photo size<br>
                                            - dosent contain any type of adertisment<br>
                                            - realted to the advertisement itself not something else<br>
                                            - clear and show the content</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                           <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                           <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 small-box">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbbox" data-trigger="fileinput"></div>
                                        <div>
                            <span class="btn btn-file btn-small-adver"><span class="fileinput-new"><i class="fa fa-plus-circle fa-2x brown-color2"></i> </span>
                            <span class="fileinput-exists btn btn-info padding-t-0 padding-b-0 btn-small-change " style="line-height:32px;">Change</span><input type="file" name="file[]"></span>
                                            <a href="#" class="btn btn-danger fileinput-exists margin-l-12 btn-small-remove" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                </div>



                            </div>
                            <div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <hr>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                                    <p class="f-size-13 margin-t-10 color-black"><i class="fa fa-info margin-r-10"></i>
                                        By clicking on Publish you agree to the <a href="javascript:void(0);" class="terms">terms of use</a> and <a href="javascript:void(0);" class="terms">privacy policy</a>

                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" value="Publish" id="publishads" class="btn btn-publish next-step" >
                                        <button type="button" class="btn btn-prv2 prev-step">Previous</button>

                                </div>

                            </div>


                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="app-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <p class="f-size-18">Download <span class="color-purple">Mzad Qatar</span> App and get news offer and ads instantly</p>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <center>
                    <a href="javascript:void(0);"><img class="margin-r-15" src="{{url('/')}}/assets/images/download_app_store_btn.png" alt="app-store"></a>
                    <a href="javascript:void(0);"><img src="{{url('/')}}/assets/images/download_google_store_btn.png" alt="android-store"></a>
                </center>

            </div>
        </div>
    </div>
</div>


<!--footer-->
<div class="clearfix"></div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="http://www.mzadqatar.com" target="_blank"><img src="{{url('/')}}/assets/images/logo.png" alt="logo" class="img-responsive footer-logo margin-b-20"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="list">
                    <ul>
                        <li><a href="javascript:void(0);">Terms  -</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy  -</a></li>
                        <li><a href="javascript:void(0);">Copyright</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <p class="f-size-13 text-center">All right reserved to Mzad Qatar 2016</p>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="http://ebdaadt.com" target="_blank"><img src="{{url('/')}}/assets/images/footer_logo.png" alt="ebdaa-digital-technology" class="img-responsive footer-logo logo-ebdaa margin-b-20"></a>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{url('/')}}/assets/bootstrap/js/bootstrap.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/bootstrap-select.js"></script>

<script>
    $('.selectpicker').selectpicker({
        style: 'btn-select',
        size: 4
    });
</script>


<script>
    $(function () {
        $('a[href="#search"]').on('click', function(event) {
            event.preventDefault();
            $('#search').addClass('open');
            $('#search > form > input[type="search"]').focus();
        });

        $('#search, #search button.close').on('click keyup', function(event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });


        $('form').submit(function(event) {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            var selectedCatID = $(".steps-boxes").find('.current').attr('id');
            alert(selectedCatID);
            var formData = new FormData($(this)[0]);

            var base_url="{{url('/')}}";
            var url="{{url('/').'/adposting'}}";
            $.ajax({
                type:'POST',
                url:url,
                data: formData,
                processData: false,
                contentType: false,
                success:function(html){

                }
            });

            event.preventDefault();
            return false;
        })
    });
</script>

<script>
    jQuery(document).ready(function($) {

        $('#myCarousel').carousel({
            interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
        });
    });


</script>

<script>

    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $("#details_ad").click(function (e) {
            //alert("if");

            valid = true;

            if($('#desc_title').val() == '') {

            } else {
                // alert("else");
                var chrlegth = $("#product_Description").val().length;
                if(chrlegth<201){
                    $("#desc_title").show();
                    valid = false;
                }
            }
            if(valid) {
                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);
            }
        });

        $("#second_frm").click(function (e) {
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);
        });

        $("#change-category").click(function (e) {
            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });

        $("#btn_first_wz").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            //pass category id
            var selectedCatID = $(".steps-boxes").find('.current').attr('id');
            //alert(selectedCatID);
            var url="{{url('/').'/getsubcat'}}";

            $.ajax({
                type:'POST',
                url:url,
                data: {selectedCatID:selectedCatID},
                success:function(data){
                    $('#selected_cat').text(data.categoryname);
                    $('#subcategory_id').html(data.subcat_name);
                }
            });


            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);
        });

        /*$(".next-step").click(function (e) {
         var $active = $('.wizard .nav-tabs li.active');
         $active.next().removeClass('disabled');
         nextTab($active);
         });*/

        $(".prev-step").click(function (e) {
            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);
        });

    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

</script>

<style> .current{ background-color: #b12076 !important; color: white !important; } </style>


<script>

    //button diable first and seconde wizard
    $( document ).ready(function() {
        $('#btn_first_wz').attr("disabled", "disabled");
        $('#second_frm').attr("disabled", "disabled");
    });


    $( ".btn-adding" ).click(function() {
        $('#btn_first_wz').prop('disabled', false);

        var current = $(this);
        var name = current.attr('href');

        $("#btn_first_wz").addClass("btn-nxt");

        //Remove all
        $( "a.current" ).children().css( "color", "#b12076" );
        $('.boxid').removeClass('current');

        //Add to current
        current.addClass("current");
        $( "a.current" ).children().css( "color", "white" );

        return false;
    });


    $(document).on('click', '.boxid_cat', function(e) {

        $('#second_frm').prop('disabled', false);

        var current = $(this);
        var name = current.attr('href');


        //$("#btn_first_wz").addClass("btn-nxt");

        //Remove all
        $( "a.current" ).children().css( "color", "#b12076" );
        $('.boxid_cat').removeClass('current');

        //Add to current
        current.addClass("current");
        $( "a.current" ).children().css( "color", "white" );

        return false;
    });


</script>


<script src="{{url('/')}}/assets/js/jasny-bootstrap.js"></script>
</body>
</html>