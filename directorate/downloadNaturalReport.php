<?php
 include("check.php");
?>
<?php

 include("db.php");

?>
<?php

include("../fpdf185/fpdf.php");

?>
<?php

// $sql= "SELECT * from  students";
// $sql = "SELECT * from students, studentaccount WHERE students.Id = studentaccount.ID ORDER BY students.f_name ASC";
$sql = "SELECT C_name, COUNT(*) AS num_students_placed FROM college JOIN placement ON college.C_id = placement.c_id GROUP BY C_name";

$result=$conn->query($sql);
  $sn=1;

  // Create new PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial', 'B', 16);

// Add table header
$pdf->Cell(40, 10, 'No', 1);
$pdf->Cell(40, 10, 'College Name', 1);
$pdf->Cell(80, 10, 'Number of Students', 1);
// $pdf->Cell(40, 10, 'UID', 1);
$pdf->Ln();

 if($result){
 while($row = $result->fetch_assoc()){
       
    $pdf->Cell(40, 10, $sn++, 1);
    $pdf->Cell(40, 10, $row['C_name'], 1);
    $pdf->Cell(80, 10, $row['num_students_placed'], 1);
    // $pdf->Cell(40, 10, $row['UID'], 1);
    $pdf->Ln();

}
}

// Output PDF file
$pdf->Output();

?>