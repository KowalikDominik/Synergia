

<!--<div id="przerwa" style="height: 100%;width:49px;background:black;float:left;">dd</div>-->

  <div id="txt" style="padding:0px;">

  <div id="kontakt">

	 	<div id="kontakt_lewy"></div>

		<img src="theme/kontakt_tel.jpg" width="239" height="25" alt="Kontakt telefoniczny" style="margin-top:10px;"><br>

		<img src="theme/ikona_tel.jpg" width="42" height="44" border="0" alt="[Rozmiar: 25580 bajtów]" style="margin-left:15px;margin-top:5px;vertical-align: middle;">

		<img src="theme/numer_tel_st.jpg" width="125" height="19" border="0" alt="[Rozmiar: 28236 bajtów]" style="margin-left:10px;margin-top: 8px;vertical-align: middle;">

		<br>

		<img src="theme/ikona_tel_cell.jpg" width="42" height="44" alt="tel.:" style="margin-left:15px;margin-top:10px;vertical-align: middle;">

		<img src="theme/numer_tel.jpg" width="151" height="19" alt="Numer telefonu" style="margin-left:10px;margin-top: 8px;vertical-align: middle;"><br>

		<img src="theme/email.jpg" width="76" height="22" alt="Email:" style="margin-top:15px;margin-left:80px;"><br>

		<a href="mailto:stowarzyszeniesynergia@op.pl" title="Wy¶lij E-mail"><img src="theme/mail_adres.jpg" width="228" height="16" alt="Adres email" style="margin-top:10px;margin-left:5px;"></a>

  </div>

  <div id="newsy">

<!--<div id="podatek"><img src="theme/podatek-1.png"></div>-->

		<div id="news_head">

			<img src="theme/ikona_news.jpg" width="38" height="37" alt=">" style="margin-top:3px;float:left;">

			<img src="theme/aktualnosci.jpg" width="136" height="23" alt="Aktualno¶ci" style="margin-top:10px;margin-left:9px;float:left;">

		</div>

		<?php polaczenie();

$sel='select `nr`,`data` from `wiadomosc` where `pokaz`=1 ORDER BY `id` DESC';

$zap=mysql_query($sel);

if(mysql_num_rows($zap)>0){

	$w=mysql_fetch_row($zap);

	echo'<div style="margin-top:5px;">'.$w[1].'</div><div style="margin-top:10px;">';

	include('newsy/'.$w[0].'_1.txt');

	echo'</div><div id="news_all">

		<a href="'.$w[0].'.art" title="Ca³y artyku³"><img src="theme/wiecej.jpg" width="61" height="17" alt="Wiêcej..."></a>

		</div>';

}

else{echo'nie ma artyku³ów';}

?>

	</div>

	<div id="stowarzy">

		<div id="st_tlo">

		<div id="st_txt">

		<img src="theme/ostowarzyszeniu.jpg" width="195" height="25" alt="O stowarzyszeniu" style="margin-top:10px;margin-bottom:5px;">

		<br>

		Jakkolwiek okre¶liliby¶my pomaganie innym - dobroczynno¶ci±, filantropi±, charytatywno¶ci± czy samarytanizmem, to bezwzglêdnie uznaæ musimy fakt, i¿ niesienie pomocy innym daje prawo do osobistej satysfakcji<br> i spe³nienia.

		</div>

	</div>

	</div>

	</div>

	  <!--	<div id="st_r"></div>

		<div id="st_b"></div>

		</div>

	</div>



	<div id="wzor"><div id="czer_tlo"><div id="czer_gora"><div id="czer_srodek"></div></div></div></div>

	

		<div id="pasek_r"><div id="prawy_rog"></div><div id="prawy_dol"></div></div>-->

