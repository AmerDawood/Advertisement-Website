<div class="col-lg-7 col-md-6">
    <div class="new-sec">
       <div class="ttilesec">
        <h5 style="padding-top: 20px;">البنود المتاحة</h5>
       </div>

       <div class="our-sec">
        <div class="col-lg-4 col-md-4">




                @foreach ($users as $user)
                <div class="all-buutton2">
                    <div>
                     <button type="button" class="btn btn-primary btn-lg btn-add">  {{ $user->first_name }} </button>
                     <a href="{{ route('dashboard',['segment'=>'user-details/',1]) }}">
                         <button type="button" class="btn btn-primary btn-lg btn-add">التفاصيل</button>


                     </a>
                     <button type="button" class="btn btn-primary btn-lg bnt-dan">تجميد الحساب</button>
                    </div>
                 </div>

                @endforeach







        </div>
       </div>
    </div>
</div>
