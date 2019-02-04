<?php 
session_start();
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
require_once("../includes/header.php");
require_once("../smiley/smiley.php");
require_once ('../gestion/variables/pack_smiley.php');
require_once ('../gestion/variables/etat_mail.php');
require_once ('../gestion/variables/mon_mail.php');
require_once ('../gestion/variables/etat_smiley.php');
require_once ('../gestion/variables/etat_site.php');
require_once ('../gestion/variables/etat_region.php');
require_once ('../gestion/variables/etat_pays.php');
require_once ('../gestion/variables/etat_note.php');
require_once ('../gestion/variables/etat_mail.php');
require_once ('../gestion/variables/etat_adresse.php');
error_reporting(0);
echo '<div class="cadre">';
if (isset($_POST['code']))  { $code    = ($_POST['code']);   }
$code = md5(strtoupper($_REQUEST['code']));
    if( $code != $_SESSION['captcha'] ) { 
      echo'
        <div class="titre_page">'.$erreurcode.'</div>
          <br><br><a href="javascript:history.back();">
            <span class="blocpolice">'.$retourmsg.'</span></a>
        </div>
      </center>
      </body>
      </html>';
         exit;
      }                                                                            
    
    $fichier = fopen("../livre/livror.txt","r");
    $messagesprecedents = fread($fichier, filesize("../livre/livror.txt"));
    fclose($fichier);
    $date = date("d/n/Y");
    if (isset($_POST['nom']))     { $nom=stripslashes(strip_tags($_POST['nom'])); } else { echo 'Pb de transfert de du champ NOM' ; exit; }
    if (isset($_POST['note']))    { $note=$_POST['note']; }
    if (isset($_POST['region']))  { $region=stripslashes (strip_tags($_POST['region'])); }
    if (isset($_POST['pays']))    { $pays=stripslashes (strip_tags($_POST['pays'])); }
    if (isset($_POST['message'])) { $message=stripslashes (strip_tags($_POST['message'])); } else { echo 'Pb de transfert de du champ MESSAGE' ; exit; }
    if (isset($_POST['votsite'])) { $votsite=stripslashes (strip_tags($_POST['votsite'])); }
    
    $pays = strtolower($pays) ;
    $message= smileys($message,$packSmiley) ; 
    //if  ($note   == "") { $note   = $nonprecise; }
    if  ($region != "") { $pays = "fr" ; }
    // if  ($pays   == "") { $pays   = 'AA'; }
    //if  ($region == "") { $region = $nonprecise; } 
    
    $imgpays= '<img src="./img/pays/'.$pays.'.png" >';
    $fichier = fopen("../livre/livror.txt","w");
    fwrite ($fichier,'
    <NewMsg>
      <table class="tablemessage">
         <tr>
          <td class="tdmsg">
             <span class="intitule">'.$postele.'</span> 
             <span class="lasaisie">'.$date.'</span>
             <span class="intitule">'.$par.'</span>
             <span class="lasaisie">  '.$nom.'</span>'
        );
     
     if (strtoupper($laregON)=='O' && $region!='') {
         fwrite ($fichier,'
          &nbsp;&nbsp;<span class="intitule">'.$de.'</span>
             <span class="lasaisie">'.$region.'</span>' );
       }

    if (strtoupper($lepaysON)=='O'  && $pays!='') {
         fwrite ($fichier,'
          &nbsp;&nbsp;<span class="intitule">'.$saisipays.'</span>
             '.$imgpays);
       }
  
    if (strtoupper($metlanote)=='O' && $note!='') {
       fwrite ($fichier,'
          &nbsp;&nbsp;<span class="intitule">'.$lanote.'</span>
             <span class="lasaisie">'.$note.'</span>');
      } 

   if (strtoupper($metladresse)=='O' && $votsite!=''){
       fwrite ($fichier,'
          &nbsp;&nbsp;<a href="'.$votsite.'."target="_blank">
              <img src="./img/site.png" alt="Site" style="border:0;" title="Site"></a>');
      } 

    fwrite
      ($fichier,'
          </td>
         </tr>
         
         <tr>
          <td class="tdmsg">
              <span class="message">
                 '.$message.'
              </span>
          </td>
        </tr>
      </table>
    </NewMsg>
    
    ');   
    fwrite($fichier, $messagesprecedents);
    fclose($fichier);

if (strtoupper($envoimail)=='O')
  {
   $Sujet = "NOUVEAU MESSAGE SUR VOTRE LIVRE";
   $From  = "MIME-Version: 1.0\r\n";
   $From .= "Content-Type: text/plain; charset='iso-8859-1'";
   $From .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
   $From .= "'X-Mailer:PHP/'.'phpversion()'.'\r\n'";
   $Message= "Vous avez un message de $nom sur votre livre. " ;

   if (mail($monmail,$Sujet,$Message,$From)) {  
       echo'<center><br><div class="moterreur"><br>'.$okmail.'</div></center><br>';  
     }
    
    else { echo'<center><br><div class="moterreur"><br>'.$erreurmail.'<br><br></div><br></center>';
     } 
    
    echo '<center><br><br>';
  }
  
echo'<form><input type="BUTTON" value="'.$ferme.'"  ONCLICK="window.close(); window.opener.location.reload();"> </form></center>
        </div>
   </center>
  </body>
</html>
';
?>
