@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-end align-items-end">
        <div class="col-md-4">
            <img src="{{ asset('img/producatorilogo.png') }}" alt="Producatori" style="padding-left: 50px;">
        </div>
        <div class="col-md-4">
            <div class="input-group lg-form form-lg form-2 pl-0">
                <input class="form-control" id="producatoriInput" type="text" placeholder="Cauta un producator" aria-label="Cauta un producator">
                <div class="input-group-append">
                  <span class="input-group-text" style="background-color: #744d4f;;"><i style="font-size:24px; color:white;" class="fa">&#xf002;</i></span>
                </div>
              </div>
        </div>
    </div>
    <br><br>
    <div id="table_data">
        @include('layouts.producatorpag')
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $("#producatoriInput").on("input", function() {
            let query = $(this).val();
            $.ajax({
                url: "/producatori/search",
                data: {
                    query: query
                },
                success: function(data) {
                    $("#table_data").html(data);
                }
            });
        });
    });

    $(document).ready(function(){

        $(document).on('click', '.pagination a', function(event){
         event.preventDefault();
         let page = $(this).attr('href').split('page=')[1];
         fetch_data(page);
        });

        function fetch_data(page)
        {
         $.ajax({
          url:"/producatori/fetch_data?page="+page,
          success:function(data)
          {
           $('#table_data').html(data);
          }
         });
        }

       });
    </script>
@endsection
