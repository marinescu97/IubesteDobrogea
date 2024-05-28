@php use App\Models\Produs; @endphp
@extends('layouts.app')
@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div id="card-titlu">Informatii produs</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                @php
                                    /** @var Produs $produs */
                                    $img=explode('|', $produs->imagini);
                                @endphp
                                @foreach ($img as $key => $value)
                                    <div class="prodSlides">
                                        <img src="/storage/produse/{{$value}}" style="width:363px;height:300px;"
                                             alt="Imagine produs">
                                    </div>
                                @endforeach
                                <a class="previous" onclick="plusSlides(-1)">❮</a>
                                <a class="nextt" onclick="plusSlides(1)">❯</a>

                                <div class="indicators">
                                    @foreach ($img as $key => $value)
                                        <div class="indicator">
                                            <img class="demo cursor" src="/storage/produse/{{$value}}"
                                                 style="width:70px;height:70px;" onclick="currentSlide({{$key+1}})"
                                                 alt="{{$value}}" id="imag">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2 style="text-indent: 30px;">{{$produs->denumire}}</h2>
                                <blockquote>
                                    <cite><i style="font-size:20px; color:#aa9ba4;"
                                             class="fa">&#xf041;</i>{{$producator->adresa. ', ' .$localitate->nume. ', ' .$judet->nume}}
                                    </cite>
                                </blockquote>
                                <a href="#producator-{{$producator->id}}" data-toggle="modal">Vezi producator</a>
                                <br><br>
                                <h3 style="text-align:left; text-indent: 30px;">Descriere</h3>
                                <h5 style="text-indent: 30px;">{!! nl2br(e($produs->descriere))!!}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="producator-{{$producator->id}}" tabindex="-1" role="dialog"
             aria-labelledby="{{$producator->id}}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h6 class="modal-title" id="titlu-modal">Informatii producator</h6>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="/storage/profil/{{$producator->avatar}}" id="avatar" alt="Avatar">
                                </div>
                                <div class="col-md-6" id="detalii-modal">
                                    <h2>{{$producator->nume}} {{$producator->prenume}}</h2>
                                    <blockquote>
                                        <cite>{{$producator->adresa . ', ' . $localitate->nume . ', ' . $judet->nume}}
                                            <i style="font-size:20px; color:#aa9ba4;" class="fa">&#xf041;</i></cite>
                                    </blockquote>
                                    @php
                                        $numeintreg = $producator->nume . " " . $producator->prenume;
                                        $n = explode(" ",$numeintreg);
                                        $numenou = implode("-",$n);
                                    @endphp
                                    <a href="{{route('produse-producator', [$producator->id,$numenou])}}"
                                       style="font-size: 15px;">Vizualizeaza produse</a>
                                    <h4>Contact:</h4>
                                    <h5><i style="font-size:20px; color:#aa9ba4"
                                           class="fa">&#xf0e0;</i> {{$producator->email}}</h5>
                                    <h5><i style="font-size:23px; color:#aa9ba4"
                                           class="fa">&#xf095;</i> {{$producator->telefon}}</h5>
                                    @if ($producator->descriere != null)
                                        <button class="btn" href="#" data-toggle="popover" data-placement="right"
                                                data-content="{{$producator->descriere}}" animation="true"
                                                id="btn-descriere">Vezi descriere
                                        </button>
                                    @else
                                        <button class="btn" href="#" data-toggle="popover" data-placement="right"
                                                data-content="Nu exista o descriere" animation="true"
                                                id="btn-descriere">Vezi descriere
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
        @endsection
        @section('scripts')
            <script>
                let slideIndex = 1;
                let timer = null;
                showSlides(slideIndex);

                function plusSlides(n) {
                    clearTimeout(timer);
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    clearTimeout(timer);
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("prodSlides");
                    let dots = document.getElementsByClassName("demo");
                    if (n === undefined) {
                        n = ++slideIndex
                    }
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    timer = setTimeout(showSlides, 5000);
                }
            </script>
@endsection
