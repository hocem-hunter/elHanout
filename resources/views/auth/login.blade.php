@extends('layouts.app_')

@section('content')
    <div class="container">
        <!-- elHanout Logo -->
        <div class="d-flex justify-content-center mb-4">
            <img src="{{asset('/images/elHanout_logo.svg')}}" alt="elHanout logo"
                 style="height: 120px; width: 180px"
            >
        </div>
        <!-- form -->
        <div class="d-flex justify-content-center mb-5 pt-2">
            <div class="card" style="border-radius: 10px;height: 380px; width: 400px;">
                <div class="card-body">
                    <h3 class="pt-2 mb-3 pl-2 font-weight-bold"> Sign-In </h3>
                    <form method="POST"
                          action="{{ route('login') }}"
                          class="px-2"
                          style="font-family: Calibri;"
                    >
                        @csrf
                        <!-- Account -->
                        <div class="pb-2">
                            <label for="email"
                                   class="col-form-label p-0 font-weight-bold">{{ __('Account') }}</label>
                            <div>
                                <input id="email" type="email" name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Email address"
                                       value="{{ old('email') }}" autocomplete="email" autofocus required
                                >

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="pb-2">
                            <div class="row p-0">
                                <label for="password"
                                       class="col-form-label col-md-6 py-0 font-weight-bold">{{ __('Password') }}</label>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link col-md-6 font-weight-bold py-0 text-right"
                                       href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Remember Me-->
                        <div class="pb-2 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label font-weight-bold" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <!--Button Login-->
                        <div class="pb-2 mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <hr>
                        <div class="pb-2 d-flex align-items-center" style="font-size: 1rem;">
                            <label for="Sing in with" class="my-1 mr-2">{{__('Sing in with:')}}</label>
                            <span class="iconify px-1" data-inline="false" data-icon="bx:bxl-facebook-circle"
                                  style="color: #2f80ed; font-size: 40px;"></span>
                            <span class="iconify px-1" data-inline="false" data-icon="flat-color-icons:google"
                                  style="font-size: 40px;"></span>
                            <span class="iconify px-1" data-inline="false"
                                  data-icon="ant-design:twitter-circle-filled"
                                  style="color: #56ccf2; font-size: 40px;"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <hr>
        <div class="text-center" style="font-family: 'Calibri Light';">
            <div class="row">
                <div class="col-md-5 py-0 text-right">
                    <a class="btn btn-link font-weight-bold"href="">
                        {{ __('Conditions of Use?') }}
                    </a>
                </div>
                <div class="col-md-2 py-0 text-center">
                    <a class="btn btn-link font-weight-bold" href="">
                        {{ __('Parivacy Notice?') }}
                    </a>
                </div>
                <div class="col-md-5 py-0 text-left">
                    <a class="btn btn-link font-weight-bold"href="">
                        {{ __('Help') }}
                    </a>
                </div>
            </div>
            <div class="pt-2">
                © 2020, elHanout.com, By Hocem & Ismail
            </div>
        </div>
    </div>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
@endsection
