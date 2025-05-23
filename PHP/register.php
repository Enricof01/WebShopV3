<?php
require 'db.php';
require '../lib/GoogleAuthenticator.php';/*importiert die Verbindung und lädt die klasse für googleAuthen*/

$ga = new PHPGangsta_GoogleAuthenticator();/*Erstellt neues Objekt*/

if($_SERVER["REQUEST_METHOD"] === "POST") { /*prüft ob das Formular bereits abgeschickt wurde(per POST)*/
    $benutzername = $_POST["benutzername"];
    $passwort = password_hash($_POST["passwort"], PASSWORD_BCRYPT);/*holt benutzername aus dem Formular und verschlüsselt das Passwort*/

    $secret = $ga->createSecret(); /*erstellt zufälliges secret (Buchstaben und Zahlenkette)*/
    
    $qrCodeUrl = $ga->getQRCodeGoogleUrl("MeinProjekt:" . $benutzername, $secret);
    
    echo "<h2>Scanne diesen QR-Code mit der Google Authenticator App:</h2>";
    echo "<img src='$qrCodeUrl'><br><br>";
    echo "<form method='POST' action='verify_2fa.php'>
    <input type='hidden' name='benutzername' value='$benutzername'>
    <input type='hidden' name='passwort' value='$passwort'>
    <input type='hidden' name='secret' value='$secret'>
    <label>Code vom Google Authenticator:</label><br>
    <input type='text' name='code' required>
    <button type='submit'>Bestätigen</button>
    </form>";

}   else {
    echo '<form method="POST">
    <label>Benutzername:</label><br>
    <input type="text" name="benutzername" required><br>
    <label>Passwort:</label><br>
    <input type="password" name="passwort" required><br>
    <button type="submit">Registrieren</button>
</form>';






}
?>