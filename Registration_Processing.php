
<?php

if (empty($_POST["username"])) {
    die("Imie jest wymagane");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Email jest niepoprawny");
}

if (strlen($_POST["password"]) < 5) {
    die("hasło musi miec conajmniej 5 znaków");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Hasło musi mieć conajmniej jedna litere");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Hasło musi mieć conajmniej jedna liczbe");
}

if ($_POST["password"] !== $_POST["repeatPass"]) {
    die("Hasła nie sa identyczne");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/connecting.php";

$sql = "INSERT INTO user (imie, nazwisko, e-mail, password_hash)
        VALUES (?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
    $_POST["username"],
    $_POST["surname"],
    $_POST["email"],
    $password_hash
);
                  
if ($stmt->execute()) {

    header("Location: Wysyłka.php");
    exit;
    
} else {
    if ($mysqli->errno === 1062) {
        die("Ten adres e-mail jest już używany. Proszę podać inny adres e-mail.");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
    
}

?>

