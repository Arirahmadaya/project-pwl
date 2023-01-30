@extends('main')
@section('title')
    Shopping Form
@endsection
@section('content')
    <div class="container-fluid mt-2 shadow">
        <h4>Shopping Form</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a>Shopping Form</a></li>
            </ol>
        </nav>
        <div class="col-md-8 offset-md-2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('msg'))
                <div class="alert alert-success">
                    {{ Session::get('msg') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <strong>BUYER</strong> Detail
                </div>
                <div class="card-body">
                    <form action="{{ url('shoppingari') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Full Name</label>
                            <input value="{{ old('name') }}" type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Input your name ...">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp">Whatsapp</label>
                            <input value="{{ old('whatsapp') }}" type="text" name="whatsapp" id="whatsapp"
                                class="form-control @error('whatsapp') is-invalid @enderror"
                                placeholder="Input your namber ...">
                            @error('whatsapp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea value="{{ old('address') }}" type="text" name="address" id="address"
                                class="form-control @error('address') is-invalid @enderror" placeholder="Input your address ..." id="address"
                                rows="3"></textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="card-header">
                    <strong>ITEM</strong> Detail
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="product_id">Choose Product</label>
                        <select name="product_id" id="product_id" type="number"
                            class="form-control @error('product_id') is-invalid @enderror ">
                            <option value="{{ old('product_id') }}">Choose</option>
                            @foreach ($data as $item)
                                <option value="{{ $item->id }}">{{ $item->name }} -> {{ $item->price }}
                                </option>
                            @endforeach
                        </select>
                        @error('product_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="qty">Qty</label>
                        <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty"
                            name="qty" placeholder="Input qty ...">
                        @error('qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label">Note</label>
                        <textarea value="{{ old('note') }}" type="text" name="note" id="note"
                            class="form-control @error('note') is-invalid @enderror" placeholder="Input your note *) If Nedded " id="note"
                            rows="3"></textarea>
                        @error('note')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark btn-outline-primary text-light">
                            Buy
                            <i class="bi bi-bag-check"></i>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
