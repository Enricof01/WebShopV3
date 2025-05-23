<?php
require 'db.php';
require '../lib/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if (
        isset($_POST["benutzername"]) &&
        isset($_POST["passwort"]) &&
        isset($_POST["secret"]) &&
        isset($_POST["code"])
    ){



    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];
    $secret = $_POST["secret"];
    $code = $_POST["code"];

    $isValid = $ga->verifyCode($secret, $code, 2);

if ($isValid){
    $stmt = $verbindung->prepare("INSERT INTO registrierung
    (benutzername, passwort_hash, zwei_faktor_secret, zwei_faktor_aktiv, letzter_login)
    VALUES (?, ?, ?, 1, NOW())");
    $stmt->bind_param("sss", $benutzername, $passwort, $secret);
    $stmt->execute();
    echo "<h3>Registrierung erfolgreich! </h3>";
} else{
    echo "<h3> Der Code ist ungültig. Bitte noch einmal versuchen.</h3>";
    }
} else{
    echo "<h3>Fehlende Eingaben. Bitte das Formular korrekt ausfüllen.</h3>";
}
} else {
    echo "<h3>Ungültige Anfrage.</h3>";
}
?>