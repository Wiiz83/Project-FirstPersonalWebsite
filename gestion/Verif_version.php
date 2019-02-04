<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) 
 {  
    require_once'../version/version.php';
    $Votre_Ver = strip_tags($version);
    $homepage = file_get_contents('http://www.livror.fr/version/V_livror_ss_bdd.txt'); 
    $V_En_Cours = strip_tags($homepage);

    echo'<center>
    <div class="cadre">
        <br><br><br>';
              if ($V_En_Cours == $Votre_Ver) 
                {   echo '<br><br><br><span class="text_aide">'.$Taccueil_ver.'</span>'; }      
    
              else { 
                     echo '<br><br><br><span class="text_aide">'.$Tvot_version.'<span class="text_vert">'.$Votre_Ver.'</span>
                           <br><br><span class="text_aide">'.$Tder_version.'<span class="text_vert">'.$V_En_Cours.'</span>
                           <br><br><span class="text_aide">'.$Taccueil_autre_ver.'   
                           <br><br><span class="text_aide"><a href="http://www.livror.fr/version.html" target="_blank" >
                            '.$Tverif_la_version.'</a> </span>' ;
         }

        echo'
         </div>
         <center>';
 }       
else  { include_once'../includes/perdu.php'; }
?>

