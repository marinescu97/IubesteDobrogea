@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 50px;">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow-lg rounded" style="margin-bottom: 20px;">
        <div class="card-header">
          <div id="titlu">Setari profil</div>
        </div>
        <div class="card-body">
          <img src="/storage/profil/{{Auth::user()->avatar}}" style="width: 250px; height: 250px; float:left; margin-right: 25px;" alt="Avatar">
    <form method="POST" action="{{ route('producator.setari-profil')}}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="row">
                    <div class="col-md-8">
                        <div class="alert alert-danger">
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        @if(session()->has('success'))
            <div class="row">
                <div class="col-md-8">
                    <div class="alert alert-dark">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
          <div class="col-md-2">
            <label for="nume" class="edit-label" id="form-label">Nume: </label>
          </div>
          <div class="col-md-7">
            <div class="input-group mb-2">
            <input id="nume" type="text" class="form-control @error('nume') is-invalid @enderror" value="{{Auth::user()->nume}}" name="nume" autocomplete="nume" autofocus>
            @error('nume')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <label for="prenume" class="edit-label" id="form-label">Prenune: </label>
          </div>
          <div class="col-sm-7">
            <div class="input-group mb-2">
            <input id="prenume" type="text" class="form-control @error('prenume') is-invalid @enderror" value="{{Auth::user()->prenume}}" name="prenume" autocomplete="prenume" autofocus>
            @error('prenume')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <label for="adresa" class="edit-label" id="form-label">Adresa: </label>
          </div>
          <div class="col-sm-7">
            <div class="input-group">
              <input id="adresa" type="text" class="form-control @error('adresa') is-invalid @enderror" value="{{Auth::user()->adresa}}" name="adresa" autocomplete="adresa">
              @error('adresa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

              <select id="judete" name="judete" class="form-control @error('judet') is-invalid @enderror" autocomplete="judet" autofocus>
                  <option value="{{Auth::user()->judet}}">{{$judet}}</option>
                      @foreach ($judete as $jud)
                        <option value="{{ $jud->id }}"> {{ $jud->nume }}</option>
                      @endforeach
              </select>
              @error('judet')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
              <select id="localitati" name="localitati" class="form-control @error('localitate') is-invalid @enderror" autocomplete="localitate" autofocus>
                  <option value="{{Auth::user()->localitate}}">{{$localitate}}</option>
              </select>
              @error('localitate')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <label for="email" class="edit-label" id="form-label">Email: </label>
          </div>
          <div class="col-sm-7">
            <div class="input-group mb-2">
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{Auth::user()->email}}" name="email" autocomplete="email">
            @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <label for="telefon" class="edit-label" id="form-label">Telefon: </label>
          </div>
          <div class="col-sm-7">
            <div class="input-group mb-2">
            <input id="telefon" type="text" class="form-control @error('telefon') is-invalid @enderror" value="{{Auth::user()->telefon}}" name="telefon" autocomplete="telefon" autofocus>
            @error('telefon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <label for="avatar" class="edit-label" id="form-label">Imagine: </label>
          </div>
          <div class="col-sm-7">
            <div class="form-group">
              <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
              @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1">
            <label for="descriere" class="edit-label" id="form-label">Descriere: </label>
          </div>
          <div class="col-sm-5">
            <div class="input-group">
              <textarea id="descriere" class="form-control @error('descriere') is-invalid @enderror" value="{{Auth::user()->descriere}}" style="width: 250px; height: 100px;" name="descriere">{{Auth::user()->descriere}}</textarea>
              @error('adresa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
            </div>
          </div>
        </div>
        <br>
        <div class="row">
    <div class="col text-center">
      <div align="center">
        <button type="submit" class="btn" id="btn-descriere">Salveaza profil</button>
      </div>
    </div>
        <a href="#stergeModal" class="btn btn-danger" data-toggle="modal">Sterge contul</a>
  </div>
    </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="stergeModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
      <div class="modal-content">
          <div class="modal-header flex-column">
              <div class="icon-box">
                  <i class="material-icons">&#xE5CD;</i>
              </div>
              <h4 class="modal-title w-100">Doriti sa stergeti contul</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
              <p>Contul va fi sters definitiv</p>
          </div>
          <div class="modal-footer justify-content-center">
              <div align="center">
                <button type="button" class="btn" data-dismiss="modal">Renunta</button>
              </div>
              <form method="POST" action="{{ route('producator.stergere') }}">
                  @csrf
                  <button type="submit" class="btn btn-danger">Sterge</button>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
@section('scripts')
    <script>
      $('#judete').change(function(){
          let countyId = $(this).val();
          $.ajax({
              url: 'setari/afiseazaLocalitati/' + countyId,
              type: 'GET',
              success: function(response) {
                  $('#localitati').empty();
                  $.each(response, function(key, value) {
                      $('#localitati').append('<option value="' + key + '">' + value + '</option>');
                  });
              }
          });
      });
    </script>
@endsection
