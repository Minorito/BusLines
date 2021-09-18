
@extends('layout.site')

@section('conteudo')

<head>
    <title>Download</title>
 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
</head>

<body>

<div class="container">
    <h1>Download Arquivos</h1>
 
    <hr />

    <ul>
      <li class="nav-item">
            Todas Rotas: <a class="nav-link" href="{{route('BaixarTodosController@getDownload')}}">RotasOnibus.rdf</a>
                            <a class="nav-link" href="{{route('BaixarHtmlTodosController@getHtml')}}">RotasOnibus.html</a>
                            <a class="nav-link" href="{{route('BaixarTurtleTodosController@getTurtle')}}">RotasOnibus.ttl</a>                    
      </li>
    </ul>

    <ul>
      <li class="nav-item">
            Rotas Cedeteg: <a class="nav-link" href="{{route('BaixarCedetegController@getCedeteg')}}">Cedeteg.rdf</a>
                           <a class="nav-link" href="">Cedeteg.html</a>
                           <a class="nav-link" href="">Cedeteg.ttl</a>
      </li>
    </ul>

    <ul>
      <li class="nav-item">
            Rotas Santa Cruz: <a class="nav-link" href="{{route('BaixarSantaCruzController@getSantaCruz')}}">SantaCruz.rdf</a>
                              <a class="nav-link" href="">SantaCruz.html</a>
                              <a class="nav-link" href="">SantaCruz.ttl</a>

      </li>
    </ul>

    <ul>
      <li class="nav-item">
            Rotas Campo Real: <a class="nav-link" href="{{route('BaixarCampoRealController@getCampoReal')}}">CampoReal.rdf</a>
                              <a class="nav-link" href="">CampoReal.html</a>
                              <a class="nav-link" href="">CampoReal.ttl</a>

      </li>
    </ul>
 
 
</div>

</body>
</html>
@endsection
