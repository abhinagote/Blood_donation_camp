<?php
require('fpdf/fpdf.php');

if (isset($_GET['name']) && isset($_GET['blood_group']) && isset($_GET['date'])) {
    $name = trim($_GET['name']);
    $blood_group = strtoupper(trim($_GET['blood_group']));
    $date = trim($_GET['date']);

    class PDF extends FPDF {
        function Header() {
            // Adjust image size for landscape mode (A4: 297 × 210 mm)
            $this->Image('images/Certificate.jpg', 0, 0, 297, 210);
        }
    }

    // Create PDF instance in Landscape mode
    $pdf = new PDF('L', 'mm', 'A4'); // 'L' for landscape
    $pdf->AddPage();

    // Set text color and font
    $pdf->SetTextColor(255, 0, 0); // Red color for name
    $pdf->SetFont('Arial', 'B', 24);

    // NAME - Adjusted for landscape mode
    $pdf->SetXY(95, 97);
    $pdf->Cell(100, 10, strtoupper($name), 0, 1, 'C');

    // BLOOD GROUP - Adjusted for landscape mode
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->SetTextColor(0, 0, 0); // Black
    $pdf->SetXY(50, 155);
    $pdf->Cell(50, 10, "$blood_group", 0, 1, 'C');

    // DATE - Adjusted for landscape mode
    $pdf->SetFont('Arial', '', 16);
    $pdf->SetXY(50, 165);
    $pdf->Cell(50, 10, "$date", 0, 1, 'C');

    // Output PDF
    $pdf->Output('D', "Blood_Donation_Certificate_$name.pdf");
    exit();
} else {
    echo "Invalid request. Please provide name, blood group, and date.";
}
?>
