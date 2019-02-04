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
<span class="text_aide">
<font size="2">
<center>Licence Internationale <br><br>
<a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"target=_blank">
<img alt="Contrat Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" />
</a>
<br />
<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">LiVror</span>
 by 
<a xmlns:cc="http://creativecommons.org/ns#" href="http://www.livror.fr"target=_blank"  property="cc:attributionName" rel="cc:attributionURL">
LiVror.fr
</a> 
est mis &agrave; disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"target=_blank">
licence Creative Commons Paternit&eacute; - Pas d&#39;Utilisation Commerciale 3.0 Unported</a>.
<br />Bas&eacute;(e) sur une oeuvre &agrave; <a xmlns:dct="http://purl.org/dc/terms/" href="http://www.livror.fr"target=_blank"  rel="dct:source">
www.livror.fr</a>.
<br />Les autorisations au-del&agrave; du champ de cette licence peuvent &ecirc;tre obtenues &agrave; 
<a xmlns:cc="http://creativecommons.org/ns#"  href="http://www.livror.fr"target=_blank"  rel="cc:morePermissions">http://www.livror.fr</a><br>-------------------------------------------------<br>
Licence France<br><br>
<a rel="license" href="http://creativecommons.org/licenses/by-nc/2.0/fr/"target=_blank">
<img alt="Contrat Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/2.0/fr/88x31.png" />
</a>
<br />
<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">LiVror</span>
 by 
<a xmlns:cc="http://creativecommons.org/ns#" href="http://www.livror.fr"target=_blank"  property="cc:attributionName" rel="cc:attributionURL">
LiVror.fr
</a>
 est mis &agrave; disposition selon les termes de la 
<a rel="license" href="http://creativecommons.org/licenses/by-nc/2.0/fr/"target=_blank">
licence Creative Commons Paternit&eacute; - Pas d&#39;Utilisation Commerciale 2.0 France</a>.
<br />
Bas&eacute;(e) sur une oeuvre &agrave;
 <a xmlns:dct="http://purl.org/dc/terms/" href="http://www.livror.fr"target=_blank" rel="dct:source">
www.livror.fr</a>.
<br />Les autorisations au-del&agrave; du champ de cette licence peuvent &ecirc;tre obtenues &agrave;
 <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.livror.fr/"target=_blank" rel="cc:morePermissions">http://www.livror.fr</a>



</span>
</td>
</tr>
</table>
</div>
<center>
 ';
 }       
else  { include_once'../includes/perdu.php'; }
?>