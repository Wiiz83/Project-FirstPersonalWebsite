<?php
//error_reporting(0);
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
require_once ('./gestion/variables/choix_lang.php');
require_once ("./gestion/variables/etat_site.php");
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
<script type="text/javascript" src="./javascript/verifsaisie.js"></script>
<script type="text/javascript" src="./javascript/popup.js"></script>
<title>Livre d'or by LiVror.fr</title>
</head>
<body class="bodymessage">
    <center>
    <?php
    $nbmsg=0;
    $fichier=fopen("./livre/livror.txt","r");
    while($ligne=fgets($fichier, 500))
       { if(preg_match("<NewMsg>", $ligne)) { $nbmsg += 1; } }
    fclose($fichier);
    
    //if(preg_match("<NewMsg>", $texte)) { $nbmsg += 1; }
    if ($nbmsg == 0)
       {?><div class="titre_page"><?php echo "$accueil";?>
            <a href="javascript:popup('./prg/poplivre.php','message');"><img src="./img/banner.jpg" border=0 width=460 height=50 alt="Laisser un message!"></a><br>
            <span class="comment"><br>
              <?php echo $pasmsg ; ?><br>
              <a href="javascript:popup('./prg/poplivre.php','message');"><?php echo $ecrimsg ; ?></a>
            </span>
            <?php exit;
       }?>
          </div>    

    <div class="titre_page"><?php echo "$accueil";?><br>
    <a href="javascript:popup('./prg/poplivre.php','message');"><img src="./img/banner.jpg" border=0 width=460 height=50 alt="Laisser un message!"></a><br>
    
    <span class="comment"> 
      <?php echo $nbremsg.$nbmsg ; ?>
      <a href="javascript:popup('./prg/poplivre.php','message');">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ecrimsg ; ?></a>
    </span>
    </div>
