<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
require_once ('./variables/choix_lang.php');
require_once ('../lang/'.$lalang.'.php');
if (isset($_POST['pseudo']) && isset($_POST['passe'])) 
 { 
    $mon_pseudo = $_POST['pseudo'];
    $mon_passe  = $_POST['passe'];
    $chemin= '../passwd/user.txt' ;

    if ( file_exists($chemin) ) { 
          if (!chmod($chemin, 0755)) { echo $Tacces_non ; exit; }
          $Clefic=fopen($chemin,'r'); 
        }
    
    else { ?><script type="text/javascript">alert("<?php echo $Tacces_non.$chemin ; ?>");</script><?php
           echo '<meta http-equiv="refresh" content="0;URL=index.php">'; exit; 
        }
    
    $contenu_du_fichier = fgets ($Clefic,800);
    $pseudo_passe=explode('|',$contenu_du_fichier);
    $pseudo  = $pseudo_passe[0] ; 
    $lepasse = $pseudo_passe[1] ;
    if ($mon_pseudo==$pseudo_passe[0] and md5($mon_passe)==$pseudo_passe[1]) 
      { 
        session_start ();
        $_SESSION['pseudo'] = $_POST['pseudo']; 
        $_SESSION['passe'] = $lepasse; 
        header ('location: admin.php'); 
      }                                                            
     else { ?><script type="text/javascript">alert("<?php echo $Tcqui ; ?>");</script><?php
           echo '<meta http-equiv="refresh" content="0;URL=index.php">'; exit; ;
      }  
     echo $erreur ;
 }  
   
else
 { 
     require_once'../includes/header.php';
     echo $Tcqui ;  
     echo '<a href="index.php"><img src="../img/up.png" style="border:0;" alt="'.$Tperdu.'" TITLE="'.$Tperdu.'"></a></center>';
 }  
?> 