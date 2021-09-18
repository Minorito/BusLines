@extends('layout.site')
@section('conteudo')

<h2><b>Unicentro Cedeteg</b></h2>


<!-- MAPA -->
              
<script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>

<div style='overflow:hidden;height:280px;width:100%;color: #0095eb'>
    <div id='gmap_canvas' style='height:280px;width:100%;'></div>
     <style>#gmap_canvas img{max-width:none!important;background:none!important}.gm-ui-hover-effect{
    display: none!important;}</style>
   </div>

       <!-- Alterar apenas Aqui -->
       <script type='text/javascript'>
        function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-25.38389058837375, -51.49227043136756),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-25.38389058837375, -51.49227043136756)});infowindow = new google.maps.InfoWindow({content:'Unicentro Cedeteg'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
        </script>
        <!-- Alterar apenas Aqui -->

<!-- MAPA -->



@endsection