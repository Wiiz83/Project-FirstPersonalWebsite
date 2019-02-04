<?php

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) 
 {  
     require('./variables/etat_taille_police.php');
     $chemin='./variables/etat_taille_police.php' ;
     require_once ('./variables/var_ferme_la_taille_police.php');

     echo'<center>
         <div class="cadre">';
            if ($metlaTpolice=='O') { echo '<br><br><br><span class="text_aide">'.$Tvoi_taille.'</span><br><br>'; } 
            else { echo '<br><br><br><span class="text_aide">'.$Tvoi_pas_taille.'</span><br><br>';}
          echo'
          <br><br>'.$Tmodif_champ.'
          <form method="POST"    name="ferme" action="">
             <select name="gerepolis">
               <option  value="N" >'.$Tvoi_pas.'</option>
               <option  value="O" >'.$Tvoi.'</option>
            </select>
            <br><br><input type="submit" name="etat" value="'.$Tenreg.'">
         </form> 
         ';
   
    if (isset ($_POST['gerepolis'])) { 
    $gerepolis  = $_POST['gerepolis'];        
    if ( file_exists($chemin) ) { if (!chmod($chemin, 0755)) { echo $Tacces_non.$chemin ; exit; } }
    $fic_user = fopen($chemin,'w') ;
    if (!$fic_user) { echo $Tacces_non.$chemin ;  exit; }
    else {                                                                                                   
        if ($gerepolis=='N') { 
           fwrite ($fic_user,$metlaTpolice_ferme_non) ;
           echo'<script language="javascript">;alert("Les tailles de polices sont invisibles sur votre livre !");</script>';
           echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=etat_taille_police">'; 
           exit;
        } 
        else { 
             fwrite($fic_user,$metlaTpolice_ferme_oui) ; 
             fclose($fic_user);
             echo'<script language="javascript">;alert("Les tailles de polices sont visibles sur votre livre !");</script>';
             echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=etat_taille_police">'; 
             
        }
       }
   }
 }       
else  { include_once'../includes/perdu.php'; }
echo '</div>';
?>