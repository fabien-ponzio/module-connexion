<?php
require_once('../Config/functions.php');
$utilisateur = $_SESSION['utilisateur'];
// CSS
$header_css = "../CSS/admin.css";
$headerCSS = "../CSS/header.css";
$id_page=0;
//path 
$deconnexion="../index.php";
$path_index="../index.php";
$path_inscription="inscription.php";
$path_connexion="connexion.php";
$path_profil="profil.php";
$path_admin="admin.php";
$image_header ="../image/logobb.png";
$header_title = 'Profil';
require_once("header.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/profil.css">
    <title>Document</title>
</head>
<main>
    <section id="profil">
        <form action="" id="formProfil" method="POST">

        <h1> Changez vos identifiants ! </h1>

        <input placeholder="Votre nouveau login..." type="text" id="login2" class="text" name="login" value="<?php echo $utilisateur['login']; ?>">

        <input placeholder="Votre nouveau mdp..." type="password" id="password2" class="password" name="password">

        <input placeholder="Confirmation du nouveau mdp..." type="password" id="confirm_password2" class="password" name="confirm_password">

        <input type="submit" id="InputSub" name="update">

        <?php
    if ($utilisateur['login']=="admin")  {?>
        <a href="admin.php">Admin</a>
    <?php
    }

    ?>
        </form>
    </section>

</main>
<?php 
$footer_css = "../CSS/footer.css";
$img_footer = "../image/logobb2.png";
require_once("footer.php")
?>