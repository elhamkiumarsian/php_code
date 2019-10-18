<?php

class LargestProduct{
 
 function findMaxProduct( $str,$k)
 {

     $str = str_replace('0','',$str);
     $arr=  str_split($str);
     $n=count($arr);

     $MaxProduct = 1;
     for($i = 0; $i < $k; $i++)
         $MaxProduct *= $arr[$i];
         
         $prev_product = $MaxProduct;

         for($i = 1; $i < $n - $k; $i++)
         {
            
             $curr_product = ($prev_product / $arr[$i - 1]) *$arr[$i + $k - 1]; 
             $MaxProduct = max($MaxProduct, $curr_product);
             $prev_product = $curr_product;
             
         }
         
         // Return the maximum
         // product found
         return $MaxProduct;
 } 
 
}
