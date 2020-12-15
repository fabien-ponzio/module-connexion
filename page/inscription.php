 <!-- le formulaire d'inscription doit contenir l'ensemble des champs présents dans la table utilisateurs SAUF ID 
+ on rajoute un champ confirmation de mot de passe  -->
<?php
require_once('../Config/functions.php');
$path_index="../index.php";
$path_inscription="inscription.php";
$path_connexion="connexion.php";
$path_profil="profil.php";
$path_admin="admin.php";
$header_css=('../css/header.css');
$headerCSS = ("../CSS/header.css");
$id_page=0;

$header_title = 'Connexion';
$header_config = "../Config/bdd.php";
$image_header ="../image/logobb.png";

require_once("header.php");
if (isset($_POST['register'])) {
    inscription($_POST['login'], $_POST['prenom'],$_POST['nom'], $_POST['password'], $_POST['confirm_password'], $bdd);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/inscription.css">
    <title>Document</title>
</head>

<body>
    
<main id="mainInscription">
    <form id="formInscription" action="inscription.php" method="POST">

    <h1>
        Inscrivez-vous!
    </h1>

            <input id="inputLogin" type="text" name="login" placeholder="Votre login...">

        <div id="formNom">
            <input id="inputName" type="text" name="prenom" placeholder="Votre prénom...">

            <input id="inputName" type="text" name="nom" placeholder="Votre nom...">
        </div>

        <input id="inputPW" type="password" name="password" placeholder="Votre mot de passe...">
        
        <input id="inputCPW" type="password" name="confirm_password" placeholder="Confirmez votre mot de passe...">

        <input id="inputSub" type="submit" name="register" id="bouton_inscription">

    </form>
</main>

</body>
</html>
<?php
$footer_css = "../CSS/footer.css";
$img_footer = "../image/logobb2.png";
require_once("footer.php")
?>