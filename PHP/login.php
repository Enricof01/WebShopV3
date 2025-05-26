<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require 'db.php';
require '../lib/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email'], $_POST['passwort'], $_POST['code'])) {
    $email = trim($_POST['email']);
    $passwort = $_POST['passwort'];
    $code = $_POST['code'];
    $passwortHash = hash('sha512', $passwort);

    $stmt = $verbindung->prepare("SELECT PasswortHash, ZweiFaktorSecret, ZweiFaktorAktiv, PasswortGeaendert FROM Kunde WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($hashDB, $secret, $zweiFaktorAktiv, $passwortGeaendert);

    if ($stmt->fetch()) {
        $stmt->close();

        if ($passwortHash !== $hashDB) {
            header("Location: ../html/login.html?error=wrong_password");
            exit;
        }

        if ($zweiFaktorAktiv) {
            $isValid = $ga->verifyCode($secret, $code, 2);
            if (!$isValid) {
                header("Location: ../html/login.html?error=invalid_2fa");
                exit;
            }
        }

        $_SESSION['email'] = $email;

        if ($passwortGeaendert == 0) {
            // ✅ Wichtig: relativer Pfad OHNE Slash oder ../
            header("Location: passwort_aendern.php");
            exit;
        } else {
            header("Location: ../html/Benutzerseite.html");
            exit;
        }
    } else {
        $stmt->close();
        header("Location: ../html/login.html?error=user_not_found");
        exit;
    }
} else {
    header("Location: ../html/login.html?error=empty");
    exit;
}
