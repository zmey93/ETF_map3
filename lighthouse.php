<!DOCTYPE html>
<html>
<head>
<title>Карта Маяка в Таркове - TarkovMap.ru</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta property="og:title" content="Выходы ЧВК и Дикого на карте Маяк в Таркове - TarkovMap.ru">
<meta property="og:description" content="Карта Маяк из игры Escape from Tarkov с расположением выходов Диких и ЧВК, карта тайников.">
<meta property="og:image" content="/img/les.jpg">
<meta name="description" content="Карта Маяк из игры Escape from Tarkov с расположением выходов Диких и ЧВК, карта тайников."> 
<meta name="Keywords" content="карта, маяк, тарков, карта выходов, выходы за дикиго, выходы чвк, карта тайников"> 


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
  integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
  integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
  crossorigin=""></script>

<script src="/js/map_hash.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>
<link rel="stylesheet" href="/css/dobby.css">



</head>

<body>



<div id="map" class="js-canvi-content canvi-content leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0" style="position: relative;">
<div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
<div class="leaflet-pane leaflet-tile-pane"></div>
<div class="leaflet-pane leaflet-shadow-pane"></div>
<div class="leaflet-pane leaflet-overlay-pane">
<img class="leaflet-image-layer leaflet-zoom-animated" src="uqm_map_full.png" alt="" style="z-index: 1; transform: translate3d(-200px, -300px, 0px); width: 1000px; height: 1000px;"></div>
<div class="leaflet-pane leaflet-marker-pane"></div>

<div class="leaflet-pane leaflet-tooltip-pane"></div>
<div class="leaflet-pane leaflet-popup-pane"></div>
<div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(500px, -500px, 0px) scale(0.5);"></div></div>

<div class="leaflet-control-container">
<div class="leaflet-top leaflet-left">
<div class="leaflet-control-zoom leaflet-bar leaflet-control">
<a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a>
<a class="leaflet-control-zoom-out leaflet-disabled" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a>
</div>

<div class="leaflet-control" id="" title="" style="position: absolute; left: 45px; top: 2px; width: 300px;">
<div class="input-group">

<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Выбрать карту
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/lighthouse.php">Карта Маяка</a>
    <a class="dropdown-item" href="/rezerv.php">Карта Резерва</a>
    <a class="dropdown-item" href="/customs.php">Карта Таможни</a>
    <a class="dropdown-item" href="/shorline.php">Карта Берега</a>
    <a class="dropdown-item" href="/newwoods.php">Карта Леса</a>
    <a class="dropdown-item" href="/laboratory.php">Карта Лаборатории</a>
    <a class="dropdown-item" href="/interchange.php">Карта Развязки</a>
    <a class="dropdown-item" href="/factory.php">Карта Завода</a>
	<div class="dropdown-divider"></div>
	<a class="dropdown-item" href="/hospital.php">Карта Санатория</a>
    <a class="dropdown-item" href="/hostel.php">Карта Общежития</a>
	<div class="dropdown-divider"></div>
	<a class="dropdown-item" href="/">Вернуться на главную</a>
  </div>
</div>

</div>
</div>

</div>

<div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-left"><div class="leaflet-control-attribution leaflet-control">Карта составлена &copy; <a href="https://youtube.com/DobbyKillStreak">DobbyKillStreak</a></div></div></div></div>
<script>

var keys = L.layerGroup(),
	places = L.layerGroup(),
	exitScav = L.layerGroup(),
	exitPMC = L.layerGroup(),
	JustMaps = L.layerGroup(),
	shronKeys = L.layerGroup(),
	goodPoints = L.layerGroup();

	var map = L.map('map', {
		center: [81, -67],
		zoom: 4,
		layers: [JustMaps]
	});

    var layer = L.tileLayer('/maps/lighthouse/{z}/{x}/{y}.png', {
			noWrap: true,
			tms: false
        }).addTo(map);

	map.setMaxZoom(3);
	map.setMinZoom(8);
	
	var hash = new L.Hash(map);

var KeyIcon = L.Icon.extend({
    options: {
        iconSize:     [40, 40],
        iconAnchor:   [20, 20],
		popupAnchor:  [0, -10]
    }
});	

