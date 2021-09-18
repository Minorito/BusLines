@extends('layout.site')
@section('conteudo')

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
  padding: 10px;
  margin: 10px;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 4px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2><b>ROTAS DE ÔNIBUS PARA AS UNIVERSIDADE PÚBLICAS DE GUARAPUAVA</b></h2>
<h8>Esta é uma página legível por humanos que apresenta as informações sobre o conjunto de dados para as rotas de ônibus para as Universidades Públicas de Guarapuava.</h8>
<br>
<br>
<h4><b>DESCRIÇÃO DO CONJUNTO DE DADOS</b></h4>

<table>
  <tr>
    <td>Título</td>
    <td>Rotas de ônibus para as Universidade Públicas de Guarapuava</td>
  </tr>
  <tr>
    <td>Descrição</td>
    <td>Rotas de ônibus e horários de paradas nos pontos para as Universidade Públicas de Guarapuava (Unicentro, Unicentro-Cedeteg e UTFPR)</td>
  </tr>
  <tr>
    <td>Palavras chaves</td>
    <td>Rotas de ônibus, Horários, Pontos, Universidades Públicas, Guarapuava</td>
  </tr>
  <tr>
    <td>Data de publicação</td>
    <td>17/05/2021</td>
  </tr>
  <tr>
    <td>Publicador</td>
    <td>Unicentro</td>
  </tr>
  <tr>
    <td>Homepage do Publicador</td>
    <td><a href="https://www3.unicentro.br/">https://www3.unicentro.br/</a></td>
  </tr>
  <tr>
    <td>Criador</td>
    <td>Grupo LASeD</td>
  </tr>
  <tr>
    <td>Homepage do Criador</td>
    <td><a href="https://http://dgp.cnpq.br/dgp/espelhogrupo/6068628639458564/">https://http://dgp.cnpq.br/dgp/espelhogrupo/6068628639458564/</a></td>
  </tr>
  <tr>
    <td>E-mail do Criador</td>
    <td>lasedunicentro@gmail.com</td>
  </tr>
  <tr>
    <td>Período de cobertura</td>
    <td>2021</td>
  </tr>
  <tr>
    <td>Data da última modificação</td>
    <td>17/05/2021</td>
  </tr>
  <tr>
    <td>Cobertura espacial</td>
    <td>Guarapuava - <a href="https://www.geonames.org/3461879/ ">https://www.geonames.org/3461879/</a></td>
  </tr>
  <tr>
    <td>Frequência de atualização</td>
    <td>Imprevisível</td>
  </tr>
  <tr>
    <td>Tema</td>
    <td>Transporte público, serviços de ônibus</td>
  </tr>
  <tr>
    <td>Linguagem</td>
    <td>Português</td>
  </tr>
  <tr>
    <td>Formatos de data e hora</td>
    <td>PT-BR/UTC-8</td>
  </tr>
  <tr>
    <td>Versão atual</td>
    <td>1.0</td>
  </tr>
</table>

<br>

<h4><b>DISTRIBUIÇÕES DO CONJUNTO DE DADOS</b></h4>
<br>
<h5><b>DISTRIBUIÇÃO RDF</b></h5>
<table>
  <tr>
    <td>Título</td>
    <td>Distribuição RDF do conjunto de dados RotasUniversidadesPublicas</td>
  </tr>
  <tr>
    <td>Descrição</td>
    <td>Distribuição em RDF do conjunto de dados das Rotas de ônibus e horários de paradas nos pontos para as Universidade Públicas de Guarapuava (Unicentro, Unicentro-Cedeteg e UTFPR)</td>
  </tr>
  <tr>
    <td>Tipo de Mídia</td>
    <td>texto/RDF</td>
  </tr>
  <tr>
    <td>Licença</td>
    <td>PDDL</td>
  </tr>
  <tr>
    <td>Data de Publicação</td>
    <td>17/05/2021</td>
  </tr>
  <tr>
    <td>Data da Última Modificação</td>
    <td>17/05/2021</td>
  </tr>
  <tr>
    <td>URL para download:</td>
    <td><a href="?">?</a></td>
</table>

<br>

<h5><b>DISTRIBUIÇÃO HTML</b></h5>
<table>
  <tr>
    <td>Título</td>
    <td>Distribuição HTML do conjunto de dados RotasUniversidadesPublicas</td>
  </tr>
  <tr>
    <td>Descrição</td>
    <td>Distribuição em HTML do conjunto de dados das Rotas de ônibus e horários de paradas nos pontos para as Universidade Públicas de Guarapuava (Unicentro, Unicentro-Cedeteg e UTFPR)</td>
  </tr>
  <tr>
    <td>Tipo de Mídia</td>
    <td>texto/HTML</td>
  </tr>
  <tr>
    <td>Licença</td>
    <td>PDDL</td>
  </tr>
  <tr>
    <td>Data de Publicação</td>
    <td>17/05/2021</td>
  </tr>
  <tr>
    <td>Data da Última Modificação</td>
    <td>17/05/2021</td>
  </tr>
  <tr>
    <td>URL para download:</td>
    <td><a href="?">?</a></td>
