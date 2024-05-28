<div style="padding-top:100px;">
    <h3>Adauga un comentariu</h3>
<form action="{{ route('producator.adaugareanunt')}}" method="POST" enctype="multipart/form-data">
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
            <label for="anunt" class="col-md-3 col-form-label text-md-right" id="form-label">Comentariu/Anunt:</label>
            <div class="col-md-8">
                <textarea id="anunt" class="form-control" name="anunt" value="{{ old('anunt') }}" autocomplete="anunt" rows="3"></textarea>
            <input type="hidden" name="eveniment" id="eveniment" value="{{$eveniment->id}}">
            </div>
        </div>
        <div class="user-image mb-3 text-center">
            <div class="imgPreview"> </div>
        </div>
        <div class="form-group row">
            <label for="imagini" class="col-md-3 col-form-label text-md-right" id="form-label">{{ __('Imagini:') }}</label>
            <div class="col-md-8">
                <input type="file" name="imagini[]" class="form-control" id="imagini" value="{{ old('imagini') }}" multiple/>
            </div>
        </div>
        <div align="center">
            <button type="submit" class="btn" id="btn-descriere">Adauga</button>
        </div>
    </form>
</div>
