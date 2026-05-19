<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @page {
            margin: 2mm;
        }

        body {
            font-family: "Lucida Console", "Courier New", monospace;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        table {
            width: 92%;
            border-collapse: collapse;
            /* border: solid 1px black; */
        }

        td {
            padding: 5px;
            /* border: solid 1px black; */
        }
    </style>
</head>
<body>
    <table style="padding-top: 375px">
        <tr>
            <td colspan="3"></td>
            <td colspan="2">previousOR</td>
            <td style="text-align: right;">receiptNo</td>
        </tr>
        <tr>
            <td style="width: 220px;"></td>
            <td style="width: 230px; padding-top: 25px; text-align: center;">municiplity</td>
            <td></td>
            <td style="width: 115px;">dated</td>
            <td style="width: 80px; padding-top: 25px;">dateYear</td>
            <td style="width: 155px; padding-top: 25px; text-align: right;">dateMonthDay</td>
        </tr>
    </table>

    <table>
        <tr>
            <td style="padding-top: 25px;">taxpayerName</td>s
            <td style="width: 440px; padding-top: 25px;">amountInWords</td>
            <td style="width: 155px; padding-top: 25px; text-align: right;">totalAmount</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 10px; text-align: right;">taxYearText</td>
            <td></td>
        </tr>
    </table>

    <table style="margin-top: 50px !important; height: 135px;">
        <tr>
            <td rowspan="6" style="width: 140px; vertical-align: top;">ownerName</td>
            <td style="width: 100px;">barangay</td>
            <td style="width: 50px;">tdno</td>
            <td style="width: 45px;">pCC</td>
            <td style="width: 35px;">land</td>
            <td style="width: 48px;">improv</td>
            <td style="width: 55px;">aV</td>
            <td style="width: 50px;">tT</td>
            <td style="width: 30px;">tY</td>
            <td style="width: 60px;">insPay</td>
            <td style="width: 85px; text-align: right;">payment</td>
            <td style="width: 43px; text-align: right;">pen</td>
            <td style="text-align: right;">total</td>
        </tr>
        <tr>
            <!-- <td rowspan="6" style="width: 140px;">ownerName</td> -->
            <td style="width: 100px;">barangay</td>
            <td style="width: 50px;">tdno</td>
            <td style="width: 45px;">pCC</td>
            <td style="width: 35px;">land</td>
            <td style="width: 48px;">improv</td>
            <td style="width: 55px;">aV</td>
            <td style="width: 50px;">tT</td>
            <td style="width: 30px;">tY</td>
            <td style="width: 60px;">insPay</td>
            <td style="width: 85px; text-align: right;">payment</td>
            <td style="width: 43px; text-align: right;">pen</td>
            <td style="text-align: right;">total</td>
        </tr>
        <!-- <tr>
            <td colspan="12"></td>
        </tr>
        <tr>
            <td colspan="12">2</td>
        </tr>
        <tr>
            <td colspan="12"></td>
        </tr>
        <tr>
            <td colspan="12">3</td>
        </tr>
        <tr>
            <td colspan="12"></td>
        </tr> -->
    </table>

    <table>
        <tr>
            <td colspan="4"></td>
            <td rowspan="2" style="text-align: right;">grandTotal</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 150px; text-align: right; font-size: 10px;">cashAmount</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 150px; text-align: right; font-size: 10px;">chequeN/D</td>
            <td style="width: 5px;"></td>
            <td rowspan="2" style="width: 233px; text-align: center;">treasurer</td>
            <td rowspan="2" style="width: 243px; text-align: center;">provincialTreasurer</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 150px; text-align: right; font-size: 10px;">chequeAmount</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right; font-size: 10px;">grandTotal</td>
            <td colspan="3"></td>
        </tr>
    </table>
</body>
</html>