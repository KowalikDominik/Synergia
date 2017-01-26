<?php ob_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>

<link rel="shortcut icon" href="http://www.stowarzyszeniesynergia.org/favicon.ico" type="image/x-icon"/>

<link rel="icon" href="http://www.stowarzyszeniesynergia.org/favicon.ico" type="image/x-icon"/>

<META HTTP-EQUIV="content-type" CONTENT="text/html; CHARSET=iso-8859-2">

<META NAME="konwerter" CONTENT="Ogonki97 1.3">

<title>Stowarzyszenie Synergia</title>

<meta name="KEYWORDS" content="bezrobotni lublin, lubelskie stowarzyszenie, niepełnosprawni lublin, niepełnosprawni w lublinie, opieka nad dziećmi, organizacja lublin, organizacje pozarz+/-dowe w lublinie, pomoc chorym lublin, pomoc, rodzinom lubelskie, rodziny patologiczne, stowarzyszenie lublin, stowarzyszenie synergia, synergia lublin, zdrowy tryb życia, fundacja, fundacja lublin, rodzina lublin, opieka ludzi chorych, pomoc niepełonosprawnym, pomoc niepełnosprawnym lublin">

<meta name="DESCRIPTION" content="Stowarzyszenie Synergia - Dopóki macie czas, dobro czyńcie.">

<meta name="ROBOTS" content="all" >

<meta name="REVISIT-AFTER" content="7 days" >

<meta name="RATING" content="general" >

<link rel="stylesheet" href="theme/style.css"  type="text/css">

<link rel="stylesheet" href="theme/dropdown.css" type="text/css">

<link rel="stylesheet" href="theme/menu-style.css" type="text/css">

<link rel="stylesheet" href="theme/style2.css" type="text/css">

<script type="text/javascript" src="js/prototype.js"></script>

<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>

<script type="text/javascript" src="js/lightbox.js"></script>



<script type="text/javascript">

// <![CDATA[

function flash(n)

{var b;

	

	document.getElementById("podatek").innerHTML = '<img src="theme/podatek-'+n+'.png">';

	if(n==1){b=2;}else{b=1;}

	

	setTimeout("flash("+b+");", 500);

}

// ]]>



</script>



<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />





        <!--[if lt IE 7]>

                <script type="text/javascript" src="js/jquery.js"></script>

                <script type="text/javascript" src="js/jquery.dropdown.js"></script>

        <![endif]-->



	<!--[if IE]>

	<style type="text/css">

	div#batony{

		font-size: 17px;	

		font-family: Arial;

		font-weight: lighter;

		line-height: 19px;

		letter-spacing: 0px;

	}

	</style>

	<![endif]-->



<?php 



include('funkcje.php');





@$id=$_GET['id'];

@$art=$_GET['art'];





if(!isset($id)){$id=1;}



?>

<style type="text/css">

<?php

switch($id){

case 1:echo'#topMenu #ico8 a { background-position: 0px -43px; }';break;

case 2:echo'#topMenu #ico7 a { background-position: -69px -60px; }';break;

case 3:echo'#topMenu #ico6 a { background-position: -139px -60px; }';break;

case 4:echo'#menu_r {background-image:url(theme/wspolpraca.gif); }';break;

case 5:echo'#menu_r {background-image:url(theme/wspolpraca.gif); }';break;

case 6:echo'#menu_r {background-image:url(theme/wspolpraca.gif); }';break;

case 7:echo'#topMenu #ico3 a { background-position: -389px -60px; }';break;

case 8:echo'#topMenu #ico2 a { background-position: -496px -60px; }';break;

case 9:echo'#topMenu #ico1 a { background-position: -584px -60px; }';break;

case 10:echo'#topMenu #ico5 a {background-position: -209px -60px; }';break;





}

?>

</style>



</head>

<body onload="flash(1);">

<div class="calosc">


<div id="niebo"></div>

<div id="gora">

<div id="logo"><a href="home" title="Strona główna stowarzyszenia Synergia"><img src="theme/Nowy_folder/logo.jpg" alt="Stowarzyszenie Synergia"></a></div>



	<div id="menu_tlo">

	<div id="batony">

	<ul id="topMenu">

	<li id="ico8"><a href="home" title="Strona główna stowarzyszenia Synergia"></a></li>

	<li id="ico7"><a href="onas" title="O stowarzyszeniu Synergia"></a></li>

	<li id="ico6"><a href="STATUT_STOWARZYSZENIA_SYNERGIA.doc" title="Statut stowarzyszenia Synergia"></a></li>

	<li id="ico5"><a href="oferta" title="Informacje o Twoich transakcjach"></a></li>

	<li id="ico4"><a href="" title="Informacje o Twoich transakcjach"></a>

   <div id="menu_r"><div id="aha"></div>

<div class="roz">

<div class="point" id="m1"><a href="partnerzy" style="margin:0px;"></a></div>

<div class="point" id="m2"><a href="darczyncy" style="margin:0px;"></a></div>

<div class="point" id="m3"><a href="sponsorzy" style="margin:0px;"></a></div>



</div>

