<?php
// if(!isset($_SESSION))
// session_start(); 
?>


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Texturina:wght@300&display=swap' rel='stylesheet'>
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Castoro&display=swap' rel='stylesheet'>
    <link
    rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'
  />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<!-- police header  -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
<!-- police texte -->
<link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">



    <link rel='stylesheet' href='<?= $header_css ?>'>
     <!-- CSS DE CHAQUES PAGES  -->
    <link rel='stylesheet' href='<?= $headerCSS ?>'>
    <!-- CSS DU HEADER -->
    <title><?php echo $header_title; ?></title>
</head>
<body>
    
    <header>

        <nav id=headernav>
        <?php echo " <a href= '$path_index'><image id='logotop' src= ".$image_header." alt='spinning_shield'></a>"; ?> 

        <?php 
        if (!isset($_SESSION['connected'])) {
        echo"
         <a href= '$path_inscription'> INSCRIPTION</a>
         <a href= '$path_connexion'> CONNEXION</a>";
        }
        ?>

        <?php 
        if (isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']['login']=='admin') {
           echo  " <a href= '$path_admin'>ADMIN</a>";
        }
        else {
            
        }
        ?>
        <?php
        if (isset($_SESSION['connected'])) {
            echo " <a href='$path_profil'>PROFIL</a>";
        }
        ?> 

        </nav>
    </header>
