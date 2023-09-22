@extends('layouts.app')

@section('content')
    <div class="container_wrapper_img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <form class="form" method="POST" action="{{ route('login') }}">
                        <img class="form__login_image" src="{{asset('login.png')}}" alt="">
                        <p class="form__title_underImage">Log In</p>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}"
                                       placeholder="your email" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="your password" name="password" required
                                       autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <label class="form-check-label" for="remember">
                                        I wish to receive news and promotions <br>
                                        from ANIMELOOP Company by email.
                                    </label>
                                </div>
                            </div>
                            <p class="private__agree_title">By continuing, you agree to ANIMELOOP<br>
                                Terms of Use and Privacy Policy.</p>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="form__button">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <style>

        .container_wrapper_img {
            margin: 0;
            padding: 0;
            top: 0;
        }

        .form {
            width: 400px !important;
            height: 800px !important;
            position: relative;
            z-index: 1;
            background: rgba(0, 0, 0, 0.80);
            margin: 0 auto;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form-control {
            background: none;
            width: 312px;
            margin-top: 26px;
            padding: 19px 16px;
            border-radius: 10px;
            border: 1px solid #D4D4D4;
            color: #fff !important;
        }

        .form-control:focus {
            background: none;
        }

        input::placeholder {
            color: #b0b0b0 !important;
        }

        .form__title_underImage {
            margin-top: 12px;
            color: #FFF;
            text-align: center;
            font-family: Inter;
            font-size: 37px;
            font-style: normal;
            font-weight: 500;
            line-height: 48px; /* 129.73% */
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .form__button {
            width: 280px;
            min-height: 50px;
            margin-top: 26px;
            padding: 6px 128.41px 7.5px 107.59px;
            border-radius: 8px;
            border: 2px solid #F5CF49;
            background: none;

            color: #FFF;
            /*text-align: center;*/
            font-family: Inter;
            font-size: 23px;
            font-style: normal;
            font-weight: 500;
            line-height: 37.5px; /* 163.043% */
            text-transform: uppercase;
        }

        .form__button:hover {
            border: 2px solid #A958A5;
            cursor: pointer;
        }

        .offset-md-4 {
            margin-left: 20px !important;
        }

        .form-check {
            color: #FFFFFF;
            margin-left: -36px;
            padding-left: 0px !important;
            margin-bottom: 0px !important;
        }

        .col-md-6 {
            flex: 0 0 auto;
            width: 100% !important;
        }

        .private__agree_title {
            margin-top: 30px;
            color: #D4D4D4;
            text-align: center;
            font-family: Inter;
            font-size: 15px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px; /* 160% */
            letter-spacing: 0.5px;
        }
    </style>
@endsection
