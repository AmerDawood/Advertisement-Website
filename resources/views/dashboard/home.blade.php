@extends('dashboard.master')


@section('content')


<section class="adding">
    <div class="container-fluid">


        <section class="nav-sec">



<nav class="navbar navbar-inverse">
<div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
 <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="#">
     <img src="{{ asset('admin/image/Group 133.png') }}" alt="">
   </a>
 </div>

 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   <ul class="nav navbar-nav navbar-right drop-sec">
   <li>
     {{-- <input type="search" class=" input-ser " placeholder="ابحث هنا"> --}}
   </li>
     <li class="dropdown hidden-md hidden-lg" id="xs-dropdown">
       <a href="#" class="dropdown-toggle link-one " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> عرض كافة الأقسام<span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="#">اضافة قسم</a></li>
         <li><a href="#">تعديل قسم</a></li>
         <li><a href="#">إضافة شروط استخدام</a></li>

         <li><a href="#">سياسة الخصوصية</a></li>
         <li><a href="#">جميع المستخدمين</a></li>

         <li><a href="#">المناطق</a></li>
         <li><a href="#">الاسئلة الشائعة</a></li>
         <li><a href="#"> نظام التقيم</a></li>
         <li><a href="#">  رقم حساب البنك</a></li>
         <li><a href="#">   الاعضاء المشتركين</a></li>
         <li><a href="#">    اسالة الامان</a></li>


       </ul>
     </li>

   </ul>


 </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>



        </section>






          <div class="alert">
            {{-- <button>الحقل ضروري <i class="fa fa-times-circle-o" aria-hidden="true"></i></button> --}}
            {{-- <button> تمت الاضافة بنجاح <i class="fa fa-times-circle-o" aria-hidden="true"></i></button> --}}
          </div>
            <div class="ttile-sec text-center">
                <h1>اضف قسم جديد</h1>
            </div>

           <div class="row">


                <div class="all-div">


                    @if (request()->segment(3) === 'home')
                    @include('dashboard.body.body1')
                    @elseif(request()->segment(3) == 'privacy')
                    @include('dashboard.body.body2')
                    @endif




                  <div class="col-lg-5 col-md-6 drop-down">

                        <div class="all-buutton">
                           <a href="">
                            <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                           </a>
                           <h4>اضافة قسم </h4>
                        </div>





                        <div class="all-buutton">
                           <a href="{{ route('dashboard',['segment' => 'privacy']) }}">
                            <img src="{{ asset('admin/image/Vector (1).png') }}" alt="">
                           </a>
                           <h4>تعديل قسم</h4>
                        </div>




                        <div class="all-buutton">
                           <a href="">
                            <img src="{{ asset('admin/image/Vector (2).png') }}" alt="">
                           </a>
                           <h4>إضافة شروط استخدام </h4>
                        </div>





                        <div class="all-buutton">
                           <a href="">
                            <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                           </a>
                           <h4>اضافة اسالة مقترحة</h4>
                        </div>



                        <div class="all-buutton">
                           <a href="">
                            <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                           </a>
                           <h4>سياسة الخصوصية</h4>
                        </div>



                        <div class="all-buutton">
                           <a href="">
                            <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                           </a>
                           <h4> جميع المستخدمين</h4>
                        </div>





                        <div class="all-buutton">
                          <a href="">
                           <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                          </a>
                          <h4>المناطق  </h4>
                       </div>




                       <div class="all-buutton">
                          <a href="">
                           <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                          </a>
                          <h4>الاسئلة الشائعة</h4>
                       </div>



                       <div class="all-buutton">
                          <a href="">
                           <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                          </a>
                          <h4>نظام التقيم</h4>
                       </div>



                       <div class="all-buutton">
                          <a href="">
                           <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                          </a>
                          <h4>رقم حساب البنك</h4>
                       </div>



                       <div class="all-buutton">
                          <a href="">
                           <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                          </a>
                          <h4>  الاعضاء المشتركين   </h4>
                       </div>


                       <div class="all-buutton">
                          <a href="">
                           <img src="{{ asset('admin/image/Vector.png') }}" alt="">
                          </a>
                          <h4>   اسالة الامان   </h4>
                       </div>




                  </div>









                </div>





           </div>
        </div>

</section>

@endsection
