// JavaScript Document
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************

function verifmonmail()
{
  if(document.changemail.lemail.value                == "")   { alert("Veuillez entrer votre adresse \351lectronique!");   document.changemail.lemail.focus(); return false;}
  if(document.changemail.lemail.value.indexOf('@')   == -1)   {alert("Ce n'est pas une adresse \351lectronique valable!"); document.changemail.lemail.focus();return false;}
  if(document.changemail.lemail.value.indexOf('.')   == -1)   {alert("Ce n'est pas une adresse \351lectronique valable!"); document.changemail.lemail.focus();return false;}
   }
//</script>