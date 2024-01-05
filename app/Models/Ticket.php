<?php

namespace app\Models;

class Ticket extends Model
{
    private $user_id;
    private $matche_id;

    public function __construct($user_id, $matche_id)
    {
        $this->user_id = $user_id;
        $this->matche_id = $matche_id;
    
    }

    public static function select($where = null)
    {
        if ($where === null)
            return Model::selectRecords("tickets");
        return Model::selectRecords('tickets', '*', $where);
    }

    public static function getTicketsNumber($matche_id)
    {
        $res = parent::selectRecords('tickets', '*', "matche_id = $matche_id");
        return count($res);
    }


    public static function update($data, $id){
        return Model::updateRecord('tickets', $data, $id);
    }

    public static function delete($id)
    {
        $team = Model::selectRecords('tickets', '*', "id = $id");
        // remove photos
        unlink("." . $team[0]['photo_src']);
        unlink("." . $team[0]['flag_src']);
        return Model::deleteRecord('tickets', $id);
    }

    public function save()
    {
        $data = get_object_vars($this);
        return parent::insertRecord('tickets', $data);
    }
}