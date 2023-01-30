@extends('main')
@section('title')
    Home
@endsection
@section('content')
<div id="gambarSlide" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" height="550px" width="713px" data-bs-slide-to="1" aria-label="slide 1" src="https://cdn.vox-cdn.com/thumbor/cJio0AmY2XNzTmiRjl3tM1Nt0GQ=/0x52:1000x615/1600x900/cdn.vox-cdn.com/uploads/chorus_image/image/48574653/shutterstock_179434412.0.0.jpg">
            <div class="carousel-caption">
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="550px" width="713px" data-bs-slide-to="2" aria-label="slide 2" src="https://live.staticflickr.com/1688/24254379672_c08582d0be_b.jpg">
            <div class="carousel-caption">
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="550px" width="713px" data-bs-slide-to="3" aria-label="slide 3" src="https://www.pixelstalk.net/wp-content/uploads/images1/Medicine-pharmacy-pills-fake-law-images-1920x1080.jpg">
            <div class="carousel-caption">
                <p></p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-slide="prev" data-bs-target="#gambarSlide">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next" data-bs-target="#gambarSlide">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div id="GambarIndikator" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#GambarIndikator" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#GambarIndikator" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#GambarIndikator" data-bs-slide-to="2" aria-current="true" aria-label="Slide 3"></button>
    </div>
    <br>
<div>
    <div class="iconbox"><i class="bi bi-box"><b> Our Product</b> </i> </div>
</div>
    <div class="d-flex justify-content-evenly">
        @foreach($data as $item)
        <div class="col-md-2">
            <div class="card mb-3">
                <img style="height: 250px" src="{{url('images',$item->photo)}}" alt="" class="img-fluid">
                <div class="p-3">
                    <h5>
                        {{$item->name}}
                    </h5>
                    <h6>
                        <div style="color :rgb(0, 0, 0)">   Rp{{number_format($item->price)}} </div>
                    </h6>
                    <div class="text-secondary">
                        {{$item->seller->name}}
                    </div>
                    
                    <a href="https://api.whatsapp.com/send?phone=+6282269140660&text=%7B%7Burlencode(%22Halo saya mau pesan $item->name" class="btn btn-success w-100 mt-2">
                        <i class="bi bi-whatsapp"></i> Buy
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>


@endsection

