<?php
//session_start();
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec m�me licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec m�me licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) 
 {  
     require('./variables/etat_smiley.php');
     $chemin='./variables/etat_smiley.php' ;
     require_once ('./variables/var_ferme_smiley.php');

     echo'<center>
         <div class="cadre">';
            if ($smileON=='O') { echo '<br><br><br><span class="text_aide">'.$Tvoi_smiley.'</span><br><br>'; } 
            else { echo '<br><br><br><span class="text_aide">'.$Tvoi_pas_smiley.'</span><br><br>';}
          echo'
          <br><br>'.$Tmodif_champ.'
          <form method="POST"    name="ferme" action="">
             <select name="gerechamp">
               <option  value="N" >'.$Tvoi_pas.'</option>
               <option  value="O" >'.$Tvoi.'</option>
            </select>
            <br><br><input type="submit" name="etat" value="'.$Tenreg.'">
         </form> 
         ';
   
    if (isset ($_POST['gerechamp'])) { 
    $gerechamp  = $_POST['gerechamp'];        
    if ( file_exists($chemin) ) { if (!chmod($chemin, 0755)) { echo $Tacces_non.$chemin ; exit; } }
    $fic_user = fopen($chemin,'w') ;
    if (!$fic_user) { echo $Tacces_non.$chemin ;  exit; }
    else {                                                                                                   
        if ($gerechamp=='N') { 
           fwrite ($fic_user,$smileON_ferme_non) ;
           echo'<script language="javascript">;alert("Les Smileys sont invisibles sur votre livre !");</script>';
           echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=etat_smiley">'; 
           exit;
        } 
        else { 
             fwrite($fic_user,$smileON_ferme_oui) ; 
             fclose($fic_user);
             echo'<script language="javascript">;alert("Les Smileys sont visibles sur votre livre !");</script>';
             echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=etat_smiley">'; 
             
        }
       }
   }
 }       
else  { include_once'../includes/perdu.php'; }
echo '</div>';
?>