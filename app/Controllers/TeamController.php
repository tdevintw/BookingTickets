<?php
namespace app\Controllers;

use app\Models\Team;
use app\Controllers\Controller;

class TeamController extends Controller {
    public function index() {
        $teams = [
            new Team(1, 'FCBarcelona', 'Xavi Hernandes', "Ter stegen", 4, "desc of fc barcelona blugrana nar nar ya habibi nar" ),
            new Team(2, 'FCMancity', 'Pep guardiula', "Ederson", 1, "desc of manchister city")
        ];

        $this->render('team/index', ['teams' => $teams]);
    }
}
