<?php

class LiteralDateParsing{
   public  function date_parsing($str){
        $str=str_replace("The","",$str);
        $d = date_create($str);
        $date=$d->format('Y-m-d') ;
        return $date;
    }
}

