<?php
session_start();

// Connexion à la base de données MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gthotel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validation des données du formulaire
    $errors = [];
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Vérification des champs obligatoires
    if (empty($lastname) || empty($firstname) || empty($email) || empty($subject) || empty($message)) {
        $errors[] = "Tous les champs sont obligatoires";
    }

    // Insertion des données dans la base de données
    if (empty($errors)) {
        $sql = "INSERT INTO formulaire_contacts (lastname, firstname, email, subject, message) VALUES (:lastname, :firstname, :email, :subject, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        // Envoi d'un e-mail de notification à l'administrateur
        $to = 'admin@example.com';
        $headers = "From: $email";
        $admin_body = "Nouveau message de contact reçu de $firstname $lastname :\n\n$message";
        mail($to, $subject, $admin_body, $headers);

        $_SESSION['success_message'] = "Merci, $firstname. Votre message a été envoyé.";
    } else {
        $_SESSION['error_message'] = implode("<br>", $errors);
    }

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>
