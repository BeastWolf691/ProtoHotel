<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'email@example.com'; // Mettez ici l'adresse email de destination
    $headers = "From: $email";
    $body = "Vous avez reçu un nouveau message de $firstname $lastname:\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        $_SESSION['success_message'] = "Merci, $firstname. Votre message a été envoyé.";
    } else {
        $_SESSION['error_message'] = "Erreur : Votre message n'a pas pu être envoyé. Veuillez réessayer plus tard.";
    }

    header("Location: ".$_SERVER['PHP_SELF']); // Recharger la même page après soumission du formulaire
    exit();
}

?>

<link href="../../src/styleProject.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!--lien de bootstrap-->

<div class="container">
    <h1>Contactez-nous</h1>
    <p>Si vous avez des questions ou besoin d'informations supplémentaires, n'hésitez pas à nous contacter.</p>

    <!-- Display success or error messages -->
    <?php if (isset($_SESSION['success_message'])) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['success_message'];
            unset($_SESSION['success_message']); ?>
        </div>
    <?php elseif (isset($_SESSION['error_message'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['error_message'];
            unset($_SESSION['error_message']); ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Votre nom complet">
        </div>

        <div class="form-group">
            <label for="firstname">Prénom :</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="Votre prénom complet">
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="Votre adresse email">
        </div>

        <div class="form-group">
            <label for="subject">Sujet :</label>
            <select type="text" class="form-control" id="subject" name="subject" required placeholder="Sujet de votre message">
                <option value="">Choisissez un sujet</option>
                <option value="services">Services</option>
                <option value="employes">Employé(e)s</option>
                <option value="room">Chambres</option>
                <option value="others">Autres</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Message :</label>
            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Votre message"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer le message</button>
        <div class="d-grid gap-2 d-md-block">
            <a href="../../index.php" class="btn btn-success" type="button">Accueil</a>
        </div>
    </form>
</div>