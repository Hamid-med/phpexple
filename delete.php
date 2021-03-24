<?php
require 'connexion.php';
$id=$_GET['id'];
$req="DELETE from livres where id=$id";
$query=mysqli_query($db,$req);
if(isset($query)){
    header("location:aff.php");
}
?>