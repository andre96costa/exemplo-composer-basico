<?php

// reference the Dompdf namespace
use Dompdf\Dompdf;

function gerarPdf(string $html)
{
 

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDFFF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();
}