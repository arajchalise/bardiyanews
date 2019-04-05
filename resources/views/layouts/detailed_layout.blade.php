<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bardiya News</title>

        <link rel="icon" href="logo.png" type="image/gif">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="1">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="topheader">
                <a class="navbar-brand" href="#"><img src="{{ asset ('logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">गृहपृष्ठ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}#business_news">ब्यबसाय</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}#lifestyle_news">जीवनशैली</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}#entertainment_news">मनोरञ्जन </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}#sports_news">खेलकुद </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}#education_news">शिक्षा</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}#health_news">स्वास्थ्य</a>
                      </li>
                    </ul>
                </div>
            </nav>
            <div class="clearfix"></div>
            @yield('content')
            <div class="clearfix"></div>
            <footer>
              <h1>Bardiya News</h1>
              <hr />
              <div id="footer_wraper">
                <div id="footer_logo" class="col-lg-3 col-md-3">
                  <img src="{{ asset('logo_footer.png') }}">
                </div>
                <div id="company_address" class="col-lg-3 col-md-3">
                  <p>Bardiya News<br>Address<br>Phone<br>Email<br></p>
                </div>
                <div id="about_company" class="col-lg-6 col-md-6">
                  <h3>About Us</h3>
                  <p>A paragraph is a group of words put together to form a group that is usually longer than a sentence. Paragraphs are often made up of several sentences. ... This makes it easier to see when one paragraph ends and another begins. In most organized forms of writing, such as essays, paragraphs contain a topic sentence .<br>A paragraph is a group of words put together to form a group that is usually longer than a sentence. Paragraphs are often made up of several sentences. ... This makes it easier to see when one paragraph ends and another begins. In most organized forms of writing, such as essays, paragraphs contain a topic sentence .</p>
                </div>
              </div>
              <hr />
              <p style="text-align: center;">&copy; Bardiya News, 2019</p>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/stylechanger.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
