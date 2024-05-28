@php use Carbon\Carbon; @endphp
<div class="modal-body">
    <div align="center">
        <img src="/storage/evenimente/{{$detaliu->imagine}}" alt=""
             style="display:block; width: 70%; height:300px;">
        <div style="padding-top: 5px;">
            <p><i style="font-size:20px;"
                  class="fa">&#xf133;</i> {{date('d.m.Y', strtotime($eveniment->data))}} <i
                    style="font-size:20px; margin-left:60px;"
                    class="fa">&#xf017;</i> {{Carbon::createFromFormat('H:i:s',$eveniment->ora)->format('h:i')}}
            </p>
            <h4 style="text-align: center;">{{$eveniment->titlu}}</h4>
            <p id="card-title">{{$localitate->nume}}, {{$judet->nume}}</p></div>
    </div>
    <hr style="border: 1px solid grey;width:90%;">
    <p id="detalii-eveniment" style="text-indent: 50px;">{{$detaliu->descriere}}</p>
    @foreach ($detalii as $detaliu)
        <div align="center">
            <img src="/storage/evenimente/{{$detaliu->imagine}}" alt=""
                 style="display:block; width: 70%; height:300px;">
        </div>
        <br>
        <p id="detalii-eveniment" style="text-indent: 50px;">{{$detaliu->descriere}}</p>
    @endforeach
    <div>
    </div>
</div>