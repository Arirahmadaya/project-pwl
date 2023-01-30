@extends('main')
@section('title')
    Catalog
@endsection
@section('content')
    <div class="container-fluid mt-2">
        <h4>Catalog</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Catalog</li>
            </ol>
        </nav>
        <div class="mt-3 mb-3">
            <form action="{{url('catalog')}}">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Type product name ...">
                    <button class="btn btn-success" type="submit">
                        <i class="bi bi-search"></i> Search
                    </button>
                </div>
            </form>
        </div>
        <div class="row">
            @foreach($data as $item)
            <div class="col-md-2">
                <div class="card mb-3">
    
                   
                    <img style="height: 200px" src="{{url('images',$item->photo)}}" alt="" class="img-fluid">
                    <div class="p-3">
                        
                        <h5>
                            <p class="fw-bolder"> {{$item->name}} </p>
                        </h5>

                        <h6>
                        <div style="color :rgb(0, 0, 0)">   Rp{{number_format($item->price)}} </div>
                        </h6>
                       
                        <div class="text-secondary">
                            {{$item->seller->name}}
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=+6282269140660&text={{urlencode("Halo saya mau pesan $item->name")}}" class="btn btn-success w-100 mt-2">
                            <i class="bi bi-whatsapp"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection