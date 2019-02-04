<?php
//session_start();
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) 
 {   require('./func/func_list_smiley.php');
     require('./variables/pack_smiley.php'); 
     $chemin='./variables/pack_smiley.php' ; 
     echo'<center>
         <div class="cadre">';
           echo '<br><span class="text_aide">'.$Tchoix_pack.$packSmiley.' </span>
          <br><br>'.$Tmodif_champ.'
          <form method="POST"  name="ferme" action="">
             <select name="gerechamp">';
                 $repsmiley='../img/smiley/';
                 $Array_Smiley = array(); 
                 if ( !is_dir($repsmiley)) { 
                   echo '<span class="text_vert">'.$Tacces_non.$rep.'</span>' ; 
                  }
                 else {   
                    $dir = opendir($repsmiley);
                    while ($File = readdir($dir)) {  
                    if ( !is_file($File) && $File!="." && $File !=".."){
                    $Array_Smiley[] = "$File"; 
                    sort($Array_Smiley);
                    $Max = count($Array_Smiley);}
                    }
                  }
                 for($i = 0; $i!=$Max; $i++) { 
                  echo '<option  value="'.$Array_Smiley[$i].'" >'.$Array_Smiley[$i].'</option>';
                 }
      echo'</select>
           <br><br><input type="submit" name="etat" value="'.$Tenreg.'">
         </form> 
         ';
    closedir($dir);
    if (isset ($_POST['gerechamp'])) 
      { 
          $gerechamp  = $_POST['gerechamp'];        
          if ( file_exists($chemin) ) { if (!chmod($chemin, 0755)) { echo $Tacces_non.$chemin ; exit; } }
          $fic_user = fopen($chemin,'w') ;
          if (!$fic_user) 
               { echo $Tacces_non.$chemin ;  exit; }
          else {                                                                                                   
                 fwrite ($fic_user,'<?php $packSmiley="'.$gerechamp.'" ; ?>') ;
                 echo'<script language="javascript">;alert("Le pack smiley est choisi");</script>';
                 echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=pack_smiley">'; 
                 exit;
              }
      }
     $rep='../img/list_smiley/';
     func_list_smiley($rep);
   }
else  { include_once'../includes/perdu.php'; }
echo '</div>';
?>