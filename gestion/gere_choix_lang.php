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
     require('./variables/choix_lang.php'); 
     $chemin='./variables/choix_lang.php' ; 
     echo'
     <div class="cadre">';
           echo '<br><span class="text_aide">'.$Tlang.$lalang.' </span>
          <br><br>'.$Tmodif_champ.'
          <form method="POST"    name="ferme" action="">
             <select name="gerechamp">';
                if ($repalire = opendir('../lang')) 
                   {  while (false !== ($file = readdir($repalire))) 
                         {
                            $extencss = substr($file, -3);
                            $debut = substr($file, -6, 2);
                            if ($file != "." && $file != ".." && $extencss == "php" && $file != "index.php") 
                              { echo '<option  value="'.$debut.'" >'.$debut.'</option>'; }
                         }
                    }  
    echo'</select>
            <br><br><input type="submit" name="etat" value="'.$Tenreg.'">
         </form> 
         ';
    closedir($repalire);
    if (isset ($_POST['gerechamp'])) 
      { 
          $gerechamp  = $_POST['gerechamp'];        
          if ( file_exists($chemin) ) { if (!chmod($chemin, 0755)) { echo $Tacces_non.$chemin ; exit; } }
          $fic_user = fopen($chemin,'w') ;
          if (!$fic_user) 
               { echo $Tacces_non.$chemin ;  exit; }
          else {                                                                                                   
                 fwrite ($fic_user,'<?php $lalang="'.$gerechamp.'" ; ?>') ;
                 echo' <script language="javascript">;alert("la langue est choisie");</script>';
                 echo '<meta http-equiv="refresh" content="0;URL=admin.php?page=choix_lang">'; 
                 exit;
              }
      }


       include_once('./variables/code_pays.php');
   }

else  { include_once'../includes/perdu.php'; }
echo '</div';
?>