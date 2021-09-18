@extends('layout.site')
@section('conteudo')

<h2>Horários de ônibus que passam no ponto UNICENTRO - LINHA UNICENTRO</h2>


<!-- MAPA -->
              
<script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>

<div style='overflow:hidden;height:280px;width:100%;color: #0095eb'>
    <div id='gmap_canvas' style='height:280px;width:100%;'></div>
     <style>#gmap_canvas img{max-width:none!important;background:none!important}.gm-ui-hover-effect{
    display: none!important;}</style>
   </div>

       <!-- Alterar apenas Aqui -->
       <script type='text/javascript'>
        function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-25.40613406870245, -51.46977278942144),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-25.40613406870245, -51.46977278942144)});infowindow = new google.maps.InfoWindow({content:'Unicentro Santa Cruz'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
        </script>
        <!-- Alterar apenas Aqui -->

<!-- MAPA -->

<div class="text-center">

        <div id="table-container" class="row" style="text-align: center; width: 80%; margin: auto; font-size: small; padding-top: 5vh">
            <table class="table" style="text-align: center; width: 50%; margin: auto">
                <thead>
                <tr>
                    <td>07:00</td>
                </tr>
                <tr>
                    <td>07:34</td>
                </tr>
                <tr>
                    <td>07:54</td>
                </tr>
                <tr>
                    <td>11:25</td>
                </tr>
                <tr>
                    <td>12:25</td>
                </tr>
                <tr>
                    <td>17:25</td>
                </tr>
                <tr>
                    <td>18:25</td>
                </tr>
                <tr>
                    <td>18:55</td>
                </tr>
                <tr>
                    <td>18:58</td>
                </tr>
                <tr>
                    <td>22:07</td>
                </tr>
                <tr>
                    <td>22:32</td>
                </tr>
                <tr>
                    <td>22:33</td>
                </tr>
                <tr>
                    <td>22:50</td>
                </tr>
                <tbody>
                
@endsection