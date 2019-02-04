<?php
//error_reporting(0);
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec męme licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec męme licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
require_once ('./gestion/variables/choix_lang.php');
require_once ('./gestion/variables/mon_site.php');
require_once ('./lang/'.$lalang.'.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="livror.fr" content="livror.fr, http://www.livror.fr">
<meta name="keywords" content="forum, informatique, aide, html, php, livre d'or, news, rss, gratuit, webmaster, jave, newsletter, conception, site, un livre d'or gratuit, france, auvergne, developper">
<meta name="description" content="Livre d'or gratuit sans base de données par livror.fr">
<meta name="title" content="livre d'or, gratuit, aide webmaster, php, html, trucs et astuces">
<meta name="subject" content="site et forum d'aides aux webmaster">
<meta name="category" content="site, forum, informatique, aides, webmestre, webmaster, trucs et astuces, php, html">
<meta name="author" content="livror.fr">
<meta name="language" content="fr">
<meta name="copyright" content="livror.fr">
<link rel="stylesheet" type="text/css" href="./css/bleu.css">
<title>Livre d'or by LiVror.fr</title>
</head>
<body class="bodymessage">
<?php
echo'
    <center>
    <div class="titre_page">'.$accueil.'<br>
    <img src="./img/banner.jpg" border=0 width=460 height=50><br>
    </div>
 <table class="tablebox">
    <tr>
      <td>
        <br><br><span class="titre_page">'.$Tmaintenance.'</span>
        <br><img src="./img/ferme.png" alt="Ferme" title="Site ferme">
        <br><span class="titre_page">
        <a href="'.$monsite.'">'.$Tretour_site.'</a>
        </span>
      </td>
    </tr>
 </table>
 ';
 include ('./includes/footer.php');