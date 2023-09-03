<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PdfController extends Controller
{
    public function Print(){

        $filename = 'fax_sheet.pdf';
        $mpdf= new \Mpdf\Mpdf();

        $viewBlade = view('pdf.fax_sheet_2');
        $mpdf->WriteHTML($viewBlade);


        $mpdf->Output($filename,'I');

        
    }
    public function HtmlLoad(){
        $output = <<<PONDIT
                
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" style=" padding-top:30px;">
                        <table width="80%" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="right">
                                    <p>Prepared By: |:|PLACEHOLDER_PERPARED|:|</p>
                                    <p>Checked By: |:|PLACEHOLDER_CHECKED|:|</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <p  style="border-bottom: 1px solid black; width: 145px;">NOT TO BE FAXED</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="start">
                                    <p style="border-bottom: 1px solid black; width: 200px;">MESSAGE INSTRUCTIONS</p>
                                    <p><strong>COPY TO:</strong></p>
                                    <p>Dte Engg</p>
                                </td>
                            </tr>

                        </table>
                        <table width="80%" align="center" cellspacing="0" cellpadding="0" style="border-top: 1px solid black; margin-top:30px;">
                            <tr>
                                <td width="30%"><p style="border-bottom: 1px solid black; width: 130px;">AUTHORISED BY</p></td>

                                <td width="50%" align="right" style="padding-top:50px">
                                    <P>|:|PLACEHOLDER_SIGNATURE|:|</P>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"></td>
                                <td width="40%" align="right">
                                    <p>NAME:|:|PLACEHOLDER_NAME|:|</p>
                                    <p>RANK:|:|PLACEHOLDER_RANK|:|</p>
                                    <p>DESIG:|:|PLACEHOLDER_DESIG|:|</p>
                                    <p>EXT:|:|PLACEHOLDER_EXT|:|</p>
                                </td>
                            </tr>
                        </table>
                        <table width="80%" align="center" cellspacing="0" cellpadding="0" style="border-top: 1px solid black; margin-top:30px;">
                        <tr>
                                <td width="30%">
                                    <p style="border-bottom: 1px solid black; width: 185px;">SECURITY CLEARED BY</p>
                                </td>

                                <td width="50%" align="right" style="padding-top:50px">
                                    <P>|:|PLACEHOLDER_SIGNATURE|:|</P>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"></td>
                                <td width="40%" align="right">
                                    <p>NAME:|:|PLACEHOLDER_NAME|:|</p>
                                    <p>RANK:|:|PLACEHOLDER_RANK|:|</p>
                                    <p>DESIG:|:|PLACEHOLDER_DESIG|:|</p>
                                </td>
                            </tr>
                        </table>
                        <table width="80%" align="center" cellspacing="0" cellpadding="0" style="border-top: 1px solid black; margin-top:30px;">
                            <tr>
                                    <td width="30%" style="padding-top: 40px;">
                                        <p style="border-bottom: 1px solid black; width: 285px;">Description of the pages included for faxing</p>
                                        <P>a.</P>
                                        <p>b.</p>
                                        <p>c.</p>
                                        <p>d.</p>
                                        <p>e.</p>
                                    </td>
                                </tr>
                            </table>
                    </table>
                
        PONDIT;
        echo $output;
    }

}
