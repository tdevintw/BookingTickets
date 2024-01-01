<?php
namespace app\Models;

class Team extends Model{
    public $name;
    public $coach;
    public $flag_src;
    public $photo_src;

    public function __construct($name, $coach, $flag_src, $photo_src) {
        $this->name = $name;
        $this->coach = $coach;
        $this->flag_src = $flag_src;
        $this->photo_src = $photo_src;
    }

    public static function select(){
        return Model::selectRecords("teams");
    }

    public static function delete($id){
        // remove photos
        $team = Model::selectRecords('teams', '*', "id = $id");
        unlink("." . $team[0]['photo_src']);
        unlink("." . $team[0]['flag_src']);
        return Model::deleteRecord('teams', $id);
    }

    public function save(){
        $data = get_object_vars($this);
        return parent::insertRecord('teams', $data);
    }
}
