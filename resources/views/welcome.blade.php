<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body>
    <div class="flex-center position-ref">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a> @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a> @endauth
        </div>
        @endif
    </div>
    <div id="carouselExampleIndicators" class="carousel slide full-height" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="text">
                    <h3>Training personal</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut mi elit. Mauris tincidunt pellentesque massa pharetra sollicitudin. Donec tincidunt fermentum turpis sit amet dictum. Pellentesque consectetur, orci quis imperdiet hendrerit, lorem dui ultricies eros, semper facilisis libero urna in tellus.</p>
                </div>
                <img class="d-block" src="{{ url('/images/pexels-photo.jpg') }}" alt="First slide">

            </div>
            <div class="carousel-item">
                <div class="text">
                    <h3>Diete personalizate</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut mi elit. Mauris tincidunt pellentesque massa pharetra sollicitudin. Donec tincidunt fermentum turpis sit amet dictum. Pellentesque consectetur, orci quis imperdiet hendrerit, lorem dui ultricies eros, semper facilisis libero urna in tellus.</p>
                </div>
                <img class="d-block" src="{{ url('/images/pexels-photo-1223180.jpeg') }}" alt="Second slide">

            </div>
            <div class="carousel-item">
                <div class="text">
                    <h3>Suplimente</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut mi elit. Mauris tincidunt pellentesque massa pharetra sollicitudin. Donec tincidunt fermentum turpis sit amet dictum. Pellentesque consectetur, orci quis imperdiet hendrerit, lorem dui ultricies eros, semper facilisis libero urna in tellus.</p>
                </div>
                <img class="d-block" src="{{ url('/images/40a0d1b1-1a18-47f2-9b27-bed35237fe37_rw_1920.jpg') }}" alt="Third slide">

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>
