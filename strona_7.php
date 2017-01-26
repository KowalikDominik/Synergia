<br>
<!--
<div id="site_title"><img src="theme/aktualnosci.jpg" alt=""></div>
<div id="txt">
<?
polaczenie();
$sel='select `nr`,`data` from `wiadomosc` ORDER BY `id` ASC';
$zap=mysql_query($sel);
if(mysql_num_rows($zap)>0){
	while($w=mysql_fetch_row($zap)){
	echo$w[1].'';
	include('newsy/'.$w[0].'_1.txt');
	echo'<div id="news_all">
		<a href="index.php?id=7&art='.$w[0].'"><img src="theme/wiecej.jpg" width="61" height="17" border="0" alt="[Rozmiar: 25837 bajtów]"></a>
		</div>';
	}
}
else{echo'nie ma artyku³ów';}
?>
</div>
-->