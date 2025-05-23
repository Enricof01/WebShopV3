<?php
// Fehleranzeige aktivieren
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verbindungsdaten
$host = "localhost";
$user = "root";  // Standardbenutzer in XAMPP
$password = "";  // Standardpasswort in XAMPP (leer)
$database = "login";  // Deine Datenbank "login"

// Verbindung herstellen
$verbindung = new mysqli($host, $user, $password, $database);

// Fehlerüberprüfung
if ($verbindung->connect_error) {
    die("Verbindung fehlgeschlagen: " . $verbindung->connect_error);
}

echo "Erfolgreich verbunden!";
?>
