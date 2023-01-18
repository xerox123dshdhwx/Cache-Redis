<?php
include('connexion_db.php');


if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $output = shell_exec("python script\main.py $nom $email");

    echo $output;
}

?>

<div>
    <a href="accueil.php">
        <span>Accueil</span>
    </a>
</div>

<div>
    <h1>Connexion</h1>
    <form method="POST">
        <label>
            Your name (Required) :
            <input type="text" name="nom" required>
        </label>
        <label>
            Your email (Required) :
            <input type="email" name="email" required>
        </label>
        <input type="submit" value="Connexion">
    </form>
</div>
