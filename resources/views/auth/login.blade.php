@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-2 mb-70">
                <div class="card-header">{{ __('ورود') }}</div>

                <div class="card-body">



                    <form method="POST" action="{{ route('login') }}" >
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('مرا به خاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ورود') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('رمز عبور خود را فراموش کردید؟') }}
                                    </a>
                                @endif
                            </div>

                            <div class=" mt-3" style="margin: 0 auto;">
                                    <a href="{{route('auth.google')}}" class="btn btn-danger btn-sm">
                                        ورود با گوگل
                                    </a>
                                </div>

                            <div class=" mt-3" style="margin: 0 auto;">
                               <a href="{{route('register.index')}}" class="btn btn-secondary btn-sm">
                                ورود با ایمیل
                              </a>
                            </div>

                            <div class="mt-3" style="margin: 0 auto;">
                              <a href="" class="btn btn-primary btn-sm">
                                ورود با فیسبوک
                              </a>
                            </div>

                            <div class="mt-3" style="margin: 0 auto;">
                                <a href="{{route('login.mobile')}}" class="btn btn-warning btn-sm">
                                    ورود با شماره تلفن
                                </a>
                            </div>

                            <div class="mt-3" style="margin: 0 auto;">
                                <a href="{{route('register')}}" class="btn btn-success btn-sm">
                                    +ایجاد حساب کاربری
                                </a>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
