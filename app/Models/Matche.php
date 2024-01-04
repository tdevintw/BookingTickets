<?php
namespace app\Models;
use app\Models\Model;

class Matche extends Model
{
    private $team1_id;
    private $team2_id;

    private $date;

    private $stadium_id;

    private $price;


    public function __construct($team1_id, $team2_id, $date, $stadium_id, $price) {
        $this->$team1_id = $team1_id;
        $this->$team2_id = $team2_id;
        $this->$date = $date;
        $this->$stadium_id = $stadium_id;
        $this->$price = $price;
    }

    
    public static function select(){
        return parent::selectRecords("matches");
    }

    public static function delete($id){
        return parent::deleteRecord('matches', $id);
    }
}
