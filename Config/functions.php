<?php
require_once('bdd.php');

function redirect($destination){
    header('Location: '. $destination);
}

// ----------------------------------------------------------------INSCRIPTION.PHP ------------------------------------------------------

function inscription($login, $nom, $prenom, $password, $confirm_password, $bdd){
    if(isset($_POST['register'])){
        $login = ($_POST['login']);
        $prenom = ($_POST['prenom']);
        $nom = ($_POST['nom']);
        $password = ($_POST['password']);
        $confirm_password = $_POST['confirm_password'];
        $error_log = null;

        if(!empty($login) && !empty($prenom) && !empty($nom) && !empty($password) && !empty($confirm_password)){

            $loglength = strlen($login);
            $nomlength = strlen($nom);
            $prenomlength = strlen($prenom);
            $passwordlength = strlen($password);
            $confirmpasslength = strlen($confirm_password);
            if (($loglength >=2) && ($nomlength >=2) && ($prenomlength >=2) && ($passwordlength >=4) && ($confirmpasslength >=4)) {

                $query = mysqli_query($bdd, "SELECT login FROM utilisateurs WHERE login ='$login'");
                $count = mysqli_num_rows($query);

                if(!$count){
                    if($confirm_password == $password)
                    {
                        $login = mysqli_real_escape_string($bdd,htmlspecialchars( trim($login))); // on enleve les espace, les \n -> string et caractere non affichable 
                        $nom = mysqli_real_escape_string($bdd, htmlspecialchars(trim($nom)));
                        $prenom = mysqli_real_escape_string($bdd, htmlspecialchars(trim($prenom)));
                        $password = mysqli_real_escape_string($bdd, htmlspecialchars(trim($password)));
                        $confirm_password = mysqli_real_escape_string($bdd, htmlspecialchars(trim($confirm_password)));  
                        
                        $cryptedpass = password_hash($password, PASSWORD_BCRYPT); // CRYPTED 
                        $insert = mysqli_query($bdd,"INSERT INTO utilisateurs (login, nom, prenom, password) VALUES ('$login', '$nom', '$prenom', '$cryptedpass')");
                        redirect('connexion.php'); // on configure la valeur de redirect qui est une variable de type string a la base
                    }
                    else {
                        $error_log = "Confirmation du mot de passe incorrect";
                    }
                }
                else {
                    $error_log = " identifiant déjà existant!";
                    }
                }
            else {
                $error_log = "Votre login, nom et prénom doivent contenir 2 caractères minimum, votre mot de passe doit en contenir 5";
                }
            }
        else {
            $error_log = "Champs non remplis";
                }
            }          
    else {
        $error_log = "Erreur inconnue";
            }
    echo $error_log;
                }
                    
    ?>
<!-- //-----------------------------------------------------------FIN INSCRIPTION.PHP------------------------------------------------------// -->
<!-- //----------------------------------------------------------------CONNEXION.PHP ------------------------------------------------------// -->
<?php
//1. Je créé une fonction connexion php qui sera appelable dans n'importe quelle page à venir
//2. j'y déclare mes variables et les sécurise 
//3. condition : si les champs $_POST password et $_POST login ne sont pas vides alors :
//4. Création de la variable $verification qui va éxécuter la requete SQL "SELECT password FROM utilisateurs WHERE login ='$login'" dans la BDD
//5. $count va éxécuter la fonction d'inspection du tableau $verification et de sa requête SQL via mysqli_num_rows 
//6. $query_all va récupérer toutes les informatiosn des utilisateurs répondant à la requête de $verification


 function connexion($login, $password, $bdd){
    $login = mysqli_real_escape_string($bdd, htmlspecialchars(trim($login))); 
    $password = mysqli_real_escape_string($bdd, htmlspecialchars(trim($password)));
    $errorLog = null; 

    if (!empty($login) && !empty($password)) {
        $verification = mysqli_query($bdd, "SELECT password FROM utilisateurs WHERE login ='$login'"); // requête qui récupère le password (crypté à l'inscription) qui appartient au login  
        $count = mysqli_num_rows($verification);
        $query_all = mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login ='$login'");
        if ($count) { // si mon password est reconnu par la BDD alors :
            $utilisateur = mysqli_fetch_assoc($query_all);
            $result = mysqli_fetch_assoc($verification);
            
            if(password_verify($password, $result['password'])){ // fonction passwordverify qui compare password et password post crypté ??????
                $_SESSION['connected'] = true;
                $_SESSION['utilisateur'] = $utilisateur; // on créé et on intialise la carte d'identité de l'utilisateur dans une session
                if ($login == 'admin') { //
                    $_SESSION['admin'] = true;
                }
                else{
                    $_SESSION['admin'] = false;
                }
                redirect('profil.php');
            }
            else {
                $errorLog= "Mot de passe incorrect";
            }
        }
        else {
            $errorLog = "Identifiant incorrect";
        }
    }
    else {
        $errorLog ="Veuillez insérer des caractères dans les champs destinés ";
    }
    echo $errorLog; 
 }
?>
 <!-- //-------------------------------------------------------------FIN CONNEXION.PHP ------------------------------------------------------  -->
 <!-- ----------------------------------------------------------------PROFIL.PHP--------------------------------------------------------- -->
 <?php
 function profil($login, $password, $confirm_password, $bdd){

    $login = mysqli_real_escape_string($bdd, htmlspecialchars(trim($login))); // on enleve les espace, les \n -> string et caractere non affichable 
    $password = mysqli_real_escape_string($bdd, htmlspecialchars(trim($password)));
    $confirm_password = mysqli_real_escape_string($bdd, htmlspecialchars(trim($confirm_password)));
    $errorLog = null;

    if (!empty($login) && !empty($password) && !empty($confirm_password)) {
        $loglength = strlen($login);
        $passwordlength = strlen($password);
        
        if(($loglength >=2) && ($passwordlength >=5)<=30){ 

            $query = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$login'");
            $fetch = mysqli_fetch_assoc($query); 

            if ($confirm_password == $password) {

                $cryptedpassword =  password_hash($password, PASSWORD_BCRYPT);            
                $utilisateur = $_SESSION['utilisateur'];
                $update = mysqli_query($bdd, "UPDATE utilisateurs SET login = '$login', password ='$cryptedpassword' WHERE id = '". $utilisateur['id']. "'" );
            }            
                else {
                $errorLog = "Confirmation du mot de passe incorrect";
            }
            }
        else {
            $errorLog = "2 caractere minimum pour le login et 5 pour le mot de passe";    
            }
        }
    else{
        $errorLog = "Veuillez entrer des caracteres dans les champs";
        }
echo $errorLog;
}

//  function ViewPlaceholder () {
//     $query = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$login'");
//     $fetch = mysqli_fetch_assoc($query); 
//     $placeholder= $fetch['login'];
//     return $placeholder;
//  }
 ?>
 <!---------------------------------------------------------------FIN PROFIL.PHP--------------------------------------------------------- -->

