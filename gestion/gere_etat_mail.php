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
     require('./variables/etat_mail.php');
     echo'<center>
         <div class="cadre">';
            if ($envoimail=='O') { echo '<br><br><br><span class="text_aide">'.$Trecevez_mail.'</span><br><br>'; } 
            else { echo '<br><br><br><span class="text_aide">'.$Trecevez_pas_mail.'</span><br><br>';}
          echo'
          <br><br>'.$Tmodif_champ.'
          <form method="POST"    name="fermemsg" action="">
             <select name="geremsg">
               <option  value="N" >'.$Trecoi_pas_mail.'</option>
               <option  value="O" >'.$Trecoi_mail.'</option>
            </select>
            <br><br><input type="submit" name="etatmail" value="'.$Tenreg.'">
         </form> 
         ';
   
    if (isset($_POST['geremsg'])) { 
    $chemin= './variables/etat_mail.php' ;
    require_once ('./variables/var_ferme_envoimail.php');
    $geresite  = $_POST['geremsg'];        
    if ( file_exists($chemin) ) { if (!chmod($chemin, 0755)) { echo $Tacces_non.$chemin ; exit; } }
    $fic_user = fopen($chemin,'w') ;
    if (!$fic_user) { echo $Tacces_non.$chemin ;  exit; }
    else {                                                                                                   
        if ($geresite=='N') { 
           fwrite ($fic_user,$envoimail_ferme_non) ;
           echo'<script language="javascript">;alert("Vous ne recevrez pas de mail si un nouveau message est post\351 sur votre livre !");</script>';
           echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=etat_mail">'; 
           exit;
        } 
        else { 
             fwrite($fic_user,$envoimail_ferme_oui) ; 
             fclose($fic_user);
             echo'<script language="javascript">;alert("Vous recevrez un mail un nouveau message est post\351 sur votre livre !");</script>';
             echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=etat_mail">'; 
             
        }
       }
   }
 }       
else  { include_once'../includes/perdu.php'; }
echo '</div>';
?>