@extends('layout.site')
@section('conteudo')

<h2><b>Horários de ônibus que passam no ponto SESC - LINHA UNICENTRO</b></h2>


<!-- MAPA -->
              
<script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>

<div style='overflow:hidden;height:280px;width:100%;color: #0095eb'>
    <div id='gmap_canvas' style='height:280px;width:100%;'></div>
     <style>#gmap_canvas img{max-width:none!important;background:none!important}.gm-ui-hover-effect{
    display: none!important;}</style>
   </div>

       <!-- Alterar apenas Aqui -->
       <script type='text/javascript'>
        function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-25.3975555, -51.4647992),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-25.3975555, -51.4647992)});infowindow = new google.maps.InfoWindow({content:'SESC'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
        </script>
        <!-- Alterar apenas Aqui -->

<!-- MAPA -->

<div class="text-center">

        <div id="table-container" class="row" style="text-align: center; width: 80%; margin: auto; font-size: small; padding-top: 5vh">
            <table class="table" style="text-align: center; width: 50%; margin: auto">
                <thead>
                <tr>
                    <td>07:06</td>
                </tr>
                <tr>
                    <td>08:06</td>
                </tr>
                <tr>
                    <td>11:36</td>
                </tr>
                <tr>
                    <td>12:36</td>
                </tr>
                <tr>
                    <td>17:36</td>
                </tr>
                <tr>
                    <td>18:36</td>
                </tr>
                <tbody>

@endsection