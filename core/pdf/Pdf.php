<?php
namespace core\pdf;
require('fpdf186/fpdf.php');
include('core\QR\phpqrcode\phpqrcode\qrlib.php'); // Include the QR Code library


class Pdf extends \FPDF
{
    private $matche_date;
    private $sdtadium_name;
    private $team1_name;
    private $team1_flag_src;
    private $team2_name;
    private $team2_flag_src;
    private $price;
    private $ticket_number;

    public function generateTicket($matche_date, $sdtadium_name, $team1_name, $team1_flag_src, $team2_name, $team2_flag_src, $price, $ticket_number){

    }

    function LetterSpacing($text, $spacing)
    {
        // Séparation du texte en lettres
        $letters = str_split($text);

        // Affichage des lettres avec espacement
        foreach ($letters as $letter) {
            $this->Cell(5 + $spacing, 0, $letter, 0, 0, 'C');
        }
    }

    public function Body($ticket_infos)
    {
        $this->AddFont('ComforterBrush', '', 'ComforterBrush-Regular.php');
        $this->AddFont('KaushanScript', '', 'KaushanScript-Regular.php');
        $this->AddFont('RubikVinyl', '', 'RubikVinyl-Regular.php');
        $this->AddFont('DotGothic16', '', 'DotGothic16-Regular.php');
        $this->AddFont('Roboto', '', 'RobotoMono-VariableFont_wght.php');

        $this->Image("./public/images/matchTicket.png", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());

        $this->Image("./public/images/png.png", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());
        $this->Image("./public/images/pngegg (3).png", 140, 0, 20, 30);

        $this->Image("./public/images/gg.png", 2, 2, 20, 15);
        $this->SetY(8);
        // $this->Image("./public/images/bal.png", -6, 20, 20, 20);
        $this->Image("./public/images/playerTT.png", 157, 15, 70, 70);

        $this->SetFont('ComforterBrush', '', 35);

        $this->SetXY(10, 10);
        $this->Cell(0, 8, 'Exciting moments', 0, 1, 'C');
        $this->SetFont('RubikVinyl', '', 35);

        $this->Cell(0, 8, 'Await  you', 0, 1, 'C');

        // $this->SetFont('Arial', 'B', 10);

        $this->SetFont('DotGothic16', '', 15);
        $this->SetXY(86, 35);
        $this->SetTextColor(246, 223, 19); // Couleur orange
        $this->SetFont('DotGothic16', '', 15);
        $this->SetXY(86, 35);
        $this->LetterSpacing('TICKET', 2);

        $this->SetTextColor(255, 255, 255);
        $this->SetFont('Roboto', '', 13);

        $this->ln(12);

        $this->cell(30, 18, '', 0, 0);
        $this->SetXY(60, 40);
        $vs = $ticket_infos['matche']['team1']['name'] . " VS " . $ticket_infos['matche']['team2']['name'];
        $this->Cell(30, 10, $vs , 0, 1, 'G');
        $this->SetXY(80, 47);
        $this->Cell(50, 10, $ticket_infos['matche']['date'], 0, 1, 'G');

        $this->Cell(40, 10, '', 0, 0, 'G');
        $this->SetXY(60, 56);
        $this->Cell(50, 10, $ticket_infos['matche']['stadium']['name'], 0, 1, 'G');

        $this->Cell(40, 10, '', 0, 0, 'G');
        $this->Cell(80, 10, "Ticket Number: " . $ticket_infos['number'], 0, 0, 'G');
        $this->Cell(30, 10, "Price : " . $ticket_infos['matche']['price'] . "$", 0, 1, 'G');

        // Generate QR code

        $lien = 'https://www.243tech.com';
        $qrCodeImagePath = 'image-qrcode.png';
        \QRcode::png($lien, $qrCodeImagePath);

        // Add QR code image to the PDF
        $this->Image($qrCodeImagePath, 6, 55, 20, 20); // Adjust coordinates and size as needed
    }
}
