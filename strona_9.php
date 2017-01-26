

<script type="text/javascript">
	function vall(){
	 formularz=document.wys;	
	 reg = /^[a-zA-Z0-9±æê³ñó¶¿¡¡ÆÊ£ÑÓ¦¯¬]{1,30}@[a-zA-Z0-9±æê³ñó¶¿¡¡ÆÊ£ÑÓ¦¯¬]+(\.[a-zA-Z0-9±æê³ñó¶¿¡¡ÆÊ£ÑÓ¦¯¬]+)+$/;
    wyn = formularz.email.value.match(reg);
    mail = formularz.email.value;
    var blad="";
    if (wyn == null){
    if (mail=="") {blad+="Podaj adres email.\n";}else{blad+="Podaj poprawny adres email.\n";}
    }
    if(blad==""){formularz.submit();}
    else{alert(blad);}
    }
</script>
<br>
<div id="site_title"><img src="theme/kontakt.jpg" alt="" style="float:left;"></div><div id="site_title" style="margin-left:330px;"><img src="theme/napiszdonas.png" alt=""></div>
<div id="txt">
<div style="clear:left; height:400px;">
<div style="font-size:19px;float:left; width: 320px; " >
<strong>Stowarzyszenie Synergia</strong><br>
<div style="font-size:13px;line-height: 150%;">
<div id="kontakt_1">
Biuro Lublin<br>
<strong>ul. In¿ynierska 3 pok. 208<br>
20-484 Lublin</strong><br>
praca: <strong>8.00-16.00</strong>
tel. <strong>081 441 75 79</strong><br>
tel. kom.<strong> 502 038 053</strong><br>
</div>
<div id="kontakt_2">
Biuro Miêdzyrzec Podlaski<br>
<strong>ul. Ko¶cielna 2 IIp.<br>
21-560 Miêdzyrzec Podlaski</strong><br>
praca: <strong>10.00-14.00</strong><br>
tel. kom. <strong>695 098 060</strong>
</div><br>
e-mail: <strong><a href="mailto:stowarzyszeniesynergia@op.pl" title="Wy¶lij E-mail">stowarzyszeniesynergia@op.pl</a></strong><br>
KRS <strong>0000308456</strong><br>
REGON <strong>060378743</strong><br>
NIP <strong>946-255-76-70</strong><br>
Konto bankowe:<br>
<strong>82 1240 2500 1111 0010 1922 6890</strong>
</div>
</div>
<div style="float: left;">
<?
if((isset($_POST['tresc']))||(isset($_POST['email']))){
$to = "stowarzyszeniesynergia@op.pl";
$subject = "E-mail ze strony www.stowarzyszeniesynergia.org";
$message = $_POST['tresc'];

$headers = "MIME-Version: 1.0 [backslash]r[backslash]n  ";
$headers .= "Content-type: text/html; charset=iso-8859-2 [backslash]r[backslash]n  ";
$headers .= "From: ".$_POST['email']." [backslash]r[backslash]n  ";
$headers .= "Bcc: ukryty mail"; //opcjonalnie
$submit = mail($to, $subject, $message, $headers); 
echo'dddd';
header('location: index.php?id=9');
}
?>
<form action="index.php?id=9" name="wys" method="post">
	<div style="float:left;margin-right:4px;">Tre¶æ wiadomo¶ci:</div>
	<textarea name="tresc" cols="50" rows="12" style="vertical-align: top;">Tu wpisz tekst wiadomo¶ci...</textarea>

	<div style="margin-left:34px;">
	Twój E-mail:
	<input type="text" name="email">
	<br>
	<input type="button" style="margin-left:270px;" value="Wy¶lij" onclick="vall();">
	</div>
</form>
</div></div>
</div>
