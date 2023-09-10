

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
    <div class="footet_section" style="padding-top:200px;">
        <div class="container" >

            <section class="discount mb-5" id="discount">
                <div class="container">
                    <div class="row mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-end" dir="rtl">
                                    <h4 class="text-end"> لمن نظام الخصم؟
                                    </h4>
                                    <h6 class="text-end">نظام الخصم موجه لجميع المعلنين في مجال السيارات والعقارات سواء كانوا
                                        أفراد مستخدمين أو تجار أو مسوقين أو معارض سيارات أو وكلاء سيارات.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="factors mb-5" id="Factors">
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-end" dir="rtl">
                                    <h4 class="text-end">ماهي العوامل التي يعتمد عليها الخصم؟
                                    </h4>
                                    <p class="text-end" dir="rtl">العوامل التي يعتمد عليها نظام الخصم هي :</p>
                                    <ul>
                                        <li>عدد المبيعات وقيمتها.</li>
                                        <li>دفع الرسوم في وقتها يزيد من نسبة الخصم.تأخير دفع الرسوم يقلل من نسبة الخصم أو ربما
                                            يلغيها.</li>
                                        <li>عدم وجود أو قلة وجود شكاوي من الأعضاء ضدالمعلن.</li>
                                        <li>عدم بخس سلع المعلنين الاخرين.</li>
                                        <li>عدم طلب الخصم خارج نطاق نظام الخصم.</li>
                                        <li>عدم طلب الرسوم من المشتري.سيتم إلغاء الخصم في هذه الحالة وعدم اعطاء خصم مستقبلا.
                                        </li>
                                        <li>التناسب بين عدد الاعلانات والبع.عندما يكون عدد الاعلانات قليل والبيع عالي تزيد نسبة
                                            الخصم صحيح.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="note" id="note">
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-end" dir="rtl">
                                    <h4 class="text-end">كيف ومتى أحصل على الخصم؟
                                    </h4>
                                    <p class="text-end" dir="rtl">يتم الحصول على الخصم بعد دفع أول رسوم بيع. نظام الخصم يقوم
                                        بإحتساب الخصم بشكل الي كل أسبوع ويتم إبلاغك عند دفع الرسوم و قبل الإعلان وعبر نظام
                                        الإشعارات عند الحصول على خصم.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="time" id="time">
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-end" dir="rtl">
                                    <h4 class="text-end">هل لدي خصم في الوقت الحالي؟
                                    </h4>
                                </div>
                                <div class="block text-end mt-5 mb-5">
                                    <button class="btn">تسجيل دخول</button>
                                    <p>نرجو تسجيل الدخول اذا كانت لديك عضوية في الموقع حتى إذا كان لك خصم يتم حسابه لك</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="final">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-end" dir="rtl">
                                <p>ملاحظات :</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="list" dir="rtl">
                                    <ul>
                                        <li>الخصم المعطى هو لعضوية واحدة لمعلن واحد. اي ان الخصم المعطى لعضو هو خاص بالعضو
                                            ولايشمل الاعضاء الآخرين.
                                        </li>
                                        <li> نسبة الخصم نسبة متغيرة وليست ثابته ، قد ترتفع مع الوقت أو قد تنقص</li>
                                    </ul>
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
