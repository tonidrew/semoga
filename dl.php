<?php
header("HTTP/1.1 403 Forbidden");
$judul = $_GET['file'];
$subId = $_GET['subId'];
$cc = trim($_SERVER["HTTP_CF_IPCOUNTRY"]);
if ($cc == "CH"||$cc == "BE"||$cc == "DK"||$cc == "NO"||$cc == "FR"||$cc == "IT"||$cc == "ES") 
{
$offer = 'https://look.tracln.com/offer?prod=1&ref=5251514&q='.$judul.'&sub_id='.$subId.'';
}
else
{
$offer = 'https://look.tracln.com/offer?prod=1&ref=5251514&q='.$judul.'&sub_id='.$subId.'';
}
header("location: $offer");
?>