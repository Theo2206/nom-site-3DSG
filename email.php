<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "theomaire70200@gmail.com"; // Remplacez par votre adresse e-mail

    $headers = "De : " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $email_body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre site.<br><br>".
        "<strong>Nom :</strong> $name <br>".
        "<strong>Email :</strong> $email <br>".
        "<strong>Sujet :</strong> $subject <br>".
        "<strong>Message :</strong> $message <br>";

    // Envoi de l'e-mail
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message. Veuillez réessayer.";
    }
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
?>
