<?php 
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
 
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('E-RAPORT SD NEGERI JEMBERLOR 01https://jadwalku.files.wordpress.com/2017/02/nilai-pengetahuan1.jpg?w=730' );


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
 
// Render the HTML as PDF
$dompdf->render();
 
// Output the generated PDF to Browser
$dompdf->stream('hasil_report.pdf');