@extends("layout")
@section("content")

<?php
require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(45);
    // Title
    $this->Cell(20,10,'Time And Attendance Monitoring System','C');

    $this->Ln(8);
	// Move to the right
    $this->Cell(75);
    // Title
    $this->Cell(20,10,'Daily Time Record','C');
    // Line break
    $this->Ln(8);
    // Move to the right
    $this->Cell(75);
    // Title
    $this->Cell(20,10,'Insert name here','C');

    $this->Ln(4);

    $this->SetFont('Arial','',15);
    // Move to the right
    $this->Cell(62);
    // Title
    $this->Cell(20,10,'________________________','C');

    $this->Ln(5);

    $this->SetFont('Arial','',10);
    // Move to the right
    $this->Cell(90);
    // Title
    $this->Cell(20,10,'Name','C');

    $this->Ln(8);

    $this->SetFont('Arial','',15);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(20,10,'For the month of ______ 20____','C');

    $this->Ln(8);

    $this->SetFont('Arial','',15);
    // Move to the right
    $this->Cell(45);
    // Title
    $this->Cell(20,10,'Regular Day/s _______ Saturday/s _______','C');

    $this->Ln(12);

    $this->SetFont('Arial','',15);
    // Move to the right
    $this->Cell(55);
    // Title
    $this->Cell(20,10,'Official Hours of arrival and departure','C');

    $this->Cell(20,10,'<td >Day</td>
                        <td  colspan=7><b>A.M.</b></td>
                        <td  colspan=7><b>P.M.</b></td>
                        <td  colspan=7><b>Undertime</b></td>
                    
                        <td></td>
                        <td  colspan=3>Arrival</td>
                        <td   colspan=4>Departure</td>
                        
                        <td  colspan=3>Arrival</td>
                        <td  colspan=4>Departure</td>
                        
                        <td  colspan=3>Hours</td>
                        <td  colspan=4>Minutes</td>
                      
                    <tr>
                        <td >1</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >2</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >3</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >4</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >5</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >6</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >7</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >8</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >9</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >10</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >11</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >12</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >13</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >14</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>
                    </tr>
                    <tr>
                        <td >15</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >16</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >17</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >18</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >19</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >20</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >21</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >22</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >23</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >24</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >25</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >26</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >27</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >28</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >29</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >30</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td >31</td>
                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>

                        <td  colspan=3></td>
                        <td  colspan=4></td>    
                    </tr>
                    <tr>
                        <td  colspan=15><b>TOTAL</b></td>
                        <td  colspan=3></td>
                        <td  colspan=4></td> 
                    </tr>')
                




// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Output('akwe.pdf');
?>

<div>

</div>


@stop