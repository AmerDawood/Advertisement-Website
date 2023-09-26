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
         <form action="{{ route('section.store') }}" method="POST">
         @csrf
         <div class="writsec">

            <div class="input-container" style="padding-top:90px;">
              <input type="text" name="title" class="form-control edit" placeholder="اكتب اسم القسم  ....">
            </div>
            <div class="button-container">
                <a href="">
                    <button type="submit" class="btn btn-success bt-sd" style="font-size: 20px;">اضافة</button>

                </a>
            </div>
          </div>
        </form>

       <div class="ttilesec">
        <h5>الاقسام المتاحة</h5>
       </div>

       <div class="our-sec">
        <div class="col-lg-4 col-md-4">




                @foreach ($sections as $section)
                <div class="all-buutton2" style="height: 200px;">
                    <div>
                     <button type="button" class="btn btn-primary btn-lg btn-add">{{ $section->title }}</button>
                     <button type="button" class="btn btn-primary btn-lg btn-edit" data-toggle="modal" data-target="#editSectionModal" data-section-title="{{ $section->title }}">تعديل القسم</button>

                     <div class="modal fade" id="editSectionModal" tabindex="-1" role="dialog" aria-labelledby="editSectionModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editSectionModalLabel">تعديل القسم</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="editSectionForm" action="{{ route('sections.update', ['id' => $section->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="editSectionTitle">عنوان القسم</label>
                                            <input type="text" class="form-control" id="editSectionTitle" name="title" value="">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                     <form action="{{ route('sections.destroy',['id'=>$section->id]) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="button" class="btn btn-primary btn-lg bnt-dan btn-delete">حذف القسم</button>
                    </form>
                    </div>
                 </div>
                @endforeach












        </div>
       </div>
    </div>
</div>



