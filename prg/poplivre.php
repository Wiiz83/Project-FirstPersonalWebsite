<?php
//session_start();
//**********  A conserver  ******************************************************************************************
// LICENCE CC 3.0 internationale modif avec même licence pas d'utilisation commerciale  liens sur LiVror.fr         *
// LICENCE CC 2.0 France modif avec même licence pas d'utilisation commerciale   liens sur LiVror.fr                *
// Laisser les liens http://www.livror.fr                                                                           *
//*******************************************************************************************************************
require_once("../includes/header.php");
require_once ('../gestion/variables/etat_adresse.php');
require_once ('../gestion/variables/etat_smiley.php');
require_once ('../gestion/variables/etat_mail.php');
require_once ('../gestion/variables/etat_note.php');
require_once ('../gestion/variables/etat_pays.php');
require_once ('../gestion/variables/etat_region.php');
require_once ('../gestion/variables/etat_police.php');
require_once ('../gestion/variables/etat_taille_police.php');
require_once ('../gestion/variables/choix_lang.php');
require_once ('../gestion/variables/pack_smiley.php');

$chemin_smiley='../img/smiley/'.$packSmiley.'/'  ;
//error_reporting(0);
echo'
<center>
<div class="cadre">
   <div class="titre_page">'.$mercimsg.'</div>
     <form method="post" name="saisiemess" action="ajout_livre.php" onSubmit="return verifsaisie()">
       <table class="tablcaptcha">
            <tr>
              <TH> * '.$lenom.'<input type="text" name="nom" size="25" MAXLENGTH=25></TH>';
              if (strtoupper($metladresse) == 'O') {
         echo'<TH>'.$ladresse.'<input type="text" name="votsite" size="50" MAXLENGTH=200></TH>'; }   
    echo'  </tr>               ;  
           <tr>';
                if (strtoupper($laregON)== 'O')   {  echo'<TH>'.$laregion.'</TH>'; } 
                if (strtoupper($lepaysON) == 'O') { echo'<TH>'.$saisipays.'</TH>' ; } 
                if (strtoupper($metlanote) == 'O')   { echo'<TH>'.$lanote.'</TH>' ; }
      echo'</tr>
           <tr>';
             if (strtoupper($laregON) == 'O') {    ?>
              <td>        
                 <select name="region">
                    <option value=""></option>
                    <option value="(01)Ain">(01)Ain</option>                                       <option value="(02)Aisne">(02)Aisne</option>
                    <option value="(03)Allier">(03)Allier</option>                                 <option value="(04)Alpes-de-Haute-Provence">(04)Alpes-de-Haute-Provence</option>
                    <option value="(05)Hautes-Alpes">(05)Hautes-Alpes</option>                     <option value="(06)Alpes-Maritimes">(06)Alpes-Maritimes</option> 
                    <option value="(07)Ard&egrave;che">(07)Ard&egrave;che</option>                 <option value="(08)Ardennes">(08)Ardennes</option>
                    <option value="(09)Ari&egrave;ge">(09)Ari&egrave;ge</option>                   <option value="(10)Aube">(10)Aube</option>
                    <option value="(11)Aude">(11)Aude</option>                                     <option value="(12)Aveyron">(12)Aveyron</option>
                    <option value="(13)Bouches-du-Rh&ocirc;ne">(13)Bouches-du-Rh&ocirc;ne</option> <option value="(14)Calvados">(14)Calvados</option>
                    <option value="(15)Cantal">(15)Cantal</option>                                 <option value="(16)Charente">(16)Charente</option>
                    <option value="(17)Charente-Maritime">(17)Charente-Maritime</option>           <option value="(18)Cher">(18)Cher</option>
                    <option value="(19)Corr&egrave;ze">(19)Corr&egrave;ze</option>                 <option value="(21)C&ocirc;te-d'Or">(21)C&ocirc;te-d'Or</option>
                    <option value="(22)C&ocirc;tes-d'Armor">(22)C&ocirc;tes-d'Armor</option>       <option value="(23)Creuse">(23)Creuse</option>
                    <option value="(24)Dordogne">(24)Dordogne</option>                             <option value="(25)Doubs">(25)Doubs</option>
                    <option value="(26)Dr&ocirc;me">(26)Dr&ocirc;me</option>                       <option value="(27)Eure">(27)Eure</option>
                    <option value="(28)Eure-et-Loir">(28)Eure-et-Loir</option>                     <option value="(29)Finist&egrave;re">(29)Finist&egrave;re</option>
                    <option value="(2A)Corse-du-Sud">(2A)Corse-du-Sud</option>                     <option value="(2B)Haute-Corse">(2B)Haute-Corse</option>
                    <option value="(30)Gard">(3)Gard</option>                                      <option value="(31)Haute-Garonne">(31)Haute-Garonne</option>
                    <option value="(32)Gers">(32)Gers</option>                                     <option value="(33)Gironde">(33)Gironde</option>
                    <option value="(34)H&eacute;rault">(34)H&eacute;rault</option>                 <option value="(35)Ille-et-Vilaine">(35)Ille-et-Vilaine</option>
                    <option value="(36)Indre">(36)Indre</option>                                   <option value="(37)Indre-et-Loire">(37)Indre-et-Loire</option>
                    <option value="(38)Is&egrave;re">(38)Is&egrave;re</option>                     <option value="(39)Jura">(39)Jura</option>
                    <option value="(40)Landes">(40)Landes</option>                                 <option value="(41)Loir-et-Cher">(41)Loir-et-Cher</option>
                    <option value="(42)Loire">(42)Loire</option>                                   <option value="(43)Haute-Loire">(43)Haute-Loire</option>
                    <option value="(44)Loire-Atlantique">(44)Loire-Atlantique</option>             <option value="(45)Loiret">(45)Loiret</option>
                    <option value="(46)Lot">(46)Lot</option>                                       <option value="(47)Lot-et-Garonne">(47)Lot-et-Garonne</option>
                    <option value="(48)Loz&egrave;re">(48)Loz&egrave;re</option>                   <option value="(49)Maine-et-Loire">(49)Maine-et-Loire</option>
                    <option value="(50)Manche">(50)Manche</option>                                 <option value="(51)Marne">(51)Marne</option>
                    <option value="(52)Haute-Marne">(52)Haute-Marne</option>                       <option value="(53)Mayenne">(53)Mayenne</option>
                    <option value="(54)Meurthe-et-Moselle">(54)Meurthe-et-Moselle</option>         <option value="(55)Meuse">(55)Meuse</option>
                    <option value="(56)Morbihan">(56)Morbihan</option>                             <option value="(57)Moselle">(57)Moselle</option>
                    <option value="(58)Ni&egrave;vre">(58)Ni&egrave;vre</option>                   <option value="(59)Nord">(59)Nord</option>
                    <option value="(60)Oise">(60)Oise</option>                                     <option value="(61)Orne">(61)Orne</option>
                    <option value="(62)Pas-de-Calais">(62)Pas-de-Calais</option>                   <option value="(63)Puy-de-D&ocirc;me">(63)Puy-de-D&ocirc;me</option>
                    <option value="(64)Pyr&eacute;n&eacute;es-Atlantiques">(64)Pyr&eacute;n&eacute;es-Atlantiques</option>  <option value="(65)Hautes-Pyr&eacute;n&eacute;es">(65)Hautes-Pyr&eacute;n&eacute;es</option>
                    <option value="(66)Pyr&eacute;n&eacute;es-Orientales">(66)Pyr&eacute;n&eacute;es-Orientales</option>    <option value="(67)Bas-Rhin">(67)Bas-Rhin</option>
                    <option value="(68)Haut-Rhin">(68)Haut-Rhin</option>                            <option value="(69)Rh&ocirc;ne">(69)Rh&ocirc;ne</option>
                    <option value="(70)Haute-Sa&ocirc;ne">(70)Haute-Sa&ocirc;ne</option>            <option value="(71)Sa&ocirc;ne-et-Loire">(71)Sa&ocirc;ne-et-Loire</option>
                    <option value="(72)Sarthe">(72)Sarthe</option>                                  <option value="(73)Savoie">(73)Savoie</option>
                    <option value="(74)Haute-Savoie">(74)Haute-Savoie</option>                      <option value="(75)Paris">(75)Paris</option>
                    <option value="(76)Seine-Maritime">(76)Seine-Maritime</option>                  <option value="(77)Seine-et-Marne">(77)Seine-et-Marne</option>
                    <option value="(78)Yvelines">(78)Yvelines</option>                              <option value="(79)Deux-S&egrave;vres">(79)Deux-S&egrave;vres</option>
                    <option value="(80)Somme">(80)Somme</option>                                    <option value="(81)Tarn">(81)Tarn</option>
                    <option value="(82)Tarn-et-Garonne">(82)Tarn-et-Garonne</option>                <option value="(83)Var">(83)Var</option>
                    <option value="(84)Vaucluse">(84)Vaucluse</option>                              <option value="(85)Vend&eacute;e">(85)Vend&eacute;e</option>
                    <option value="(86)Vienne">(86)Vienne</option>                                  <option value="(87)Haute-Vienne">(87)Haute-Vienne</option>
                    <option value="(88)Vosges">(88)Vosges</option>                                  <option value="(89)Yonne">(89)Yonne</option>
                    <option value="(90)Territoire de Belfort">(90)Territoire de Belfort</option>    <option value="(91)Essonne">(91)Essonne</option>
                    <option value="(92)Hauts-de-Seine">(92)Hauts-de-Seine</option>                  <option value="(93)Seine-Saint-Denis">(93)Seine-Saint-Denis</option>
                    <option value="(94)Val-de-Marne">(94)Val-de-Marne</option>                      <option value="(95)Val-d'Oise">(95)Val-d'Oise</option>
                    <option value="(971)Guadeloupe">(971)Guadeloupe</option>                        <option value="(972)Martinique">(972)Martinique</option>
                    <option value="(973)Guyane">(973)Guyane</option>                                <option value="(974)La R&eacute;union">(974)La R&eacute;union</option>
                    <option value="(975)Saint-Pierre-et-Miquelon">(975)Saint-Pierre-et-Miquelon</option>  <option value="(976)Mayotte">(976)Mayotte</option>
                    <option value="(984)Terres Australes et Antarctiques">(984)Terres Australes et Antarctiques</option>  <option value="(986)Wallis et Futuna">(986)Wallis et Futuna</option>
                    <option value="(987)Polyn&eacute;sie Française">(987)Polyn&eacute;sie Française</option>              <option value="(988)Nouvelle-Cal&eacute;donie">(988)Nouvelle-Cal&eacute;donie</option>
                 </select>                                                                                                          
              </td>
             <?php 
             } 
             
             if (strtoupper($lepaysON) == 'O') {    ?>
              <td>        
                 <select name="pays">
                    <option value=""></option>
                    <option value="AF"> Afghanistan </option> 
                    <option value="ZA"> Afrique du Sud </option>  
                    <option value="AL"> Albanie </option>				
                    <option value="DZ"> Algérie </option>     
                    <option value="DE"> Allemagne </option>       
                    <option value="AD"> Andorre </option>				
                    <option value="AO"> Angola </option>      
                    <option value="AQ"> Antarctique </option>     
                    <option value="SA"> Arabie Saoudite </option>				
                    <option value="AR"> Argentine </option>		
                    <option value="AM"> Arménie </option>				  
                    <option value="AU"> Australie </option>				
                    <option value="AT"> Autriche </option>		
                    <option value="AZ"> Azerbaïdjan </option>			
                    <option value="BS"> Bahamas </option>				
                    <option value="BH"> Bahreïn </option>				
                    <option value="BD"> Bangladesh </option>				
                    <option value="BB"> Barbade </option>				
                    <option value="BE"> Belgique </option>				
                    <option value="BZ"> Belize </option>				
                    <option value="BJ"> Bénin </option>				
                    <option value="BM"> Bermudes </option>				
                    <option value="BT"> Bhoutan </option>				
                    <option value="BY"> Biélorussie </option>				
                    <option value="BO"> Bolivie </option>				
                    <option value="BA"> Bosnie Herzégovine </option>				
                    <option value="BW"> Botswana </option>				
                    <option value="BR"> Brésil </option>				
                    <option value="BN"> Brunéi </option>				
                    <option value="BG"> Bulgarie </option>				
                    <option value="BF"> Burkina Faso </option>				
                    <option value="BI"> Burundi </option>				
                    <option value="KH"> Cambodge </option>				
                    <option value="CM"> Cameroun </option>				
                    <option value="CA"> Canada </option>				
                    <option value="CV"> Cap Vert </option>				
                    <option value="CL"> Chili </option>				
                    <option value="CN"> Chine </option>				
                    <option value="CY"> Chypre </option>				
                    <option value="CO"> Colombie </option>				
                    <option value="KM"> Comores </option>				
                    <option value="CG"> Congo </option>				
                    <option value="KP"> Corée </option>				
                    <option value="CR"> Costa Rica </option>				
                    <option value="CI"> Côte d'Ivoire </option>				
                    <option value="HR"> Croatie </option>				
                    <option value="CU"> Cuba </option>				
                    <option value="DK"> Danemark </option>				
                    <option value="DJ"> Djibouti </option>				
                    <option value="EG"> Egypte </option>				
                    <option value="SV"> El Salvador </option>				
                    <option value="AE"> Emirats Arabes Unis </option>				
                    <option value="EC"> Equateur </option>				
                    <option value="ES"> Espagne </option>				
                    <option value="EE"> Estonie </option>				
                    <option value="US"> Etats-Unis </option>				
                    <option value="ET"> Ethiopie </option>				
                    <option value="FI"> Finlande </option>				
                    <option value="FR"> France </option>				
                    <option value="GA"> Gabon </option>				
                    <option value="GM"> Gambie </option>				
                    <option value="GE"> Géorgie </option>				
                    <option value="GH"> Ghana </option>				
                    <option value="GI"> Gibraltar </option>				
                    <option value="GR"> Grèce </option>				
                    <option value="GL"> Groenland </option>				
                    <option value="GP"> Guadeloupe </option>				
                    <option value="GT"> Guatemala </option>				
                    <option value="GN"> Guinée </option>				
                    <option value="GQ"> Guinée équatoriale </option>				
                    <option value="GW"> Guinée-Bissau </option>				
                    <option value="GY"> Guyana </option>				
                    <option value="GF"> Guyane française </option>				
                    <option value="HT"> Haïti </option>				
                    <option value="HN"> Honduras </option>				
                    <option value="HK"> Hong-Kong </option>				
                    <option value="HU"> Hongrie </option>				
                    <option value="FÖ"> Iles Féroé </option>				
                    <option value="IN"> Inde </option>				
                    <option value="ID"> Indonésie </option>				
                    <option value="IQ"> Irak </option>				
                    <option value="IR"> Iran </option>				
                    <option value="IE"> Irlande </option>				
                    <option value="IS"> Islande </option>				
                    <option value="IL"> Israël </option>				
                    <option value="IT"> Italie </option>				
                    <option value="JM"> Jamaïque </option>				
                    <option value="JP"> Japon </option>				
                    <option value="JO"> Jordanie </option>				
                    <option value="KZ"> Kazakhstan </option>				
                    <option value="KE"> Kenya </option>				
                    <option value="KG"> Kirghizistan </option>				
                    <option value="KW"> Koweït </option>				
                    <option value="LA"> Laos </option>				
                    <option value="LS"> Lesotho </option>				
                    <option value="LV"> Lettonie </option>				
                    <option value="LB"> Liban </option>				
                    <option value="LR"> Liberia </option>				
                    <option value="LI"> Liechtenstein </option>				
                    <option value="LT"> Lituanie </option>				
                    <option value="LU"> Luxembourg </option>				
                    <option value="MO"> Macao </option>				
                    <option value="MK"> Macédoine </option>				
                    <option value="MG"> Madagascar </option>				
                    <option value="MY"> Malaisie </option>				
                    <option value="MW"> Malawi </option>				
                    <option value="MV"> Maldives </option>				
                    <option value="ML"> Mali </option>				
                    <option value="MT"> Malte </option>				
                    <option value="MA"> Maroc </option>				
                    <option value="MQ"> Martinique </option>				
                    <option value="MU"> Maurice </option>				
                    <option value="MR"> Mauritanie </option>				
                    <option value="MX"> Mexique </option>				
                    <option value="MD"> Moldavie </option>				
                    <option value="MC"> Monaco </option>				
                    <option value="MN"> Mongolie </option>				
                    <option value="ME"> Monténégro </option>				
                    <option value="MZ"> Mozambique </option>				
                    <option value="NA"> Namibie </option>				
                    <option value="NP"> Népal </option>				
                    <option value="NI"> Nicaragua </option>				
                    <option value="NE"> Niger </option>				
                    <option value="NG"> Nigéria </option>				
                    <option value="NO"> Norvège </option>				
                    <option value="NC"> Nouvelle-Calédonie </option>				
                    <option value="NZ"> Nouvelle-Zélande </option>				
                    <option value="UG"> Ouganda </option>				
                    <option value="UZ"> Ouzbékistan </option>				
                    <option value="PK"> Pakistan </option>				
                    <option value="PA"> Panama </option>				
                    <option value="PG"> Papouasie-Nouvelle-Guinée </option>				
                    <option value="PY"> Paraguay </option>				
                    <option value="NL"> Pays-Bas </option>				
                    <option value="PE"> Pérou </option>				
                    <option value="PH"> Philippines </option>				
                    <option value="PL"> Pologne </option>				
                    <option value="PF"> Polynésie française </option>				
                    <option value="PR"> Porto Rico </option>				
                    <option value="PT"> Portugal </option>				
                    <option value="QC"> Québec </option>				
                    <option value="DD"> RDA </option>				
                    <option value="CF"> République Centrafricaine </option>				
                    <option value="CD"> République démocratique du Congo </option>				
                    <option value="DO"> République Dominicaine </option>				
                    <option value="CZ"> République Tchèque </option>				
                    <option value="RO"> Roumanie </option>				
                    <option value="GB"> Royaume-Uni </option>				
                    <option value="RU"> Russie </option>				
                    <option value="RW"> Rwanda </option>				
                    <option value="SM"> Saint-Marin </option>				
                    <option value="SB"> Salomon Iles </option>				
                    <option value="SN"> Sénégal </option>				
                    <option value="RS"> Serbie </option>				
                    <option value="CS"> Serbie-et-Monténégro </option>				
                    <option value="SC"> Seychelles </option>				
                    <option value="SL"> Sierra Leone </option>				
                    <option value="SG"> Singapour </option>				
                    <option value="SK"> Slovaquie </option>				
                    <option value="SI"> Slovénie </option>				
                    <option value="SO"> Somalie </option>				
                    <option value="SD"> Soudan </option>				
                    <option value="LK"> Sri Lanka </option>				
                    <option value="SE"> Suède </option>				
                    <option value="CH"> Suisse </option>				
                    <option value="SR"> Suriname </option>				
                    <option value="SZ"> Swaziland </option>				
                    <option value="SY"> Syrie </option>				
                    <option value="TJ"> Tadjikistan </option>				
                    <option value="TW"> Taïwan </option>				
                    <option value="TZ"> Tanzanie </option>				
                    <option value="TD"> Tchad </option>				
                    <option value="PS"> Territoires palestiniens </option>				
                    <option value="TH"> Thaïlande </option>				
                    <option value="TG"> Togo </option>				
                    <option value="TT"> Trinité-et-Tobago </option>				
                    <option value="TN"> Tunisie </option>				
                    <option value="TM"> Turkmenistan </option>				
                    <option value="TR"> Turquie </option>				
                    <option value="UA"> Ukraine </option>				
                    <option value="SU"> URSS </option>				
                    <option value="UY"> Uruguay </option>				
                    <option value="VA"> Vatican </option>				
                    <option value="VE"> Venezuela </option>				
                    <option value="VN"> Vietnam </option>				
                    <option value="YE"> Yémen </option>				
                    <option value="YU"> Yougoslavie </option>				
                    <option value="ZR"> Zaïre </option>				
                    <option value="ZM"> Zambie </option>				
                    <option value="ZW"> Zimbabwe </option>
                 </select>                                                                                                          
              </td>

              <?php } 
              
              if (strtoupper($metlanote) == 'O')   {?>
              <td>
                <select name="note">
                    <option value=""></option>
                    <option value="01/10">01</option><option value="02/10">02</option><option value="03/10">03</option><option value="04/10">04</option><option value="05/10">05</option>
                    <option value="06/10">06</option><option value="07/10">07</option><option value="08/10">08</option><option value="09/10">09</option><option value="10/10">10</option>
                </select> 
              </td>
               <?php } ?>
            </tr>
          </table>

          * <?php echo $lemsg ; ?><input type="text" name="decompte" size="5" id="controle_decompte" readonly><?php echo $caract ; ?>
          <input src="../img/img1.png" style="border:0;" title="<?php echo $efface ; ?>" alt="<?php echo $efface ; ?>" type="reset" id="annuler" name="annuler" value="<?php echo $efface ; ?>" >           
          <?php
          if (strtoupper($metlapolice) == 'O')   { ?>
              <a href="javascript:ajoute_smiley('[b][/b]');"><span class="blocvert"><?php echo $T_Gras  ;?></span></a>&nbsp;&nbsp;
              <a href="javascript:ajoute_smiley('[i][/i]');"><span class="blocbleu"><?php echo $T_Italiq  ;?></span></a>&nbsp;&nbsp;
              <a href="javascript:ajoute_smiley('[s][/s]');"><span class="blocrouge"><?php echo $T_Souligns  ;?></span></a>
     <?php } 
          if (strtoupper($metlaTpolice) == 'O')   { ?>
              <a href="javascript:ajoute_smiley('[size=3][/size]');"><span class="blocpolice"><font size="3">T 3</font></span></a>
              <a href="javascript:ajoute_smiley('[size=4][/size]');"><span class="blocpolice"><font size="4">T 4</font></span></a>
              <a href="javascript:ajoute_smiley('[size=5][/size]');"><span class="blocpolice"><font size="5">T 5</font></span></a>
     <?php }
          if ((strtoupper($metlaTpolice) == 'O') OR (strtoupper($metlapolice) == 'O'))  { ?>
              <a href="#" class="popaidepop"><img src="../img/help1.png" alt="Aide" Title="Aide" border="0">
              <span><textarea class="poparea" name="lemsg" rows="1" cols="70" readonly><?php echo $Taide_pop ; ?></textarea></a></span><br>
     <?php } ?>
          <textarea rows="5" name="message" cols="90" id="testmessage"></textarea>
          <script language="Javascript" type="text/javascript">LimiterTextArea('testmessage', 500, 'controle_decompte'); </script>

          <?php 
          if (strtoupper($smileON)== 'O') 
            { 
              ?><br>

<a href="javascript:ajoute_smiley(':_Joker01_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker01.gif" border=0 alt=":_Joker01_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker02_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker02.gif" border=0 alt=":_Joker02_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker03_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker03.gif" border=0 alt=":_Joker03_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker04_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker04.gif" border=0 alt=":_Joker04_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker05_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker05.gif" border=0 alt=":_Joker05_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker06_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker06.gif" border=0 alt=":_Joker06_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker07_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker07.gif" border=0 alt=":_Joker07_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker08_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker08.gif" border=0 alt=":_Joker08_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker09_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker09.gif" border=0 alt=":_Joker09_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker10_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker10.gif" border=0 alt=":_Joker10_:"></a>&nbsp;

<a href="javascript:ajoute_smiley(':_Joker11_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker11.gif" border=0 alt=":_Joker11_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker12_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker12.gif" border=0 alt=":_Joker12_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker13_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker13.gif" border=0 alt=":_Joker13_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker14_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker14.gif" border=0 alt=":_Joker14_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker15_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker15.gif" border=0 alt=":_Joker15_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker16_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker16.gif" border=0 alt=":_Joker16_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker17_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker17.gif" border=0 alt=":_Joker17_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker18_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker18.gif" border=0 alt=":_Joker18_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker19_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker19.gif" border=0 alt=":_Joker19_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker20_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker20.gif" border=0 alt=":_Joker20_:"></a>&nbsp;

<a href="javascript:ajoute_smiley(':_Joker21_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker21.gif" border=0 alt=":_Joker21_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker22_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker22.gif" border=0 alt=":_Joker22_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker23_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker23.gif" border=0 alt=":_Joker23_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker24_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker24.gif" border=0 alt=":_Joker24_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker25_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker25.gif" border=0 alt=":_Joker25_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker26_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker26.gif" border=0 alt=":_Joker26_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker27_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker27.gif" border=0 alt=":_Joker27_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker28_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker28.gif" border=0 alt=":_Joker28_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker29_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker29.gif" border=0 alt=":_Joker29_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker30_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker30.gif" border=0 alt=":_Joker30_:"></a>&nbsp;

<a href="javascript:ajoute_smiley(':_Joker31_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker31.gif" border=0 alt=":_Joker31_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker32_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker32.gif" border=0 alt=":_Joker32_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker33_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker33.gif" border=0 alt=":_Joker33_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker34_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker34.gif" border=0 alt=":_Joker34_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker35_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker35.gif" border=0 alt=":_Joker35_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker36_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker36.gif" border=0 alt=":_Joker36_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker37_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker37.gif" border=0 alt=":_Joker37_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker38_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker38.gif" border=0 alt=":_Joker38_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker39_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker39.gif" border=0 alt=":_Joker39_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker40_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker40.gif" border=0 alt=":_Joker40_:"></a>&nbsp;

<a href="javascript:ajoute_smiley(':_Joker41_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker41.gif" border=0 alt=":_Joker41_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker42_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker42.gif" border=0 alt=":_Joker42_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker43_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker43.gif" border=0 alt=":_Joker43_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker44_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker44.gif" border=0 alt=":_Joker44_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker45_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker45.gif" border=0 alt=":_Joker45_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker46_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker46.gif" border=0 alt=":_Joker46_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker47_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker47.gif" border=0 alt=":_Joker47_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker48_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker48.gif" border=0 alt=":_Joker48_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker49_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker49.gif" border=0 alt=":_Joker49_:"></a>&nbsp;
<a href="javascript:ajoute_smiley(':_Joker50_:');">  <img src="<?php echo $chemin_smiley ; ?>Joker50.gif" border=0 alt=":_Joker50_:"></a><br>
<?php
              
            } ?> 
          <br>
