@if (!Request::ajax())
    @extends('layouts.app')
    @include('layouts.slideshow-style')
    @section('content')
        <div class="slideshow-container" id="slideshow">

            <div class="mySlides fade">
                <img src="{{ asset('img/acasa/piata.jpg') }}" id="img-slide" alt="Piata">
            </div>

            <div class="mySlides fade">
                <img src="{{ asset('img/acasa/producator.jpg') }}" id="img-slide" alt="Producator">
            </div>

            <div class="mySlides fade">
                <img src="{{ asset('img/acasa/produse.jpg') }}" id="img-slide" alt="Produse">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <br>

        <div class="container" style="margin-bottom: 20px;">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card shadow-lg rounded">
                        <h2 id="titlu">Introducere</h2>
                        <h6 id="subtitlu"><b>Bine ati venit pe platforma "Iubeste Dobrogea"!</b></h6>
                        <p id="continut">Aceasta platforma a fost creata pentru a promova producatorii locali din Dobrogea, dar si pentru a ajuta oamenii din mediul urban sa-si procure diferite produse din gospodaria Romaneasca.</p>
                        <p id="continut">Aici puteti vizualiza produsele dorite, puteti lua legatura cu producatorii locali, accesand datele acestora, si, de asemenea, puteti fi la curent cu evenimentele ce vor avea loc in scopul procurarii de bunuri.</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-between">
                <div class="col-5">
                    <div class="card shadow-lg rounded">
                        <h2 id="titlu">Pentru vizitatori</h2>
                        <p id="continut">Daca sunteti in cautare de <a href="{{route('produse')}}">produse</a> naturale, dar si de anumite produse traditionale romanesti, puteti vizualiza produsele cautate, dar si <a href="{{route('producatori')}}">producatorii</a> lor pentru a lua legatura cu acestia, in scopul achizitionarii produselor dorite. De asemenea puteti fi la curent cu <a href="{{route('listaevenimente')}}">evenimentele</a> ce vor avea loc in toata regiunea, in scopul schimburilor de produse.</p>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card shadow-lg rounded">
                        <h2 id="titlu">Pentru producatori</h2>
                        <p id="continut">Daca sunteti producator local, va puteti face <a href="{{route('register')}}">cont</a>, iar astfel, veti putea adauga produsele dorite si, de asemenea, veti putea posta evenimente ce vor avea loc in zona in care locuiti.</p>
                    </div>
                </div>
            </div>


        </div>
    @endsection
    @section('scripts')
        <script type="text/javascript">

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
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n===undefined){n = ++slideIndex}
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                timer = setTimeout(showSlides, 3000);
            }
        </script>
    @endsection
@endif
