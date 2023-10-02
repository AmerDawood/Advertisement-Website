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


    <!-- start profile sec -->
    <div class="container" style="padding-top:150px;">
        <section id="profile" class="rounded-4 mt-5 px-3 py-5 mb-4">
            <div class="bg p-4 rounded-4 position-relative">
                <div class="icons d-flex justify-content-between align-items-center">
                    <a href="#"><i class="fa-solid fa-arrow-right fs-6 text-white"></i></a>
                    <div class="second">
                        <span><i class="fa-solid fa-share-nodes fs-6"></i></span>
                        <span><i class="fa-solid fa-list-ul fs-6"></i></span>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="drop text-start" style="width: fit-content;">
                        <i class="fa-solid fa-arrow-down text-white d-inline-block ms-3"></i>
                        <ul class="p-0 rounded-4 py-2 px-4">
                            <li class="text-center"><a href="#" class=" text-white"><i
                                        class="fa-solid fa-qrcode "></i>إظهار رمز QR</a></li>
                            <li class="text-center"><a href="#" class=" text-white">تقييم</a></li>
                        </ul>
                    </div>
                </div>
                <div class="profile-img">
                    <div class="image">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" style="border-radius: 160px;" alt="">
                        <div class="green-dot bg-gradient"></div>
                    </div>
                </div>
            </div>
            <!-- start rate -->
            <div class="rate d-flex flex-wrap gap-2 justify-content-between mt-3">
                <div class="follow d-flex gap-3 text-white rounded-4"><span>0</span> متابعة</div>
                <div class="stars d-flex gap-2 align-items-center">
                    <span class="bold text-white">10 تقييم</span>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
            <!-- start name -->
            <div class="name d-flex flex-column gap-2 justify-content-center align-items-center">
                <span class="bold text-white">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span>
                {{-- <span class="bold text-white">اخر ظهور منذ 10 د</span> --}}
                <span class="img d-flex align-items-center justify-content-center text-white">
                    <i class="fa-regular fa-file-lines fs-5"></i>
                </span>
                <span class="bold text-white">{{ auth()->user()->created_at->diffForHumans() }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <span class="chat rounded-4 fs-5">
                        <a href="#" class="text-white" onclick="event.preventDefault(); this.closest('form').submit();">
                            Logout
                        </a>
                    </span>
                </form>

            </div>
        </section>
    </div>
    <!-- end profile sec -->
    <!-- start ads sec -->
    <div class="container">
        <section id="ads" class="rounded-4 px-3 py-5 mb-4">
            <div class="title d-flex gap-3 mb-3">
                <h4 class="text-white pb-1 has-border bold">الاعلانات</h4>
                <h4 class="text-white pb-1 bold">سكوب</h4>
            </div>


            @foreach ($products as $product)
            <div class="row justify-content-between ">
                <div
                    class="col-12 col-md-6 col-lg-4 mb-5 d-flex flex-column text-white gap-3 justify-content-center align-items-center">
                    <span> {{ $product->title }}</span>
                    <span><i class="fa-regular fa-comment-dots"></i> {{ $product->is }}</span>
                    <span><i class="fa-solid fa-location-dot"></i> {{ $product->location }}</span>
                </div>
                <div
                    class="col-12 col-md-6 col-lg-4 mb-5 d-flex flex-column text-white gap-3 justify-content-center align-items-center">
                    <span>{{ $product->price }} ريال</span>
                    <span><i class="fa-solid fa-clock-rotate-left"></i> {{ $product->created_at->diffForHumans() }}</span>
                    <span>عبد الله الزيات</span>
                </div>
                <div
                    class="col-12 col-md-6 col-lg-4 d-flex flex-column text-white gap-3 justify-content-center align-items-center">
                    <span>إعلان</span>
                    <img src="{{ asset('uploads/advertisements/'.$product->image) }}" alt="">
                </div>
            </div>
            @endforeach

        </section>
    </div>
    <!-- end ads sec -->

 @include('website.layouts.footer')

    <!-- fontawesome -->
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
