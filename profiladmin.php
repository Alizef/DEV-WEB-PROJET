<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil de l'utilisateur</title>

    <style>
        body {
            margin: 20px;
            background-color: #F5F5DC;
        }
        h1 {
            text-align: center;
            color: #FFFAFA;
            background: #2D9988;
        }
        img {
            height: 25px;
            width: 25px;
        }

        li {
            font-family: Roboto Condensed;
            color: gray;
            font-size: 16px;
        }
        .wh a{
            float:right;
            right: -200px;
            color: #2D9988;
            text-decoration:none;
        }
        .w a{
            color: black;
            font-size: 20px;
            font-family: Roboto Condensed;
            text-decoration:none;
        }


    </style>
</head>
<body>
	<header>
		<h1>Profil de l'utilisateur</h1>
	</header>

    <a href="/accueil2.php"><img src="home.png" alt="problème"></a>

	<main>
		<section>
			<h2>Informations personnelles</h2>
			<ul>
				<li><strong>Nom :</strong> 

				<?php echo 'Name is ' . $_SESSION['username'] . '.<br>'; ?>
				</li>


				<li><strong>Date de naissance :</strong> <?php 
				echo 'Date is ' . $_SESSION['date'] . '.<br>'; ?></li>
				<li><strong>Email :</strong> <?php 
				echo 'email is ' . $_SESSION['email'] . '.<br>'; ?></li>
			</ul>
		</section>


<div class="wh">
		<a href="/deconnexion.php">Se deconnecter</a> 
        <br>
		<a href="/supprimer-compte.php">Supprimer mon compte</a>
    </div>

<br><br><br>

		<section>
			<h2>Gestion du site</h2>
			<ul><div class ="w">
				<li><a href="ajout-recette.php">Ajout de recettes</a>
				</li>

				<li><a href="commentaires.php">Accès au commentaires</a></li>
    </div></ul>
		</section>
		
	</main>
	
</body>
</html>
