<?php
namespace app\Models;

use app\Models\Model;

class Teams extends Model
{




    public function __construct($team_name,$Team_image)
    {
        $this->$team_name = $team_name;
        $this->$teame_image= $team_image;
    }


    public static function select($id = null)
    {
        if ($id)
            return parent::selectRecords("teams", "*", $where = null);
        return parent::selectRecords("teams");

    }
}