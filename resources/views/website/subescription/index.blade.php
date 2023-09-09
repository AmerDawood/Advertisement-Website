@extends('website.master')


@section('styles')
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
@endsection

@section('content')

<div class="box_sections">
    <div class="container">
        <div class="subject text-center pt-5 pb-5" id="subject">
            <div class="container">
                <div class="row">
                    <p>الاشتراك السنوي للمتجر
                    </p>
                </div>
            </div>
        </div>

        <div class="skill text-center pt-5 pb-5" id="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="icons mt-3 d-flex justify-content-center">
                                    <a class="btn" href="#"><img src="{{ asset('newWebsite/Images/Stare.png') }}" alt=""></a>
                                </div>
                                <h4 class="mb-5">عن العضوية</h4>
                                <p>هذة العضوية هي عضوية مدفوعة تناسب احتياج كل معلن يقوم بتسويق سلع كثيرة و مرتفعة
                                    الثمن مثل السيارات و العقارات</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icons mt-3 d-flex justify-content-center">
                                    <a class="btn" href="#"><img src="{{ asset('newWebsite/Images/Vector.png') }}" alt=""></a>
                                </div>
                                <h4 class="mb-5">عن العضوية</h4>
                                <p>هذة العضوية هي عضوية مدفوعة تناسب احتياج كل معلن يقوم بتسويق سلع كثيرة و مرتفعة
                                    الثمن مثل السيارات و العقارات</p>
                            </div>
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


        <div class="vectore text-end pt-5 pb-5" id="vectore">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-3">شروط العضوية</h4>
                            <div class="list-group list" dir="rtl">
                                <ul>
                                    <li>يجب على المشترك وجود أكثر من 3 اعلانات مصورة كل أسبوع خلال فترة الاشتراك.
                                    </li>
                                    <li>عدم الاعلان للغير.</li>
                                    <li>عدم تكرار الإعلان عن نفس السلعة أكثر من مره خلال يومين.</li>
                                    <li>عدم التنازل عن العضوية لعضو آخر او بيع العضوية.</li>
                                    <li>ذكر سعر السلعة.</li>
                                    <li>الرد على رسائل اعضاء الموقع عبر الرسائل الخاصة.</li>
                                    <li>الرد على استفسارات اعضاء الموقع عبر الردود.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="questions pt-5 pb-5" id="questions">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="accordion" dir="rtl">
                                    <div class="contentbx" dir="rtl">
                                        <div class="pages">
                                            <img src="{{ asset('newWebsite/Images/question.png') }}" alt="">

                                            <div class="label">هل الاشتراك اجباري؟</div>
                                        </div>
                                        <div class="content">
                                            <p>الاشتراك اختياري وليس اجباري. الجهة التي لاترغب في
                                                الاشتراك في هذة الخدمة بالامكان ان تستمر باستخدام العضوية العادية
                                                (ذات الرسوم)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="questions pt-5 pb-5" id="questions">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="accordion" dir="rtl">
                                    <div class="contentbx" dir="rtl">
                                        <div class="pages">
                                            <img src="{{ asset('newWebsite/Images/question.png') }}" alt="">

                                            <div class="label"> هل هذة العضوية تناسبني؟</div>
                                        </div>
                                        <div class="content">
                                            <p> اذا كنت تقوم بتسويق سلع كثيرة و مرتفعة الثمن فإن هذة العضوية مناسبة
                                                لك.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="questions pt-5 pb-5" id="questions">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="accordion" dir="rtl">
                                    <div class="contentbx" dir="rtl">
                                        <div class="pages">
                                            <img src="{{ asset('newWebsite/Images/question.png') }}" alt="">

                                            <div class="label">لايوجد لدي لايوجد لدي مؤسسه فهل يحق لي الاشتراك؟
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>نعم </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="questions pt-5 pb-5" id="questions">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="accordion" dir="rtl">
                                    <div class="contentbx" dir="rtl">
                                        <div class="pages">
                                            <img src="{{ asset('newWebsite/Images/question.png') }}" alt="">

                                            <div class="label">هل سيتم إيقاف العضوية عند انتهاء الاشتراك؟</div>
                                        </div>
                                        <div class="content">
                                            <p>لن يتم إيقاف العضوية لكن العضوية سوف تتحول الى العضوية العادية ذات
                                                الرسوم. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="questions pt-5 pb-5" id="questions">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="accordion" dir="rtl">
                                    <div class="contentbx" dir="rtl">
                                        <div class="pages">
                                            <img src="{{ asset('newWebsite/Images/question.png') }}" alt="">

                                            <div class="label"> هل يمكن أن يشترك أكثر من شخص في عضوية واحدة؟ </div>
                                        </div>
                                        <div class="content">
                                            <p>لا، العضوية خاصة بعضو واحد.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



@section('scripts')

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

@endsection


@endsection
