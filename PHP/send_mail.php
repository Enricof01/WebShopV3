<?php
function sendMail($to, $subject, $message) {
    $headers = "From: no-reply@meinprojekt.de\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        return true;
    } else {
        echo "<p style='color:red;'>❌ E-Mail konnte nicht gesendet werden.</p>";
        return false;
    }
}
?>
