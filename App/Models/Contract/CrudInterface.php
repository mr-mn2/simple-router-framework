<?php
namespace App\Modal\Contract;
interface Crudinterface {
    public function create(array $data):int;
    public function find($id):object;
    public function get(array $culums,array $where):array;
    public function update(array $data,array $where):int;
    public function delete(array $where):int;
}