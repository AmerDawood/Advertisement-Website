{{-- <!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('newWebsite/Css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('newWebsite/Css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('newWebsite/Css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('newWebsite/Css/Store.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>accounts</title>
</head>

<body>

   <div class="box_add">
    <div class="continaer">
        <div class="add p-5" id="add">
            <div class="continaer">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-end">
                                <a href="">
                                    <img src="{{ asset('newWebsite/Images/arrow top.png') }}" alt="">
                                </a>
                                <h5 class="card-title mt-3">اضافة اعلان جديد</h5>
                                <p class="card-text mt-3">اختر نوع الاعلان</p>
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <p class="card-text">عرض سيارة للبيع او للتنازل</p>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/car.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <p class="card-text">عرض قطع غيار او خدمات سيارات او اكسسورات سيارت للبيع</p>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/second-icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <p class="card-text">عرض شاحنة او معدات ثقيلة للبيع والايجار</p>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/ep_van.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <p class="card-text">عرض دباب للبيع</p>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/fa-solid_motorcycle.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <p class="card-text"> عرض عقار للايجار</p>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/build.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <p class="card-text"> عرض جهاز للبيع </p>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/mobile.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <p class="card-text">عرض مواشي للبيع </p>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/Sheep.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <p class="card-text"> عرض اثاث للبيع </p>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/sofa.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('newWebsite/Js/all.min.js') }}"></script>
    <script src="{{ asset('newWebsite/Js/bootstrap.min.js') }}"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="ar">
<head>
    @include('website.layouts.head')
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('newWebsite/Css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('newWebsite/Css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('newWebsite/Css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('newWebsite/Css/Store.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Store</title>
</head>
<body>


    @include('website.layouts.header')


<div class="box_add" style="padding-top:200px; ">
    <div class="continaer">
        <div class="add p-5" id="add">
            <div class="continaer">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-end">
                                <a href="">
                                    <img src="{{ asset('newWebsite/Images/arrow top.png') }}" alt="">
                                </a>
                                <h5 class="card-title mt-3">اضافة اعلان جديد</h5>
                                <p class="card-text mt-3">اختر نوع الاعلان</p>
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <a href="{{ route('create_ads') }}" style="text-decoration: none;padding-right:10px;">
                                        <p class="card-text">عرض سيارة للبيع او للتنازل</p>
                                      </a>

                               <img class="list-image" src="{{ asset('newWebsite/Images/car.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <a href="{{ route('create_ads') }}" style="text-decoration: none;padding-right:10px;">

                                    <p class="card-text">عرض قطع غيار او خدمات سيارات او اكسسورات سيارت للبيع</p>
                                    </a>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/second-icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <a href="{{ route('create_ads') }}" style="text-decoration: none;padding-right:10px;">

                                    <p class="card-text">عرض شاحنة او معدات ثقيلة للبيع والايجار</p>
                                    </a>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/ep_van.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <a href="{{ route('create_ads') }}" style="text-decoration: none;padding-right:10px;">

                                    <p class="card-text">عرض دباب للبيع</p>
                                    </a>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/fa-solid_motorcycle.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <a href="{{ route('create_ads') }}" style="text-decoration: none;padding-right:10px;">

                                    <p class="card-text"> عرض عقار للايجار</p>
                                    </a>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/build.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <a href="{{ route('create_ads') }}" style="text-decoration: none;padding-right:10px;">

                                    <p class="card-text"> عرض جهاز للبيع </p>
                                    </a>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/mobile.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <a href="{{ route('create_ads') }}" style="text-decoration: none;padding-right:10px;">

                                    <p class="card-text">عرض مواشي للبيع </p>
                                    </a>
                                     <img class="list-image" src="{{ asset('newWebsite/Images/Sheep.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                            <div class="tap mt-3">
                                <div class="icons">
                                    <img class="icons-image" src="{{ asset('newWebsite/Images/arrorwright.png') }}" alt="">
                                </div>
                                <div class="list">
                                    <a href="{{ route('create_ads') }}" style="text-decoration: none;padding-right:10px;">

                                    <p class="card-text"> عرض اثاث للبيع </p>
                                    </a>
                                    <img class="list-image" src="{{ asset('newWebsite/Images/sofa.png') }}" alt="">
                                </div>
                            </div>
                            <div class="horizontal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>


   @include('website.layouts.footer')

   @include('website.layouts.scripts')


   <script>
    const accordion = document.getElementsByClassName('contentbx');

    for (i = 0; i < accordion.length; i++) {
        accordion[i].addEventListener('click', function () {
            this.classList.toggle('active');
        })
    }
</script>
<script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="{{ asset('newWebsite/Js/all.min.js') }}"></script>
<script src="{{ asset('newWebsite/Js/bootstrap.min.js') }}"></script>

</body>
</html>
