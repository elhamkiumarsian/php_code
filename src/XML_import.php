<?php
function Xml_load() {
    $xml=simplexml_load_file("../sample-reaxml.xml") or die("Error: Cannot create object");
    $types=null;
    $newArr=[];
    foreach($xml->children() as $key=>$type) {
         $types= $type->getName();
         $id= (string)$xml->$types[0]->uniqueID;
         $newarr[$id]=$types;

        }
        return $newarr;
}
print_r( Xml_load() );
