<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <title>
        Linked Open Data Unicentro
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Unicentro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li> 
            <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li>  
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                    Qual é o seu destino?
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('pontosSantaCruz')}}">Unicentro Santa Cruz/ Campo Real</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('pontosCedeteg')}}">CEDETEG</a>
                </div>
            </li>
            <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li> 
            <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="{{route('manualQueryView')}}" style="color: white">Consultar manualmente</a>
            </li>
            <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li> 
            <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                    Arquivos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('BaixarController@baixar')}}">Baixar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('DadosController@getDado')}}">Dataset</a>
                </div>
            </li> 
            <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li> 
            <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li>  
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                    Me localizar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('MapaController@getMapa')}}">Terminal da Fonte</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('MapaCampoRealController@getCampoReal')}}">Campo Real</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('MapaSantaCruzController@getSantaCruz')}}">Unicentro Santa Cruz</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('MapaCedetegController@getCedeteg')}}">Unicentro Cedeteg</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('MapaArmazemSPController@getArmazemsp')}}">Armazém São Paulo</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('MapaOuroBrancoController@getOuroBranco')}}">Condomínio Ouro Branco</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('MapaHiperSupermercadoController@getHiperSupermercado')}}">Hiper Supermercado</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('MapaSescController@getSesc')}}">SESC</a>
                </div>
            </li> 
            <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li> 
            <li>
                <a class="nav-link" href="" style="color: white;"> </a>
            </li>  
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                    FeedBack
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('ContatoController@contato')}}">Contato</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('ComentaController@getComentario')}}">Comentários</a>
                </div>
            </li> 
        </ul>
        <!--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
    </div>
</nav>

