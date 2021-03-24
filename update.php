<?php
require 'connexion.php';

    session_start();

    $db =new mysqli("localhost","root","","librairie");

    $update = false;
    $titre = '';
    $auteur = '';
    $images = '';
    $date_de_publication = '';

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $result = $db->query("SELECT * FROM livres WHERE id=$id") or die($db->error());
        $rdata = $result->fetch_array();

        $titre = $rdata['titre'];
        $auteur = $rdata['auteur'];
        $images = $rdata['images'];
        $date_de_publication = $rdata['date_de_publication'];

        $update = true;

    }

    

?>
