<?php
namespace app\Models;

class Team extends Model{
    public $name;
    public $coach;
    public $captain;
    public $description;

    public function __construct($name, $coach, $captain, $description) {
        $this->name = $name;
        $this->coach = $coach;
        $this->captain = $captain;
        $this->description = $description;
    }

    public static function select(){
        return Model::selectRecords("teams");
    }

    public static function delete($id){
        return Model::deleteRecord('teams', $id);
    }
}
