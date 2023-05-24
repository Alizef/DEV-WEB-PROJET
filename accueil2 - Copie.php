<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Brico & co</title>
  <style>
body {
    background-color: #F5F5DC;
}

form{
    margin-top: 25px;
}

#menu-demo,
ul {
    list-style: none;
    margin: 0;
    padding: 0;
    background-color: #2D9988;
}

#menu-demo>li {
    display: inline-block;
}

#menu-demo li {
    width: 110px;
    position: relative;
}

#menu-demo li:hover {
    background: #2D9988;
}

#menu-demo a {
    text-decoration: none;
    display: block;
    padding: 10px;
    color: black;
}

img{
    height: 30%;
    width: 10%;
    float: right;
}

#menu-demo>li>ul {
    position: absolute;
    left: -1000px;
    background: #2D9988;
    border: 1px solid #F5F5DC;
}

#menu-demo>li:hover>ul {
    top: 100%;
    left: 0;
}

#menu-demo a:hover {
    text-decoration: underline;
    color: black;
}

 #menu-demo>li li:hover {
    background: #F5F5DC;
}

 img {

}

 .user-widget {
    float: right;
    color: white;
    margin-right: 20px;
 }

.user-widget a {
    display: inline-block;
    margin-right: 10px;
    color: white;
    text-decoration: none;
}


  </style>
</head>
<body>
  <form action="/search-results.html" method="get">
    <label for="search">Rechercher :</label>
    <input type="text" id="search" name="q">
    <button type="submit">Rechercher</button>
    <img src="/cergy/homee/l/lavertonag/LOGO.png" alt="problème">
  </form>

<br><br>

<?php
  header('Content-Type: text/html; charset=utf-8');

  $fichier = fopen("salon2.csv", "r");                  // Ouvrir le fichier CSV en mode lecture

  $tableau = array();                                   // Parcourir le fichier et stocker les données de chaque ligne dans un tableau
    while (($ligne = fgetcsv($fichier)) !== false) {
        $tableau[] = $ligne;
    }

    $header = array_shift($tableau);                        // Supprimer l'en-tête (la première ligne) du tableau des données

   $categories = array();                                  // Grouper les données par catégorie
    foreach ($tableau as $row) {
    $category = $row[0];
    $tuto = $row[1];
    if (!isset($categories[$category])) {
        $categories[$category] = array();
    }
    $categories[$category][] = $tuto;
    }
?>

<ul id="menu-demo">
    <?php foreach ($categories as $category => $recettes) : ?>
        <li>
            <a href="#"><?php echo $category; ?></a>
            <ul>
            <?php foreach ($recettes as $tuto) : ?>
 	   <li><a href="recette.php?tuto=<?php echo urlencode($tuto); ?>"><?php echo $tuto; ?></a></li>
	<?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>

<div class="user-widget">
                      
    <?php if( isset($_SESSION['email']) && $_SESSION['email'] == "popo@gmail.com" ) : ?>
        <a href="/profil-admin.php">Mon profil</a>

    <?php elseif( isset($_SESSION['username']) && $_SESSION['username'] !== null ) : ?>
        <a href="/profil.php">Mon profil</a>
    <?php else : ?>
        <a href="/connexion.php">Se connecter</a>
    <?php endif; ?>
</div>
</ul>

<br><br>


</body>

</html>
