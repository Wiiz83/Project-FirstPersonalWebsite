<?php
session_start();
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************

if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');
function getCode($length) 
{
    $chars = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
    $code = '';
    for ($i=0; $i<$length; $i++)  { $code .= $chars{ mt_rand( 0, strlen($chars) - 1 ) }; }
    return $code;
}

function random($tab) 
{ 
  return $tab[array_rand($tab)]; 
}

$code = getCode(5);
$_SESSION['captcha'] = md5($code);
$char1 = substr($code,0,1);
$char2 = substr($code,1,1);
$char3 = substr($code,2,1);
$char4 = substr($code,3,1);
$char5 = substr($code,4,1);
$fonts = glob('font/*.ttf');
$image = imagecreatefrompng('captcha.png');
$colors = array ( imagecolorallocate($image, 131, 154, 255),imagecolorallocate($image,  140, 234, 222),imagecolorallocate($image,  97, 239, 116),imagecolorallocate($image,  205, 205, 16),imagecolorallocate($image,  234, 89, 45) );
imagettftext($image, 28, -10, 0, 37, random($colors), ABSPATH.random($fonts), $char1);
imagettftext($image, 28, 20, 37, 37, random($colors), ABSPATH.random($fonts), $char2);
imagettftext($image, 28, -35, 55, 37, random($colors), ABSPATH.random($fonts), $char3);
imagettftext($image, 28, 25, 100, 37, random($colors), ABSPATH.random($fonts), $char4);
imagettftext($image, 28, -15, 120, 37, random($colors), ABSPATH.random($fonts), $char5);
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>