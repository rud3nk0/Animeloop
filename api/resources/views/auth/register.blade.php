@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form class="form" method="POST" action="{{ route('register') }}">
                    <img class="form__login_image" src="{{asset('login.png')}}" alt="">
                    <p class="form__title_underImage">Sign Up</p>
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror" name="name"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="type your name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" placeholder="type your email">

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
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="new-password" placeholder="type your password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password"
                                   placeholder="confirm password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="form__button">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <style>

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
            padding: 6px 128.41px 7.5px 86.59px;
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
            margin-left: 0px !important;
        }

        .form-check {
            color: #FFFFFF;
            margin-left: 13px;
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
