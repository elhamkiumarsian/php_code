<?php

class nonRepeatedChracter{
 function find_non_repeat($word) {
   // make all string to lowercase
  $word=strtolower($word);
  
  //find repeated characters
  for ($i = 0; $i <= strlen($word); $i++) {
      
     if (substr_count($word, substr($word, $i, 1)) == 1) {
         return  true;
     }
      else{
         return  false;
        
     } 
    }
  }
  
}





