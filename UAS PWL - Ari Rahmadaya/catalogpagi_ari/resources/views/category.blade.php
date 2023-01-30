@extends('main')
@section('title')
    Category
@endsection
@section('content')    
<div class="container-fluid mt-2">
    <h4 class="mb-0">Category</h4>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"> 
            Category
        </li>
        <li class="breadcrumb-item" aria-current="page"> 
            <a href="{{url('form')}}">Add</a>
        </li>
    </ol>
</nav>

<div class="card">
    <div class = card-header>
        <div class="d-flex">
            <div class="w-100 pt-2">
                <strong>Table</strong> Data
            </div>
            <div class="w-100 text-end">
                <a href="{{url('form')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i>New Data</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if(Session::has('msg'))
                    <div class="alert alert-success">
                        {{Session::get('msg')}}
                    </div>
                    @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="20">NO</th>
                    <th>NAME</th>
                    <th width="200">ACT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <a href="{{'category-edit'}}/{{$item->id}}"class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil">Edit</i>
                            </a>
                            <a href="{{route('catdel',['id'=>$item->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure ?');">
                                <i class="bi bi-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{Auth::category()}} --}}
    </div>
    
    </div>
</div>
@endsection