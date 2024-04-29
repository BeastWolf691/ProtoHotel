<?php
session_start();

// Prepare messages for output
$success_message = '';
$error_message = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'email@example.com'; // Mettez ici l'adresse email de destination
    $headers = "From: $email";
    $body = "Vous avez reçu un nouveau message de $name:\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        $_SESSION['success_message'] = "Merci, $name. Votre message a été envoyé.";
    } else {
        $_SESSION['error_message'] = "Erreur : Votre message n'a pas pu être envoyé. Veuillez réessayer plus tard.";
    }

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
    <div class="banniere">
        <h1 class="titre">GT Hôtel</h1>
    </div>

    <div class="container">
        <h1>Contactez-nous</h1>
        <p>Si vous avez des questions ou besoin d'informations supplémentaires, n'hésitez pas à nous contacter.</p>

        <!-- Display success or error messages -->
        <?= $success_message ?>
        <?= $error_message ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Votre nom complet">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Votre adresse email">
            </div>

            <div class="form-group">
                <label for="subject">Sujet :</label>
                <input type="text" class="form-control" id="subject" name="subject" required placeholder="Sujet de votre message">
            </div>

            <div class="form-group">
                <label for="message">Message :</label>
                <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Votre message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer le message</button>
        </form>
    </div>
</body>
</html>
