<?php
session_start();
//error_reporting(E_ERROR | E_PARSE);
if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) 
 {  
    require('../includes/header.php');
    require('./variables/etat_site.php');

  echo'
  <ul id="menu">
  	<li><a href="admin.php?page=accueil">'.$Tadminccueil.'</a></li>
    <li><a href="admin.php?page=gere_etat">ON / OFF</a></li>';
  	if ($bloc_site=="O"){
    echo'<li><a href="admin.php?page=gere_message">'.$Taffich_gere_mess.'</a></li>';
    }
    echo'
    <li><a href="#">'.$Taffich_param.'</a>
  		<ul>
  			<li><a href="admin.php?page=etat_region"> '.$Taffich_region.'</a></li>
  			<li><a href="admin.php?page=etat_pays">   '.$Taffich_pays.'</a></li>
  			<li><a href="admin.php?page=etat_note">   '.$Taffich_note.'</a></li>
  	    <li><a href="admin.php?page=etat_adresse">'.$Taffich_sit_post.'</a></li>
        
  	    <li><a href="admin.php?page=etat_polis">'.$Taffich_police.'</a></li>
  	    <li><a href="admin.php?page=etat_taille_police">'.$Taffich_taille.'</a></li>
        <li><a href="admin.php?page=etat_smiley"> '.$Taffich_smiley.'</a></li>
        <li><a href="admin.php?page=pack_smiley"> '.$Taffich_choix_pack.'</a></li>
        <li><a href="admin.php?page=etat_mail">   '.$Taffich_recoit_mail.'</a></li>
        <li><a href="admin.php?page=choix_lang">  '.$Taffich_choix_lang.'</a></li>       
        <li><a href="admin.php?page=mon_site">    '.$Taffich_adress_site.'</a></li>
        <li><a href="admin.php?page=mon_mail">    '.$Taffich_change_mail.'</a></li>
    	</ul>
  	</li>

    <li><a href="../aides/aide-livror-ss-bdd_'.$lalang.'.pdf"target="_blank">'.$Taffich_aides.'</a></li>
    
    <li><a href="http://www.livror.fr/forum/"target="_blank">'.$Taffich_forum.'</a></li>

    <li><a href="#">'.$Taffich_a_propos.'</a>
      <ul>
    	  <li><a href="admin.php?page=Verif_version">'.$Taffich_version.'</a></li> 
    	  <li><a href="admin.php?page=licence">'.$Taffich_licence.'</a></li>
      </ul>
    </li>

    <li><a href="#">'.$Taffich_outils.'</a>
  		<ul>
        <li><a href="http://www.livror.fr/actu-demo.html"target="_blank">'.$Taffich_par_outil.'</a></li>
  			<li><a href="http://www.icone-gif.com/"target="_blank">           Ic&ocirc;nes             </a></li>
  			<li><a href="http://www.red-team-design.com/"target="_blank">     Menu                     </a></li>
  	    <li><a href="http://jigsaw.w3.org/css-validator/"target="_blank"> CSS Validator            </a></li>
        <li><a href="http://php.net/"target="_blank">                     PHP                      </a></li>
        <li><a href="http://www.phpmyadmin.net/"target="_blank">          PHPmyADMIN               </a></li>
        <li><a href="http://httpd.apache.org/"target="_blank">            APACHE                   </a></li>
        <li><a href="http://www.mysql.com/"target="_blank">               MySQL                    </a></li>      
        <li><a href="http://www.wampserver.com/"target="_blank">          WAMP                     </a></li>
        <li><a href="http://www.easyphp.org/"target="_blank">             EasyPHP                  </a></li>
        <li><a href="https://filezilla-project.org/"target="_blank">      Filezilla                </a></li>     
        <li><a href="http://www.pspad.com/fr/"target="_blank">            PSPAD                    </a></li>   
        <li><a href="http://creativecommons.org/"target="_blank">         Licences Creative Common </a></li>
        <li><a href="http://artlibre.org/licence/lal"target="_blank">     Licences Art libre       </a></li>      
        <li><a href="http://fr.wikipedia.org/wiki/Licence_publique_g%C3%A9n%C3%A9rale_GNU"target="_blank">         Licences GNU  </a></li>      
      </ul>
  	</li>
                                                
    <li><a href="admin.php?page=quit">'.$Tadminquit.'</a></li>
  </ul>';
  if ( isset($_GET["page"]) )  {
     if     ($_GET["page"]== 'accueil')            { include('accueil.php')                      ; }
     elseif ($_GET["page"]== 'gere_etat')          { include('gere_etat_site.php')               ; }
     elseif ($_GET["page"]== 'gere_message')       { include('modif_fic.php')                    ; }

     elseif ($_GET["page"]== 'etat_region')        { include('gere_etat_region.php')             ; }
     elseif ($_GET["page"]== 'etat_pays')          { include('gere_etat_pays.php')               ; }
     elseif ($_GET["page"]== 'etat_note')          { include('gere_etat_note.php')               ; }
     elseif ($_GET["page"]== 'etat_adresse')       { include('gere_etat_adresse.php')            ; }
     
     elseif ($_GET["page"]== 'etat_polis')         { include('gere_etat_police.php')             ; }
     elseif ($_GET["page"]== 'etat_taille_police')         { include('gere_etat_taille_police.php')     ; }
     
     elseif ($_GET["page"]== 'etat_smiley')        { include('gere_etat_smiley.php')             ; }
     elseif ($_GET["page"]== 'pack_smiley')        { include('gere_pack_smiley.php')             ; }
     elseif ($_GET["page"]== 'etat_mail')          { include('gere_etat_mail.php')               ; }
     elseif ($_GET["page"]== 'choix_lang')         { include('gere_choix_lang.php')              ; }
     elseif ($_GET["page"]== 'mon_site')           { include('gere_mon_site.php')                ; }       
     elseif ($_GET["page"]== 'mon_mail')           { include('gere_mon_mail.php')                ; }
              
     elseif ($_GET["page"]== 'Verif_version')      { include('Verif_version.php')                ; }
     elseif ($_GET["page"]== 'licence')            { include('../aides/licence.php')             ; }
     elseif ($_GET["page"]== 'outils')             { include('outils.php')                       ; }
     elseif ($_GET["page"]== 'quit')               { include('logout.php')                       ; }
   }
  else {	 include('accueil.php'); } 
  echo '
</center>
</body>
</html>';
}
else  { include_once'../includes/perdu.php'; }
?>