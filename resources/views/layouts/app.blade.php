@include('layouts.style')
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>IubesteDobrogea</title>

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito" >
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Cookie' >
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        </head>
        <body>
            <div id="app">
                @include('layouts.header')
                <br>
                <main class="py-4">
                    @yield('content')
                </main>
                @include('layouts.footer')
            </div>
            <script>
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })

                $(function() {
                    // Multiple images preview
                    let multiImgPreview = function(input, imgPreviewPlaceholder) {

                        if (input.files) {
                            let filesAmount = input.files.length;

                            for (let i = 0; i < filesAmount; i++) {
                                let reader = new FileReader();

                                reader.onload = function(event) {
                                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                                }

                                reader.readAsDataURL(input.files[i]);
                            }
                        }

                    };

                    $('#imagini').on('change', function() {
                        multiImgPreview(this, 'div.imgPreview');
                    });
                });
                $(".navbar li a").click(function(e)
                {
                    e.preventDefault();
                    let href = $(this).attr("href");
                    $('.content').load(href);
                });
                $(document).ready(function(){
                    $('[data-toggle="popover"]').popover();
                });
            </script>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            @yield('scripts')
        </body>
    </html>
