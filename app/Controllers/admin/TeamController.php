<?php

namespace app\Controllers\Admin;

use app\Models\Team;
use app\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::select();
        // Get team photo by team['id'];
        $this->render('admin/team/index', ['teams' => $teams]);
    }

    public function create()
    {
        $this->render('admin/team/create');
    }

    public function delete(int $id)
    {
        if (Team::delete($id)) {
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }

    public function store($data)
    {
        echo "<br>";
        echo "</br>";
    }
}
