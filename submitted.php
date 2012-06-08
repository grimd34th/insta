<?php
error_reporting(-1);
include("core/wallet.php");
include('templates/header.php');

// Submitted page
?>
        <div class="page-header">
          <h1>Daily Litecoin <small>In progress...</small></h1>
        </div>
        <div class="row">
          <div class="span10">
          
<center>
<?php
if(isset($_POST['name'])) { $name = $_POST['name']; }
$ip = $_SERVER['REMOTE_ADDR'];
if(!$name){header("location: daily.php");}
else
{
 $a = fopen("addresses/$ip.txt","a+");
 fwrite($a,"-------------------------\n");
 fwrite($a,$ip."\n");
 fwrite($a,$name."\n");
 fclose($a);
 ?>
 <html><br>
 <h1>Submitted!</h1><br>
 You will get your LTC in the end of this round !
 </html>
 <?
 echo "</table>";
 fclose($a);
 }
?>
<form action="index">
<input type="submit" value="Back">
</center></form>
</div>
<?
include("templates/sidebar.php");
include('templates/footer.php');
?>

