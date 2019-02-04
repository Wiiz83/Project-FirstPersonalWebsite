<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_PARSE);
error_reporting(E_ERROR | E_PARSE);
require'../admin/config.php' ;
    echo'<center>
            <div class="cadre">
            <br>
              <br><font face="Comic Sans MS" color="#0000dd" size="6"> 
              Erreur 404 <br>
              La page que vous demandez a &eacute;t&eacute; supprim&eacute;e ou n\'existe plus!<a href="'.$monsite.'"><br>
                  <img src="../img/up.png" style="border:0;" alt="Je clique pour sortir de ma bulle !" TITLE="Je clique pour sortir de ma bulle !"></a>
              <br>Nous nous excusons de ce d&eacute;sagr&eacute;ment. <br>Cliquez sur l\'image pour sortir !</font></a><br>
            </div>';
?>