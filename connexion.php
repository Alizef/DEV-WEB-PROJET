<!DOCTYPE  html>
<html>
<head>
    <meta charset="utf-8"/>
    <style>
        * {
            font-family: arial;
        }
 
        body {
            margin: 20px;
        }
 
        form {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -150px;
            margin-top: -100px;
        }
 
        h1 {
            text-align: center;
            color: #FFFAFA;
            background: gray;
        }
 
        input[type=submit] {
            border: solid 1px violet;
            margin-bottom: 10px;
            float: right;
            padding: 15px;
            outline: none;
            border-radius: 7px;
            width: 120px;
        }
 
        input {
            border: solid 1px violet;
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
            font-size: 14pt;
            color: blue;
            text-decoration: none;
            font-weight: normal;
        }
 
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<h1>Authentification</h1>

<form name="form" action="verification.php" method="POST">

<h1>Login</h1>
        <div>
            <label for="username">Username:</label>
            <input type="username" name="username" id="username" placeholder="Entrez vore username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Entrez vore mot de passe">
        </div>
        <input type="submit"  name="valider" value="S'authentifier">
 
 </form>




</body>
</html>




