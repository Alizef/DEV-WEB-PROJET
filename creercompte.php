<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        * {
            font-family: arial;
        }

        body {
            margin: 20px;
            background-color: #F5F5DC;
        }

        form {
            margin-top: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            text-align: center;
            color: #FFFAFA;
            background: #2D9988;
        }

        input[type=submit] {
            margin-bottom: 15px;
            float: right;
            right : -70px;
            outline: none;
            width: 100px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: #FFF;
            background-color: #2D9988;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #0099CC;
        }

        label{
            font-family: Roboto Condensed;
            color: gray;
            font-size: 16px;
        }

        input {
            margin-top: 30px;
            margin-bottom: 10px;
            padding: 10px;
            outline: none;
            border-radius: 7px;
            width: 200px;
            display: block;
            margin: 0 auto;
        }

        a {
            font-size: 12pt;
            color: #2D9988;
            text-decoration: none;
            font-weight: normal;
            font-family: arial;
        }

        a:hover {
            text-decoration: underline;
        }
img {
            height: 25px;
            width: 25px;
            position: absolute;
            right: -160px;
            top: -4%;
            transform: translateY(-50%);
}
    
    </style>
</head>

<body>

<br><br>
<h1> Modification compte </h1>

<form name="form" action="creation.php" method="POST">
        <div>
            <label for="Nom "> Nom: </label>
            <input type="nom" name="nom" id="nom" placeholder="Entrez vore nom">
        </div><br><br>
		<div>
            <label for="Prenom "> Prenom: </label>
            <input type="prenom" name="prenom" id="prenom" placeholder="Entrez vore prénom">
        </div><br><br>
        <div>
            <label for="Email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Entrez vore email">
        </div><br>
		<div>
            <label for="Confirmationemail">Confirmation email:</label>
            <input type="confirmationemail" name="confirmationemail" id="confirmationemail" placeholder="Confirmez vore email">
        </div><br><br>
		<div>
		<label>Date de naissance : </label>
		<input type="date" name="date"><br><br>
		</div><br><br>
        
        <label for="id "> Identifiant: </label>
        <input type="id" name="id" id="id" placeholder="Entrez vore id">
        <br><br>

        <label for="motdepasse "> Mot de passe: </label>
        <input type="motdepasse" name="motdepasse" id="motdepasse" placeholder="Entrez vore mot de passe">
        <br><br>

        <label for="confirmationmotdepasse "> Confirmation mot de passe: </label>
        <input type="confirmationmotdepasse" name="confirmationmotdepasse" id="confirmationmotdepasse" placeholder="Entrez vore mot de passe">
        <br><br>

		<input type="submit"  name="valider" value="Creation">
        <a href="accueil2.php"><img src="home.png" alt="problème"></a>
 
 </form>


 </body> 
</html>