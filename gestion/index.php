<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
require_once '../includes/header.php';
echo'
<center>
<br> 
<div class="tablebox">
<span class="titre_page">'.$Tbienvenue.'</span>';
if (!file_exists('../passwd/user.txt')) { echo '<br><br><br>Ouverture du fichier user Impossible&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Opening of the file user Impossible
<br><br>Avez-vous install&eacute; le livre ?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is the book Installed ?';  exit; }
echo'
<table  class="tablediapo">
	<tr>
		<td class="tdcouleur1">
      <form action="connect.php" method="post">
          <span class="texte">
              '.$Tvot_nom.'<br>
              <input name="pseudo" type="text">
              <br><br>
        			'.$Tvot_pass.'<br>
              <input name="passe" type="password">
        			<br><br>
        			<input name="" type="submit" value="GO">
              <br><br>
        	</span>
			</form>
		</td>
	</tr>
</table>
</div>
</center>' ;
include_once '../includes/footer.php';
?>