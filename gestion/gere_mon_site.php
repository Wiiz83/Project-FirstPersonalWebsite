<?php
//session_start();
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) 
 {  
     require('./variables/mon_site.php'); 
     $chemin='./variables/mon_site.php' ; 
     echo'<center>
         <div class="cadre">';
           echo '<br><br><br><span class="text_aide">'.$Tadress_site.$monsite.' </span><br><br>
          <form method="POST"  name="veriflesite" action="" method="post" onSubmit="return verifmonsite()">
              '.$TNew_adress_site.'<br> <input name="lesite" type="url"><br><br>
              <input type="submit" name="etat" value="'.$Tenreg.'">
          </form>
          ';
    if (isset ($_POST['lesite'])) 
      { 
          $gerechamp  = $_POST['lesite'];        
          if ( file_exists($chemin) ) { if (!chmod($chemin, 0755)) { echo $Tacces_non.$chemin ; exit; } }
          $fic_user = fopen($chemin,'w') ;
          if (!$fic_user) 
               { echo $Tacces_non.$chemin ;  exit; }
          else {                                                                                                   
                 fwrite ($fic_user,'<?php $monsite="'.$gerechamp.'";?>') ;
                 echo '<script language="javascript">;alert("Votre adresse a \351t\351 mise \340 jour ! ");</script>';
                 echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=mon_site">'; 
                 exit;
              }
      }
   }
else  { include_once'../includes/perdu.php'; }
echo '</div>';
?>