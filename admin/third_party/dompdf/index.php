<?php

// include autoloader
require_once 'dompdf/autoload.inc.php';

/*echo phpinfo();

die;*/
// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
//$dompdf = new Dompdf();

$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);



//$dompdf->DOMPDF_ENABLE_REMOTE(true);

$content = file_get_contents('file.html');

$html = "<h1>Hello everyone</h1><br/><img src='http://portal.vdigit.net/include/ajax/vdigit-logo.png' alt='logo' />";

$dompdf->loadHtml($content);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();



// Output the generated PDF (1 = download and 0 = preview)
//$dompdf->stream("codex",array("Attachment"=>0));

$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

exit(0);

?>
