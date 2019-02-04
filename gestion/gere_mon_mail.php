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
     require('./variables/mon_mail.php'); 
     $chemin='./variables/mon_mail.php' ; 
     echo'<center>
         <div class="cadre">';
           echo '<br><br><br><span class="text_aide">'.$Tadress_mail.$monmail.' </span>
          <br><br>
          <form method="POST"  name="changemail" action="" method="post" onSubmit="return verifmonmail()">
              '.$Tnew_mail.'<br> <input name="lemail"  type="email"><br><br>
              <input type="submit" name="etat" value="'.$Tenreg.'">
          </form>
          ';
    if (isset ($_POST['lemail'])) 
      { 
          $gerechamp  = $_POST['lemail'];        
          if ( file_exists($chemin) ) { if (!chmod($chemin, 0755)) { echo $Tacces_non.$chemin ; exit; } }
          $fic_user = fopen($chemin,'w') ;
          if (!$fic_user) 
               { echo $Tacces_non.$chemin ;  exit; }
          else {                                                                                                   
                 fwrite ($fic_user,'<?php $monmail="'.$gerechamp.'";?>') ;
                 echo '<script language="javascript">;alert("La nouvelle adresse mail est mise en place ! ");</script>';
                 echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=mon_mail">'; 
                 exit;
              }
      }
   }
else  { include_once'../includes/perdu.php'; }
echo '</div>';
?>