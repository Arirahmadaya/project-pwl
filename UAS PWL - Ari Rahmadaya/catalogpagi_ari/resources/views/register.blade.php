@extends('main')
@section('title')
    Register
@endsection
@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-3">
            <div class="card-header">
                Form <strong>Register</strong>
            </div>
            <div class="card-body">

                @if(Session::has('msg'))
                        <div class="alert alert-success">
                            {{Session::get('msg')}}
                        </div>
                        @endif
        
                         @if ($errors->any())
                        <div class="alert alert-info">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                            
                        @endif 

                <form action="{{url('register')}}" method="post">
                    @csrf
                     <div class="mb-3">
                        <label for="name">Full Name</label>
                        <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder ="Type full name ...">
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror 
                     </div> 
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Type e-mail ...">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                             </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('name') is-invalid @enderror" placeholder="Type password ...">
                    @error('password')
                             <div class="invalid-feedback">
                                 {{$message}}
                              </div>
                    @enderror 
                     </div>
                     <div class="mb-3">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" name="password_confirm" id="password_confirm" class="form-control @error('name') is-invalid @enderror" placeholder="Type password ...">
                        @error('name')
                             <div class="invalid-feedback">
                                {{$message}}
                            </div>
                    @enderror 
                    </div> 
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right"></i>
                        Register
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