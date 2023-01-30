@extends('main')
@section('title')
    Login
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col md-6 offset-md-3">
                <div class="card mt-3">
                    <div class="card-header">
                        Form <strong>Login</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{url('login')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control @error ('email') is-invalid @enderror" placeholder="Type e-mail ...">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error ('password') is-invalid @enderror" placeholder="Type password ...">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Login
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