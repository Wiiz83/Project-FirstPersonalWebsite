<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) 
 {  
    $fichier='../livre/livror.txt';
    echo'<center>
      <div class="cadre">
         <table  class="tablediapo">
           <tr>
             <td class="tdcouleur1">
               '.$Taffich_supp_mess.'
               <a href="#" class="popsmall"><img src="../img/index.gif" alt="Aide" Title="Aide" border="0">
               <span>
               <textarea name="lemsg" rows="1" cols="80" readonly>'.$Text_supp_msg.'</textarea>
               </span></a> 
             </td>
             <td class="tdcouleur1">
              '.$Taffich_modif_mess.'
               <a href="#" class="popsmall"><img src="../img/index.gif" alt="Aide" Title="Aide" border="0">
               <span>
               <textarea name="lemsg" rows="1" cols="100" readonly>'.$Text_modif_msg.'<span class="message">'.$T_et.'</span></textarea></textarea> 
             </span></a>
            </td>
          </tr>
         </table>'; 

    echo '
           <form method="post" action="">
                <textarea name="modiftext" rows="20" COLS="100" font="8pt">';
                if(is_file($fichier)) echo file_get_contents($fichier);
                echo'
                </textarea>
                <br/><input type="submit" name="envoitext" value="'.$Tenreg.'">
            </form>
            ';
    if(isset($_POST['envoitext'])) {  
        $nouveautext = stripslashes( $_POST['modiftext'] ); 
        $ouvrefic=fopen("$fichier","w");
        fwrite($ouvrefic,$nouveautext);
        fclose($ouvrefic);
        echo'<script language="javascript">;alert("Le fichier a été modifié !");</script>';
        echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=gere_message">'; exit;
     }
 }       
else  { include_once'../includes/perdu.php'; }
echo '</div>';
?>