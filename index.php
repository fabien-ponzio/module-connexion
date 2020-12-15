<?php
require_once('Config/functions.php');
$path_index="";
$deconnexion="page/deconnexion.php";
$id_page=1;
$path_inscription="page/inscription.php";
$path_connexion="page/connexion.php";
$path_profil="page/profil.php";
$path_admin="page/admin.php";
$image_header ="image/logobb.png";
$header_title="Acceuil";
$header_css = 'css/index.css';
$headerCSS = 'css/header.css';
require_once('page/header.php'); // appeler apres la déclaration de variable sinon elles seront undefined
?>
<main>
    <section>
        <div id="bienvenue">
            <image src="image/DB.gif" alt="spinning_shield">
            <h1>BIENVENUE CHEZ DOUBLE BOUCLIER</h1>
        </div>
    </section>
    <section>
        <div id="TexteAccueil">
                Nous sommes une boutique Marseillaise qui boostent vos statistiques de joueurs, en effet,
                nous avons repousser les limites de l'expérience client afin qu'à chaques entrées en boutique chaques clients gagnent un buff d'armure de 50% et +100 en tranquillité. 
                Les effets sont cumulables! Alors n'hésitez pas à passer à la boutique !
        </div>
    </section>
</main>

<?php
$footer_css = "CSS/footer.css";
$img_footer = "image/logobb2.png";
require("page/footer.php");
?>