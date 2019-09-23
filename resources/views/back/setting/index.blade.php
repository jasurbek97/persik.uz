@extends('back.layout.layout')

@section('content')
    <div class="container">
        <div class="justify-content-center">
        <form action="{{route('setting.update')}}" method="POST">
                      @csrf
                      @method("PUT")
                   <div class="mt-3">
                       <nav>
                           <div class="nav nav-tabs" id="nav-tab" role="tablist">
                               <a class="nav-item nav-link active" id="nav-ru-tab" data-toggle="tab" href="#nav-ru" role="tab" aria-controls="nav-ru" aria-selected="true">Ru</a>
                               <a class="nav-item nav-link" id="nav-uz-tab" data-toggle="tab" href="#nav-uz" role="tab" aria-controls="nav-uz" aria-selected="false">Uz</a>
                           </div>
                       </nav>
                       <div class="tab-content" id="nav-tabContent">
                           <div class="tab-pane fade show active" id="nav-ru" role="tabpanel" aria-labelledby="nav-ru-tab">
                               <div class="mt-3">
                                     <label class="mt-2">Заголовок текста </label>
                                   <input type="text" class="form-control" placeholder="Заголовок текста " name="header_text[ru]" value="{{$setting->header_text['ru']}}">
                            </div> 
        
                           </div>
                           <div class="tab-pane fade" id="nav-uz" role="tabpanel" aria-labelledby="nav-uz-tab">
                                <div class="mt-3">
                                     <label class="mt-2">Заголовок текста </label>
                                      <input type="text" class="form-control" placeholder="Заголовок текста " name="header_text[uz]" value="{{$setting->header_text['uz']}}">
                                 </div> 
                           </div>
        
                          
        
                           <button type="submit" class="btn btn-primary mb-4 mt-3">@lang('admin.edit')</button>
        
                       </div>
                   </div>
            </form>



        </div>
    </div>
@endsection
