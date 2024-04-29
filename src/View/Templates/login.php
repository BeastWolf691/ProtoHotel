<link href="/src/View/Templates/login.php" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!--lien de bootstrap-->

<body>
    <div class="connexion">
        <form method="post" action="login.php">
            <label for="date_arrival">Identifiant :</label>
            <input type="text" name="username" required />
            <label for="date_arrival">Mot de passe :</label>
            <input type="password" name="password" required />
            <input type="submit" value="Connexion" />
        </form>
    </div>
    <div class="d-grid gap-2 d-md-block">
        <a href="../../../index.php" class="btn btn-success" type="button">Accueil</a>
    </div>
</body>