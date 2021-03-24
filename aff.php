<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
   <header>
       <nav>
        <h1 class="logo">LIBRARY</h1>
        <ul>
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="aff.php">Books</a></li>
        </ul>
      </nav>

    </header>
    <div class="add">
        <h1>LIST OF BOOKS</h1>
        <a href="index.php">ADD</a>
    </div>
<table width="100%" border="1">

   <tr>
      <th>titre </th>
      <th>auteur </th>
      <th>images </th>
      <th>date de publication</th>
      <th>supprimer</th>
      <th>modifier</th>
    </tr>

<?php

include 'connexion.php';
$id='id';
$sql="SELECT * from livres where id=$id";
$query=mysqli_query($db,$sql);
while($rows=mysqli_fetch_assoc($query)){
$id=$rows['id'];
    echo"<tr>";
echo"<td>".$rows['titre']."</td>";
echo"<td>".$rows['auteur']."</td>";
echo"<td>".$rows['images']."</td>";
echo"<td>".$rows['date_de_publication']."</td>";
echo"<td><a href='delete.php?id=".$id."'>supprimer</a></td>";
echo"<td><a href='index.php?edit=".$id."'>modifier</a></td>";
    echo"</tr>";
}

?>

</table>
<footer>
   <p>© 2021 Hamidlibriry</p>
 </footer>
    
</body>
</html>