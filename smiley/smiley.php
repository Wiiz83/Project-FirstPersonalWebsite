<?php
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************

function smileys($area_saisie,$packSmiley)
{
require_once ('../gestion/variables/pack_smiley.php');
$cheminsmiley='./img/smiley/'.$packSmiley  ;
$trace= '<img src="'.$cheminsmiley.'/Joker' ;

$text_entree=array(
':_Joker01_:' ,
':_Joker02_:' ,
':_Joker03_:' ,
':_Joker04_:' ,
':_Joker05_:' ,
':_Joker06_:' ,
':_Joker07_:' ,
':_Joker08_:' ,
':_Joker09_:' ,
':_Joker10_:' ,
':_Joker11_:' ,
':_Joker12_:' ,
':_Joker13_:' ,
':_Joker14_:' ,
':_Joker15_:' ,
':_Joker16_:' ,
':_Joker17_:' ,
':_Joker18_:' ,
':_Joker19_:' ,
':_Joker20_:' ,
':_Joker21_:' ,
':_Joker22_:' ,
':_Joker23_:' ,
':_Joker24_:' ,
':_Joker25_:' ,
':_Joker26_:' ,
':_Joker27_:' ,
':_Joker28_:' ,
':_Joker29_:' ,
':_Joker30_:' ,
':_Joker31_:' ,
':_Joker32_:' ,
':_Joker33_:' ,
':_Joker34_:' ,
':_Joker35_:' ,
':_Joker36_:' ,
':_Joker37_:' ,
':_Joker38_:' ,
':_Joker39_:' ,
':_Joker40_:' ,
':_Joker41_:' ,
':_Joker42_:' ,
':_Joker43_:' ,
':_Joker44_:' ,
':_Joker45_:' ,
':_Joker46_:' ,
':_Joker47_:' ,
':_Joker48_:' ,
':_Joker49_:' ,
':_Joker50_:' ,

'[b]'  ,
'[/b]' ,
'[i]'  ,
'[/i]' ,
'[s]'  ,
'[/s]' ,

'[size=5]'  ,
'[size=4]' ,
'[size=3]' ,
'[/size]'


 );

$smile_sortie=array(
$trace.'01.gif">' ,
$trace.'02.gif">' ,
$trace.'03.gif">' ,
$trace.'04.gif">' ,
$trace.'05.gif">' ,
$trace.'06.gif">' ,
$trace.'07.gif">' ,
$trace.'08.gif">' ,
$trace.'09.gif">' ,
$trace.'10.gif">' ,

$trace.'11.gif">' ,
$trace.'12.gif">' ,
$trace.'13.gif">' ,
$trace.'14.gif">' ,
$trace.'15.gif">' ,
$trace.'16.gif">' ,
$trace.'17.gif">' ,
$trace.'18.gif">' ,
$trace.'19.gif">' ,
$trace.'20.gif">' ,
                                         
$trace.'21.gif">' ,
$trace.'22.gif">' ,
$trace.'23.gif">' ,
$trace.'24.gif">' ,
$trace.'25.gif">' ,
$trace.'26.gif">' ,
$trace.'27.gif">' ,
$trace.'28.gif">' ,
$trace.'29.gif">' ,
$trace.'30.gif">' ,

$trace.'31.gif">' ,
$trace.'32.gif">' ,
$trace.'33.gif">' ,
$trace.'34.gif">' ,
$trace.'35.gif">' ,
$trace.'36.gif">' ,
$trace.'37.gif">' ,
$trace.'38.gif">' ,
$trace.'39.gif">' ,
$trace.'40.gif">' ,

$trace.'41.gif">' ,
$trace.'42.gif">' ,
$trace.'43.gif">' ,
$trace.'44.gif">' ,
$trace.'45.gif">' ,
$trace.'46.gif">' ,
$trace.'47.gif">' ,
$trace.'48.gif">' ,
$trace.'49.gif">' ,
$trace.'50.gif">' , 
'<span class="gras">',
'</span>',
'<span class="italiq">',
'</span>',
'<span class="souligne">',
'</span>' ,
'<font size="5">',
'<font size="4">',
'<font size="3">',
'</font>'
 );
return str_replace($text_entree,$smile_sortie,$area_saisie);
}

?>