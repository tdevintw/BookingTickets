<?php
namespace app\Controllers;

use app\Controllers\Admin\MatcheController;
use app\Models\Matche;
use app\Models\Stadium;
use app\Models\Ticket;
use app\Models\Client;
use app\Controllers\Controller;

class TicketController extends Controller {
    // public function index() {
    //     $tickets = 
    //     $this->render('ticket/index', ['tickets' => $tickets]);
    // }


    public function create(){
        // $user = Auth::user();
        if (isset($_POST['matche_id']) && $match_id = $_POST['stadium_id']){ // Auth::user() !== null
            // $user = Client::select("id = 1"); // Auth::
                        
            $rest = self::getRestTickets($_POST['matche_id'], $_POST['stadium_id']);
            var_dump($rest);exit;
            if($rest > 0){
                // ticket created
            }else{
                // no ticket created
            }   
            
        }
    }
    
    public static function getRestTickets($matche_id, $stadium_id){
        $tickets_reserved = Ticket::getTicketsNumber($matche_id);
        $stadium = Stadium::select($stadium_id);
        $capacity = $stadium['capacity'];
        return $capacity - $tickets_reserved;
    }

    public function form(){
        if(isset($_POST['matche_id'])){
            $matche = Matche::select($_POST['matche_id'])[0];
            $matche = MatcheController::getMatcheInfos($matche);
            // echo '<pre>';
            // var_dump($matche);
            // echo '</pre>';exit;
            $this->render("form", [
                'matche' => $matche,
            ]);
        }
    }
}
