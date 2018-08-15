<?php

$name=$_POST['name'];
$add=$_POST['add'];
$code=$_POST['code'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$ci=$_POST['ci'];
$co=$_POST['co'];
$avail=$_POST['avail'];
$room=$_POST['room'];
$price=$_POST['price'];
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image('image/log.png');
$pdf->SetFont("Arial","B","20");
$pdf->Cell(0,30,"Reservation For ".$name, 0, 1,"C");
$pdf->SetFont("Times","B","15");

$pdf->Cell(0,10,"Code: ".$code, 0, 1,"C");
$pdf->Cell(0,20,"Personal Information:", 0, 1,"C");
$pdf->Cell(0,10,"Address: ".$add, 0, 1,"C");
$pdf->Cell(0,10,"Email: ".$email, 0, 1,"C");
$pdf->Cell(0,10,"Phone: ".$phone, 0, 1,"C");
$pdf->SetFont("Arial","","15");
$pdf->Cell(0,20,"Room Reservation Information:", 0, 1,"C");
$pdf->Cell(0,10,"Check-in Date: ".$ci, 0, 1,"C");
$pdf->Cell(0,10,"Check-out Date: ".$co, 0, 1,"C");
$pdf->Cell(0,10,"Room Type: ".$room, 0, 1,"C");
$pdf->Cell(0,10,"Available Party: ".$avail, 0, 1,"C");
$pdf->Cell(0,10,"Price per day: ".$price, 0, 1,"C");
$pdf->SetFont("Arial","",10);

$pdf->Cell(0,30,"Rules:", 0, 1,"C");
$pdf->Cell(0,10,"Please bring the printed reciept on the date you choose to stay", 0, 1,"C");
$pdf->Cell(0,10,"After 5 hours late on the date printed out, Your reservation will be cancelled.", 0, 1,"C");
$pdf->Cell(0,10,"Extra person that doesnt accomodate in quantity will be charged.", 0, 1,"C");
$pdf->Cell(0,10,"Bring a valid ID when presenting your print reciept.", 0, 1,"C");
$pdf->Cell(0,10,"No cancellation or Rebooking when the reservation is finalized.", 0, 1,"C");

$pdf->output();
/*
name
Address: 
email: 
phone: 
code: 6144353320


Room Reservation Information 
Check-in date:
Check-out date:
Room Type: 
Available Number of Party:

              <p>Please bring the printed reciept on the date you choose to stay.</p>
                         <p>After 5 hours late on the date printed out, Your reservation will be cancelled.</p> 
						<p>Extra person that doesn't accomodate in quantity will be charged.</p>
						<p>Bring a valid ID when presenting your print reciept.</p>
						<p>No cancellation or Rebooking when the reservation is finalized.</p>
Price: */
?>