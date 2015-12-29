<?php
   $db_str="Show me some <3 ." ;
   echo $db_str ;
   echo  "<hr />" ;
   $new_str=str_replace("<3","&#10084;",$db_str) ;
   echo $new_str ;
   
?>
