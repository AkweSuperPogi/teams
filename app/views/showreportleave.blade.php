@extends("layout")
@section("content")

<head>
    <title>Reports | Time and Electronic Attendance Monitoring System</title>
</head>

<h1>Reports Leave Cases </h1>



<?php

require('fpdf.php');

$leaves = null;
$temp_leave = null;

class PDF extends FPDF
{
    function Header()
    {
        $month = Session::get('month_query', 'default');
        $year = Session::get('year_query', 'default');
        $monthName = date("F", mktime(0, 0, 0, $month, 10));
        $this->SetFont('Arial','B',12);
        // Move to the right
        $this->Cell(65);
        // Title
        $this->Cell(20,10,'Leave List of all Employees','C');

        $this->Ln(8);

        $this->Cell(60);
        // Title
        $this->Cell(20,10,'For the month of ' . $monthName . ' ' . $year,'C');

        $this->Ln(8);
    }

    function BasicTable($header, $leaves, $temp_request)
    {
        $month = Session::get('month_query', 'default');
        $year = Session::get('year_query', 'default');
        $start_date = $year.'/'.$month.'/01';
        $end_date = $year.'/'.$month.'/31';
        $leaves = DB::table('employs')
            ->join('create_requests', 'employs.id', '=', 'create_requests.employee_id')
            ->whereBetween('create_requests.start_date', array($start_date, $end_date))
            ->where('create_requests.status', 'like', '%approved')
            ->orderBy('create_requests.start_date','desc')
            ->orderBy('create_requests.request_type', 'desc')
            ->get();


        $temp_name = "";
        
        foreach ($leaves as $leave) 
        {   
            
            if($leave->lname != $temp_name)
            {
                $this->Ln();
                $this->SetFont('Arial','B',14);
                $this->Cell(20,10,$leave->lname .', '. $leave->fname .' - '. $leave->employee_number ,'C');
                $this->Ln();
                foreach ($header as $col)
                {   
                    
                        $this->Cell(60,10,$col,1,0,'L');
                    
                }
                $this->Ln();
                $temp_name = $leave->lname;
            }
            $this->SetFont('Arial','',12);
            $this->Cell(60,10,$leave->request_type,1,0,'L');
            $this->Cell(60,10,$leave->start_date,1,0,'L');
            $this->Cell(60,10,$leave->end_date,1,0,'L');
            $this->Ln();
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
$header = array('Leave Type', 'Start Date', 'End Date');
$pdf->AliasNbPages();


$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->BasicTable($header, $leaves, $temp_leave);
$pdf->Output('reports/leavecases.pdf');

?>

<iframe src="../reports/leavecases.pdf" title="downloads"  height= "450" width="100%"  frameborder="0" margin-left= "100px" target="Message"></iframe>

@stop