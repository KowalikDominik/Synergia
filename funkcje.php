<?php



function polaczenie (){

	@mysql_connect("localhost","root","") or die ('<span style="color:red;"><b>B��d: brak po��czenia z serwerem!</span></b>');

	@mysql_select_db("news") or die ('<span style="color:red;"><b>B��d: brak po��czenia z baz� danych!</b></span>');

	mysql_query("SET NAMES latin2");

	}

	

	?>

