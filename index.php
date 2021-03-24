<?php

require_once 'connexion.php';
require_once 'update.php';
// require_once 'aff.php';



?>

<!doctype html>
<link rel="stylesheet" href="index.css">
<html>
<body>
<header>
       <nav>
        <h1 class="logo">LIBRARY</h1>
        <ul>
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="aff.php">Books</a></li>
        </ul>
      </nav>
      <div class="intro-content">
        <h2>Lest Of <span class="highlight">Books</span></h2>
      </div>
    </header>
<form action="insert.php" method="post">
    <input type="hidden" name='id' value="<?php echo $id?>">
<input type="text" name="titre" value="<?php echo $titre?>"></br></br>
<input type="text" name="auteur" value="<?php echo $auteur?>"></br></br>
<input type="file" name="images" value="<?php echo $images?>"></br></br>
<input type="date" name="date_de_publication" value="<?php echo $date_de_publication?>"></br></br>
<?php if($update == true): ?>
<input type="submit" value="update" name="update">
<?php else: ?>
<input type="submit" value="send" name="send">
<?php endif?>
</form>
    <footer>
        <p>© 2021 Hamidlibriry</p>
    </footer>
</body>
</html>






