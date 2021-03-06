@extends("layout")
@section("content")

<?php


require('fpdf.php');

$branchess = null;
$branches = null;
$employs = null;
$departments = null;

class PDF extends FPDF
{
	function Header()
	{
		$this->SetFont('Arial','B',12);
    	// Move to the right
    	$this->Cell(82);
    	// Title
    	$this->Cell(20,10,'Hierarchy List','C');

    	$this->Ln(8);

    	$this->Cell(60);
    	// Title
    	$this->Cell(20,10,'For the month of ' . date('F') . ' ' . date('Y'),'C');

    	$this->Ln(8);
	}

	function BasicTable($header, $hierarchies, $hierarchy_subordinates, $level_id, $employ_joins)
	{
        //Para sa supervisor
        $supervisors = DB::table('hierarchies')
            ->join('employs', 'hierarchies.supervisor_id', '=', 'employs.id')
            ->join('levels', 'employs.level_id', '=', 'levels.id')
            ->get();

        //Para sa subordinates
        $subordinates = DB::table('hierarchy_subordinates')
            ->join('hierarchies', 'hierarchy_subordinates.hierarchy_id', '=', 'hierarchies.id')
            ->join('employs', 'hierarchy_subordinates.employee_id', '=', 'employs.id')
            ->get();


        foreach ($supervisors as $supervisor)
        {
            $this->Ln();
            $this->SetFont('Arial','B',14);
            $this->Cell(20,10,$supervisor->hierarchy_name,'C');
            $this->Ln();
            $this->SetFont('Arial','',12);
            $this->Cell(20,10,'Supervisor: '. $supervisor->lname .', '.$supervisor->fname,'C');
            $this->Ln();
            $this->Cell(20,10,'Subordinates:','C');
            $this->Ln();
            $this->SetFont('Arial','B',12);
            foreach ($header as $col)
            {   
                if($col == 'E-mail')
                    $this->Cell(60,10,$col,1,0,'L');
                else $this->Cell(40,10,$col,1,0,'L');
            }
            $this->Ln();
            $this->SetFont('Arial','',12);
            foreach($subordinates as $subordinate)
            {
                if ($supervisor->hierarchy_name == $subordinate->hierarchy_name)
                {
                    $this->Cell(40,10,$subordinate->lname,1,0,'L');
                    $this->Cell(40,10,$subordinate->fname,1,0,'L');
                    $this->Cell(60,10,$subordinate->email,1,0,'L');
                    $this->Cell(40,10,$subordinate->phone,1,0,'L');
                    $this->Ln();
                }
                
            }
        }
        
    		
	}
	function Footer()
	{
    	// Position at 1.5 cm from bottom
    	$this->SetY(-15);
    	// Arial italic 8
    	$this->SetFont('Arial','I',8);
    	// Page number
    	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}
$pdf = new PDF();
$header = array('Last Name', 'First Name', 'E-mail', 'Phone #');
$pdf->AliasNbPages( );


$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->BasicTable($header, $employs, $branchess, $branches, $departments);
$pdf->Output('hierarchy.pdf'); 

?>
<iframe src="hierarchy.pdf" title="downloads"  height= "450" width="100%"  frameborder="0" margin-left= "100px" target="Message"></iframe>

@stop