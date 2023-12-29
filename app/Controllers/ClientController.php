<?php
namespace app\Controllers;

use app\Models\Client;
use app\Controllers\Controller;

class ClientController extends Controller {
    public function index() {
        $clients = [
            new Client(1, 'FCBarcelona', 'Xavi Hernandes', "Ter stegen", 4, "desc of fc barcelona blugrana nar nar ya habibi nar" ),
            new Client(2, 'FCMancity', 'Pep guardiula', "Ederson", 1, "desc of manchister city")
        ];

        $this->render('Client/index', ['clients' => $clients]);
    }

    public function show($id)
    {
        $data = Client::select("id = $id");
        $this->render("client/show", $data);
    }
}
