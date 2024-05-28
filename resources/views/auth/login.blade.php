@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <div id="card-titlu">Autentificare</div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('E-Mail') }}</label>

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
                                <label for="password" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Parola') }}</label>

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
                                <div class="col-md-3 offset-md-4">
                                    <button type="submit" class="btn" id="authbtn">
                                        {{ __('Autentificare') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            @if (Route::has('password.request'))
                                <div class="col-md-3 offset-md-5">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Ti-ai uitat parola?') }}
                                    </a>
                                </div>
                            @endif
                            <div class="col-md-3" style="float: right">
                                <a href="{{route('register')}}">
                                    <button class="btn btn-dark" style="font-size:15px;float:right;">Utilizator nou?</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
