<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) {

session_unset() ;
session_destroy()  ;
if ((isset($_SESSION['nom'])) && (!empty($_SESSION['nom']))) { echo $_SESSION['nom']; echo 'sesion ouverte' ;	}
echo '<center>
    <div class="cadre">
        <br><br><br>

        <span class="titre_page">'.$Tadminquit.'</span><br><br><a href="../index.php">
        <img src="../img/deconnect2.png" alt="Quit" title="Quit" border="0"></a>
    </div>
    </center>'; 
}
else  { include_once'../includes/perdu.php'; }
?>