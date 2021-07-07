<?php
session_start();
 
if(isset($_GET['lang']))
{
$lang = $_GET['lang'];
 
//Registrera session + cookie
$_SESSION['lang'] = $lang;
 
 //Cookie lagrar språkinställning i en timme
setcookie('lang', $lang, time() + 3600);
}
else if(isset($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isset($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'sv';
}
 
switch ($lang) {
  case 'sv':
  $lang_file = 'lang.sv.php';
  break;
 
  case 'en':
  $lang_file = 'lang.en.php';
  break;
 
  default:
  $lang_file = 'lang.sv.php';
 
}
 
include_once 'language/'.$lang_file;
?>