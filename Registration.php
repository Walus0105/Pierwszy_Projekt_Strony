
   
    
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
            <form action="Registration_Processing.php" method="post">
    
                
            <legend>Rejestracja konta</legend>
            <br/>
            <div class="dataBox">
                <label for="name">Imię</label>
                <input type="text" name="username" placeholder="Imię">
            </div>
            <br/>
            <div class="dataBox">
                <label for="surname">Nazwisko</label>
                <input type="text" name="surname" placeholder="Nazwisko">
            </div>
            <br/>
            <div class="dataBox">
                <label for="email">Adres e-mail</label>
                <input type="text" name="email" placeholder="person@gmail.com">
            </div>
            <br/>
            <div class="dataBox">
                <label for="passAccount">Podaj hasło</label>
                <input type="password" name="password" placeholder="Hasło">
            </div>
            <br/>
            <div class="dataBox">
                <label for="repeatPass">Powtórz hasło</label>
                <input type="password" name="repeatPass" placeholder="Powtórz hasło">
            </div>
            <br/>
            <div class="registeration">
                <input type="submit" class="registerButton" value="Zarejestruj się!"/>
            </div>
            <br/>
            </form>
        </div>
    </div>

</body>
</html>