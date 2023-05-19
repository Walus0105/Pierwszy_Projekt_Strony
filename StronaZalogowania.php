<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona rejestracyjna</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css"/>
  
    
</head>
<body class="registerBody">
    <div class="main">
        <h1>MotoMania</h1>

        <ul>
            <li class="reference"><a class="main" href="index.php">Strona główna</a></li>
            <li class="reference"><a class="main" href="DrugaPodstrona.php">Kontakt</a></li>
        </ul>
    </div>
    <div class="regContainer"> 
        <div class="registerBox">
            <form action="Registration.php" method="post">
                
            <legend>Zaloguj się</legend>
            <br/>
            <div class="dataBox">
                <label for="nick">Podaj nazwę użytkownika</label>
                <input type="text" name="nick" placeholder="Podaj swój nick">
            </div>
            <br/>
            <div class="dataBox">
                <label for="passAccount">Podaj hasło</label>
                <input type="password" name="passAccount" placeholder="Hasło">
            </div>
            <div class="registeration">
                <input type="submit" class="registerButton" value="Zaloguj się!"/>
            </div>
            <br/>
            </form>
        </div>
    </div>

</body>
</html>