@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg-rounded">
                    <div class="card-header">
                        <div id="card-titlu">Inregistrare</div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label for="nume" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Nume') }}</label>

                                        <div class="col-md-8">
                                            <input id="nume" type="text" class="form-control @error('nume') is-invalid @enderror" name="nume" value="{{ old('nume') }}" required autocomplete="nume" autofocus>

                                            @error('nume')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prenume" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Prenume') }}</label>

                                        <div class="col-md-8">
                                            <input id="prenume" type="text" class="form-control @error('prenume') is-invalid @enderror" name="prenume" value="{{ old('prenume') }}" required autocomplete="prenume" autofocus>

                                            @error('prenume')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('E-Mail') }}</label>

                                        <div class="col-md-8">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telefon" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Telefon') }}</label>

                                        <div class="col-md-8">
                                            <input id="telefon" type="text" class="form-control @error('telefon') is-invalid @enderror" name="telefon" value="{{ old('telefon') }}" required autocomplete="telefon" autofocus>

                                            @error('telefon')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="parola" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Parola') }}</label>

                                        <div class="col-md-8">
                                            <input id="parola" type="password" class="form-control @error('parola') is-invalid @enderror" name="parola" required autocomplete="new-password">

                                            @error('parola')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="parola-confirm" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Confirma parola') }}</label>

                                        <div class="col-md-8">
                                            <input id="parola-confirm" type="password" class="form-control" name="parola_confirmation" required autocomplete="new-parola">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label for="adresa" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Adresa') }}</label>

                                        <div class="col-md-8">
                                            <textarea id="adresa" class="form-control @error('adresa') is-invalid @enderror" name="adresa" value="{{ old('adresa') }}" required autocomplete="adresa" rows="3"></textarea>
                                            @error('adresa')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="judet" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Judet') }}</label>

                                        <div class="col-md-6">
                                            <select id="judet" class="form-control @error('judet') is-invalid @enderror" name="judet" value="{{ old('judet') }}" required autocomplete="judet" autofocus>
                                                <option value="">Judet</option>
                                                @foreach ($judet as $jud)
                                                    <option value="{{ $jud->id }}"> {{ $jud->nume }}</option>
                                                @endforeach
                                            </select>
                                            @error('judet')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="localitate" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Localitate') }}</label>

                                        <div class="col-md-6">
                                            <select id="localitate" class="form-control @error('localitate') is-invalid @enderror" name="localitate" value="{{ old('localitate') }}" required autocomplete="judet" autofocus>
                                                <option value="">Localitate</option>
                                            </select>
                                            @error('localitate')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="avatar" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Imagine') }}</label>

                                        <div class="col-md-8">
                                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                                            @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descriere" class="col-md-4 col-form-label text-md-right" id="form-label">{{ __('Descriere') }}</label>

                                        <div class="col-md-8">
                                            <textarea id="descriere" class="form-control @error('descriere') is-invalid @enderror" name="descriere" value="{{ old('descriere') }}" autocomplete="descriere" rows="3"></textarea>
                                            @error('descriere')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3 offset-md-4">
                                    <button type="submit" class="btn btn-light" id="authbtn">
                                        {{ __('Inregistrare') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="{{route('login')}}">
                            <button class="btn btn-dark" style="font-size:15px;float:right;">Ai deja un cont?</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#judet').change(function(){
            let countyId = $(this).val();
            $.ajax({
                url: 'register/afiseazaLocalitati/' + countyId,
                type: 'GET',
                success: function(response) {
                    $('#localitate').empty();
                    $.each(response, function(key, value) {
                        $('#localitate').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        });
    </script>
@endsection
