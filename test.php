<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Fortunel Alizé, Trepos Pauline, Estelle Roudet, Laverton Agath, Aude Souchon">
<title>Brico & co</title>

<style>


.bar {
  background-color: #2D9988;
  height: 370px; 
  width: 100%;
  top: 0; 
  z-index: 9999; 
  overflow: auto;
}


.bar2 {
  position: absolute;
  top: 50%;
  right: 230px;
  transform: translate(-25%, -25%);
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 100%;
}

.bar3 {
  position: absolute;
  top: 50%;
  left: 230px;
  transform: translate(-20%, -20%);
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 150%;
}

.bar2 img,
.bar3 img,
.bar4 img,
.bar5 img,
.bar6 img,
.bar7 img,
.bar8 img {
  width:  200px;
  height: 200px;
  object-fit: contain;
  padding: 20px;
  background-color: red;
}


.bar4 {
  position: absolute;
  top: 50%;
  left: 490px;
  transform: translate(0%, 0%);
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 150%;
}

.bar5 {
  position: absolute;
  top: 50%;
  right: 260px;
  transform: translate(70%, 70%);
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 150%;
}

.bar6 {
  position: absolute;
  top: 50%;
  right: 560px;
  transform: translate(75%, 75%);
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 150%;
}

.bar7 {
  position: absolute;
  top: 50%;
  left: 210px;
  transform: translate(70%, 70%);
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 150%;
}

.bar8 {
  position: absolute;
  top: 50%;
  right: 1110px;
  transform: translate(73%, 73%);
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 150%;
}

.log{
  position: absolute;
  top: 50%;
  left: 75px;
  transform: translate(-57%, -57%);
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 150%;
}

.log img {
  width:  100px;
  height: 100px;
}

.espace-blanc {
  height: 1500px; 
  overflow: auto; 
  background-color: #F5F5DC;
}

.txt {
  position: absolute;
  top: calc(50% + 640px);
  width: 100%;
  text-align: center;
  font-family: Montserrat, sans-serif;
  color: gray;
}

</style>

</head>

<body>


<?php
header('Content-Type: text/html; charset=utf-8');
// Ouvrir le fichier CSV en mode lecture
$fichier = fopen("image.csv", "r");

// Parcourir le fichier et stocker les données de chaque ligne dans un tableau
$tableau = array();
while (($ligne = fgetcsv($fichier)) !== false) {
    $tableau[] = $ligne;
}

// Fermer le fichier
fclose($fichier);

$ligne1 = $tableau[0];
?>

<object data="accueil2.php" width="100%"></object>
<div class="bar"></div>
<div class="espace-blanc"></div>

<div class="log">
<?php
    echo "<img src='" . $ligne9[0] . "' alt='image'>";
    ?>
</div>


<div class="bar2">
    <?php
    echo "<div class='image'><img src='" . $ligne2[0] . "' alt='image'></div>";
    ?>
  <p>ZONE</p>
</div>

<div class="bar3">
<?php
    echo "<div class='image'><img src='" . $ligne3[0] . "' alt='image'></div>";
    ?>
  <p>ZONE</p>
</div>

<div class="bar4" id="bar4">
<?php
    echo "<div class='image'><img src='" . $ligne4[0] . "' alt='image'></div>";
    ?>
  <p>ZONE</p>
</div>

<div class="txt">
<p>Que vous soyez propriétaire ou locataire, les occasions ne manqueront pas d'exercer vos talents de bricoleur chez vous. Si certains semblent être nés avec un marteau à la main, d'autres redoutent de devoir faire un simple trou dans un mur. Ces derniers ont aussi la meilleure des excuses : ils n'ont pas le matériel adéquat. Parce que nous pensons qu'il est de notre devoir d'aider le bricoleur du dimanche, voici quelque tuto pour vous aider dans vos différents bricolages.
  <br>
En préparant soigneusement votre projet bricolage, vous êtes serein et vos travaux se passent dans le calme. Pour réussir vos travaux de bricolage, n’oubliez pas d’être organisés et prudents !</p>
</div>

<div class="bar5">
<?php
    echo "<div class='image'><img src='" . $ligne5[0] . "' alt='image'></div>";
    ?>
</div>

<div class="bar6">
<?php
    echo "<div class='image'><img src='" . $ligne6[0] . "' alt='image'></div>";
    ?>
</div>

<div class="bar7">
<?php
    echo "<div class='image'><img src='" . $ligne7[0] . "' alt='image'></div>";
    ?>
</div>

<div class="bar8">
<?php
    echo "<div class='image'><img src='" . $ligne8[0] . "' alt='image'></div>";
    ?>
</div>

<object data="footer.html" width="100%" height="500px"></object>

</body>

</html>

