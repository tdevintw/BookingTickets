<?php
require('fpdf186/fpdf.php');
include('C:\Users\Youcode\Desktop\LARAGON\www\BookingTickets\core\QR\phpqrcode\phpqrcode\qrlib.php'); // Include the QR Code library


    class Pdf extends FPDF {

        function Header(){

            $this->AddFont('ComforterBrush', '', 'ComforterBrush-Regular.php');
            $this->AddFont('KaushanScript', '', 'KaushanScript-Regular.php');
            $this->AddFont('RubikVinyl', '', 'RubikVinyl-Regular.php');
            $this->AddFont('DotGothic16', '', 'DotGothic16-Regular.php');





            // $this -> SetFillColor(0, 128, 0);
            // $this -> Rect(0,0, $this -> GetPageWidth(),12,'F');
            $this->Image("../../public/images/matchTicket.png",0,0, $this -> GetPageWidth(),$this -> GetPageHeight()); 

            $this->Image("../../public/images/pngegg.png", 0, 0, $this -> GetPageWidth(),$this -> GetPageHeight());
            $this->Image("../../public/images/pngegg (3).png", 140,0, 20,30);


            $this->Image("../../public/images/gg.png", 2, 2, 20, 15); 
            $this->SetY(8);
            // $this->Image("../../public/images/bal.png", -6, 20, 20, 20);
            $this->Image("../../public/images/playerTT.png", 157, 15, 70, 70);


            $this->SetFont('ComforterBrush', '', 35);
            
            $this->SetXY(10, 10);
            $this->Cell(0, 8, 'Exciting moments', 0, 1, 'C');
            $this->SetFont('RubikVinyl', '', 35);

            $this->Cell(0, 8, 'Await  you', 0, 1, 'C');

            $this->SetFont('Arial', 'B', 10);
            $this->SetTextColor(255, 255, 255);

            $this -> SetFont('DotGothic16','',15);
            $this->SetXY(98, 30);
            $this->Cell(0, 10, 'TICKET', 0, 1, 'G');
        
            $this->SetFont('Arial', 'B', 10);

            $this -> ln(12);

            $this -> cell(30, 18, '' ,0, 0);
            $this->Cell(50, 10, 'Date: January 1, 2024', 0, 0, 'G');
            $this->Cell(50, 10, 'Time : 00:00', 0, 0, 'G');
            $this->Cell(30, 10, 'Team A vs Team B', 0, 1, 'G');

            $this -> cell(30, 18, '' ,0, 0);
            $this->Cell(50, 10, 'Venue : Stadium XYZ', 0, 0, 'G');
            $this->Cell(50, 10, 'Ticket Number: 123456789', 0, 0, 'G');
            $this->Cell(30, 10, 'Price : 25$', 0, 1, 'G');

                    // Generate QR code

        $lien = 'https://www.243tech.com';
        $qrCodeImagePath = 'image-qrcode.png';
        QRcode::png($lien, $qrCodeImagePath);

        // Add QR code image to the PDF
        $this->Image($qrCodeImagePath, 6, 55, 20, 20); // Adjust coordinates and size as needed
        }
    }

    $pdf = new Pdf();
$pdf->SetAutoPageBreak(true, 0);
$pdf->AddPage('L', array($pdf->GetPageWidth(), 80));
$pdf->SetFont('Arial', '', 12);
$pdf->Output();