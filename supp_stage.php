<?php
session_start();
include('cadre.php');
mysqli_connect("localhost", "root", "root");
$link =mysqli_connect("localhost", "root", "root");
mysqli_select_db($link,"gestion");
?>
<html>
<div class="corp">
<center><h1>Supression du stage</h1></center>
<div class="formulaire">
<?php
if(isset($_GET['supp_stage'])){
$id=$_GET['supp_stage'];
mysqli_query($link,"delete from stage where numstage='$id'");
echo '<h1>Suppression avec succes ! </h1>';
echo '<br/><br/><a href="index.php">Revenir � la page d\'accueill !</a>';
}
?>
</div>
</div>
</html>