var keyIcon = new KeyIcon({iconUrl: '/img/key.png'}),
    caseIcon = new KeyIcon({iconUrl: '/img/case.png'}),
    exitIcon = new KeyIcon({iconUrl: '/img/exit.png'}),
	dobbyIcon = new KeyIcon({iconUrl: '/img/dobby.png'}),
	labaIcon = new KeyIcon({iconUrl: '/img/laba.png'}),
	shronIcon = new KeyIcon({iconUrl: '/img/klad.png'}),
	exitIcon2 = new KeyIcon({iconUrl: '/img/exit2.png'});
	

//Точки выхода за дикого	
	L.marker([82.497693, 13.688965], {icon: exitIcon}).bindPopup("<strong>Бронепоезд</strong>").addTo(exitScav);
	L.marker([79.50466, -0.175781], {icon: exitIcon}).bindPopup("<strong>Ворота промзоны</strong>").addTo(exitScav);
	L.marker([84.60784, -36.386719], {icon: exitIcon}).bindPopup("<strong>Укрытие в гроте</strong>").addTo(exitScav);
	L.marker([81.228267, -133.286133], {icon: exitIcon}).bindPopup("<strong>Боковой тоннель</strong></br>Совместный выход с ЧВК (ЧВК + Дикий)").addTo(exitScav);
	L.marker([84.124973, -131.616211], {icon: exitIcon}).bindPopup("<strong>Схрон под дебаркадером</strong></br>Необходимо залесть под здание").addTo(exitScav);
	L.marker([75.962898, -148.666992], {icon: exitIcon}).bindPopup("<strong>Обвал на шоссе</strong></br>Необходимо спутится именно на берег").addTo(exitScav);
	L.marker([75.573993, -76.157227], {icon: exitIcon}).bindPopup("<strong>Переход на Берег</strong>").addTo(exitScav);

//Точки выхода за ЧВК
	L.marker([74.752746, -1.296387], {icon: exitIcon2}).bindPopup("<strong>Дорога к военной базе А-Выход</strong></br>Требуется 5000руб").addTo(exitPMC);
	L.marker([81.214853, -134.912109], {icon: exitIcon2}).bindPopup("<strong>Боковой тоннель</strong></br>Совместный выход с Диким (ЧВК + Дикий)").addTo(exitPMC);
	L.marker([75.264239, -146.953125], {icon: exitIcon2}).bindPopup("<strong>Южная дорога</strong>").addTo(exitPMC);
	L.marker([79.113389, -85.627441], {icon: exitIcon2}).bindPopup("<strong>Тропа через перевал</strong></br>Требуется ледоруб и паракорд").addTo(exitPMC);
	L.marker([84.154139, 23.752441], {icon: exitIcon2}).bindPopup("<strong>Северный блокпост</strong>").addTo(exitPMC);
	L.marker([82.497693, 12.722168], {icon: exitIcon2}).bindPopup("<strong>Бронепоезд</strong>").addTo(exitPMC);
	L.marker([75.185789, -75.146484], {icon: exitIcon2}).bindPopup("<strong>Переход на Берег</strong>").addTo(exitPMC);

//Схроны
    L.marker([83.630797, -107.20459], {icon: shronIcon}).bindPopup("Схрон бочка</br>").addTo(shronKeys);
    L.marker([84.095662, -131.11084], {icon: shronIcon}).bindPopup("Схрон бочка под дебаркадером</br>").addTo(shronKeys);
    
    
    
	
	var overlays = {
		"Выходы за дикого": exitScav,
		"Выходы за ЧВК": exitPMC,
		"Тайники": shronKeys
	};	
	var maps = {
		"Карта Маяк": JustMaps
	};	
	

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent(e.latlng.toString())
        .openOn(map);
}
map.on('click', onMapClick);
	
	
	

L.control.layers(maps, overlays, {collapsed: false}).addTo(map);

var popup = L.popup();

L.easyButton('<span class="target">&target;</span>', function(btn, map){
    map.setView([58, -53]);
}).addTo( map );

</script>





</body>
</html>