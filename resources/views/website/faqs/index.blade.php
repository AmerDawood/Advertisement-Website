


@extends('website.master')


@section('styles')
<link rel="stylesheet" href="{{ asset('newWebsite/Css/Store.css') }}">

@endsection

@section('content')


<div class="footet_section" style="padding-top:200px;">
    <div class="container" >



       @foreach ($faqs as $item )
       <section class="discount mb-5" id="discount">
        <div class="container">
            <div class="row mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-end" dir="rtl">
                            <h4 class="text-end"> {{ $item->question }}

                            </h4>
                            <h6 class="text-end">
                                 {{ $item->answer }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       @endforeach





    </div>
</div>







@endsection



@section('scripts')

@endsection
