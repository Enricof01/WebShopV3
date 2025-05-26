<?php
require 'db.php';
require '../lib/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

if ($_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST["email"], $_POST["passwort_hash"], $_POST["secret"], $_POST["code"])) {

    $email = $_POST["email"];
    $passwortHash = $_POST["passwort_hash"];
    $secret = $_POST["secret"];
    $code = $_POST["code"];

    // 2FA-Code prüfen
    $isValid = $ga->verifyCode($secret, $code, 2);

    if ($isValid) {
        // Benutzer in DB speichern
        $stmt = $verbindung->prepare("INSERT INTO Kunde (Email, PasswortHash, ZweiFaktorSecret, ZweiFaktorAktiv) VALUES (?, ?, ?, 1)");
        $stmt->bind_param("sss", $email, $passwortHash, $secret);

        if ($stmt->execute()) {
            // Erfolgreich registriert – Weiterleitung zur Login-Seite
            header("Location: login.php");
            exit;
        } else {
            echo "<h3>❌ Fehler beim Speichern in der Datenbank.</h3>";
        }
    } else {
        echo "<h3>❌ Der Authentifikator-Code ist ungültig. Bitte versuche es erneut.</h3>";
    }
} else {
    echo "<h3>❌ Fehlende Eingaben. Bitte das Formular korrekt ausfüllen.</h3>";
}
?>


