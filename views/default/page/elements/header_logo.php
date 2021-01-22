<?php
	$site_url = elgg_get_site_url();
	# This php line gets the site url to direct when user click to your logo image
?>

<!-- Template line to change your logo by copy your image and paste as logo.png into mod/header_logo_changer/graphics/
	and also you can change width and height by % values or giving specific px values like "100px" -->

<div class="elgg-page-section elgg-page-topbar">

<a href="<?php echo $site_url?>">
	<img class="img-responsive" style="height: 50px;display: block;position: absolute;top: 5px;left: 40%;" src="<?php echo $site_url; ?>mod/header_logo_changer/graphics/logo.png" />
</a>

<style>


menu{
    width: 240px;
    background-color: transparent;
    position: absolute;
    top: -20px;
    right:14%;
}

menu ul{
    list-style-type: none;
}

menu ul li{
    float: right;
    text-align: right;
    position: relative;
    width: 100%;
}

menu ul::after{
    content: "";
    display: table;
    clear: both;
}

menu a{
    display: block;
    text-decoration: none;
    color: black;
    border-bottom: 2px solid transparent;
    padding: 10px 0px;
}

menu a:hover{
    color: #febb05;
}

.sous{
    display: none;
    box-shadow: 0px 1px 2px #CCC;
    background-color: #333;
    position: absolute;
    width: 100%;
    z-index: 1000;
    top: 59px;
}
menu > ul li:hover .sous{
    display: block;
}
.sous li{
    float: none;
    width: 100%;
    text-align: right;
}
.sous a{
    padding: 10px;
    border-bottom: none;
    color: #bddf0b;
}
.sous a:hover{
    border-bottom: none;
    background-color: RGBa(200,200,200,0.1);
}
.deroulant > a::after{
    content:"▼";
    font-size: 32px;
    color: #bddf0b;
}

</style>

<menu>
  <ul>
    <li class="deroulant"><a href="#">&ensp;</a>
      <ul class="sous">
    <li><a href="https://radio.thechangebook.org/" target="_blank" title="Écouter la webradio de TCB">Écouter RadioLuttes</a></li>
        <li><a href="https://outils.thechangebook.org/mindmap/" target="_blank" title="Créer une carte heuristique">Carte heuristique</a></li>
        <li><a href="https://outils.thechangebook.org/draw/" target="_blank" title="Créer des diagrammes">Créer un diagramme</a></li>
        <li><a href="https://outils.thechangebook.org/calc/" target="_blank" title="Créer une feuille de calculs">Feuilles de calcul</a></li>
    <li><a href="https://pad.thechangebook.org/" target="_blank" title="Les pads de TheChangeBook">Ouvrir un pad</a></li>
    <li><a href="mumble://mumble.thechangebook.org/?version=1.2.3" target="_blank" title="Rejoindre TheChangeBook Mumble">Rejoindre Mumble</a></li>
        <li><a href="mumble://mumble.thechangebook.org/?version=1.2.3" target="_blank" title="Faire un don pour financer le réseau">Soutenir TCB</a></li>
      </ul>
    </li>
  </ul>
</menu>

</div>

