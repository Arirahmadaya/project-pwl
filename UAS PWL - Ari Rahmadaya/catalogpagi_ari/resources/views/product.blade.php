@extends('main')
@section('title')
    Product
@endsection
@section('content')
    <div class="container-fluid mt-2">
        <h4 class="mb-0">Product</h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Product
            </li>
            </ol>
        </nav>
  
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="w-100 pt-2">
                        <strong>Table</strong> Data
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{url('product-add')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> New Data </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('msg'))
                    <div class="card alert alert-success">
                        {{Session::get('msg')}}
                    </div>
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="20">NO</th>
                            <th width="50">PHOTO</th>
                            <th>NAME</th>
                            <th>CATEGORY</th>
                            <th>PRICE</th>
                            <th width="200">ACT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{url('images')}}/{{$item->photo}}" class="img-fluid">
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{number_format($item->price)}}</td>
                            <td>
                                <a href="{{'product-edit'}}/{{$item->id}}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>Edit
                                 </a>
                                <a href="{{route('del',['id'=>$item->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')">
                                    <i class="bi bi-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
