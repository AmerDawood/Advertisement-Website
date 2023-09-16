


@extends('website.master')


@section('styles')
<link rel="stylesheet" href="{{ asset('newWebsite/Css/Store.css') }}">

@endsection

@section('content')


<div class="footet_section" style="padding-top:200px;">
    <div class="container" >

     <section class="discount mb-5" id="discount">
            <div class="container">
                <div class="row mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-end" dir="rtl" style="width: 800px;height:300px;">
                                <h4 class="text-end" style="border-bottom: 2px solid #000; padding-bottom: 20px;">  تواصل معنا</h4>

                                <div style="padding-top:30px;"></div>

                                <div class="form-group ">
                                    <div class="wrapper-dropdown col-md-12" id="dropdown"> <svg class="arrow"
                                            id="drp-arrow" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="transition-all ml-auto rotate-180">
                                            <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span class="selected-display" id="destination">
                                            اختر السبب </span>

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </div>
</div>







@endsection



@section('scripts')
<script src="{{ asset('website/assets/js/code.jquery.com_jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('website/assets/js/bootstrap@4.0.0/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('website/assets/js/details-ad.js') }}"></script>

@endsection
