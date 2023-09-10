

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
    
    <div class="box" style="padding: 100px 100px">
        <div class="container">
            <div class="profile pt-5 pb-5" id="profile">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="text-end">
                                <span>اعدادات الحساب</span>
                                <a href="#">
                                    <img src="../Images/arrow top.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="profile-form" id="profile-form">
                <div class="container">
                    <div class="row">
                        <div class="card">
                            <div class="acountes" dir="rtl">
                                <div class="icons">
                                    <img src="../Images/lok.png" alt="">
                                    <p class="text-card">تغيير الرقم السري</p>

                                </div>
                                <div class="password">
                                    <input type="password" class="form-control" placeholder="كلمة المرور" name="" id="">
                                </div>
                                <div class="button">
                                    <button class="btn">تعديل</button>
                                </div>
                            </div>
                            <div class="acountes mt-5" dir="rtl">
                                <div class="icons">
                                    <p class="text-card">مسمي العضوية</p>

                                </div>
                                <div class="text">
                                    <input type="text" class="form-control" placeholder="العضوية" name="" id="">
                                </div>
                                <div class="button">
                                    <button class="btn">تعديل</button>
                                </div>
                            </div>
                            <div class="acountes mt-5" dir="rtl">
                                <div class="icons">
                                    <img src="../Images/masseage.png" alt="">
                                    <p class="text-card"> تحديث البريد الالكتروني</p>

                                </div>
                                <div class="email">
                                    <input type="email" class="form-control" placeholder="إدخل الإيميل" name="" id="">
                                </div>
                                <div class="button">
                                    <button class="btn">تعديل</button>
                                </div>
                            </div>
                            <div class="acountes mt-5" dir="rtl">
                                <div class="icons">
                                    <img src="../Images/phone.png" alt="">
                                    <p class="text-card"> تغيير رقم الجوال</p>

                                </div>
                                <div class="phone">
                                    <input type="phone" class="form-control" placeholder="إدخل رقم الجوال" name="" id="">
                                </div>
                                <div class="button">
                                    <button class="btn">تعديل</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
