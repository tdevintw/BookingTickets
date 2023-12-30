<?php

namespace app\Controllers\Admin;

use app\Models\Team;
use app\Controllers\Controller;
use app\Models\Photo;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::select();
        // $photo = Photo::select($teams['id']);
        // $teams['photo'] = $photo;
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
        echo "Team Data to store : <br><pre>";
        var_dump($data);
        echo "</pre>";exit;
    }
}
