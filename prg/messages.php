<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec m�me licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec m�me licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************

echo '
<table class="tablebox">
  <center>
    <tr>
      <td>
        <center>
          <div class="limitaire">';
          $fichier = fopen("./livre/livror.txt","r");
          //$LATAILLE_EST = filesize("./livre/livror.txt") ;
          //echo $LATAILLE_EST;
          if(!$fichier){ echo 'Le fichier contenant les messages ne peut pas �tre ouvert !'; exit; }
          while($ligne=fread($fichier, 8192)) 
            { echo $ligne; } 
          fclose($fichier);
echo'     </div>
        </center>
    </td>
  </tr>
</center>
</table>';
?>