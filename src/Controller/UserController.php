<?php


namespace Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]

class UserController {
    public function loginAction() {
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;

        if ($username && $password) {
            // Vérifier l'utilisateur en base de données
            // Si correct, créer une session

            // Exemple de vérification (pseudo code, pas sécurisé pour la production)
            if ($username == 'user' && $password == 'pass') {
                session_start();
                $_SESSION['user'] = $username;
                echo "Connexion réussie";
            } else {
                echo "Identifiants incorrects";
            }
        } else {
            echo "Veuillez fournir un nom d'utilisateur et un mot de passe.";
        }
    }
}

// Création d'une instance de UserController et appel à loginAction
$controller = new UserController();
$controller->loginAction();

?>
