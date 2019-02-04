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
     require('./variables/etat_site.php');
     echo'<center>
         <div class="cadre">';
            if ($bloc_site=='O') { 
                echo '<br><br><br><span class="text_aide">'.$Tlivre_open.'</span>';
             } 
            
            else { echo '<br><br><br><span class="text_aide">'.$Tlivre_close.'</span><br><br>';}
          echo'
          <br><br>'.$Tmodif_champ.'
          <form method="POST"    name="fermelivre" action="">
             <select name="geresite">
               <option  value="N" >'.$Touvrir_livre.'</option>
               <option  value="O" >'.$Tfermer_livre.'</option>
            </select>
            <br><br><input type="submit" name="etatdusite" value="'.$Tenreg.'">
         </form> 
         ';
   
    if (isset($_POST['geresite'])) { 
    $chemin= './variables/etat_site.php' ;
    require_once ('./variables/var_ferme_site.php');
    $geresite  = $_POST['geresite'];        
    if ( file_exists($chemin) ) { if (!chmod($chemin, 0755)) { echo $Tacces_non.$chemin ; exit; } }
    $fic_user = fopen($chemin,'w') ;
    if (!$fic_user) { echo $Tacces_non.$chemin ;  exit; }
    else { 
        if ($geresite=='N') { 
           fwrite ($fic_user,$ferme_non) ;
           echo'<script language="javascript">;alert("Le livre est OUVERT vous pouvez quitter la zone administration !");</script>';
           echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=gere_etat">'; 
           exit;
        } 
        else { 
             fwrite($fic_user,$ferme_oui) ; 
             fclose($fic_user);
             echo'<script language="javascript">;alert("Le livre est FERME Vous pouvez continuer !");</script>';
             echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=gere_etat">'; 
             
        }
       }
   }
 }       
else  { include_once'../includes/perdu.php'; }
echo '</div>';
?>