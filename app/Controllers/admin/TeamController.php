<?php
namespace app\Controllers\Admin;

use app\Models\Team;
use app\Controllers\Controller;

class TeamController extends Controller {
    public function index() {
        $teams = Team::select();
        $this->render('admin/team/index', ['teams' => $teams]);
    }

    public function create(){
        $this->render('admin/team/create');
    }

    private function delete($id){
        // Team::delete($id);
        var_dump($id);
    }
}
