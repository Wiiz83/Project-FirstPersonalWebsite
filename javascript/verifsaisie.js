// JavaScript Document
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************

function verifsaisie()
{
if(document.saisiemess.nom.value == ""){alert("Veuillez entrer votre nom!");document.saisiemess.nom.focus(); return false;}
if(document.saisiemess.message.value == ""){alert("Veuillez entrer votre message!");document.saisiemess.message.focus();return false;}
if(document.saisiemess.decompte.value== 250){alert("Veuillez entrer votre message!");document.saisiemess.message.focus();return false;}

if(document.saisiemess.votsite.value != "") {  
     if(document.saisiemess.votsite.value.search(/^(http:\/\/(www)?.[^\s]{1,128}\.[^\s]{3,4})/) == -1)
		    { alert ('veuillez entrer une adresse URL convenable.  \n  Format http://www.VotreSite.(com, fr, eu,...)'); document.saisiemess.votsite.focus();return false; }
   }


}
//</script>