<?php
   $rep='../img/list_smiley/';
   $extensions   = array('.png' ,'.gif' , '.jpg' ,'.ico' ,'jpeg');
   echo'
     <center>
          <br><br>
          <div class="limitsmiley">';
           $Array = array(); 
           if ( !is_dir($rep) ) { echo '<span class="text_vert">'.$Tacces_non.$rep.'</span>' ; }
            else {   
              $dir = opendir($rep);
              while ($File = readdir($dir)) {  
                 $extension = substr($File, -4);
                 if( in_array($extension, $extensions)) {  
                    $Array[] = "$File"; 
                    sort($Array);
                    $Max = count($Array);
                  }
                }
               for($i = 0; $i!=$Max; $i++) { 
                  echo '<span class="text_vert">'.$Array[$i].'</span><br>
                        <img src="../img/list_smiley/'.$Array[$i].'" border=2 alt="'.$Array[$i].'" title="'.$Array[$i].'">
                        <br>';
                 }
             }
    echo '</div></center>';
?>