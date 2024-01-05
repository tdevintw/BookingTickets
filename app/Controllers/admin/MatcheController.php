<?php

namespace app\Controllers\Admin;

use app\Controllers\Controller;
use app\Models\Matche;
use app\Models\Team;
use app\Models\Stadium;

class MatcheController extends Controller
{
    public function index()
    {
        $matches = Matche::select();
        foreach ($matches as &$matche) {
            $matche = self::get_matche_infos($matche);
        }
        // Get match infos 
        $this->render('matche/index', ['matches' => $matches]);
    }

    public static function get_matche_infos($matche)
    {
        $matche['team1'] = Team::select($matche['team1_id'])[0];
        $matche['team2'] = Team::select($matche['team2_id'])[0];
        $matche['stadium'] = Stadium::select($matche['stadium_id'])[0];
        return $matche;
    }

    public function create()
    {
        $this->render('matche/create');
    }

    public function delete(int $id)
    {
        if (Matche::delete($id)) {
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }

    public function store($data)
    {
        // store match
    }
}