</table>

<br>

<h5><b>DISTRIBUIÇÃO CSV</b></h5>
<table>
  <tr>
    <td>Título</td>
    <td>Distribuição CSV do conjunto de dados RotasUniversidadesPublicas</td>
  </tr>
  <tr>
    <td>Descrição</td>
    <td>Distribuição em CSV do conjunto de dados das Rotas de ônibus e horários de paradas nos pontos para as Universidade Públicas de Guarapuava (Unicentro, Unicentro-Cedeteg e UTFPR)</td>
  </tr>
  <tr>
    <td>Tipo de Mídia</td>
    <td>texto/CSV</td>
  </tr>
  <tr>
    <td>Licença</td>
    <td>PDDL</td>
  </tr>
  <tr>
    <td>Data de Publicação</td>
    <td>17/05/2021</td>
  </tr>
  <tr>
    <td>Data da Última Modificação</td>
    <td>17/05/2021</td>
  </tr>
  <tr>
    <td>URL para download:</td>
    <td><a href="?">?</a></td>
</table>

<br>

<h6><b>Structural metadata - CSV Distribution</b></h6>
<table>
  <tr>
    <th>Campo/Título</th>
    <th>Descrição</th>
    <th>Tipo</th>
    <th>Chave Primária</th>
    <th>Obrigatório</th>
  </tr>
  <tr>
    <td>uriAgency</td>
    <td>URI da agência de transporte coletivo, composto pela palavra “Agency+Nome da Agência”</td>
    <td>string</td>
    <td></td>
    <td>X</td>
  </tr>
  <tr>
  <td>agencyName</td>
    <td>Nome da agência de transporte coletivo</td>
    <td>string</td>
    <td></td>
    <td>X</td>
  </tr>
  <tr>
    <td>uriRoute</td>
    <td>URI da rota de ônibus, composto pela palavra “Route+Identificador da Rota+Nome da Rota”</td>
    <td>string</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <td>routeId</td>
    <td>Identificador da rota de ônibus</td>
    <td>integer</td>
    <td></td>
    <td>X</td>
  </tr>
  <tr>
    <td>routeName</td>
    <td>Nome da rota de ônibus</td>
    <td>string</td>
    <td></td>
    <td>X</td>
  </tr>
  <tr>
    <td>uriPoint</td>
    <td>URI do ponto de parada do ônibus, composto pela palavra “Point+Nome do Ponto+palavra Lat+Latitude+palavra Long+Longitude”</td>
    <td>string</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <td>latitude</td>
    <td>Valor da latitude do ponto de parada do ônibus</td>
    <td>double</td>
    <td></td>
    <td>X</td>
  </tr>
  <tr>
    <td>longitude</td>
    <td>Valor da longitude do ponto de parada do ônibus</td>
    <td>double</td>
    <td></td>
    <td>X</td>
  </tr>
  <tr>
    <td>uriStopTime</td>
    <td>URI do horário da passagem do ônibus no ponto de parada, composto pela palavra “StopTime+horário de passagem”</td>
    <td>string</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <td>timeHour</td>
    <td>Horário da passagem do ônibus no ponto de parada</td>
    <td>time</td>
    <td></td>
    <td>X</td>
  </tr>
  <tr>
    <td>extra</td>
    <td>Indicação de ônibus extra, ou seja, se é um ônibus especial que transita em dias e horários diferenciados</td>
    <td>boolean</td>
    <td></td>
    <td>X</td>
  </tr>
  <tr>
    <td>weekDays</td>
    <td>Dias da semana em que o ônibus trafega</td>
    <td>string</td>
    <td></td>
    <td>X</td>
  </tr>
  <tr>
    <td>uriImage</td>
    <td>URI da imagem do ponto de parada do ônibus, sendo um endereço acessível na Web</td>
    <td>string</td>
    <td></td>
    <td>X</td>
  </tr>
</table>

<br>

<h5><b>HISTÓRICO DE VERSÕES DO CONJUNTO DE DADOS</b></h5>
<table>
  <tr>
    <th>Versão</th>
    <th>Data de Publicação</th>
    <th>URI</th>
    <th>Histórico de Alterações</th>
  </tr>
  <tr>
    <td>1.0</td>
    <td>17/05/2021</td>
    <td></td>
    <td>The bus stops dataset was updated to reflect the creation of a new bus stop at 1115 Pearl Street.</td>
  </tr>
</table>

<br>

<h5><b>FEEDBACK</b></h5>
<h8>Para entrar em contato conosco por e-mail:</h8>
<a href="{{route('ContatoController@contato')}}">Contato</a>
<br>
<h8>Para deixar um comentário sobre nosso site:</h8>
<a href="{{route('ComentaController@getComentario')}}">Comentários</a>

<br>
<br>

</body>
</html>

@endsection