<!-- Le formulaire doit avoir deux inputs : "Login" et "password"
Lorsque le formulaire est validé, si un user correspond aux informations de la bdd alors :
l'utilisateur devient connecté et une variable de session est créées !-->
<?php
require_once('../Config/functions.php');
$path_index="../index.php";
$path_inscription="inscription.php";
$path_connexion="connexion.php";
$path_profil="profil.php";
$path_admin="admin.php";
$id_page=0;
$header_css=('../css/header.css');
$headerCSS = ("../CSS/header.css");
$header_title = 'Connexion';
$image_header ="../image/logobb.png";
require_once("header.php");
// $header_title = 'Admin';
if (isset($_POST['connect'])) {
    connexion($_POST['login'], $_POST['password'], $bdd);
}

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../CSS/connexion.css">
     <title>Document</title>
 </head>
 <body>
     <form id="formConnexion" action="connexion.php" method="POST">

        <h1> Connectez-vous ! </h1>

        <input id="inputText" type="text" name="login" placeholder="Votre Login...">

        <input id="inputPW" type="password" name="password" placeholder="Votre Mot de passe...">

        <input id="inputSub" type="submit" name="connect">

     </form>
 </body>
 </html>
 <?php
 $footer_css = "../CSS/footer.css";
 $img_footer = "../image/logobb2.png";
 require_once("footer.php")
 ?>