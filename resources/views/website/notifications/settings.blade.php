@extends('website.master')


@section('styles')

@endsection

@section('content')
<!-- **************** -->


<section class="main-content" style="padding: 100px;">


    <div style="width: 100%; max-width: 700px; min-height: 400px; background-color: #F1F1F1; margin: 100px auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding-top: 10px; border-radius: 20px;">


        <div style="width: 600px; height: 52px; display: flex; align-items: center; justify-content: space-between; background-color: #E7E7E7; border-radius: 5px; padding:10px; margin:5px;">
            <span>التنبيهات الفورية</span>
            <input type="checkbox">
        </div>

        <div style="width: 600px; height: 52px; display: flex; align-items: center; justify-content: space-between; background-color: #E7E7E7; border-radius: 5px; padding:10px; margin:5px;">
            <span>أعلانات أعضاء قمت بمتابعتهم</span>
            <input type="checkbox">
        </div>

        <div style="width: 600px; height: 52px; display: flex; align-items: center; justify-content: space-between; background-color: #E7E7E7; border-radius: 5px; padding:10px; margin:5px;">
            <span>أعلانات أقسام قمت بمتابعتها</span>
            <input type="checkbox">
        </div>

        <div style="width: 600px; height: 52px; display: flex; align-items: center; justify-content: space-between; background-color: #E7E7E7; border-radius: 5px; padding:10px; margin:5px;">
            <span>ردور علي أعلانات قمت بمتابعتها</span>
            <input type="checkbox">
        </div>


        <div style="width: 600px; height: 52px; display: flex; align-items: center; justify-content: space-between; background-color: #E7E7E7; border-radius: 5px; padding:10px; margin:5px;">
            <span>الرسائل الخاصة</span>
            <input type="checkbox">
        </div>


    </div>


</section>

@endsection


@section('scripts')

@endsection
