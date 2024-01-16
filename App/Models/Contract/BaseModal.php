<?php
namespace App\Modal\Contract;
abstract class BaseModal extends Crudinterface{
    protected $connection;
    protected $primaryKey;
    protected $table;
    protected $page_size;
    protected $attributes;
    

    protected function __construct(){
         
    }
    public function create(array $data):int{
        return 1;
    }
    public function find($id):object{
        return (object)[];
    }
    public function get(array $culums,array $where):array{
        return [];

    }
    public function update(array $data,array $where):int{
        return 1;
    }
    public function delete(array $where):int
    {
        return 1;
    }
    protected function get_attributes($key){
        if(!$key || !array_key_exists($key,$this->attributes)){
            return null;
        }
        
        return $this->attributes[$key];

    }

}