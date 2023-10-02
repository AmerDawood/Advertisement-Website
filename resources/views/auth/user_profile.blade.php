<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('website/assets/css/stackpath.bootstrapcdn.com_bootstrap_4.3.1_css_bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/cdn.jsdelivr.net_npm_select2@4.1.0-rc.0_dist_css_select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/navbar-mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/cdnjs.cloudflare.com_ajax_libs_uikit_3.0.3_css_uikit.min.css') }}">
    <title>Document</title>
</head>

<body>

    @include('website.layouts.header')


    <div class="container mt-5" style="padding-top:150px;">
        <div class="row gap-4 ">
            <div class="col-12 col-lg-7 right p-0">
                <section id="comments" class="p-4 rounded-4">
                    <!-- title -->
                    <div class="title rounded-4 p-4 text-white d-flex gap-5 flex-wrap">
                        <div class="d-flex flex-column gap-3">
                            {{-- <h5>حساب فورت نايت</h5> --}}
                            <span>{{ $user->country }}</span>
                            <div class="d-flex gap-3 align-items-center">
                                <span><i class="fa-solid fa-user"></i>{{ $user->first_name }} {{ $user->last_name }}</span>

                                <form action="{{ route('follower.store') }}" method="POST">
                                    @csrf

                                    <input type="text" hidden name="user_id" value="{{ auth()->user()->id }}" id="">
                                    <input type="text" hidden name="follower_id" value="{{ $user->id }}" id="">

                                    <button class="btn btn-primary rounded-5 px-3">متابعة</button>

                                    
                                </form>
                            </div>
                        </div>
                        <button class="btn bg-transparent border-0 text-white me-0 me-sm-5">
                            <i class="fa-solid fa-clock-rotate-left"></i> تحديث الان
                        </button>
                    </div>
                    <!-- details -->
                    <div class="text-white d-flex flex-column gap-2 mt-4 p-2">
                        <span>{{ $user->email }}</span>
                        <span>{{ $user->phone_number }}</span>
                        {{-- <span>السعر: 35ريال</span> --}}
                    </div>
                    <!-- photos -->
                    <div class="row gap-5 justify-content-center align-items-center mt-5 mb-5">

                         @foreach ($products as $product )
                         <div class="col-12 col-md-4">
                            <img src="{{ asset('uploads/advertisements/'.$product->image) }}" class="object-fit-cover w-100" alt="">
                        </div>
                         @endforeach
                    </div>
                    <!-- contact -->
                    <span class="chat rounded-4 fs-5 ">
                        <a href="#" class="text-white">
                            <i class="fa-solid fa-comment-dots ps-2"></i> تواصل
                        </a>
                    </span>
                </section>

                <!-- number -->
                {{-- <section id="number" class="d-flex justify-content-between gap-3 flex-wrap rounded-4 p-5">
                    <span class="py-3 px-5 text-white rounded-4 fs-5">#56656556</span>
                    <a class="py-3 px-5 text-white rounded-4 fs-5 d-flex align-items-center" href="#">الاعلان التالي<i
                            class="fa-solid fa-circle-chevron-left me-2 fs-4"></i></a>
                </section> --}}

                <!-- buttons -->
                {{-- <section id="buttons" class="p-5 rounded-4">
                    <div class="btn-group w-100" role="group">
                        <button type="button" class="btn bold p-4 rounded-end-4 rounded-start-0 me-1"><a
                                class="text-white" href="#"><i
                                    class="fa-solid fa-comment-dots ms-2"></i>مراسلة</a></button>
                        <button type="button" class="btn bold p-4 me-1"><a class="text-white" href="#"><i
                                    class="fa-solid fa-heart ms-2"></i> تفضيل</a></button>
                        <button type="button" class="btn bold p-4 mx-1"><a class="text-white"
                                href="#">مشاركة</a></button>
                        <button type="button" class="btn bold p-4 rounded-start-4 rounded-end-0"><a class="text-white"
                                href="#"><i class="fa-regular fa-flag ms-2"></i>إبلاغ</a></button>
                    </div>
                </section> --}}
                <!-- textarea -->
                {{-- <form action="">
                    <textarea class="rounded-4 form-control shadow-none border-0 p-5 mb-3" name="" id="" cols="30" rows="6" placeholder="اكتب سؤالك للمعلن هنا..."></textarea>
                    <button type="submit" class="btn text-white rounded-4 fs-5"> <i class="fa-solid fa-comment-dots ps-2"></i> إرسال</button>
                </form>
            </div> --}}
            <!-- left..photos -->
            {{-- <section id="photos" class="col-12 col-lg-4">
                <div class="title fs-5 py-3 rounded-5 text-white text-center">حساب فورت نايت</div>
                <div class="row gap-5 imgs rounded-4 justify-content-center px-3 py-5 mt-4">
                    <img src="assets/images/1.png" class="col-12 col-md-5 col-lg-3 object-fit-cover"></img>
                    <img src="assets/images/1.png" class="col-12 col-md-5 col-lg-3 object-fit-cover"></img>
                    <img src="assets/images/2.png" class="col-12 col-md-5 col-lg-3 object-fit-cover"></img>
                    <img src="assets/images/3.png" class="col-12 col-md-5 col-lg-3 object-fit-cover"></img>
                    <img src="assets/images/4.png" class="col-12 col-md-5 col-lg-3 object-fit-cover"></img>
                    <img src="assets/images/5.png" class="col-12 col-md-5 col-lg-3 object-fit-cover"></img>
                    <img src="assets/images/5.png" class="col-12 col-md-5 col-lg-3 object-fit-cover"></img>
                    <img src="assets/images/5.png" class="col-12 col-md-5 col-lg-3 object-fit-cover"></img>
                    <img src="assets/images/5.png" class="col-12 col-md-5 col-lg-3 object-fit-cover"></img>
                </div>
            </section> --}}

        </div>
        </div>


    </div>


 @include('website.layouts.footer')

    <!-- fontawesome -->
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
