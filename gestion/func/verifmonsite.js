// JavaScript Document
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************

function verifmonsite()
{
if(document.veriflesite.lesite.value == ""){ alert("Veuillez entrer une adresse !");   document.veriflesite.lesite.focus(); return false;}
if(document.veriflesite.lesite.value != "") {  
     if(document.veriflesite.lesite.value.search(/^(http:\/\/(www)?.[^\s]{1,128}\.[^\s]{3,4})/) == -1)
		    { alert ('veuillez entrer une adresse URL convenable.  \n  Format http://www.VotreSite.(com, fr, eu,...)'); document.veriflesite.lesite.focus();return false; }
   }
}
//</script>