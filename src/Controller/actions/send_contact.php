<?php
session_start(); // Nécessaire pour stocker des messages dans la session
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: contact.php");
    exit();
}

    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'email@example.com'; // Mettez ici l'adresse email de destination
    $headers = "From: $to"; // Utiliser l'adresse email de destination comme en-tête "From"
    $body = "Vous avez reçu un nouveau message de $name:\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo $_SESSION['success_message'] = "Merci, $name. Votre message a été envoyé.";
    } else {
        echo $_SESSION['error_message'] = "Erreur : Votre message n'a pas pu être envoyé. Veuillez réessayer plus tard.";
    }
    header("Location: contact.php");
    exit();
?>

