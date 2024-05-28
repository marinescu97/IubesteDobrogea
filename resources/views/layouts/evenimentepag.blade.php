@php use App\Models\DetaliiEveniment;use Carbon\Carbon; @endphp
<div class="row" id="evenimenteTable">
    @foreach ($eveniment as $evenimente)
        <div class="col-md-4" style="padding-top: 40px; margin-bottom: 50px;">
            <div class="card">
                <div class="card-img-top img-hover-zoom" style="width: 400px;height:200px;">
                    <img
                        src="storage/evenimente/{{DetaliiEveniment::where(['eveniment' => $evenimente->id])->first()->imagine}}"
                        alt="{{$evenimente->titlu}}" style="width: 100%;">
                </div>
                <div class="card-body">
                    <div align="center">
                        <p style="text-align: center;"><i style="font-size:20px;" class="fa">&#xf133;</i> {{date('d.m.Y', strtotime($evenimente->data))}}
                            <i style="font-size:20px; margin-left:20px;"
                               class="fa">&#xf017;</i> {{Carbon::createFromFormat('H:i:s',$evenimente->ora)->format('h:i')}}
                        </p>
                        <h5 class="card-title" style="text-align: center;"><b>{{$evenimente->titlu}}</b></h5>
                        <p id="card-title">{{$evenimente->localitate}}, {{$evenimente->judet}}</p>
                        @php
                            $titlunou = explode(" ",$evenimente->titlu);
                            $titlu=implode("-",$titlunou);
                        @endphp
                        <a href="{{route('eveniment', [$evenimente->id,$titlu])}}" style="padding-top: 15px;">
                            <button class="btn" id="btn-descriere">Detalii</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row justify-content-center">
    {{$eveniment->links()}}
</div>
