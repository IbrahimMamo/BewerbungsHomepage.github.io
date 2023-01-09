<?php

// Verbindung zum E-Mail-Server herstellen
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('it.ibrahimmam@gmail.com')
  ->setPassword('IT51373Im');

// E-Mail-Nachricht erstellen
$mailer = new Swift_Mailer($transport);
$message = (new Swift_Message('Betreff der E-Mail'))
  ->setFrom(['absender@example.com' => 'Name des Absenders'])
  ->setTo(['it.ibrahimmamo@gmail.com' => 'Name des Empfängers'])
  ->setBody('Der Inhalt der E-Mail');

// E-Mail senden
$result = $mailer->send($message);

if ($result > 0) {
    echo "E-Mail wurde erfolgreich gesendet.";
} else {
    echo "Fehler beim Senden der E-Mail.";
}

?>
