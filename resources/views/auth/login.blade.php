@extends('layouts.app')
@section('content')
    <style>
        #app > main > section > div > div > div > div > div > div {
      
            box-shadow: 20px 20px 50px 10px rgba(83, 83, 83, 0.668) ;

        }

        .gradient-form {

          

            height: 100px;
        }

        .gradient-custom-2 {

            background: url('https://images.pexels.com/photos/271816/pexels-photo-271816.jpeg?auto=compress&cs=tinysrgb&w=600');
            object-fit: cover;
            background-repeat: no-repeat;
            background-size: cover;

        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>


    <section class="gradient-form  d-flex justify-content-center align-items-center bg-white"  style="background-color: #eee;">
        <div class="container  justify-content-center align-items-center  bg-white">
            <div class="row d-flex justify-content-center align-items-center h100">
                <div class="col-9" >
                    <div class="card rounded-3 text-black mt-3 mb-">
                        <div class="row g-0">
                                <div class="card-body col-6">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-outline ">
                                            <label class="form-label" for="form2Example11">Email</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg  mb-3">
                                                {{ __('Login') }}
                                            </button>
                                        </div>

                                    </form>

                                </div>
                                
                                <div class="col-6 gradient-custom-2">
                                </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