<!--******TEXTE DE CONTROLE ANTI SPAM !*************************************-->
               <table class="tablcaptcha">                   
                  <tr>
                    <td class="tdcaptchavide"><div class="titre"><?php echo $control ; ?></div></td>
                    <td class="tdcaptchavide"><div class="titre"><?php echo $envoi ; ?></div></td>
                  </tr>
                  <tr>
                     <td class="tdcaptcha">
                        <img src="../captcha/captcha.php" alt="Recopier les lettres" id="captcha" /> <br>  
                        
                        
                        <input name="code" type="text">&nbsp; &nbsp; &nbsp; 
                        <img src="../captcha/reload.png" alt="<?php echo $recharge ; ?>" title="Recharger l'image"  
                        style="cursor:pointer;position:relative;top:+12px;" onclick="document.images.captcha.src='../captcha/captcha.php?id='+Math.round(Math.random(0)*1000)" > 
                        <br><br>
                     </td>
                     <td class="tdcaptchavide">
                         <input type="image" src="../img/img1.png" style="border:0;" title="<?php echo $envoi ; ?>" alt="<?php echo $envoi ; ?>" type="submit" value="<?php echo $envoi ; ?>">
                     <br>
                     </td>
                  </tr>
               </table>
          </form>
</div>

   </center>
  </body>
</html>
