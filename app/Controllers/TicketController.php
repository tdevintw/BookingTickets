<?php
namespace app\Controllers;

use app\Controllers\Admin\MatcheController;
use app\Models\Matche;
use app\Models\Stadium;
use app\Models\Ticket;
use app\Controllers\Controller;
use core\pdf\Pdf;

class TicketController extends Controller
{
    // public function index() {
    //     $tickets = 
    //     $this->render('ticket/index', ['tickets' => $tickets]);
    // }


    public function create()
    {
        // $user = Auth::user();
        if (isset($_POST['matche_id']) && $_POST['stadium_id']) { // Auth::user() !== null
            // $user = Auth::user();
            // $user_id = $user['id']
            $user_id = 1;

            $rest = self::getRestTickets($_POST['matche_id'], $_POST['stadium_id']);
            if ($rest > 0) {
                $ticket = new Ticket($user_id, $_POST['matche_id']);
                $ticket_number = $ticket->save();
                // generate ticket PDF
                $matche = Matche::select($_POST['matche_id'])[0];
                $matche_infos = MatcheController::get_matche_infos($matche);
                self::download_ticket($matche_infos, $ticket_number);
                exit;
            } else {
                // return message of 'all tickets are booked'
            }
        }
    }

    public static function getRestTickets($matche_id, $stadium_id)
    {
        $tickets_reserved = Ticket::getTicketsNumber($matche_id);
        $stadium = Stadium::select($stadium_id)[0];
        $capacity = $stadium['capacity'];
        return $capacity - $tickets_reserved;
    }

    public function form()
    {
        if (isset($_POST['matche_id'])) {
            $matche = Matche::select($_POST['matche_id'])[0];
            $matche = MatcheController::get_matche_infos($matche);
            // echo '<pre>';
            // var_dump($matche);
            // echo '</pre>';exit;
            $this->render("form", [
                'matche' => $matche,
            ]);
        } else {
            echo 'no posted';
        }
    }

    public static function download_ticket($matche, $ticket_number)
    {
        $ticket_infos = [
            'matche' => $matche,
            'number' => $ticket_number,
        ];
        $pdf = new Pdf();
        $pdf->AddPage('L', array($pdf->GetPageWidth(), 80));
        $pdf->SetAutoPageBreak(true, 0);
        $pdf->Body($ticket_infos);
        $pdf->SetFont('Arial', '', 12);
        $file = "Ticket_" . $ticket_infos['number'] . '.pdf';
        $pdf->Output($file,'D');
    }
}
