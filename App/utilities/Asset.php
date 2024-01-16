<?php
namespace APP\utilities;
class Asset{
    
   public static function __callStatic($name,$argument){
       
       return HOST."assets/".$name."/".$argument[0];
   } 
}