@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div id="card-titlu">Resetare Parola</div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{$token}}">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right" id="auth-label" style="float: left;">{{ __('Parola') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="confirmPassword" class="col-md-4 col-form-label text-md-right" id="auth-label">{{ __('Confirma parola') }}</label>

                                <div class="col-md-6">
                                    <input id="confirmPassword" type="password" class="form-control" name="confirmPassword" value="{{ old('password') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn" style="background-color: #8f6062;color: white;font-size:15px;">
                                        {{ __('Reseteaza parola') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
