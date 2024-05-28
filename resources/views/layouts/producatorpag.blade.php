<div class="row" id="producatoriTable">
    @foreach ($utilizator as $utilizatori)
            <div class="col-md-3" style="padding-top: 40px; margin-bottom: 50px;">
              <div class="card shadow rounded open-utilizator" id="card">
                  <div class="card-body">
                      <div align="center">
                        <img src="/storage/profil/{{$utilizatori->avatar}}" alt="{{$utilizatori->nume}}" id="img-producator">
                      </div>
                      <div style="padding-top: 25px;">
                        <h5><b>{{$utilizatori->nume}} {{$utilizatori->prenume}}</b></h5>
                      </div>
                      <div>
                        <p id="card-title">{{$utilizatori->localitate}}, {{$utilizatori->judet}}</p>
                      </div>
                      <div align="center" style="padding-top: 20px;">
                        <button class="btn" id="buton" href="#utilizator-{{$utilizatori->id}}" data-toggle="modal">Vizualizeaza Profil</button>
                    </div>
                  </div>
              </div>
        </div>
        @endforeach
</div>
<div class="row justify-content-center">
    {{$utilizator->links()}}
</div>
@foreach ($utilizator as $utilizatori)
        <div class="modal fade" id="utilizator-{{$utilizatori->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$utilizatori->id}}" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <h6 class="modal-title" id="titlu-modal">Informatii producator</h6>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="/storage/profil/{{$utilizatori->avatar}}" id="avatar" alt="Avatar">
                                    </div>
                                    <div class="col-md-6" id="detalii-modal">
                                    <h2>{{$utilizatori->nume}} {{$utilizatori->prenume}}</h2>
                                    <blockquote>
                                        <cite>{{$utilizatori->adresa . ', ' . $utilizatori->localitate . ', ' . $utilizatori->judet}} <i style="font-size:20px; color:#aa9ba4;" class="fa">&#xf041;</i></cite>
                                    </blockquote>
                                    @php
                                        $numeintreg = $utilizatori->nume . " " . $utilizatori->prenume;
                                        $n = explode(" ",$numeintreg);
                                        $numenou = implode("-",$n);
                                    @endphp
                                    <a href="{{route('produse-producator', [$utilizatori->id,$numenou])}}" style="font-size: 15px;">Vizualizeaza produse</a>
                                    <h4>Contact:</h4>
                                    <h5><i style="font-size:20px; color:#aa9ba4" class="fa">&#xf0e0;</i> {{$utilizatori->email}}</h5>
                                     <h5><i style="font-size:23px; color:#aa9ba4" class="fa">&#xf095;</i> {{$utilizatori->telefon}}</h5>
                                     @if ($utilizatori->descriere !== null)
                                        <button type="button" class="btn" data-toggle="tooltip" data-placement="right" title="{{ $utilizatori->descriere }}" id="btn-descriere">
                                            Vezi descriere
                                        </button>
                                     @else
                                        <button type="button" class="btn" data-toggle="tooltip" data-placement="right" title="Nu exista descriere" id="btn-descriere">
                                            Vezi descriere
                                        </button>
                                     @endif
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
    @endforeach

