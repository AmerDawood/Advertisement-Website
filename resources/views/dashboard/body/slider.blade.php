<div class="col-lg-7 col-md-6">
    <div class="new-sec">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
          @endif
         <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="writsec">

            <div class="input-container" style="padding-top:90px;">
              <input type="file" name="image" class="form-control edit">
          </div>
            <div class="button-container">
                <a href="">
                    <button type="submit" class="btn btn-success bt-sd" style="font-size: 20px;">اضافة</button>

                </a>
            </div>
          </div>
        </form>

       <div class="ttilesec">
        <h5>  الصور المتحركة (السلايدر)  </h5>
       </div>

       <div class="our-sec">
        <div class="col-lg-4 col-md-4">



             @foreach ($sliders as $slider)

             <div class="all-buutton2" style="height: 200px;">
                <div>
                 {{-- <button type="button" class="btn btn-primary btn-lg btn-add">{{ $area->name }}</button> --}}

                  {{-- <span style="padding-right: 220px;"></span> --}}

                  <img src="{{ asset('uploads/sliders/'.$slider->image) }}" height="100" width="200" alt="">


                 <form action="{{ route('slider.destroy',$slider->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                   <button type="button" class="btn btn-primary btn-lg bnt-dan btn-delete">حذف</button>

                   </form>

                </div>
             </div>
             @endforeach


        </div>
       </div>
    </div>
</div>
