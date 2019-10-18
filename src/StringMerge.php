<?php
class StringMerge{
    function str_merge($str1,$str2){
        $arr1 = str_split($str1);
        $arr2 = str_split($str2);
        $arr3 = array();
        foreach ($arr1 as $key => $val1) {
            $val2 =array_key_exists($key, $arr2)?$arr2[$key]:null;
            $arr3[$key] = $val1 . "" . $val2;
        }
        return implode("",$arr3);
    }
}



   //  echo str_merge("MICHAEL" ,"JORDAN");