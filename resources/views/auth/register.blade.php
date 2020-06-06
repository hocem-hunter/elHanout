@extends('layouts.app_')

@section('content')
    <div class="container">
        <!-- elHanout Logo -->
        <div class="d-flex justify-content-center mb-3">
            <img src="{{asset('/images/elHanout_logo.svg')}}" alt="elHanout logo"
                 style="height: 120px; width: 180px"
            >
        </div>
        <!-- form -->
        <div class="d-flex justify-content-center">
            <div class="card" style="border-radius: 10px;height: 470px; width: 400px;">
                <div class="card-body">
                    <h3 class="pt-2 mb-3 pl-2 font-weight-bold">{{ __('Create account') }}</h3>
                    <form method="POST"
                          action="{{ route('register') }}"
                          class="px-2"
                          style="font-family: 'Calibri';"
                    >
                        @csrf

                        <div class="pb-2">
                            <label for="name"
                                   class="col-form-label p-0 font-weight-bold">{{ __('Name:') }}</label>
                                <div>
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="pb-2">
                            <label for="email"
                                   class="col-form-label p-0 font-weight-bold">{{ __('E-Mail Address:') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-2">
                            <label for="password"
                                   class="col-form-label p-0 font-weight-bold">{{ __('Password:') }}</label>

                            <div>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-2">
                            <label for="password-confirm"
                                   class="col-form-label p-0 font-weight-bold">{{ __('Confirm Password:') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="py-2 mb-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                        </div>
                        <hr class="my-2">
                        <div style="font-size: 1rem;">
                            {{ __('Already have an account? ') }}
                            <a class="btn btn-link font-weight-bold " style="font-size: 1rem;"
                               href="{{ route('login') }}"
                            >
                                {{ __('Sign-In') }}
                            </a>
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
@endsection
