<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
require('../gestion/variables/mon_mail.php'); 
if (isset($_POST['user']))    { $user    = $_POST['user'];    } else { echo 'Pr&eacute;venez le webmestre'; exit; }
if (isset($_POST['passwd']))  { $passwd  = $_POST['passwd'];  } else { echo 'Pr&eacute;venez le webmestre'; exit; }
if (isset($_POST['passwd2'])) { $passwd2 = $_POST['passwd2']; } else { echo 'Pr&eacute;venez le webmestre'; exit; }
if (isset($_POST['mail']))    { $mail    = $_POST['mail'];  }     else { echo 'Pr&eacute;venez le webmestre'; exit; }
if (isset($_POST['mail2']))   { $mail2   = $_POST['mail2']; }      else { echo 'Pr&eacute;venez le webmestre'; exit; }
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <meta name="livror.fr" content="livror.fr, http://www.livror.fr">
    <meta name="keywords" content="forum, informatique, aide, html, php, livre d'or, news, rss, gratuit, webmaster, jave, newsletter, conception, site, un livre d'or gratuit, france, auvergne, developper">
    <meta name="keywords" content="web,js,javascript,javascripts,service,services,webmaster,webmasters,info,infos,informatique,informatiques,html,php,pro,débutant,initié,programmeur,programmeurs,programmateur,programmateurs,formulaire,gratuit,exemple,developper,exemples,conseils,free,facile,debutant,ressources,recomail,recosite,compteur,compteurs,live,banniere,image,visiteurs,stats,mailing-list,visite,visites,form2mail,dedicaces,partenaire,partenaires,ip,host,date,heure,saint,annuaire,annuaires,commentaire,commentaires,clic,clics,journalier,ecard,echange,espace,protégé,protection,faq,forum,bannière,news,livre,or,newsletter,annonce,annonces,sondage,sondages">
    <meta name="owner" content="LiVror.fr"> 
    <meta name="description" content="upload simple par LiVror.fr">
    <meta name="title" content="livre d'or, gratuit, aide webmaster, php, html, trucs et astuces">
    <meta name="subject" content="Livre d'or son site et son forum d'aides">
    <meta name="category" content="livre d'or, livre, site, forum, informatique, aides, webmestre, webmaster, trucs et astuces, php, html">
    <meta name="author" content="livror">
    <meta name="language" content="fr">
    <meta name="copyright" content="livror.fr">
    <link rel="stylesheet" type="text/css" href="../css/bleu.css">
    <title>Installation du Livre d'or sans BdD phase 2</title>
  </head>
  <body>
<?php  
   echo'
    <center>
     <div class="cadre">
        <table  class="tablediapo">
        	<tr>
        		<td class="tdcouleur1">';
            if (empty($user))
               { echo 'Veuillez mettre votre pseudo SVP.<br>Please put your name<br><br>'; echo'
                 <form><input type="button" value="<- Retour/Back ->" onclick="history.go(-1)"></form><br>'; exit; 
               }
            
            if  (empty($passwd))     
               { echo 'Veuillez mettre un mot de passe SVP.<br>Please put a password<br><br>
                 <form><input type="button" value="<- Retour/Back ->" onclick="history.go(-1)"></form><br>'; exit; 
               }

            if (empty($passwd2))    
               { echo 'Veuillez confirmer le mot de passe SVP!<br> Please confirm the password !! <br><br>'; echo'
                 <form><input type="button" value="<- Retour/Back ->" onclick="history.go(-1)"></form><br>'; exit; 
               }

            if (empty($mail))     
               { echo 'Veuillez mettre un Mail SVP.<br>Please put a Mail<br><br>
                 <form><input type="button" value="<- Retour/Back ->" onclick="history.go(-1)"></form><br>'; exit; 
               }

            if (empty($mail2))     
               { echo 'Veuillez confirmer le MAIL SVP.<br>Please confirm the mail<br><br>
                 <form><input type="button" value="<- Retour/Back ->" onclick="history.go(-1)"></form><br>'; exit; 
               }

            if(strlen($passwd)<8)
              { echo 'Mauvais mot de passe Minimum 8 caract&egrave;res !<br>Bad!! Minimum password 8 characters<br><br>
                 <form><input type="button" value="<- Retour/Back ->" onclick="history.go(-1)"></form><br>'; exit;
              }
             
            
            if ($passwd!=$passwd2)  
               { echo 'Les mots de passe sont diff&eacute;rent!><br>The passwords are different<br><br>
                 <form><input type="button" value="<- Retour/Back ->" onclick="history.go(-1)"></form><br>';  exit; 
               }

            if ($mail!=$mail2)  
               { echo 'Les mails sont diff&eacute;rent!><br>Mails are different<br><br>
                 <form><input type="button" value="<- Retour/Back ->" onclick="history.go(-1)"></form><br>';  exit; 
               }

            else   
               { 
                 $passwd=md5($passwd);
                 $chemin= '../passwd/user.txt' ;
                 chmod($chemin, 0755);
                 $fic_user = fopen($chemin,'w') ;
                 if (!$fic_user) { echo 'Ouverture du fichier user Impossible <br>Opening of the file user Impossible';  exit; }
                 else { 
                        echo 'Votre fichier administrateur  /passwd/user.txt est cr&eacute;&eacute;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        Your file administrator /passwd/user.txt is created<br><br>';
                        fputs ($fic_user, $user.'|'.$passwd);
                        if ( file_exists($chemin) ) 
                          { $Clefic=fopen($chemin,'r'); }
	                      else 
                          { echo 'Probl&egrave;me avec le fichier : '.$chemin; }
                        
                        $contenu_du_fichier = fgets ($Clefic,800);
                        $ligne=explode('|',$contenu_du_fichier);
                        echo 'Votre Pseudo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Your Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text_vert">'.$ligne[0].'</span>';
                        echo '<br><br>Votre mot de passe cod&eacute;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        your encrypted password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text_vert">'.$ligne[1].'</span><br><br>' ;
                      }
                }

if (!unlink('install2.php') OR !unlink('install.gif') OR !unlink('index.php')) 
 { echo 'Probl&egrave;me de suppression des fichiers  installation
          <br><br> Pour votre s&eacute;curit&eacute; Supprimez-les manuellement.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For your security Delete it manually.<br><br>'; }

echo 'Installation correctement effectu&eacute;e !!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Correctly made installation<br><br>
      Supprimer le r&eacute;pertoire install pour votre s&eacute;curit&eacute; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supprim directory install for your security<br><br>';

$Sujet = "Renseignement administrateur Installation LiVror sans BdD";
$From  = "MIME-Version: 1.0\r\n";
$From .= "Content-Type: text/plain; charset='iso-8859-1'";
$From .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
$From .= "'X-Mailer:PHP/'.'phpversion()'.'\r\n'";
$Message= "Identifiant livre sans BDD nom: $user  mot de passe: $passwd2 mail : $mail";
if (mail($mail,$Sujet,$Message,$From)) 
 {  echo '<span class="text_vert">Le message est bien parti dans votre boite mail !</span>' ;   }
else { echo '<span class="text_vert">WoOOops Une erreur dans l\'envoi du mail, Notez vos identifiants !</span><br><br>'; }
echo'
      <br><br>
     <a href="../gestion/index.php"><span class="text_vert">Aller dans votre zone Administration</span></a><br><br>
     </td>
    </tr>
  </table>';
include_once '../includes/footer.php';
?>