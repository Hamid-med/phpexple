<?php 

include 'connexion.php';

if(isset($_POST['send'])){

    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $images=$_POST['images'];
    $date_de_publication=$_POST['date_de_publication'];

    $db->query("INSERT  INTO livres (titre,auteur,images,date_de_publication) VALUES('$titre','$auteur','$images','$date_de_publication')");
    header("location:aff.php");

}

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $images = $_POST['images'];
    $date_de_publication = $_POST['date_de_publication'];

    $db->query("UPDATE livres SET titre='$titre', auteur='$auteur', images='$images', date_de_publication='$date_de_publication' WHERE id=$id")
    or die($db->error());

    header("Location: /Projet/aff.php");

}
?>