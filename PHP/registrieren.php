<?php
require 'db.php';
require '../lib/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["benutzername"])) {
    $email = trim($_POST["benutzername"]);

    // Mindestlänge prüfen
    if (strlen($email) < 5) {
        echo "<p style='color:red;'>Die E-Mail muss mindestens 5 Zeichen lang sein.</p>";
        // Formular erneut anzeigen
    } else {
        // Zufälliges Passwort generieren
        $passwort = bin2hex(random_bytes(4)); // 8 Zeichen hex (z.B. 'a1b2c3d4')
        $passwortHash = hash('sha512', $passwort);

        $secret = $ga->createSecret();

        // E-Mail mit Passwort verschicken (hier einfach Mailfunktion lokal oder Mailhog nutzen)
        $betreff = "Dein erstes Passwort für MeinProjekt";
        $nachricht = "Hallo,\n\nDein temporäres Passwort lautet: $passwort\nBitte logge dich damit ein und ändere dein Passwort.\n\nViele Grüße,\nMeinProjekt Team";
        $header = "From: no-reply@meinprojekt.local";

        if (mail($email, $betreff, $nachricht, $header)) {
            // Erfolgreich gesendet: QR-Code mit 2FA zeigen
            $qrCodeUrl = $ga->getQRCodeGoogleUrl("MeinProjekt:" . $email, $secret);

            echo "<h2>Eine E-Mail mit deinem Passwort wurde versandt.</h2>";
            echo "<h3>Scanne jetzt diesen QR-Code mit der Google Authenticator App:</h3>";
            echo "<img src='$qrCodeUrl'><br><br>";

            // Formular für 2FA-Code (mit versteckten Feldern)
            echo "<form method='POST' action='verify_2fa.php'>
                <input type='hidden' name='email' value='" . htmlspecialchars($email) . "'>
                <input type='hidden' name='passwort_hash' value='" . htmlspecialchars($passwortHash) . "'>
                <input type='hidden' name='secret' value='" . htmlspecialchars($secret) . "'>
                <label>Code vom Google Authenticator:</label><br>
                <input type='text' name='code' required><br><br>
                <button type='submit'>Bestätigen</button>
            </form>";
        } else {
            echo "<p style='color:red;'>❌ Fehler beim Senden der E-Mail. Bitte überprüfe die Einstellungen.</p>";
        }

        exit; // kein Formular mehr anzeigen
    }
}

// Anfangs-Formular
?>

<h2>Registrierung</h2>
<form method="POST" action="">
    <label>Email (Benutzername):</label><br>
    <input type="email" name="benutzername" required><br><br>
    <button type="submit">Registrieren</button>
</form>
