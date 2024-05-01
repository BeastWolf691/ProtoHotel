<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../../src/styleProject.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!--lien de bootstrap-->

<body>


    <?php
    if (isset($_POST['lastname']) && !empty($_POST['lastname'])) {
        echo  $_POST['lastname'];
    }

    if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {
        echo  $_POST['firstname'];
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        echo  $_POST['email'];
    }

    if (isset($_POST['subject']) && !empty($_POST['subject'])) {
        echo $_POST['subject'];
    }

    if (isset($_POST['message']) && !empty($_POST['message'])) {
        echo $_POST['message'];
    }


    ?>

    <a href="..//View/contact.php">retour</a> <!--permet de mettre le lien et retourner au formulaire directement--->

    <div class="d-grid gap-2 d-md-block">
        <a href="../../../protoHotel/index.php" class="btn btn-success" type="button">Accueil</a>
    </div>
</body>

</html>