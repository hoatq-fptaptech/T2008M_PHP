<?php
interface model{ // DAO pattern
    public function all();
    public function find($id);
    public function save(array $data);
    public function update(array $data,$id);
    public function delete($id);
}