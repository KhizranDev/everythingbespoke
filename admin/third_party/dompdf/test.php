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


$html = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
            <html xmlns='http://www.w3.org/1999/xhtml'>

            <head>
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                <title>1007 20161101-23 1</title>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
            </head>

            <style>
                body{
                    font-size: 11px;
                    font-family: 'Tahoma', sans-serif;
                }

                p {
                    margin:0 0 3px;
                }

                .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
                    padding: 5px;
                }
            </style>

            <body>
            <table width='100%' border='0' cellpadding='0'>
              <tr>
                <td><table width='100%' border='0' cellpadding='0'>
                  <tr>
                    <td align='right'><img src='http://portal.vdigit.net/include/ajax/vdigit-logo.png' width='133' height='30' /></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table width='100%' border='0' cellpadding='0'>
                  <tr>
                    <td align='center' style='display: block;font-size: 30px;font-weight: bold;margin: 5px 0;'>INVOICE</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>
                  <table width='100%' border='0' cellpadding='0'>
                  <tr>
                    <td width='65%' style='font-weight: bold;padding: 1px 0;'>Tahir</td>
                    <td width='12%' style='font-weight: bold;padding: 1px 0;text-align: right'>INVOICE NO:</td>
                    <td width='23%' style='font-weight: bold;padding: 1px 0;text-align: right'>0223/20161101-23/1</td>
                  </tr>
                  <tr>
                    <td>feedbackjabelvoice@gmail.com</td>
                    <td style='font-weight: bold;padding: 1px 0;text-align: right'>DATE</td>
                    <td style='font-weight: bold;padding: 1px 0;text-align: right'>18/Apr/2017</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style='font-weight: bold;padding: 1px 0;text-align: right'>DUE DATE</td>
                    <td style='font-weight: bold;padding: 1px 0;text-align: right'>18/Apr/2017</td>
                  </tr>
                </table>
                  <hr style='margin: 8px 0 !important; border: none !important'>
                </td>
              </tr>
              <tr>
                <td>
                    <table width='100%' border='0' cellpadding='0' class='table table-striped table-bordered'>

                      <tr style='background: #d9edf7;color: #306f9a;font-weight: bold; font-size:13px;'>
                        <td>S.#</td>
                        <td>Description</td>
                        <td>Period</td>
                        <td>Rate</td>
                        <td>Duration (Minutes)</td>
                        <td>Amount</td>
                      </tr>

                        <tr>
                                <td>1.</td>
                                <td>Bangladesh - Bangladesh Fixed</td>
                                <td>01  - 02 Nov, 2016</td>
                                <td>0.01900</td>
                                <td>950</td>
                                <td>19.27</td>
                            </tr>
                           <tr>
                                <td>2.</td>
                                <td>India - All</td>
                                <td>01  - 02 Nov, 2016</td>
                                <td>0.00790</td>
                                <td>46,748</td>
                                <td>398.79</td>
                            </tr>
                           <tr>
                                <td>3.</td>
                                <td>Pakistan - Pak Mobilink</td>
                                <td>01  - 02 Nov, 2016</td>
                                <td>0.02990</td>
                                <td>2,230</td>
                                <td>72.69</td>
                            </tr>
                           <tr>
                                <td>4.</td>
                                <td>Pakistan - Pak Telenor</td>
                                <td>01  - 02 Nov, 2016</td>
                                <td>0.01000</td>
                                <td>16,534</td>
                                <td>177.10</td>
                            </tr>
                           <tr>
                                <td>5.</td>
                                <td>Pakistan - Pak Warid</td>
                                <td>01  - 02 Nov, 2016</td>
                                <td>0.00990</td>
                                <td>4,195</td>
                                <td>44.24</td>
                            </tr>
                           <tr>
                                <td>6.</td>
                                <td>Pakistan - Pak Zong</td>
                                <td>01  - 02 Nov, 2016</td>
                                <td>0.02580</td>
                                <td>710</td>
                                <td>20.18</td>
                            </tr>


                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>Total</td>
                        <td>71,367</td>
                        <td>$ 732.26</td>
                      </tr>

                    </table>
                </td>
              </tr>
              <tr>
                <td><table width='100%' border='0' cellpadding='0'>
                  <tr>
                    <td>
                    <table width='100%' border='0' cellpadding='0' style='height: 60px;padding: 10px 0 0;'>
                      <tr>
                        <td><p style='font-size: 10px;'>Time Zone : GMT Standard Time</p><p style='font-size: 10px;'>Note: All payment will be made in Vdigit Company Bank Account</p></td>
                      </tr>
                    </table></td>
                    <td><table width='100%' border='0' cellpadding='0' style='font-size: 18px;'>
                      <tr style='margin-top:-5px;'>
                        <td style='text-align: right;'>BALANCE DUE</td>
                        <td style='font-weight:bold; text-align: right;'>$ 732.26</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>
                <table width='100%' border='0' cellpadding='0'>
                  <tr>
                     <td width='50%' style='padding-right:7px'>
    	                                <div class='panel panel-default'>
                                            <div class='panel-heading' style='padding-left: 5px;'>ENBD BANK</div>
                                              <table width='100%' border='0' cellpadding='0' class='table table-bordered' style='font-size: 10px;'>
                                                <tr>
                                                    <td>
                                                        <p>Account Name : Vdigit FZE</p>
                                                        <p>AED Account No : 1015102997501, IBAN : AE560260001015102997501</p>
                                                        <p>USD Account No : 1025102997502, IBAN : AE640260001025102997502</p>
                                                        <p>Swift Code : EBILAEAD</p>
                                                        <p>Bank Address : Group Head Office Branch,UAE</p>
                                                    </td>
                                                </tr>
                                              </table>
                                        </div>
                                      </td> <td width='50%' style='padding-left:7px'>
    	                                <div class='panel panel-default'>
                                            <div class='panel-heading' style='padding-left: 5px;'>ENBD BANK</div>
                                              <table width='100%' border='0' cellpadding='0' class='table table-bordered' style='font-size: 10px;'>
                                                <tr>
                                                    <td>
                                                        <p>Account Name : Vdigit FZE</p>
                                                        <p>AED Account No : 019100054810, IBAN : AE380330000019100054810</p>
                                                        <p>USD Account No : 019100054836, IBAN : AE150330000019100054836</p>
                                                        <p>Swift Code : BOMLAEAD</p>
                                                        <p>Bank Address : Mashreq Bank Dubai UAE P.O. Box 1250</p>
                                                    </td>
                                                </tr>
                                              </table>
                                        </div>
                                      </td>
                  </tr>
                </table>
                </td>
              </tr>


             <hr />

             <tr>
                <td style='border-top: 1px solid #ccc; display: block; margin: 20px auto; padding: 20px 0; width: 80%;'
                 align='center'>billing@vdigit.net   www.vdigit.net   Mezzanine Floor, Amenity Centre, Tower# 1, Office# 8, Ras Al Khaimah,
                </td>
            </tr>
            </table>
        </body></html>

";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();



// Output the generated PDF (1 = download and 0 = preview)
//$dompdf->stream("codex",array("Attachment"=>0));

$dompdf->stream("dompdf_out.pdf", array("Attachment" => 0));

exit(0);

?>
