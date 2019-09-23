@extends('back.layout.layout')

@section('content')
    <div class="container">
        <div class="justify-content-center">
                <div>
                    <a href="{{route('product.create')}}" class="pull-right btn btn-primary mb-2">
                        @lang('admin.add')
                    </a>
                </div>
           <div class="mt-2">
               <table class="table">
                   <thead class="thead-light">
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">@lang('admin.name')</th>
                       <th scope="col">@lang('admin.price')</th>
                       <th scope="col">@lang('admin.price_disc')</th>
                       <th scope="col">@lang('admin.action')</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($products as $product)
                   <tr>
                       <th scope="row">{{$product->id}}</th>
                       <td>{{$product->name}}</td>
                       <td>{{$product->price['sell']}}</td>
                       <td>{{$product->price['discount']}}</td>
                       <td>
                           <a href="{{route('product.edit',$product->id)}}" class="btn btn-info"  data-toggle="tooltip" title="@lang('admin.edit')"><i class="fas fa fa-edit"></i></a>
                           <a href="{{route('product.delete',$product->id)}}" class="btn btn-danger" data-toggle="tooltip" title="@lang('admin.delete')" onclick="return confirm('@lang('admin.are_you_deleted')')"><i class="fas fa fa-trash"></i></a>
                       </td>
                   </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
        </div>
    </div>
@endsection

