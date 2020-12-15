<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
$bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion');


?>