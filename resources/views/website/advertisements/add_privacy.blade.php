

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

    <div class="box_content" style="padding-top:10%; ">
        <div class="container">
            <div class="content pt-5 " id="offers">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="text-end">
                                <a href="../index.html">
                                    <img src="{{ asset('newWebsite/Images/arrow top.png') }}" alt="Go to another page">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="text-end mt-3">
                                <p>اتفاقية الرسوم</p>
                            </div>
                            <div class="horizontal">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="text-info" dir="rtl">
                                <p class="text">بسم الله الرحمن الرحيم</p>
                                <h6 class="title">قال الله تعالى:" وَأَوْفُواْ بِعَهْدِ اللهِ إِذَا عَاهَدتُّمْ وَلاَ
                                    تَنقُضُواْ
                                    الأَيْمَانَ بَعْدَ تَوْكِيدِهَا وَقَدْ جَعَلْتُمُ اللهَ عَلَيْكُمْ كَفِيلاً "صدق الله
                                    العظيم
                                </h6>
                                <div class="horizontal">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <section class="checkbox mt-5" id="checkbox" dir="rtl">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-control">
                                <input type="checkbox" name="" id="">
                                <ul>
                                    <li>* اتعهد واقسم بالله أنا المعلن أن أدفع رسوم الموقع وهي 1% من قيمة البيع سواء تم
                                        البيع عن
                                        طريق الموقع أو بسببه.</li>
                                    <li>* كما أتعهد بدفع الرسوم خلال 10 أيام من استلام كامل مبلغ المبايعة.</li>
                                    <li>ملاحظة: رسوم الموقع هي على المعلن ولاتبرأ ذمة المعلن من الرسوم إلا في حال دفعها.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('select_category') }}">
                        <div class="col-lg-12 mb-5">
                            <button type="button" class="btn btn-primary">استمرار<i
                                    class="fa-solid fa-angles-left"></i></button>
                        </div>
                        </a>
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
