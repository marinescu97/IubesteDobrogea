@foreach ($anunturi as $anunt)
    <div class="row">
        <div class="col-md-1">
        <img src="/storage/profil/{{$anunt->avatar}}" alt="" style="width: 90px;height:90px;border-radius:50%;">
        </div>
        <div class="col-md-10" style="padding-left: 50px;">
        <div>
            <a href="#producator-{{$anunt->producator}}" data-toggle="modal" style="font-size: 20px;"><strong>{{$anunt->nume." ".$anunt->prenume}}</strong></a>
            @if ($anunt->imagini != null)
            @php $img=explode('|', $anunt->imagini); @endphp
            <a href="#imagini-{{$anunt->id}}" id="imaginiLink" data-toggle="modal" style="padding-left: 20px;">Vezi imagini</a>
            @include('imaginimodal')
            @endif
            @if (Auth::check() && (Auth::user()->admin == 1 || (Auth::user()->admin == 0 && $anunt->producator == Auth::user()->id)))
                <a href="#stergeAnunt-{{$anunt->id}}" data-toggle="modal"><span class="close">x</span></a>
            @endif
        </div>
        <p style="text-indent: 30px;font-size:17px;">{{$anunt->anunt}}</p>

        </div>
    </div>
@endforeach
@foreach ($anunturi as $anunt)
<div class="modal fade" id="producator-{{$anunt->producator}}" tabindex="-1" role="dialog" aria-labelledby="{{$anunt->producator}}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h6 class="modal-title" id="titlu-modal">Informatii producator</h6>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="/storage/profil/{{$anunt->avatar}}" id="avatar" alt="Avatar">
                        </div>
                        <div class="col-md-6" id="detalii-modal">
                        <h2>{{$anunt->nume}} {{$anunt->prenume}}</h2>
                        <blockquote>
                            <cite>{{$anunt->adresa . ', ' . $anunt->localitate . ', ' . $anunt->judet}} <i style="font-size:20px; color:#aa9ba4;" class="fa">&#xf041;</i></cite>
                        </blockquote>
                        @php
                            $numeintreg = $anunt->nume . " " . $anunt->prenume;
                            $n = explode(" ",$numeintreg);
                            $numenou = implode("-",$n);
                        @endphp
                        <a href="{{route('produse-producator', [$anunt->id,$numenou])}}" style="font-size: 15px;">Vizualizeaza produse</a>
                        <h4>Contact:</h4>
                        <h5><i style="font-size:20px; color:#aa9ba4" class="fa">&#xf0e0;</i> {{$anunt->email}}</h5>
                         <h5><i style="font-size:23px; color:#aa9ba4" class="fa">&#xf095;</i> {{$anunt->telefon}}</h5>
                         @if ($anunt->descriere != null)
                         <button class="btn" href="#" data-toggle="popover" data-placement="right" data-content="{{$anunt->descriere}}" animation="true" id="btn-descriere">Vezi descriere</button>
                         @else
                         <button class="btn" href="#" data-toggle="popover" data-placement="right" data-content="Nu exista o descriere" animation="true" id="btn-descriere">Vezi descriere</button>
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

@foreach ($anunturi as $anunt)
    <div id="stergeAnunt-{{$anunt->id}}" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title w-100">Doriti sa stergeti anuntul?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Acesta va fi sters definitiv</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Renunta</button>
                    <form method="POST" action="{{ route('stergereanunt',[$anunt->id])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger" style="margin-top: 13px;">Sterge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

