<?php

class SentenceAlphabet{
 function find_all_alphabet($str) {
     
     /* [^a-z] matches any non letter character
     (.) captures a letter in group 1
     (?=.*\1) checks if the same letter is somewhere else (on the right)
     the i modifier makes the pattern case insensitive */
     
     if(strlen(preg_replace('~[^a-z]|(.)(?=.*\1)~i', '', $str)) == 26){
         //Trims all the spaces in the string
         $str = str_replace(' ', '', $str);
         
         $a = str_split(count_chars($str.trim($str), 3));
         $hStr = "";
         $total = 0;
         
         foreach ($a as $value) {
             $t = substr_count ($str, $value);
             if($total < $t){
                 $hStr = $value;
                 $total = $t;
             }
         }
         
         return $hStr;
     }else{
         return Null;
     }
  
 }
 
 
}
//echo find_all_alphabet("The five boxing wizards jump quickly");