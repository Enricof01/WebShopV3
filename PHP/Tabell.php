<?php
require 'db.php';
$sql = "CREATE TABLE IF NOT EXISTS registrierung (
  id INT AUTO_INCREMENT PRIMARY KEY,
  benutzername VARCHAR(20) NOT NULL,
  passwort_hash VARCHAR(128) NOT NULL,
  zwei_faktor_code VARCHAR(10) NOT NULL,
  zwei_faktor_aktiv TINYINT NOT NULL DEFAULT 0,
  verifizierter_code TINYINT NOT NULL DEFAULT 0,
  zwei_faktor_secret VARCHAR(64) NOT NULL,
  letzter_login DATE NOT NULL
)";
?>
