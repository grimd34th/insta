<?
include("core/wallet.php");
include('templates/header.php');

// TEST page
?>
        <div class="page-header">
          <h1>Daily Litecoin <small>In progress...</small></h1>
        </div>
        <div class="row">
          <div class="span10">
<?php
if(isset($_GET['name'])) { $name = $_GET['name']; }
?>
<style>
.tdr{text-align:right;}
</style>
<form action="submitted.php" method="post">
 <table>
   <td class="tdr"><font color="green">Enter Your Litecoin Address Here:</font><br></td>
   <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
     <td colspan="3" align="center"><input type="submit" value="Submit"></td>
   </table>
    <html><br>
test
</html>  
   </div>

<?

include("templates/sidebar.php");
include('templates/footer.php');
?>

