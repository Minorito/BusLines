@extends('layout.site')
@section('conteudo')

<h2>Horários de ônibus que saem do TERMINAL DA FONTE</h2>


<!-- MAPA -->
              
<script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>

<div style='overflow:hidden;height:280px;width:100%;color: #0095eb'>
    <div id='gmap_canvas' style='height:280px;width:100%;'></div>
     <style>#gmap_canvas img{max-width:none!important;background:none!important}.gm-ui-hover-effect{
    display: none!important;}</style>
   </div>

       <!-- Alterar apenas Aqui -->
       <script type='text/javascript'>
        function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-25.3925635327507,-51.46736049323755),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-25.3925635327507,-51.46736049323755)});infowindow = new google.maps.InfoWindow({content:'Terminal da Fonte'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
        </script>
        <!-- Alterar apenas Aqui -->

<!-- MAPA -->

<div class="text-center">

        <div id="table-container" class="row" style="text-align: center; width: 80%; margin: auto; font-size: small; padding-top: 5vh">
            <table class="table" style="text-align: center; width: 50%; margin: auto">
                <thead>
                <tr>
                    <td>07:25</td>
                </tr>
                <tr>
                    <td>07:47</td>
                </tr>
                <tr>
                    <td>11:15</td>
                </tr>
                <tr>
                    <td>12:15</td>
                </tr>
                <tr>
                    <td>17:16</td>
                </tr>
                <tr>
                    <td>18:16</td>
                </tr>
                <tr>
                    <td>18:46</td>
                </tr>
                <tr>
                    <td>18:50</td>
                </tr>
                <tr>
                    <td>22:22</td>
                </tr>
                <tbody>

@endsection