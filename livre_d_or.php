<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lucas Uzan - Student Website</title>
<link rel="icon" type="images/favicon.png" href="/images/favicon.png" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="images/favicon.png" />

</head>



<body>


<div id="container">
  <div id="header">
    <div class="logo"><img src="images/logo.png" alt="Logo LU" /></div>
    <div class="texte">
      <p>ÉTUDIANT <span>DUT MMI</span></p>
    </div>
    <div class="réseaux"><img src="images/reseaux.png" alt="Réseaux sociaux" border="0" usemap="#Map" />
      <map name="Map" id="Map">
        <area shape="rect" coords="4,6,21,23" target="_blank"  href="https://www.facebook.com/lucas.uzan.3" />
        <area shape="rect" coords="26,7,43,23" target="_blank"  href="https://twitter.com/Wiiz83" />
        <area shape="rect" coords="48,8,65,24" target="_blank"  href="https://plus.google.com/u/0/105240826043526813559/posts" />
        <area shape="rect" coords="70,7,86,24" target="_blank"  href="http://www.linkedin.com/profile/view?id=252682429&amp;trk=hb_tab_pro_top" />
        <area shape="rect" coords="92,7,108,24" target="_blank" href="http://www.viadeo.com/profile/002jk53fr5r5qbt/?ga_from=Fu:undefined;Fb:header-top_right;Fe:L1-premium;" />
      </map>
    </div>
  </div>
  <div id="menu_h">
    <ul class="rubrique">
      <li><a href="./index.html" >Accueil</a></li>
      <li><a href="./qui_suis_je.html">Qui-suis-je ?</a></li>
      <li><a href="./mes_creations.html">Mes créations</a></li>
      <li><a href="./coin_detente.html" >Coin Détente</a></li>
      <li><a href="./livre_d_or.php" class="active">Livre d’Or</a></li>
    </ul>
  </div>
  <div id="slide">
<?php
//session_start();
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
//error_reporting(E_ERROR | E_PARSE);
require_once ("./gestion/variables/etat_site.php");
if ($bloc_site=="N") {
    require_once ("./includes/headerindex.php");
    require_once ("./prg/messages.php");
    include './includes/footer.php';
  }

 else {
    include './includes/livre_ferme.php';
  }
  
  ?>
</div>
</div>
  </body>
</html>
