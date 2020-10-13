<!-- Stored in resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('Topcollect Application')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Styles -->
        
        <style>
            html, body {

                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .header{
                min-height: 75px;
                color:white;
                font-weight: bold;
            }
            .navbar{
                color: white;
                font-weight: bold;
            }
            .nav-link{
                color: white;  
                -moz-text-
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 18px;
            }

            .links{
                height: 30px;
                top: 20px;
                margin: 20PX;
            }

            .links > a {
               color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            h3{
               color:black ;
            }
        </style>
    </head>
    <body>
        @section('sidebar')
        <div class="content">

          <div class="header bg-primary  ">
            <div>@php
                // setlocale(LC_TIME, 'fr_FR.UTF8');
                // setlocale(LC_TIME, 'fr_FR');
                // setlocale(LC_TIME, 'fr');
                setlocale(LC_TIME, 'fra_fra');
                
                echo strftime('%A %d %B %Y'); // jeudi 11 octobre 2012, 16:03
                echo '<br>';
                echo strftime('%H:%M');
                @endphp
            </div>
        </div>      
          
                        
            
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">GBS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url ('principal') }}">Tableau de bord <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url ('creation') }}">Enregistrements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url ('paiement') }}">Paiement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url ('liste_contribuable') }}">Listes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url ('liste') }}">Recherche</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url ('creation_agent')}}">Ajouter un agent</a>
                <a class="dropdown-item" href="{{url ('creation_zone')}}">Ajouter une mairie</a>
                <a class="dropdown-item" href="#">Recette du jour</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Imprimer</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
        @show

        <div class="container">
            @yield('content')
            
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>