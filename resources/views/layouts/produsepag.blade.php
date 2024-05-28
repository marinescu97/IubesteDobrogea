<div class="row" id="produseTable">
    <div class="col-md-3" style="height: 100%;">
        <div class="single category">
          <h3 class="side-title" style="font-family: 'Cookie',sans-serif; font-size:35px;">Categorie</h3>
          <ul class="list-unstyled">
            @foreach ($categorie as $cat)
            @php
                $cnume = explode(" ",$cat->nume);
                $cn =implode("-",$cnume);
            @endphp
          <li><a href="{{route('produse-categorie', [$cat->id,$cn])}}" title="">{{$cat->nume}}</a></li>
            @endforeach
          </ul>
         </div>
    </div>
    <div class="col">
        <div class="row">
            @foreach ($produs as $produse)
            @php $img=explode('|', $produse->imagini); @endphp
        <div class="col-md-3 prodCard" style="padding-top: 40px; margin-bottom: 50px;">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    @if (Auth::check() && $produse->producator == Auth::user()->id)
                <a href="#stergeProdus-{{$produse->id}}" data-toggle="modal"><span class="close" style="margin-top: -20px;margin-right:-15px">x</span></a>
                    @endif
                    <div>
                        <img src="/storage/produse/{{$img[0]}}" alt="{{$produse->denumire}}" style="width: 180px;height: 150px;margin:0;">
                      </div>
                      <div style="padding-top: 25px;" align="center">
                      <h5><b>{{$produse->denumire}}</b></h5>
                      <p></p>
                      <a href="{{route('produs', [$produse->id,$produse->denumire])}}"><button class="btn" id="btn-descriere">Vizualizeaza</button></a>
                      </div>
                </div>
            </div>
        </div>
    @endforeach
        </div>
    </div>
</div>

@foreach ($produs as $produse)
    <div id="stergeProdus-{{$produse->id}}" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title w-100">Doriti sa stergeti produsul?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Acesta va fi sters definitiv</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Renunta</button>
                    <form method="POST" action="{{ route('producator.stergereprodus',[$produse->id])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger" style="margin-top: 13px;">Sterge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="row justify-content-center">
    {{$produs->links()}}
</div>
