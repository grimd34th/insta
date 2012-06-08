<?php
include("core/wallet.php");
include('templates/header.php');
echo ' <html>
        <div class="page-header">
          <h1>Daily Litecoin <small>In progress...</small></h1>
        </div>
        <div class="row">
          <div class="span10">
          
<center>';
if(isset($_POST['name'])) { $name = $_POST['name']; } else {header("location: daily.php");}
$ip = $_SERVER['REMOTE_ADDR'];
if(isset($name)) {
	$fname = "addresses/$ip.txt";
	if(is_writable($fname)){
	if(!$fp = fopen($fname,"a+")) { $error_step = "Unable To Open $fname"; }
	if(!fwrite($fp,"-------------------------\n$ip\n$name\n")){$error_step = "unable to write to $fname";}
	if(!fclose($fp)){$error_step = "Unable to close $fname check if opened";}
	echo '
<br>
 <h1>Submitted!</h1><br>
 You will get your LTC in the end of this round !
 </html>
</table>

<form action="index">
<input type="submit" value="Back">
</center></form>
</div>';
} else {$error_step = "unable to open $fname";} }
else { echo $error_step; }
include('templates/sidebar.php');
include('templates/footer.php');
?>

