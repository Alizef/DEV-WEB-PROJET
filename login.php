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
            margin-bottom: 10px;
            float: right;
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

        input {
            border: solid 1px orange;
            margin-bottom: 10px;
            padding: 16px;
            outline: none;
            border-radius: 7px;
            width: 300px;
        }

        .erreur {
            text-align: center;
            color: red;
            margin-top: 10px;
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

        .no-account {
            text-align: center;
            margin-top: 20px;
            font-size: 10pt;
            color: #2D9988;
            position: relative;
        }

        .no-account img {
            height: 25px;
            width: 25px;
            position: absolute;
            right: -40px;
            top: 70%;
            transform: translateY(-50%);
        }

        
    </style>
</head>

<body>
    <h1>Authentification</h1>

    <br><br><br>

    <form name="form" action="verification.php" method="POST">
        <h1>Login</h1>
        <div>
            <label for="username">Username:</label>
            <input type="username" name="username" id="username" placeholder="Entrez votre username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">
        </div>
        <input type="submit" name="valider" value="S'authentifier">

        <div class="no-account">
            <a href="/creercompte.php">Toujours pas de compte?</a>
            <a href="accueil2.php"><img src="home.png" alt="problème"></a>
        </div>
    </form>
</body>
</html>
