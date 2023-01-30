@extends('main')
@section('title')
    form
@endsection
@section('content')
<div class="container-fluid mt-2">
    <h4 class="mb-0">Add Category</h4>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{'/'}}">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
                <a href="{{url('category')}}">Category</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Add
            </li>
        </ol>
    </nav>

    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-3">
                <div class="card-header">
                    <strong>Add</strong> Category
                </div>
                <div class="card-body">
    
                    @if(Session::has('msg'))
                    <div class="alert alert-success">
                        {{Session::get('msg')}}
                    </div>
                    @endif
    
                    @if($errors->any())
                         <div class="alert alert-info">
                             <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                 <li>{{$error}}</li>
                                @endforeach                 
                            </ul>
                        </div>
                        @endif
                    <form action="{{url('form')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type category name ...">
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-box-arrow-in-right"></i>
                            Process
                        </button>
                        <button type="reset" class="btn btn-light">
                            Reset
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
{{-- <div>ini halaman category</div> --}}