<?php
include_once "model.php";
include_once "database.php";
class SinhVien implements Model{
    private $table = "sinhviens";
    private $primaryKey = "id";
    protected $fillable = [
        "name",
        "age",
        "address"
    ];
    public function all()
    {
        $sql_txt = "select * from $this->table";
        return queryDB($sql_txt);
    }

    public function find($id)
    {
        $sql_txt = "select * from $this->table where $this->primaryKey = $id";
        $ds =  queryDB($sql_txt);
        if(count($ds) > 0) return $ds[0];
        return null;
        // TODO: Implement find() method.
    }

    public function save(array $data)
    {
        // TODO: Implement save() method.
        $arr = [];
        foreach ($this->fillable as $key){
            if($key=="age"){
                $arr[] = $data[$key];
            }else{
                $arr[] = "'".$data[$key]."'";
            }
        }
        $txt = implode(",",$arr);
        $sql_txt = "insert into $this->table (name,age,address) values($txt)";
        return insertOrUpdateDB($sql_txt);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
        $arr = [];
        foreach ($this->fillable as $key){
            if($key=="age"){
                $arr[] = "age =".$data[$key];
            }else{
                $arr[] = $key." = '".$data[$key]."'";
            }
        }
        $txt = implode(",",$arr);
        $sql_txt = "update $this->table set $txt where $this->primaryKey = $id";
        return insertOrUpdateDB($sql_txt);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $sql_txt = "delete from $this->table where $this->primaryKey = $id";
        return insertOrUpdateDB($sql_txt);
    }

}