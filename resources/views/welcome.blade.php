<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Playlistation</title>
</head>
<body>
    <div id="page-preloader" class="preloader">
        <div class="loader">
            <img src="{{ asset('images/logo.jpg') }}">
        </div>
    </div>
    <section class="navigation">
        <div class="left-side">
            <a href="{{ route('artists') }}">CHOOSE ARTIST</a>
        </div>
        <div class="copy copy_left">
            <span class="copy_a">CHOOSE ARTIST</span>
        </div>
        <div class="main-line">
            <hr>
        </div>
        <div class="right-side">
            <a href="{{route('products')}}">SEE ALL</a>
        </div>
        <div class="copy copy_right">
          <span class="copy_a">SEE ALL</span>
        </div>
        <div class="main-text">Dude this is not for sale</div>
        <div class="main-text-1">Just for a good pic</div>
    </section>
    <script src="{{ asset('js/preloader.js') }}"></script>
</body>
</html>