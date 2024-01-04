<?php

namespace app\Models;

class Stadium extends Model
{
    private $name;
    private $location;
    private $capacity;
    private $photo_src;
    private $photo_alt;

    public function __construct($name, $location, $capacity, $photo_src, $photo_alt)
    {
        $this->name = $name;
        $this->location = $location;
        $this->capacity = $capacity;
        $this->photo_src = $photo_src;
        $this->photo_alt = $photo_alt;
    }

    public static function select($id = null)
    {
        if ($id === null)
            return Model::selectRecords("stadiums");
        return Model::selectRecords('stadiums', '*', "id = $id");
    }

    public static function update($data, $id){
        return Model::updateRecord('stadiums', $data, $id);
    }

    public static function delete($id)
    {
        $stade = Model::selectRecords('stadiums', '*', "id = $id");
        // remove photo
        unlink("." . $stade[0]['photo_src']);
        return Model::deleteRecord('stadiums', $id);
    }

    public function save()
    {
        $data = get_object_vars($this);
        return parent::insertRecord('stadiums', $data);
    }
}
