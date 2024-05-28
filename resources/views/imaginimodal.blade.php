@include('layouts.imgModal-style')
<div class="modal fade imagModal" id="imagini-{{$anunt->id}}" tabindex="-1" role="dialog" aria-labelledby="imagini-{{$anunt->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h5 class="modal-title" id="titlu-modal">Imagini</h5>
        </div>
        <div class="modal-body">
            <div class="container">
                @foreach ($img as $key => $value)
                    <div class="anuntSlides">
                        <img src="/storage/imaginianunt/{{$value}}" style="width:100%; height: 400px;" alt="{{$value}}">
                    </div>
                @endforeach

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="row" style="margin: 100px 0 0 0;">
                    @foreach ($img as $key => $value)
                        <div class="column">
                            <img class="demo cursor" src="/storage/imaginianunt/{{$value}}" style="width: 100%; height: 70px;" onclick="currentSlide({{$key+1}})" alt="{{$value}}">
                        </div>
                    @endforeach
                </div>
                <script>
                    let slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        let i;
                        let slides = document.getElementsByClassName("anuntSlides");
                        let dots = document.getElementsByClassName("demo");
                        let captionText = document.getElementById("caption");
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
                        captionText.innerHTML = dots[slideIndex-1].alt;
                    }
                </script>
      </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary closeBtn" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>
</div>
