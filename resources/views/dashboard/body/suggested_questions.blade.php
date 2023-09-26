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


          <form action="{{ route('suggest.store') }}" method="POST">
         @csrf
        <div style="text-align: center;">
            <div class="input-container" style="padding-top: 90px; display: inline-block;">
              <input type="text" name="question" class="form-control edit" placeholder="اكتب السؤال">
            </div>
            <div class="writsec" style="padding-top: 20px; display: inline-block;">
              <div class="input-container">
                <textarea class="form-control edit" name="answer" rows="5" placeholder="  اكتب  الاجابة"></textarea>
              </div>
            </div>

          </div>

           <div style="text-align: center">
            <div class="button-container" style="display: inline-block;">
                <a href="">
                  <button class="btn btn-success bt-sd" type="submit" style="font-size: 20px;">نشر السؤال </button>
                </a>
              </div>
            </div>
          </form>


       <div class="ttilesec">
        <h5>الاسالة المتاحة</h5>
       </div>

       <div class="our-sec">
        <div class="col-lg-4 col-md-4">

                {{-- <div class="all-buutton2">
                   <div>
                    <button type="button" class="btn btn-primary btn-lg btn-add"> السؤال</button>
                    <button type="button" class="btn btn-primary btn-lg btn-add"> تعديل السؤال</button>
                    <button type="button" class="btn btn-primary btn-lg bnt-dan">حذف السؤال</button>
                   </div>
                </div> --}}

                @foreach ($suggeestQuestions as $item)
                <div class="all-buutton2" style="height: 200px;">
                    <div>
                     <button type="button" class="btn btn-primary btn-lg btn-add">{{ $item->answer }}</button>
                     <button type="button" class="btn btn-primary btn-lg btn-edit" data-toggle="modal" data-target="#editSectionModal" data-section-title="{{ $item->title }}">تعديل السؤال</button>

                     <div class="modal fade" id="editSectionModal" tabindex="-1" role="dialog" aria-labelledby="editSectionModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editSectionModalLabel">تعديل الشرط</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="editSectionForm" action="{{ route('suggest.update', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="editSectionTitle">عنوان السؤال</label>
                                            <input type="text" class="form-control" id="editSectionTitle" name="answer" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="editSectionTitle">عنوان الاجابة</label>
                                            <input type="text" class="form-control" id="editSectionTitle" name="question" value="">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                                        <button type="submit" class="btn btn-primary">حفظ السؤال</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                     <form action="{{ route('terms.destroy',['id'=>$item->id]) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="button" class="btn btn-primary btn-lg bnt-dan btn-delete">حذف السؤال</button>
                    </form>
                    </div>
                 </div>
                @endforeach






        </div>
       </div>
    </div>
</div>
