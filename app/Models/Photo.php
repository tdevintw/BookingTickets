<?php
namespace app\Models;

class Photo extends Model{
    public $src;
    public $alt;

    public function __construct($src, $alt) {
        $this->src = $src;
        $this->alt = $alt;
    }

    public static function select($id){
        return Model::selectRecords("photos", '*', "id = $id");
    }

    public static function delete($id){
        return Model::deleteRecord('photos', $id);
    }

    public function save(){
        $data = get_object_vars($this);
        $last_insert = parent::insertRecord('photos', $data);
        return $last_insert;
    }
}
