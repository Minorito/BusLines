@extends('layout.site')
@section('conteudo')

<!-- MAPA -->

<h2>Horários de ônibus que passam no ponto CONDOMÍNIO OURO BRANCO</h2>

<script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>

<div style='overflow:hidden;height:280px;width:100%;color: #0095eb'>
    <div id='gmap_canvas' style='height:280px;width:100%;'></div>
     <style>#gmap_canvas img{max-width:none!important;background:none!important}.gm-ui-hover-effect{
    display: none!important;}</style>
   </div>

       <!-- Alterar apenas Aqui -->
       <script type='text/javascript'>
        function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-25.4079844, -51.4657559),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-25.4079844, -51.4657559)});infowindow = new google.maps.InfoWindow({content:'Condomínio Ouro Branco'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
        </script>
        <!-- Alterar apenas Aqui -->

<!-- MAPA -->

<div class="text-center">

        <div id="table-container" class="row" style="text-align: center; width: 80%; margin: auto; font-size: small; padding-top: 5vh">
            <table class="table" style="text-align: center; width: 50%; margin: auto">
                <thead>
                <tr>
                    <td>07:02</td>
                </tr>
                <tr>
                    <td>08:02</td>
                </tr>
                <tr>
                    <td>11:32</td>
                </tr>
                <tr>
                    <td>12:32</td>
                </tr>
                <tr>
                    <td>17:32</td>
                </tr>
                <tr>
                    <td>18:32</td>
                </tr>
                <tbody>
@endsection