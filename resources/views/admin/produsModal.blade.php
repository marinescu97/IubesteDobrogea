<div class="modal-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <img src="/storage/produse/{{$imagine}}" style="width:300px;height:300px;"
                     alt="Imagine produs">
            </div>
            <div class="col-md-7">
                <h2 style="text-indent: 30px;">{{$produs->denumire}}</h2>
                <p style="font-size:20px; text-indent: 30px;">Producator: {{$producator->nume. ' ' .$producator->prenume}}</p>
                <blockquote>
                    <cite><i style="font-size:20px; color:#aa9ba4; text-indent: 30px;"
                             class="fa">&#xf041;</i>{{$producator->adresa. ', ' .$localitate->nume. ', ' .$judet->nume}}
                    </cite>
                </blockquote>
                <br><br>
                <h3 style="text-align:left; text-indent: 30px;">Descriere</h3>
                <h5 style="text-indent: 30px;">{!! nl2br(e($produs->descriere))!!}</h5>
            </div>
        </div>
    </div>
</div>
