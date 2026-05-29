<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @page {
            size: legal landscape;
            margin: 10px;
        }

        html, body {
            margin: 10px;
            padding: 0;
            width: 90%;
            height: 100%;
            font-family: Arial, sans-serif;
            font-size: 14px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, tr {
            border: 1px solid #000;
            text-align: center;
            vertical-align: middle;
        }

        .footer-fixed {
            position: fixed;
            bottom: 1mm;
            left: 0;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <p style='text-align: center; font-weight: 500;'>
        COMPARATIVE EFFICENCY COLLECTION REPORT
        <br>
        BASIC
    </p>

    <table style='font-size: 12px;'>
        <tr style='text-align: center;'>
            <td rowspan='2'>Code</td>
            <td rowspan='2'>Name of Barangay</td>
            <td colspan='3'>Current</td>
            <td colspan='3'>Previous</td>
            <td rowspan='2'>Increase <br> (Decrease)</td>
        </tr>
        <tr style='text-align: center;'>
            <td>Advance</td>
            <td>2026</td>
            <td><b>Total</b></td>
            <td>Advance</td>
            <td>2020</td>
            <td><b>Total</b></td>
        </tr>
        <tr>
            <td style='text-align: center; width: 80px;'>001</td>
            <td style='text-align: left; width: 330px;'>POBLACION EAST</td>
            <td style='text-align: right; width: 120px;'>-</td>
            <td style='text-align: right; width: 120px;'>-</td>
            <td style='text-align: right; width: 120px;'><b> - </b></td>
            <td style='text-align: right; width: 120px;'>-</td>
            <td style='text-align: right; width: 120px;'>208,916.71</td>
            <td style='text-align: right; width: 120px;'><b> 208,916.71 </b></td>
            <td style='text-align: right; width: 120px;'>(208,916.71)</td>
        </tr>
        <tr style='text-align: right;'>
            <td colspan='2' style='text-align: right;'><b>TOTAL:</b></td>
            <td style='text-align: right;'>-</td>
            <td style='text-align: right;'>-</td>
            <td style='text-align: right;'><b> - </b></td>
            <td style='text-align: right;'>-</td>
            <td style='text-align: right;'>208,916.71</td>
            <td style='text-align: right;'><b> 208,916.71 </b></td>
            <td style='text-align: right;'>(208,916.71)</td>
        </tr>
    </table>

    <div class="footer-fixed">
        <table style="width:100%;">
            <tr style="border:none;">
                <td style="border:none; font-size:10px; text-align: right;">
                    Page _ of _
                </td>
            </tr>
        </table>
    </div>
</body>
</html>