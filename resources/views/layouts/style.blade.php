<style>
    * {box-sizing:border-box}

    html, body{
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        padding-top: 27px;
    }

    #footer {
        position: fixed;
        z-index: 1;
        bottom: 0;
        width: 100%;
        background-color: black;
        color:white;
    }

    body {
      background-image: url("{{ asset('img/bg.jpg') }}");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: top;
    }

    .card{
        background-color: #f5eff0 !important;
    }

    #auth-link{
        color: white;
        text-decoration: none;
        font-size: 25px;
        padding:0 30px;
    }

    #auth-icon{
        width: 30px;
        height: 30px;
    }

    #form-label{
        color: #000;
        font-size: 17px;
    }

    #nav-link{
        color: white;
        font-size: 25px;
        font-family: 'Cookie', sans-serif;
    }

    #meniu{
        max-height: 170px;
        overflow: auto;
    }

    #produsicon{
        width: 30px;
        height: 30px;
    }

    .img-text {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background-color: transparent;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
        font-size: 20px;
        font-family: "Comic Sans MS", cursive, sans-serif;
    }

    #card-titlu{
        color: #744d4f;
        text-align: center;
        text-decoration: none;
        font-family: 'Cookie', sans-serif;
        font-size: 50px;
        margin-top:-20px;
        margin-bottom: -20px;
    }

    #titlu{
        color: #744d4f;
        text-align: center;
        text-decoration: none;
        font-family: 'Cookie', sans-serif;
        font-size: 50px;
    }

    #subtitlu{
        text-align: center;
        font-size: 18px;
    }

    #continut{
        text-indent: 30px;
        font-size: 17px;
        margin: 3%;
    }

    #modal-text{
        color: #000;
        font-size: 15px;
    }

    #avatar{
        width: 320px;
        height: 250px;
        float:left;
        margin-right: 25px;
    }

    #detalii{
        border-left:3px solid #ded4da;
    }

    #detalii-modal{
        margin-left: 20px;
        border-left:3px solid #ded4da;
    }

    .modal-confirm {
        color: #636363;
        width: 400px;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }

    .modal-confirm .modal-body {
        color: #999;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }

    .modal-confirm .modal-footer a {
        color: #999;
    }

    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }

    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }

    .modal-confirm .btn, .modal-confirm .btn:active {
        color: #fff;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
    }

    .modal-confirm .btn-secondary {
        background: #c1c1c1;
    }

    .modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
        background: #a8a8a8;
    }

    .modal-confirm .btn-danger {
        background: #f15e5e;
    }

    .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }

    #bsubmit{
        font-size: 17px;
        background-color: #8f6365;
    }

    #bsubmit:hover{
        background-color: #744d4f;
        color: black;
    }

    .imgPreview img {
                padding: 8px;
                width: 100px;
                height: 100px;
            }

    #titlu-modal{
        color: #744d4f;
        text-align: center;
        text-decoration: none;
        font-family: 'Cookie', sans-serif;
        font-size: 40px;
    }

    #card{
        text-align: center;
        font-family: arial, sans-serif;
    }

    #card:hover{
        box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.2);
    }

    #img-producator{
        width: 250px;
            height: 200px;
            margin-top: -50px;
            box-shadow: 0 0 23px 3px rgba(0,0,0,0.54);
            border-radius: 7%;
    }

    #buton{
            border-radius: 12px;
            border-color: #744d4f;
            color: black;
        }

    #buton:hover{
            background-color: #744d4f;
            color: white;
            border-radius: 12px;
        }

        .pagination > li > a,
    .pagination > li > span {
        color: black !important;
    }

    .pagination > .active > a,
    .pagination > .active > span,
    .pagination > .active > a:hover,
    .pagination > .active > span:hover,
    .pagination > .active > a:focus,
    .pagination > .active > span:focus {
        background-color: #744d4f !important;
        color: white !important;
        border-color: #744d4f !important;
    }

    #imag {
      vertical-align: middle;
    }

    .prodSlides {
      display: none;
      height: 300px;
    }

    .anuntSlides {
      display: none;
      height: 300px;
    }

    .cursor {
      cursor: pointer;
    }

    /* Next & previous buttons */
    .previous,
    .nextt {
      cursor: pointer;
      position: absolute;
      top: 40%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .nextt {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .previous:hover,
    .nextt:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .anuntprevious, .anuntnextt {
      cursor: pointer;
      position: absolute;
      top: 40%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }

    .anuntnextt {
      right: 16px;
      border-radius: 3px 0 0 3px;
    }

    .anuntprevious:hover,
    .anuntnextt:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .indicators {
      overflow-x: scroll;
        width: 100%;
        white-space: nowrap;
    }

    .indicator {
      display: inline-block;
         width: 70px;
         height: 70px;

    }

    .demo {
      opacity: 0.6;
    }

    .active,
    .demo:hover {
      opacity: 1;
    }

    .single {
        padding: 15px 10px;
        margin-top: 20px;
        background: #fcfcfc;
        border: 4px solid #744d4f;
        border-radius: 10px;
    }

    .single h3.side-title {
        margin: 0 0 10px;
        padding: 0;
        font-size: 20px;
        color: #333;
    }

    .single h3.side-title:after {
        content: '';
        width: 100%;
        height: 1px;
        background: #744d4f;
        display: block;
        margin-top: 6px;
    }

    .single ul {
        margin-bottom: 0;
    }

    .single li a {
        color: #666;
        font-size: 17px;
        border-bottom: 1px solid #f0f0f0;
        line-height: 40px;
        display: block;
        text-decoration: none;
    }

    .single li a:hover {
        color: #744d4f;
    }

    .single li:last-child a {
        border-bottom: 0;
    }

    .img-hover-zoom {
      height: 300px;
      overflow: hidden;
    }

    .img-hover-zoom img {
      transition: transform .5s ease;
    }

    .img-hover-zoom:hover img {
      transform: scale(1.1);
    }

    #auth-item{
        font-size: 25px;
        font-family: 'Cookie', sans-serif;
        text-decoration: none;
    }

    #auth-item:hover{
        background-color: #744d4f;
    }

    #btn-descriere{
        font-size: 15px;
        background-color: #744d4f;
        color: white;
    }

    #authbtn{
        background-color: #8f6062;
        float:right;
        font-size:15px;
        color:white;
    }

    #detalii-eveniment{
        text-indent: 50px;
        font-size:15px;
    }
</style>
