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
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                      @endif
                                    <div class="card-body px-5">
                                        <form class="form" id="formLogin" method="POST" action="{{ route('store.ads') }}" name="" role="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group my-4">
                                                <input class="form-control " id="" name="title" placeholder="عنوان الاعلان "
                                                    type="text">
                                            </div>
                                            <div class="form-group ">
                                                {{-- <div class="wrapper-dropdown col-md-12" id="dropdown"> <svg class="arrow"
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

                                                </div> --}}
                                            </div>

                                            <input type="text" hidden name="section_id" value="{{ $section_id->id  }}" id="">


                                            {{-- {{ $section_id->id }} --}}
                                            <div class="form-group row  my-4">
                                                <div class="col-12 col-lg-12">
                                                    <input class="  form-control" id="" type="tel"
                                                        placeholder="رقم الهاتف " name="phone">
                                                </div>
                                            </div>

                                            <div class="form-group row  my-4">
                                                <div class="col-12 col-lg-12 ">
                                                    <input class="  form-control" id="" type="text" placeholder="السعر  " name="price">
                                                </div>

                                            </div>


                                            <div class="form-group row  my-4">
                                                <div class="col-12 col-lg-12">
                                                    <input class="  form-control" id="" type="file"
                                                        placeholder="صورة" name="image">
                                                </div>
                                            </div>

                                            <div class="form-group row  my-4">
                                                <div class="col-12 col-lg-12">
                                                    <input class=" form-control" id="" type="text"
                                                        placeholder="موقع" name="location">
                                                </div>
                                            </div>

                                            <div class="form-group  my-4">
                                                <textarea id="" class=" form-control "
                                                    placeholder="التفاصيل..." name="description"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary fs-16 btn-lg btn-block" type="button" value="انشاء الإعلان" style="font-size: 16px; padding: 10px; font-weight: 600;">
                                            </div>



                                            <input type="text" hidden name="user_id" value="{{ auth()->user()->id }}" id="">



                                            {{-- <div class="form-group">
                                                <input class="btn btn-primary fs-16 btn-lg btn-block" type="button" value="انشاء الإعلان" onclick="redirectToAnotherPage()" style="font-size: 16px; padding: 10px; font-weight: 600;">
                                            </div>

                                    <script>
                                                function redirectToAnotherPage() {
                                                    // Change the URL to the desired destination page
                                                    window.location.href = '{{ route('create_details_ads') }}';
                                                }
                                            </script>  --}}

                                        </form>
                                    </div><!--/card-block-->
                                </div><!-- /form card login -->
                            </div>
                        </div>
                    </div><!--/col-->
                </div><!--/row-->
            </div><!--/container-->
        </section>


    </body>
</body>
</html>
