<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci</title>
</head>
<body>

<p> Merci <?php echo $_POST ["user_lastname"]; ?> <?php echo $_POST["user_firstname"]; ?> de nous avoir contacté à propos de <?php echo $_POST["sujet"]; ?> </p>
</br>
<p> Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST["user_email"]; ?> ou par téléphone au <?php echo $_POST["phone"] ?> dans les plus brefs délais pour traiter votre demande : </p>
</br>
<p><?php echo $_POST["user_message"]; ?></p>
</div>


</body>
</html>