<link href="../../src/styleProject.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!--lien de bootstrap-->

<div class="container">
        <h1>Création de compte</h1>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="email">Adresse email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Mot de passe:</label>
                <input type="password" class="form-control" id="pwd" name="password" required>
            </div>
            <div class="form-group">
                <label for="address">Adresse postale :</label>
                <input type="address" class="form-control" id="address" name="address">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrement</button>
            <div class="form-group">
            </div>
            <div class="form-group">
                <button class="custom-google-btn" id="googleSignIn">Connexion avec Google</button>
            </div>
            <ul>
                <li class="nav-item">
                    <button type="button" class="btn btn-success">
                        <a class="nav-link" href="../../index.php">Accueil</a></button>
                </li>
            </ul>
            
        </form>
    </div>
