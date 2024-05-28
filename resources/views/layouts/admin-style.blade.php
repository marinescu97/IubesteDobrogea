<style>
    * {
        box-sizing: border-box;
    }

    body{
        background:#f9f9f9;
    }

    #wrapper{
        padding:90px 15px;
    }

    .navbar{
        background-color: black;
    }

    .navbar-expand-lg .navbar-nav.side-nav{
        flex-direction: column;
    }

    .header-top{
        box-shadow: 0 3px 5px rgba(0,0,0,.1);
    }

    @media(min-width:992px) {
        #wrapper{
            margin-left: 200px;padding: 90px 15px 15px;
        }

        .navbar-nav.side-nav{
            background: black;
            box-shadow: 2px 1px 2px rgba(0,0,0,.1);
            position:fixed;
            top:91px;
            flex-direction: column!important;
            left:0;
            width:200px;
            overflow-y:auto;
            bottom:0;
            overflow-x:hidden;
            padding-bottom:40px;
        }
    }

    .card-counter{
        box-shadow: 2px 2px 10px #DADADA;
        margin: 5px;
        padding: 20px 10px;
        background-color: #fff;
        height: 100px;
        border-radius: 5px;
        transition: .3s linear all;
    }

    .card-counter:hover{
        box-shadow: 4px 4px 20px #DADADA;
        transition: .3s linear all;
     }

    .card-counter.primary{
        background-color: #007bff;
        color: #FFF;
    }

    .card-counter.danger{
        background-color: #ef5350;
        color: #FFF;
    }

    .card-counter.success{
        background-color: #66bb6a;
        color: #FFF;
    }

    .card-counter.info{
        background-color: #26c6da;
        color: #FFF;
    }

    .card-counter i{
        font-size: 5em;
        opacity: 0.2;
    }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }

  #utilizatoriChart{
    width: 600px;
    height:500px;
  }

  #produseChart{
    width: 600px;
    height:500px;
    float: left;
  }

  #buton{
    color: white;
    background-color: #744d4f;
  }

  #buton1{
    color: white;
    background-color: black;
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

    #avatar{
        width: 320px;
        height: 250px;
        float:left;
        margin-right: 25px;
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

    #titlu-modal{
        color: #744d4f;
        text-align: center;
        text-decoration: none;
        font-family: 'Cookie', sans-serif;
        font-size: 40px;
    }

    #link{
        font-size: 30px;
        font-family: 'Cookie', sans-serif;
    }

    table{
        width: 97% !important;
    }

    #produseTable th{
        width: 100px;
    }

    #titlu{
        color: #744d4f;
        text-align: center;
        text-decoration: none;
        font-family: 'Cookie', sans-serif;
        font-size: 50px;
    }

    #mesaj-scurt{
      text-overflow: ellipsis;
      overflow: hidden;
      width: 25px;
      height: 1.3em;
      display: inline-block;
      white-space: nowrap;
      font-size: 20px;
      text-indent: 30px;
    }

    #nume-mesaj{
        font-size: 25px;
        text-indent: 30px;
    }


    #evenimenteTable {
        width: 100% !important;
        table-layout: fixed;
    }
</style>
