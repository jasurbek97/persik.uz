@extends('back.layout.layout')

@section('content')
    <div class="container">
        <div class="justify-content-center">
            <form action="{{route('product.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
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

                                <label class="mt-2">@lang('admin.title')</label>
                                <input type="text" class="form-control"  placeholder="@lang('admin.title')" name="title[ru]" value="{{$product->title['ru']}}">

                                <label class="mt-2">@lang('admin.body')</label>
                                <textarea class="form-control"  rows="3" placeholder="@lang('admin.body')" name="body[ru]" id="about_ru">{{$product->body['ru']}}</textarea>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-uz" role="tabpanel" aria-labelledby="nav-uz-tab">

                            <div class="mt-3">

                                <label class="mt-2">@lang('admin.title')</label>
                                <input type="text" class="form-control"  placeholder="@lang('admin.title')" name="title[uz]" value="{{$product->title['uz']}}">

                                <label class="mt-2">@lang('admin.body')</label>
                                <textarea class="form-control"  rows="3" placeholder="@lang('admin.body')" name="body[uz]" id="about_uz">{{$product->body['uz']}}</textarea>

                            </div>


                        </div>

                        <label class="mt-2">@lang('admin.name')</label>
                        <input type="text" class="form-control"  placeholder="@lang('admin.name')" name="name" required value="{{$product->name}}">

                        <div class="row">
                            <div class="col-6">
                                <label class="mt-2">@lang('admin.price')</label>
                                <input type="text" class="form-control"  placeholder="@lang('admin.price')" name="price[sell]" required value="{{$product->price['sell']}}">
                            </div>
                            <div class="col-6">
                                <label class="mt-2">@lang('admin.price_disc')</label>
                                <input type="text" class="form-control"  placeholder="@lang('admin.price_disc')" name="price[discount]" value="{{$product->price['discount']}}">
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label >@lang('admin.status')</label>
                            <select class="form-control" name="status">
                                <option value="1" @if($product->status) selected >@lang('admin.active')</option>
                                <option value="0" @else selected @endif>@lang('admin.inactive')</option>
                            </select>
                        </div>

                        <label >Image </label>
                        @foreach($product->images as $img)
                        <div class="row" id="ch{{$loop->iteration}}">
                            <div class="form-group col-8" >
                                <div class="input-group">
                                    <input  class="form-control" type="file" name="image[]" onchange="document.getElementById('image{{$loop->iteration}}').src = window.URL.createObjectURL(this.files[0])" value="{{$img->image}}">
                                </div>
                            </div>

                            <div class="form-group col-2">
                                <div class="custom-file ">
                                    <img id="image{{$loop->iteration}}" class="border-2 " height="50px" width="80px" src="@if($img) /{{$img->image}} @else /front/images/no-image.jpg @endif">
                                </div>
                            </div>
                            <div class="form-group col-1 mt-1">
                           <span class="input-group-btn">
                                <button class="btn btn-outline-danger delete" data-id="{{$loop->iteration}}" onclick="confirm('Delete')" type="button" id="button-addon2"><i class="fas fa fa-trash"></i></button>
                           </span>
                            </div>
                            @if($loop->first)
                            <div class="form-group col-1 mt-1">
                                <span class="input-group-btn "><button  class="btn btn-primary  add_ch" data-id="1" ><i class="fas fa fa-plus"></i></button></span>
                            </div>
                             @endif
                        </div>

                        @endforeach
                        <div class="ch_result">

                        </div>


                        <button type="submit" class="btn btn-primary mb-4 mt-3">@lang('admin.add')</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        var id = {!! $product->images->count() !!};
        $('.add_ch').on('click', function (e) {
            e.preventDefault();
            id += 1;

            var tr = '';

            tr += '<div class="row" id="ch' + id +'">';
            tr += '<div class="form-group col-8" >';
            tr += '<div class="input-group">';
            tr += '<input id="thumbnail'+id+'" class="form-control" type="file" onchange="document.getElementById(\'image'+ id +'\').src = window.URL.createObjectURL(this.files[0])" name="image[]">';
            tr += '</div>';
            tr += '</div>';

            tr += '<div class="form-group col-2">';
            tr += '<div class="custom-file "><img id="image'+ id +'" class="border-2 " height="50px" width="80px" src="/front/images/no-image.jpg"></div>';
            tr += '</div>';

            tr += '<div class="form-group col-1 mt-1">';
            tr += '<span class="input-group-btn"><button class="btn btn-outline-danger delete" data-id="'+ id +'" type="button" id="button-addon2"><i class="fas fa fa-trash"></i></button></span>';
            tr += '</div>';
            tr += '</div>';

            $('.ch_result').append(tr);

            $('.delete').on('click', function () {
                var idd = $(this).data('id');
                $('#ch' + idd).remove();
            });




        });


        $('.delete').on('click', function () {
            var idd = $(this).data('id');
            $('#ch' + idd).remove();
        });

    </script>
@endpush
