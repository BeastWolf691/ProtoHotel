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

<link href="../../src/styleProject.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!--lien de bootstrap-->

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
            <div class="d-grid gap-2 d-md-block">
            <a href="../../index.php"class="btn btn-success" type="button">Accueil</a>
            </div>
        </form>
    </div>

</body>
</html>
