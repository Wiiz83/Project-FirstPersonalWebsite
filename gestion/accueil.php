<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();
session_cache_expire(20);
$cache_expire = session_cache_expire(20);
$ip = $_SERVER['REMOTE_ADDR'];
if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) 
 { 
   require_once'../version/version.php'; 
   $Votre_Ver = strip_tags($version);
   $homepage = file_get_contents('http://www.livror.fr/version/V_livror_ss_bdd.txt'); 
   $V_En_Cours = strip_tags($homepage);
   echo'
      <div class="cadre">
             <table  class="tablediapo">
                 <tr>
                    <td class="tdcouleur1">'.$Taccueil_session.$_SESSION['pseudo'].'</td>
                    <td class="tdcouleur1">'.$Taccueil_ip.$ip.'</td>
                    <td class="tdcouleur1">'.$Taccueil_possess.$cache_limiter.'</td>
                    <td class="tdcouleur1">'.$Taccueil_limit.$cache_expire.'  mn</td>
                 </tr>
                 <tr>
                    <td class="tdcouleur1">';
                    if ($V_En_Cours == $Votre_Ver) {   echo '<td class="tdcouleur1">'.$Taccueil_ver.'</td>'; }      
                    else { echo '<td class="tdcouleur1">'.$Taccueil_autre_ver.'<a href="admin.php?page=Verif_version" ><font color="blue" size="3">'.$Taccueil_verif_ver.'</a></font> </td>'; }
                    echo'
                    </td>
                    <td class="tdcouleur1">
                      <font color="red" size="4">'.$Tverifmailetsite.'</font>
                    </td>
                  </tr>';

               $filename = '../install';
               if (is_dir($filename)) 
                  { echo '<span class="text_vert">'.$Taccueil_supp_install.'</span>'; } 
               
               echo '
               </tr>
           </table>
           <img src="../img/fond-admin.png">
           ';
 }       
else  { include_once'../includes/perdu.php'; }
echo '</div>';
?>
