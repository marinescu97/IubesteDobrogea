@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg-rounded" style="margin-top: 20px;">
                    <div class="card-header" id="card-titlu" style="padding-top: 30px; margin-bottom: 20px;">
                        Adauga un produs
                    </div>
                    <div class="card-body">
                        <form action="{{ route('producator.adaugareprodus')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">
                                            {{ $error }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                        </div>
                                        @endforeach
                            @endif

                            @if(session()->has('success'))
                                <div class="alert alert-dark">
                                    {{ session()->get('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                </div>
                            @endif
                            <div class="form-group row">
                                <label for="denumire" class="col-md-3 col-form-label text-md-right">Denumire:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="denumire" name="denumire" value="{{ old('denumire') }}" placeholder="Adauga o denumire" required autocomplete="denumire" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="categorie" class="col-md-3 col-form-label text-md-right">Categorie:</label>
                                <div class="col-md-8">
                                    <select name="categorie" id="categorie" class="form-control" value="{{ old('categorie') }}" required autocomplete="categorie" autofocus>
                                        <option value="">Selecteaza o categorie</option>
                                        @foreach ($categorie as $categ)
                                    <option value="{{$categ->id}}">{{$categ->nume}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descriere" class="col-md-3 col-form-label text-md-right">{{ __('Descriere:') }}</label>
                                <div class="col-md-8">
                                    <textarea id="descriere" class="form-control" name="descriere" value="{{ old('descriere') }}" autocomplete="descriere" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="user-image mb-3 text-center">
                                <div class="imgPreview"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="imagini" class="col-md-3 col-form-label text-md-right">{{ __('Imagini:') }}</label>
                                <div class="col-md-8">
                                    <input type="file" name="imagini[]" class="form-control" id="imagini" value="{{ old('imagini') }}" multiple/>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center" style="padding-top: 30px;">
                                    <button type="submit" class="btn btn-light" id="bsubmit" style="align: center;">
                                        {{ __('Adauga') }}
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
