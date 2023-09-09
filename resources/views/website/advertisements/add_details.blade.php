<!DOCTYPE html>
<html dir="rtl">

@include('website.layouts.head')
<body>
    <body>
        <section class="createAd">
            <div class="container py-3 ">
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="row justify-content-center ">
                            <div class="wrapper-all col-md-7 col-sm-12 col-12">
                                <!-- form card login -->
                                <div class="card card-outline-primary " style="border-radius: 15px !important;">
                                    <div class="card-header">
                                        <a href="">
                                            <h3 class="mb-0"><svg width="30" height="25" viewBox="0 0 52 39" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M43.8064 19.281L28.1124 6.14031C27.791 5.87119 27.6105 5.50624 27.6106 5.12577C27.6108 4.74529 27.7915 4.38045 28.1131 4.1115C28.4348 3.84254 28.8709 3.69152 29.3256 3.69164C29.7803 3.69176 30.2163 3.84302 30.5377 4.11214L47.4437 18.2676C47.7651 18.5367 47.9456 18.9017 47.9454 19.2821C47.9453 19.6626 47.7645 20.0275 47.4429 20.2964L30.4656 34.4936C30.1439 34.7625 29.7078 34.9136 29.2531 34.9134C28.7984 34.9133 28.3624 34.7621 28.041 34.4929C27.7196 34.2238 27.5391 33.8589 27.5392 33.4784C27.5394 33.0979 27.7201 32.7331 28.0418 32.4641L43.8064 19.281Z"
                                                        fill="#0762CD" />
                                                    <path
                                                        d="M46.2319 17.8452C46.6871 17.8453 47.1237 17.9968 47.4455 18.2662C47.7674 18.5357 47.9481 18.9011 47.9479 19.2821C47.9478 19.663 47.7668 20.0283 47.4448 20.2976C47.1228 20.5669 46.6861 20.7181 46.2308 20.718L5.01325 20.7073C4.78782 20.7073 4.56462 20.6701 4.35638 20.5978C4.14814 20.5256 3.95894 20.4197 3.79959 20.2863C3.64024 20.1529 3.51386 19.9945 3.42765 19.8202C3.34145 19.6459 3.29712 19.4591 3.29719 19.2705C3.29726 19.0819 3.34173 18.8951 3.42806 18.7208C3.51439 18.5466 3.64089 18.3883 3.80034 18.2549C3.95979 18.1216 4.14906 18.0158 4.35735 17.9437C4.56565 17.8716 4.78888 17.8345 5.0143 17.8345L46.2319 17.8452Z"
                                                        fill="#0762CD" />
                                                </svg>
                                        </a>
                                        </h3>
                                    </div>
                                    <div class="card-body px-5">
                                        <form class="form" id="formLogin" name="" role="form">
                                            <div class="form-group my-4">
                                                <input class="form-control " id="" name="" placeholder="عنوان الاعلان "
                                                    type="text">
                                            </div>
                                            <div class="form-group ">
                                                <div class="wrapper-dropdown col-md-12" id="dropdown"> <svg class="arrow"
                                                        id="drp-arrow" width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        class="transition-all ml-auto rotate-180">
                                                        <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="selected-display" id="destination">
                                                        حدد نوع الإعلان </span>

                                                    <ul class="dropdown" style="margin-top: -10px;
                                                        max-height: 300px;
                                                        overflow-y: auto;
                                                        background-color:rgba(241, 241, 241, 0.95)">
                                                        <li class="item">الكل </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>

                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                        <li class="item">عقارات </li>
                                                    </ul>
                                                </div>

                                            </div>

                                            <div class="form-group  my-4">
                                                <div class="row">
                                                    <label for="" class="text-right px-4 "
                                                        style="font-weight:700; color: #0e214b;">نوع المعاملة </label>
                                                    <div class="col-md-4 col-lg-3 col-sm-4 col-5">

                                                        <label>
                                                            <input type="radio" name="r1" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                                <div class="panel-body text-center py-2">
                                                                    إيجار
                                                                </div>
                                                            </div>

                                                        </label>
                                                    </div>

                                                    <div class="col-md-4 col-lg-3 col-sm-4 col-5">

                                                        <label>
                                                            <input type="radio" checked name="r1"
                                                                class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                                <div class="panel-body text-center py-2">
                                                                    بيع
                                                                </div>
                                                            </div>

                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group  my-4">
                                                <div class="row">
                                                    <label for="" class="text-right px-4 "
                                                        style="font-weight:700; color: #0e214b;">الحالة </label>
                                                    <div class="col-md-4 col-lg-3 col-sm-4 col-5">

                                                        <label>
                                                            <input type="radio" name="r2" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                                <div class="panel-body text-center py-2">
                                                                    جديد
                                                                </div>
                                                            </div>

                                                        </label>
                                                    </div>

                                                    <div class="col-md-4 col-lg-3.5 col-sm-4 col-5">
                                                        <label>
                                                            <input type="radio" checked name="r2"
                                                                class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                                <div class="panel-body  text-center py-2 ">
                                                                    مستخدم
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group  my-4">
                                                <div class="row">
                                                    <label for="" class="text-right px-4 "
                                                        style="font-weight:700; color: #0e214b;">الوقود </label>
                                                    <div class="col-md-4 col-lg-3 col-5 col-sm-4">

                                                        <label>
                                                            <input type="radio" checked name="r3"
                                                                class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                                <div class="panel-body text-center py-2">
                                                                    ديزل
                                                                </div>
                                                            </div>

                                                        </label>
                                                    </div>

                                                    <div class="col-md-4 col-lg-3 col-5 col-sm-4">

                                                        <label>
                                                            <input type="radio" name="r3" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                                <div class="panel-body text-center py-2">
                                                                    بنزين
                                                                </div>
                                                            </div>

                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group   my-4">
                                                <label for="" class="text-right px-3 "
                                                    style="font-weight:700; color: #0e214b;">المشي( الف كيلو ) </label>
                                                <div class="range-group">
                                                    <div class="value">0</div>
                                                    <input class="" type="range" min="1" max="50" step="1" value="1">
                                                </div>
                                            </div>
                                            <div class="form-group row  my-4">
                                                <div class="col-9 col-lg-6">
                                                    <input class="  form-control" id="" type="tel"
                                                        placeholder="رقم الهاتف ">
                                                </div>
                                                <div class="col-3 col-lg-3 container"> <label class="switch"><input
                                                            type="checkbox" />
                                                        <div></div>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="form-group row  my-4">
                                                <div class="col-9 col-lg-6 ">
                                                    <input class="  form-control" id="" type="text" placeholder="السعر  ">
                                                </div>
                                                <div class="col-3 col-lg-3 container"> <label class="switch"><input
                                                            type="checkbox" checked />
                                                        <div></div>
                                                    </label>
                                                </div>

                                            </div>

                                            <div class="form-group  my-4">
                                                <textarea name="" id="" class=" form-control  "
                                                    placeholder="التفاصيل..."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input class="btn  btn-primary fs-16 btn-lg btn-block" type="submit"
                                                    value="انشاء الإعلان"
                                                    style="font-size: 16px; padding: 10px; font-weight: 600;">

                                            </div>
                                        </form>
                                    </div><!--/card-block-->
                                </div><!-- /form card login -->
                            </div>
                        </div>
                    </div><!--/col-->
                </div><!--/row-->
            </div><!--/container-->
        </section>
        <script src="{{ asset('website/assets/js/code.jquery.com_jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/bootstrap@4.0.0/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/details-ad.js') }}"></script>
    </body>
</body>
</html>
