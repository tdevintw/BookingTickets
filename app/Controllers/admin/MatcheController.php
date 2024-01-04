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
        foreach($matches as &$match){
            $match['team1'] = Team::select($match['team1_id'])[0];
            $match['team2'] = Team::select($match['team2_id'])[0];
            $match['stadium'] = Stadium::select($match['stadium_id'])[0];
        }
        // Get match infos 
        $this->render('matche/index', ['matches' => $matches]);
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
