@extends('website.master')


@section('styles')

@endsection

@section('content')
<!-- **************** -->


<section class="main-content" style="padding: 100px; text-align: center;">
    <div style="padding-top: 100px;"></div>
   <div class="row">
    <a href="{{ route('settings.notifications') }}">
        <button style="width: 150px; height: 50px; background-color: #0762CD; color: white; border: 1px solid blue; border-radius: 10px; margin-bottom: 20px; display: flex; align-items: center; justify-content: center;">الاعدادات</button>
    </a>

    <a href="{{ route('notifications.deleteAll') }}" style="padding: 10px;">
        <button style="width: 150px; height: 50px; background-color: #0762CD; color: white; border: 1px solid blue; border-radius: 10px; margin-bottom: 20px; display: flex; align-items: center; justify-content: center;">حذف الكل</button>
    </a>
   </div>

    @foreach ($notifications as $item)
    <div class="card" style="margin: 10px;">
        <div class="card-body">
            <a href="{{ $item->link }}" class="mb-4">
                {{ $item->title }}
            </a>

            {{-- <button> --}}
            <a  style="margin-right: 80%; color:red" href="{{ route('notifications.deleteById', ['id' => $item->id]) }}">
                حذف</a>
            {{-- </button> --}}
        </div>

    </div>
@endforeach





</section>


@endsection


@section('scripts')

@endsection
