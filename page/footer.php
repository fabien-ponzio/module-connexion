
<?php
echo"
<link rel='preconnect' href='https://fonts.gstatic.com'>
<link href='https://fonts.googleapis.com/css2?family=Texturina:wght@300&display=swap' rel='stylesheet'>
<link rel='preconnect' href='https://fonts.gstatic.com'>
<link href='https://fonts.googleapis.com/css2?family=Castoro&display=swap' rel='stylesheet'>
<link
rel='stylesheet'
href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'/>
    <link rel='stylesheet' href='$footer_css'>
<footer>
<section class='footer'>

    <article id='footerlogo'>
        <img id='logoBot' src='$img_footer' alt='logo'> 
    </article>

    <article class='footer_nav'>         
          <a href='#'><i class='fab fa-facebook-f'></i></a>
          <a href='#'><i class='fab fa-twitter'></i></a>
          <a href='#'><i class='fab fa-instagram'></i></a>
    </article>

    <article>";
    if (isset($_SESSION['connected'])) {
        # code...

    if($id_page == 1){                                       
        echo" <form method='POST' action='page/deconnexion.php'> 
        <input type='submit' class='deco' name='deconnexion' value='DECONNEXION'> 
        </form>";
    }
    else{                                                               
        echo"<form method='POST' action='deconnexion.php'>          
        <input type='submit' class='deco' name='deconnexion' value='DECONNEXION'> 
        </form>
        </article>";
    }
    }echo"
    </article>
</section>


</footer>

</body>
</html>
";
?>