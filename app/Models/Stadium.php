<?php
namespace app\Models;
use app\Models\Model;

class Stadium extends Model
{
    private $name;

    private $location;

    private $capacity;

    private $image_src;
    private $image_alt;


    public function __construct($name, $location, $capacity, $image_src, $image_alt) {
        $this->$name = $name;
        $this->$location = $location;
        $this->$capacity = $capacity;
        $this->$image_src = $image_src;
        $this->$image_alt = $image_alt;
    }

    public static function select($id = null){
        return parent::selectRecords("stadiums" , '*', $id);
    }

    public static function delete($id){
        return parent::deleteRecord('stadiums', $id);
    }
}
