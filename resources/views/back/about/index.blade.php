@extends('back.layout.layout')

@section('content')
    <div class="container">
        <div class=" justify-content-center">

            <div class="mt-3">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-ru-tab" data-toggle="tab" href="#nav-ru" role="tab" aria-controls="nav-ru" aria-selected="true">Ru</a>
                        <a class="nav-item nav-link" id="nav-uz-tab" data-toggle="tab" href="#nav-uz" role="tab" aria-controls="nav-uz" aria-selected="false">Uz</a>
                    </div>
                </nav>
                <form action="{{route('about.update')}}" method="POST">
                @method('PUT')
                @csrf
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-ru" role="tabpanel" aria-labelledby="nav-ru-tab">
                        <div class="mt-3">
                            <label class="mt-2">@lang('admin.body')</label>
                            <textarea class="form-control"  rows="3" id="about_ru" placeholder="@lang('admin.body')" name="body[ru]">{!! $about->body['ru'] !!}</textarea>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-uz" role="tabpanel" aria-labelledby="nav-uz-tab">
                        <div class="mt-3">
                            <label class="mt-2">@lang('admin.body')</label>
                            <textarea class="form-control"  rows="3" id="about_uz" placeholder="@lang('admin.body')" name="body[uz]">{!! $about->body['uz'] !!}</textarea>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary mb-4 mt-3">@lang('admin.add')</button>

                </div>
                </form>
            </div>

        </div>
    </div>
@endsection
