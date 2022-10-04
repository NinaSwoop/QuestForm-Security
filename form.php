<?php
  var_dump($_POST);
?>

<?php

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // nettoyage et validation des données soumises via le formulaire 
        if(!isset($_POST["user_firstname"]) || trim($_POST["user_firstname"]) == '') 
            $errors[] = "Le prénom est obligatoire";
        if(!isset($_POST["user_lastname"]) || trim($_POST["user_lastname"]) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST["user_email"]) || trim($_POST["user_email"]) || (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) === '') 
            $errors[] = "L'adresse mail est obligatoire'";
            if(!isset($_POST["phone"]) || trim($_POST["phone"]) === '') 
            $errors[] = "Le numéro de téléphone est obligatoire";
        if(empty($errors)) {
            // traitement du formulaire
            // puis redirection
            header('Location: thanks.php');
        } 
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quête formulaire</title>
</head>
<body>
<main class="container">
  <h1> Formulaire de contact </h1>

<?php // Affichage des éventuelles erreurs 
             if (count($errors) > 0) : ?>
                <div class="errormessages">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        <?php endif; ?>

<form  action=""  method="post" class="errormessages">
    <div>
      <label  for="nom">Nom :</label>
      <input type="text"  id="nom"  name="user_lastname" required>
    </div>
    <br>
    <div>
      <label  for="prenom">Prénom :</label>
      <input type="text"  id="prenom"  name="user_firstname" required>
    </div>
    <br>
    <div>
      <label  for="courriel">Courriel :</label>
        <input type="email"  id="courriel"  name="user_email" required>
    </div>
    <br>
    <div>
      <label  for="telephone">Téléphone :</label>
      <input type="number"  id="telephone" name="phone" required>
    </div>
    <br>
    <br>
    <label for="sujet">Choisissez un sujet :</label>
<select name="sujet" id="sujet-select" required>
    <option value="">--Choisissez un sujet : --</option>
    <option value="php">PHP</option>
    <option value="js">JavaScript</option>
    <option value="c++">C++</option>
    <option value="angular">Angular</option>
    <option value="react">React</option>
</select>
<br>
<br>
<div>
      <label  for="message">Message :</label>
      <textarea id="message"  name="user_message"></textarea>
    </div>
    <br>
<br>
    <div  class="button">
      <button type="submit">Envoyer votre message</button>
    </div>

  </form>
                        </main>
</body>
</html>