</div>

	</li>

	

	<li id="ico3"><a href="aktualnosci" title="AktualnoPci"></a></li>

	<li id="ico2"><a href="projekty" title="Projekty stowarzyszenia Synergia"></a></li>

	<li id="ico1"><a href="kontakt" title="Kontakt"></a></li>

</ul>



	

	</div>

	</div>



</div>

<div id="grafika" style="padding-left:0px;">

<!--

 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" WIDTH="919" HEIGHT="309">



 <param name="movie" value="http://stowarzyszeniesynergia.org/theme/Nowy_folder/festyn.swf" />



 <param name="quality" value="high" />



 <param name="bgcolor" value="#ffffff" />



 <param name="flashvars" value="parametr1=abc&amp;parametr2=xyz" />-->



 <!--[if !IE]><--><!--<object data="http://stowarzyszeniesynergia.org/theme/Nowy_folder/festyn.swf" WIDTH="919" HEIGHT="309" type="application/x-shockwave-flash">



 <param name="quality" value="high" />



 <param name="bgcolor" value="#ffffff" />



 <param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />



 <param name="bgcolor" value="#ffffff" />



 <param name="flashvars" value="parametr1=abc&amp;parametr2=xyz" /><p>Alternatywna zawartoć w przypadku braku flash-a.</p></object>--><!--> <![endif]--><!--</object>

-->

</div>

<div id="kontener">

<div id="kontener2">

<div id="kontener3">

<div id="kontener4">

<div id="kontener5">

<div id="kontener6">

<div id="kontener7">

<div id="kontener8">

<div id="kontener9">

<div id="kontener10">

<div id="zawartosc">

<?php 

if(isset($id)){

if($id==1){include('start.php');}

elseif($id==9){include('strona_9.php');}

elseif($id==7){?>

<br>

<div id="site_title"><img src="theme/aktualnosci.jpg" alt="AktualnoPci"></div>

<div id="txt">

<?php

////wyswietlenie artykułu w całości

if(isset($art)){

polaczenie();

$sel='select `data` from `wiadomosc` where `nr`='.$art.' and `pokaz`=1 ORDER BY `id` DESC';

$zap=mysql_query($sel);

if(mysql_num_rows($zap)>0){

	$w=mysql_fetch_row($zap);

	echo$w[0].'<br><div style="margin-top:10px;">';

	include('newsy/'.$art.'.txt');

	echo'</div>';

}

else{echo'Nie ma takiego artykułu!';}

////

}

else{

////Lista artykułów w podstronie aktualnosci

polaczenie();

$sel='select `nr`,`data` from `wiadomosc` where `pokaz`=1 ORDER BY `id` DESC';

$zap=mysql_query($sel);

if(mysql_num_rows($zap)>0){

	while($w=mysql_fetch_row($zap)){

	echo$w[1].'<div id="news_txt">';

	include('newsy/'.$w[0].'_1.txt');

	echo'</div><div id="news_all">

		<a href="'.$w[0].'.art" title="Cały artykuł"><img src="theme/wiecej.jpg" width="61" height="17" alt="Więcej..."></a>

		</div>';

	}

}

else{echo'nie ma artykułów';}

////



}

?>

</div>

<?php

}

else{

if(file_exists('strona_'.$id.'.html')){

include('strona_'.$id.'.html');

}

else{echo'Nie ma takiej podstrony';}



}

}

?>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>



<div id="stopa">

<div id="stopka-l"></div>

<div id="stopka">

<span style="margin-left:258px;"></span>

<b>(c) 2009 <strong>Stowarzyszenie Synergia</strong>&nbsp;</b>

<a href="http://validator.w3.org/check?uri=referer"><img

        src="http://www.w3.org/Icons/valid-html401"

        alt="Valid HTML 4.01 Strict" height="23" width="65" style="vertical-align: middle;"></a>

        <a href="http://jigsaw.w3.org/css-validator/check/referer">

    <img style="border:0;width:65px;height:23px;vertical-align: middle;"

        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"

        alt="Poprawny CSS!" >

</a>

<!-- phpmyvisites -->

<a href="http://www.phpmyvisites.net/" title="phpMyVisites : aplikacja open source generuj+/-ca statystykę w oparciu o PHP/MySQL, udostępniana na licencji GPL."

onclick="window.open(this.href);return(false);"><script type="text/javascript">

<!--

var a_vars = Array();

var pagename='';



var phpmyvisitesSite = 1;

var phpmyvisitesURL = "http://stowarzyszeniesynergia.org/stat/phpmyvisites.php";

//-->

</script>

<script language="javascript" src="http://stowarzyszeniesynergia.org/stat/phpmyvisites.js" type="text/javascript"></script>

<object><noscript><p>phpMyVisites : aplikacja open source generuj+/-ca statystykę w oparciu o PHP/MySQL, udostępniana na licencji GPL.

<img src="http://stowarzyszeniesynergia.org/stat/phpmyvisites.php" alt="Statistics" style="border:0" />

</p></noscript></object></a>

<!-- /phpmyvisites --> 

</div>

<div id="stopka-r"></div>

</div>



<div class="push"></div>

</div>



<div class="footer"></div>



<?php 

ob_end_flush();



?>

</body>

</html>

