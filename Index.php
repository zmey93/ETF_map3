<!DOCTYPE html>
<html>
<head>
<title>Карта</title>

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


<script>

var JustMaps = L.layerGroup();

	var map = L.map('map', {
		center: [58, 0],
		zoom: 3,
		layers: [JustMaps]
	});

    var layer = L.tileLayer('/maps/main/{z}/{x}/{y}.png', {
			noWrap: true,
			tms: false
        }).addTo(map);

	map.setMaxZoom(4);
	map.setMinZoom(2);
	


L.easyButton('<span class="target">&target;</span>', function(btn, map){
    map.setView([58,0]);
}).addTo( map );

    function onClick(e) {
        window.open(this.options.win_url,"_self");
    }

var poly1 = new L.rectangle([
        [75.1, 23], 
        [72.6, 59]
  ], {'win_url': "/interchange.php"});
poly1.on('click', onClick);

var poly2 = new L.rectangle([
        [71.2, 12], 
        [67.8, 48]
  ], {'win_url': "/customs.php"});
poly2.on('click', onClick);

var poly3 = new L.rectangle([
        [72.5, -36], 
        [69.6, -16]
  ], {'win_url': "/newwoods.php"});
poly3.on('click', onClick);

var poly4 = new L.rectangle([
        [63.7, -21], 
        [59, 6]
  ], {'win_url': "/factory.php"});
poly4.on('click', onClick);

var poly5 = new L.rectangle([
        [80.4, -27.4], 
        [78.8, 25]
  ], {'win_url': "/laboratory.php"});
poly5.on('click', onClick);

var poly6 = new L.rectangle([
        [18.5, -39], 
        [9.9, -14]
  ], {'win_url': "/shorline.php"});
poly6.on('click', onClick);

var poly7 = new L.rectangle([
        [55, -59], 
        [49.2, -29]
  ], {'win_url': "/rezerv.php"});
poly7.on('click', onClick);

var poly8 = new L.rectangle([
        [37, -65], 
        [29, -35]
  ], {'win_url': "/lighthouse.php"});
poly8.on('click', onClick);

poly1.addTo(map); 
poly2.addTo(map); 
poly3.addTo(map);
poly4.addTo(map); 
poly5.addTo(map); 
poly6.addTo(map); 
poly7.addTo(map); 
poly8.addTo(map); 


</script>


</body>
</html>