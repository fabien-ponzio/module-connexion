<?php
require_once('../Config/bdd.php');
$path_index="../";
$path_inscription="";
$path_connexion="";
$deconnexion="../index.php";
$id_page=0;
$path_profil="";
$path_admin="";
$header_css = "../CSS/admin.css";
$headerCSS = "../CSS/header.css";
$header_title = 'Admin';
$image_header ="../image/logobb.png";
$users=array();
if(isset($_SESSION['utilisateur'])){
    $query = mysqli_query($bdd, "SELECT * FROM utilisateurs");
    $users = mysqli_fetch_all($query);
}
require_once("header.php");
?>

<main>
<table>
    <tr>
        <th>ID</th>
        <th>LOGIN</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>MOT DE PASSE</th>
    </tr>

    <?php
    foreach ($users as $key){
        echo "<tr>";
        foreach ($key as $value){
            echo "<td class='tableau_admin'>$value</td>";
        }
        echo "</tr>";
    }
?>

</table>



</main>

<?php
$footer_css = "../CSS/footer.css";
$img_footer = "../image/logobb2.png";
require_once("footer.php")
?>
