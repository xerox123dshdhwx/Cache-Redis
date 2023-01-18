<?php
include('connexion_db.php');
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
        <input type="submit" value="Send">
    </form>
</div>
