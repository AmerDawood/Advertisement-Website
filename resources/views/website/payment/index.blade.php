<!DOCTYPE html>
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
    
    <div class="box_sections">
        <di class="container">
            <div class="stuff pt-5" id="stuff ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="image">
                                <img class="img-fluid" src="{{ asset('newWebsite/Images/Rectangle 122.png') }}" alt="" />
                                {{-- <img class="image1" src="{{ asset('newWebsite/Images/mastercard.png') }}" alt=""> --}}

                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 text-center text-md-start">
                            <div class="text-end" dir="rtl">
                                <h4>بيع منتجك برسوم 1%
                                    فقط في حراج</h4>
                                <p>
                                    الرسوم أمانة في ذمة المعلن سواء تمت المبايعة عن
                                    طريق الموقع أو بسببه، وموضحة قيمتها بما يلي
                                </p>
                            </div>
                            <div class="icons text-end">
                                <img class="image1" src="{{ asset('newWebsite/Images/mastercard.png') }}" alt="">
                                <img class="image2" src="{{ asset('newWebsite/Images/mada.png') }}" alt="">
                            </div>
                            <div class="links text-end">
                                <img src="{{ asset('newWebsite/Images/Express.png') }}" alt="">
                                <img src="{{ asset('newWebsite/Images/VisA.png') }}" alt="">
                                <img src="{{ asset('newWebsite/Images/Pay.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project text-center pt-5 pb-5 " id="project ">
                <div class="container">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-3">اسعار الاشتراكات</h2>
                                    <div class="icons mt-3 d-flex justify-content-center">
                                        <a class="btn" href="#"><img src="{{ asset('newWebsite/Images/Data.png') }}" alt=""></a>
                                    </div>
                                    <div class="btn_years mt-3">
                                        <a href="#" class="btn bg-white">اشتراك لمدة سنة بسعر 2390 ريال</a>
                                    </div>
                                    <div class="btn_months mt-3 mb-5">
                                        <a href="#" class="btn bg-primary">اشتراك لمدة سنة </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subscribes text-center pt-5 pb-5" id="subscribes ">
                <div class="container">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-5">حساب الرسوم</h4>
                                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                                    <div class="input-group rounded-pill input-group-lg mb-5 mt-3" dir="rtl">
                                        <button class="btn" type="button" id="button-addon2">ادخل سعر البيع</button>

                                        <input type="text " class="form-control rounded-pill" placeholder="15000"
                                            aria-label="1500" aria-describedby="button-addon2">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                                    <div class="input-group rounded-pill input-group-lg mb-5 mt-3" dir="rtl">
                                        <button class="btn" type="button" id="button-addon2">الرسوم المستحقة </button>
                                        <input type="text " class="form-control rounded-pill" placeholder="0ريال"
                                            aria-label="0ريال" aria-describedby="button-addon2">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1>طريقة الدفع </h1>
                                    <h4 class="mt-5">الطريقة الأولى:الدفع اونلاين</h4>
                                    <p class="mt-5">إذا تم الدفع ( اونلاين ) يتم تفعيل الرسوم بحسابك بشكل تلقائي خلال ٢٤
                                        ساعة (لا يحتاج تعبئة نمودج التحويل )
                                    </p>
                                </div>
                                <div class="images mt-5 text-center">
                                    <img src="{{ asset('newWebsite/Images/Express1.png') }}" alt="">
                                    <img src="{{ asset('newWebsite/Images/visa1.png') }}" alt="">
                                    <img src="{{ asset('newWebsite/Images/Pay1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog text-center pt-5 pb-5" id="blog ">
                <div class="container">
                    <dic class="row">
                        <div class="card">
                            <div class="card-body" dir="rtl">
                                <h4 class="mt-3">الطريقة الثانية:تحويل البنكي
                                </h4>
                                <p class="mt-5 mb-5">الدفع بالتحويل البنكي لأحد الحسابات التالية ثم تعبئة<a href="">
                                        نموذج التحويل</a> والانتظار اسبوع
                                    للتفعيل.</p>
                            </div>
                        </div>
                    </dic>
                </div>
            </div>

            <div class="featuers text-center pt-5 pb-5" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="card">
                            <div class="card-body" dir="rtl">
                                <h4 class="mt-5">نموذج تحويل الرسوم</h4>
                                <p class="mt-5 mb-5">بعد إرسال المبلغ، يجب مراسلتنا عبر النموذج التالي لأجل تسجيل الرسوم
                                    باسم عضويتك ثم الحصول على مميزات الموقع الخاصة بالعملاء</p>
                            </div>
                            <form class="row g-3 needs-validation" novalidate dir="rtl">
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label" dir="rtl">اسم المستخدم*
                                        :</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    <div class="valid-feedback" dir="rtl">
                                        اسم المستخدم* :
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label" dir="rtl">مبلغ الرسوم*
                                        :</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    <div class="valid-feedback" dir="rtl">
                                        مبلغ الرسوم* :
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label" dir="rtl">البنك الذي تم
                                        التحويل إليه* :
                                    </label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    <div class="valid-feedback" dir="rtl">
                                        البنك الذي تم التحويل إليه* :

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label" dir="rtl">
                                        متى تم التحويل :
                                    </label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    <div class="valid-feedback" dir="rtl">
                                        متى تم التحويل :
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label" dir="rtl">
                                        اسم المحول* : </label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    <div class="valid-feedback" dir="rtl">
                                        اسم المحول* : </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label" dir="rtl">
                                        رقم الجوال المرتبط بعضويتك* :
                                    </label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    <div class="valid-feedback" dir="rtl">
                                        رقم الجوال المرتبط بعضويتك* :
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label" dir="rtl">
                                        رقم الإعلان : </label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                    <div class="valid-feedback" dir="rtl">
                                        رقم الإعلان : </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label" dir="rtl">
                                        ملاحظات : </label>
                                    <input type="text" class="form-control last-input" id="validationCustom01" value=""
                                        required>
                                    <div class="valid-feedback" dir="rtl">
                                        ملاحظات : </div>
                                </div>

                                <div class="col-12 mt-5 mb-3">
                                    <p class="card-text">نرجو الحرص على أن تكون معلومات التحويل صحيحة ودقيقة
                                    </p>
                                </div>
                                <div class="col-12 mt-5 mb-5">
                                    <button class="btn btn-primary" type="submit">ارسال</button>
                                </div>
                            </form>
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

</html>
