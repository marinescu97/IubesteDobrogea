@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow-lg rounded" style="margin-top: 20px;">
        <div class="card-header">
          <div class="card-title" id="card-titlu">Adauga un eveniment</div>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.adaugareeveniment')}}" method="POST" enctype="multipart/form-data">

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
              <label for="titlu" class="col-md-2 col-form-label text-md-right" id="form-label">Titlu:</label>
              <div class="col-md-10">
                  <input type="text" class="form-control" name="titlu" value="{{ old('titlu') }}" placeholder="Adauga un titlu" required autocomplete="titlu" autofocus>
              </div>
            </div>

            <div class="form-group row">
              <label for="Data" class="col-md-2 col-form-label text-md-right" id="form-label">Data</label>
              <div class="col-md-3">
                  <input class="form-control" type="date" id="today" name="data" required>
                </div>
              <label for="Ora" class="col-md-1 col-form-label text-md-right" id="form-label">Ora</label>
              <div class="col-md-3">
                  <input class="form-control" type="time" id="ora" name="ora" required>
                </div>
            </div>

            <div class="form-group row">
              <label for="judet" class="col-md-2 col-form-label text-md-right" id="form-label">Judet</label>
              <div class="col-md-2">
                  <select name="judet" id="judet" class="form-control" required>
                    <option value="">Judet</option>
                    @foreach ($judet as $jud)
                        <option value="{{$jud->id}}">{{$jud->nume}}</option>
                    @endforeach
                  </select>
                </div>
              <label for="localitate" class="col-md-2 col-form-label text-md-right" id="form-label">Localitate</label>
              <div class="col-md-3">
                <select name="localitate" id="localitate" class="form-control" required>
                  <option value="">Localitate</option>
                </select>
                </div>
            </div>

            <div id="dynamicInput">
              <div class="form-group row">
                  <label for="imagine" class="col-md-2 col-form-label text-md-right" id="form-label">Imagine</label>
                  <div class="col-md-7">
                      <input type="file"  name="imagine[]" class="form-control-file" id="imagine" required>
                  </div>
                  <div class="col-md-2">
                      <button type="button" name="add" id="add" class="btn" style="color: white; background-color: #744d4f">+</button>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="descriere" class="col-md-2 col-form-label text-md-right" id="form-label">Decriere</label>
                  <div class="col-md-7">
                      <textarea class="form-control" name="descriere[]" id="descriere" rows="3"></textarea>
                  </div>
              </div>
            </div>



            <div class="row justify-content-center">
              <button type="submit" class="btn" style="color: white; background-color: #744d4f;">Salvare</button>
            </div>

        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
document.querySelector("#today").valueAsDate = new Date();
$(document).ready(function(){
  let i = 0;
$("#add").click(function(){
    ++i;
    $("#dynamicInput").append('<div class="sterge"><div class="form-group row"><label for="imagine" class="col-md-2 col-form-label text-md-right" id="form-label">Imagine</label><div class="col-md-7"><input type="file"  name="imagine[]" class="form-control-file" id="imagine" required></div><div class="col-md-2"><button type="button" class="btn btn-dark remove-tr">-</button></div></div><div class="form-group row"><label for="descriere" class="col-md-2 col-form-label text-md-right" id="form-label">Decriere</label><div class="col-md-7"><textarea class="form-control" name="descriere[]" id="exampleFormControlTextarea1" rows="3"></textarea></div></div></div>');
});
$(document).on('click', '.remove-tr', function(){
     $(this).parents('.sterge').remove();
});
});

$('#judet').change(function(){
    let judetId = $(this).val();
    $.ajax({
        url: 'adauga-un-eveniment/afiseazaLocalitati/' + judetId,
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
