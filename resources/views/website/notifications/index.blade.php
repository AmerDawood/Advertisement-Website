@extends('website.master')


@section('styles')

@endsection

@section('content')
<!-- **************** -->


<section class="main-content" style="padding: 100px; text-align: center;">
    <div style="padding-top: 100px;"></div>
    <a href="{{ route('settings.notifications') }}">
        <button style="width: 150px; height: 50px; background-color: #0762CD; color: white; border: 1px solid blue; border-radius: 10px; margin-bottom: 20px; display: flex; align-items: center; justify-content: center;">الاعدادات</button>
    </a>


    <div class="card" style="margin: 10px;">
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div>

      <div class="card" style="margin: 10px;">
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div>
      
      <div class="card" style="margin: 10px;">
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div>


    {{-- <p class="text-center" style="margin: 0;padding-top:200px;">لا توجد الاشعارات</p> --}}
</section>


@endsection


@section('scripts')

@endsection
