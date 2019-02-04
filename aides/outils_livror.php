<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************

if (isset($_SESSION['pseudo']) && isset($_SESSION['passe'])) {  

 echo'
<center>
<div class="cadre">
<br><br>
<table class="tablediapo">
<tr>
<td class="tdcouleur1">
<span class="text_aide">'.$TaproposMOI.'</span>
</td>
</tr>
</table>
</div>
<center>
 ';
 }       
else  { include_once'../includes/perdu.php'; }
?>