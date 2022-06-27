<?php
namespace App\Modal\Contract;
class BaseModal extends BaseModal{
    protected $connection;
    protected $primaryKey;
    protected $table;
    protected $page_size;
    protected $attributes;
        

    protected function __construct(){
         
    }
    protected function get_attributes($key){
        if(!$key || !array_key_exists($key,$this->attributes)){
            return null;
        }
        return $this->attributes[$key];

    }

}