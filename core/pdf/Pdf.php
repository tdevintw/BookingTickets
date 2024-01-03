<?php
require('fpdf186/fpdf.php');
include('C:\Users\Youcode\Desktop\LARAGON\www\BookingTickets\core\QR\phpqrcode\phpqrcode\qrlib.php'); // Include the QR Code library


    class Pdf extends FPDF {
        // function GradientRect($x, $y, $w, $h, $color1, $color2) {
        //     // Calculate the gradient colors
        //     $r1 = $color1[0];
        //     $g1 = $color1[1];
        //     $b1 = $color1[2];
    
        //     $r2 = $color2[0];
        //     $g2 = $color2[1];
        //     $b2 = $color2[2];
    
        //     // Draw gradient rectangle
        //     for ($i = 0; $i <= $h; $i++) {
        //         $r = intval($r1 + ($r2 - $r1) * $i / $h);
        //         $g = intval($g1 + ($g2 - $g1) * $i / $h);
        //         $b = intval($b1 + ($b2 - $b1) * $i / $h);
    
        //         $this->SetFillColor($r, $g, $b);
        //         $this->Rect($x, $y + $i, $w, 1, 'F');
        //     }
        // }

        function Header(){

            $this->AddFont('ComforterBrush', '', 'ComforterBrush-Regular.php');
            $this->AddFont('KaushanScript', '', 'KaushanScript-Regular.php');
            $this->AddFont('RubikVinyl', '', 'RubikVinyl-Regular.php');
            $this->AddFont('DotGothic16', '', 'DotGothic16-Regular.php');

            // $this -> SetFillColor(0, 128, 0);
            // $this -> Rect(0,0, $this -> GetPageWidth(),12,'F');
            $this->Image("../../public/images/matchTicket.png",0,0, $this -> GetPageWidth(),$this -> GetPageHeight()); 

            $this->Image("../../public/images/pngegg.png", 0, 0, $this -> GetPageWidth(),$this -> GetPageHeight());


            

            $this->Image("../../public/images/gg.png", 2, 2, 15, 10); 
            $this->SetY(8);
            // $this->Image("../../public/images/bal.png", -6, 20, 20, 20);
            $this->Image("../../public/images/playerTT.png", 160, 15, 70, 70);


            $this->SetFont('ComforterBrush', '', 30);
            
            $this->SetXY(10, 10);
            $this->Cell(0, 8, 'Exciting moments', 0, 1, 'C');
            $this->SetFont('RubikVinyl', '', 30);

            $this->Cell(0, 8, 'Await  you', 0, 1, 'C');

        
            $this->SetFont('Arial', 'B', 10);
            $this->SetTextColor(255, 255, 255);

            $this -> SetFont('DotGothic16','',15);
            $this->SetXY(98, 27);
            $this->Cell(0, 10, 'TICKET', 0, 1, 'G');
        
            $this->SetFont('Arial', '', 10);

            $this->SetXY(88, 34);
            $this->Cell(0, 8, 'Date: January 1, 2024', 0, 1, 'G');

        
            $this->SetXY(88, 40);
            
            $this->Cell(0, 8, 'Time : 00:00', 0, 1, 'G');
        
            $this->SetXY(88, 46);
            $this->Cell(0, 8, 'Team A vs Team B', 0, 1, 'G');
            
            $this->SetXY(88, 52);
            $this->Cell(0, 8, 'Venue : Stadium XYZ', 0, 1, 'G');

            $this->SetXY(88, 58);
            $this->Cell(0, 8, 'Ticket Number: 123456789', 0, 1, 'G');

            $this->SetXY(88, 64);
            $this->Cell(0, 8, 'Price : 25$', 0, 1, 'G');
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