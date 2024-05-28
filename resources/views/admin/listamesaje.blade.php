@extends('admin.principala')
@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div id="titlu">Mesaje</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session()->has('success'))
                    <div class="alert alert-dark">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 30px;">
            <div class="col-md-10">
                <ul class="list-group" style="border-color: #744d4f;border-style:groove;">
                    @foreach ($mesaje as $mesaj)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-8" id="nume-mesaj">
                                {{$mesaj->nume. ' ' .$mesaj->prenume}}
                            </div>
                            <div class="col-md-3 offset-md-1">
                            <p style="color: grey;">{{$mesaj->created_at}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8" id="mesaj-scurt">
                                {{$mesaj->mesaj}}
                            </div>
                            <div class="col-md-3 offset-md-1">
                                <button class="btn" id="btn-descriere" href="#mesaj-{{$mesaj->id}}" data-toggle="modal">Vezi mesaj</button>
                                <button class="btn btn-dark" href="#sterge-{{$mesaj->id}}" data-toggle="modal">Sterge</button>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @foreach ($mesaje as $mesaj)
    <div id="mesaj-{{$mesaj->id}}" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="modal-title" id="titlu-modal">Mesaj </div>
                </div>
                <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><i style="font-size:20px;color:grey;" class="fa fa-user-o"></i>{{' ' .$mesaj->nume. ' ' .$mesaj->prenume}}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5><i style="font-size:20px;color:grey;" class="fa">&#xf003;</i>{{' ' .$mesaj->email}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <h5>Mesaj:</h5>
                    <p style="word-wrap: break-word;text-indent:40px;">{{$mesaj->mesaj}}</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Inchide</button>
                </div>
            </div>
        </div>
    </div>

    <div id="sterge-{{$mesaj->id}}" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                <h4 class="modal-title w-100">Doriti sa stergeti mesajul?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Acesta va fi sters definitiv</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Renunta</button>
                    <form method="POST" action="{{ route('admin.stergeremesaj',[$mesaj->id])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Sterge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
