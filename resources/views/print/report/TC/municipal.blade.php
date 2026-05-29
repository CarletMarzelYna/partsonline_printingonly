<?php
$path = public_path('images/seal.png');
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @page {
            margin: 10mm;
        }

        body {
            font-size: 16px;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, tr {
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <table style="width: 100%; border: none;">
        <tr style="border: none;">
            <td style="width: 80px; border: none; text-align: center;">
                <img src="<?= $base64 ?>" style="width:70px;height:70px;">
            </td>

             <td style="border: none; text-align: center;">
                <p style="margin: 0;">
                    Republic of the Philippines
                    <br>
                    Province of PANGASINAN
                    <br>
                    <b>Municipality of ALCALA</b>
                    <br>
                    <b>Office of the Treasurer</b>
                </p>
            </td>

            <td style="width: 80px; border: none; text-align: center;">
                <img src="<?= $base64 ?>" style="width:70px;height:70px;">
            </td>
        </tr>
    </table>    

    <hr>
    <p style='text-align: center; font-size: 25px; font-weight: 500;'><u>TAX CERTIFICATE</u></p>
    <p><b>TO WHOM IT MAY CONCERN:</b></p>
    <p style="text-indent: 40px;"> 
        This is to certify that, according to the records kept in this office, 
        the real property/ies declared for taxation purposes under the name of 
        <b>ABELLA, ALEJANDRO,</b> this minicipality,
    </p>

    <table style='font-size: 12px;'>
        <tr style='text-align: center;'>
            <td>Tax Declaration No.</td>
            <td>PIN</td>
            <td>Location of Property</td>
            <td>Assessed Value (P)</td>
            <td>Yearly Tax (P)</td>
            <td>Lot No. and Block No.</td>
            <td>Area</td>
        </tr>
        <tr>
            <td>03-0005-01281</td>
            <td>013-03-0005-034-01-1012</td>
            <td>BERSAMIN</td>
            <td>17,550.00</td>
            <td>351.00</td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <p style="text-indent: 40px;">
        It is further certified that taxes of the above-named property/ies 
        have been paid up to date, as shown by the records in this office.
    </p>

    <table style='font-size: 12px;'>
        <tr style='text-align: center;'>
            <td>Tax Declaration No.</td>
            <td>Tax Year</td>
            <td>Date of Payment</td>
            <td>O.R. No.</td>
            <td>Basic Tax (P)</td>
            <td>Penalty (P)</td>
            <td>Discount/ Credits</td>
            <td>S.E.F. (P)</td>
            <td>Penalty (P)</td>
            <td>Discount/ Credits</td>
            <td>Total</td>
        </tr>
        <tr>
            <td colspan='11' style='text-align: center;'><b> 2021 Full Payment </b></td>
        </tr>
        <tr>
            <td>03-0005-01281</td>
            <td>2021</td>
            <td>02/19/2021</td>
            <td>2725653</td>
            <td>175.50</td>
            <td></td>
            <td>-35.10</td>
            <td>175.50</td>
            <td></td>
            <td>-35.10</td>
            <td>280.80</td>
        </tr>
    </table>

    <p style="text-indent: 40px;">
        This is to certify further that the taxes of the above real
        property/ies have been paid from previous years up to <b>Year 2021.</b>
    </p>
    <p style="text-indent: 40px;">
        This certification is issued upon the request of <b>ABELLA, ALEJANDRO,</b>
        for whatever legal purpose it may serve best.
    </p>
    <p style="text-indent: 40px;">Given this 13th day of May, 2026 at the, Pangasinan, Philippines.</p>


    <br>
    <table>
        <tr style='border: none; font-size:14px;'>
            <td style='border: none;'>Verified and Checked:</td>
            <td style='border: none;'>Noted By:</td>
        </tr>
        <tr style='text-align: center; border: none;'>
            <td style='border: none;'>
                <b>gerard</b>
                <br>
                _______________________________________
            </td>
            <td style='border: none;'>
                <b>ROSELILY A. FERRER</b>
                <br>
                _______________________________________
                <br>
                Municipal Treasurer
            </td>
        </tr>
        
    </table>

    <br>

    <table style='margin:0px; padding:0px; font-size:14px;'>
        <tr style='border: none; margin:0px; padding:0px;'>
            <td style='border: none; margin:0px; padding:0px; width: 150px;'>Paid under OR No.:</td>
            <td style='border: none; margin:0px; padding:0px; width: 150px; border-bottom: 1px solid black;'> 2725653 </td>
            <td style='border: none;'></td>
        </tr>
        <tr style='border: none; margin:0px; padding:0px;'>
            <td style='border: none; margin:0px; padding:0px; width: 150px;'>Date Issued:</td>
            <td style='border: none; margin:0px; padding:0px; border-bottom: 1px solid black;'> 5/13/2026 </td>
            <td style='border: none;'></td>
        </tr>
        <tr style='border: none; margin:0px; padding:0px;'>
            <td style='border: none; margin:0px; padding:0px; width: 150px;'>Amount Paid:</td>
            <td style='border: none; margin:0px; padding:0px; border-bottom: 1px solid black;'> 280.80 </td>
            <td style='border: none;'></td>
        </tr>
        <tr style='border: none; margin:0px; padding:0px;'>
            <td style='border: none; margin:0px; padding:0px; width: 150px;'>Doc. Stamp:</td>
            <td style='border: none; margin:0px; padding:0px; border-bottom: 1px solid black;'></td>
            <td style='border: none;'></td>
        </tr>
    </table>
</body>
</html>