<?php

namespace app\Controllers\Admin;

use app\Controllers\Controller;
use app\Models\Teams;


class TeamController extends Controller
{
    public function teams()
    {
        $teams = Teams::select();
        foreach ($teams as &$team) {
            $team['team1'] = Teams::select($team['team_name'])[0];
            $team['team2'] = Teams::select($team['team_name'])[0];
        }
        // Get match infos 
        $this->render('/', ['teams' => $teams]);
    }

    public static function getTeamInfos($teams)
    {
        $team['team_name'] = Teams::select($team['team_name'])[0];
        $team['team_image'] = Teams::select($team['team_image'])[0];
        return $team;
    }





}