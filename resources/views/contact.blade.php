@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg rounded">
                <div class="card-header" id="titlu">Contact</div>
                <div class="card-body">
                <form action="{{route ('mesaj-contact')}}" method="POST">
                    @csrf
                    @foreach ($errors->all() as $error)
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                    @endif

                    @if(session()->has('success'))
                        <div class="alert alert-dark">
                            {{ session()->get('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                    @endif
                    @endforeach

                    <div class="form-group row" >
                        <label for="nume" class="col-md-3 col-form-label text-md-right" id="form-label">Nume:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nume" name="nume" value="{{ old('nume') }}" placeholder="Adauga un nume" required autocomplete="nume" autofocus>
                        </div>
                    </div>
                    <div class="form-group row" >
                        <label for="prenume" class="col-md-3 col-form-label text-md-right" id="form-label">Prenume:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="prenume" name="prenume" value="{{ old('prenume') }}" placeholder="Adauga un prenume" required autocomplete="prenume" autofocus>
                        </div>
                    </div>
                    <div class="form-group row" >
                        <label for="email" class="col-md-3 col-form-label text-md-right" id="form-label">Email:</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Adauga un email" required autocomplete="email" autofocus>
                        </div>
                    </div>
                    <div class="form-group row" >
                        <label for="mesaj" class="col-md-3 col-form-label text-md-right" id="form-label">Mesaj:</label>
                        <div class="col-md-9">
                            <textarea type="mesaj" class="form-control" id="mesaj" name="mesaj" value="{{ old('mesaj') }}" placeholder="Adauga un mesaj" required autocomplete="mesaj" autofocus rows="5"></textarea>
                        </div>
                    </div>
                    <div align="center">
                        <button type="submit" class="btn" id="btn-descriere">Trimite</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
