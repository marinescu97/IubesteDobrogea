@extends('layouts.app')
@section('content')
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <img src="{{ asset('img/produselogo.png') }}" alt="Producatori" style="padding-left: 50px;">
        </div>
      </div>
        <div class="row justify-content-end align-items-end">
            <div class="col-md-4">
                <div class="input-group lg-form form-lg form-2 pl-0">
                    <input class="form-control" id="produseInput" type="text" placeholder="Cauta produse" aria-label="Search">
                    <div class="input-group-append">
                      <span class="input-group-text" style="background-color: #744d4f;;"><i style="font-size:24px; color:white;" class="fa">&#xf002;</i></span>
                    </div>
                  </div>
            </div>
        </div>
        <div id="table_data">
          @include('layouts.produsepag')
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $("#produseInput").on("input", function() {
                let query = $(this).val();
                $.ajax({
                    url: "/produse/search",
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
                    url:"/produse/fetch_data?page="+page,
                    success:function(data)
                    {
                        $('#table_data').html(data);
                    }
                });
            }

        });
    </script>
@endsection
