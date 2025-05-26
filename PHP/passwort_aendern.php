<?php
session_start();
require 'db.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$email = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['neues_passwort'], $_POST['neues_passwort_wieder'])) {
    $neu = $_POST['neues_passwort'];
    $neu_wieder = $_POST['neues_passwort_wieder'];

    if ($neu !== $neu_wieder) {
        $fehler = "Die Passwörter stimmen nicht überein.";
    } elseif (strlen($neu) < 6) {
        $fehler = "Das Passwort muss mindestens 6 Zeichen lang sein.";
    } else {
        $neuHash = hash('sha512', $neu);

        $stmt = $verbindung->prepare("UPDATE Kunde SET PasswortHash = ?, PasswortGeaendert = 1 WHERE Email = ?");
        $stmt->bind_param("ss", $neuHash, $email);
        if ($stmt->execute()) {
       header("Location: ../html/Benutzerseite.html");
    exit;


        } else {
            $fehler = "Fehler beim Speichern des neuen Passworts.";
        }
        $stmt->close();
    }
}
?>

<h2>Passwort ändern</h2>
<form method="POST" action="">
    <label>Neues Passwort:</label><br>
    <input type="password" name="neues_passwort" required><br>
    <label>Neues Passwort wiederholen:</label><br>
    <input type="password" name="neues_passwort_wieder" required><br><br>
    <button type="submit">Passwort ändern</button>
</form>

<?php
if (isset($fehler)) {
    echo "<p style='color:red;'>$fehler</p>";
}
?>
