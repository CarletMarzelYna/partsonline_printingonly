<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @page {
            margin: 1mm;
        }

        body {
            font-family: "Lucida Console", "Courier New", monospace;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, tr {
            padding: 5px;
            border: solid 1px black;
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

    <table>
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
        <tr style='text-align: right;'>
            <td>001</td>
            <td style='text-align: left;'>POBLACION EAST</td>
            <td>-</td>
            <td>-</td>
            <td><b> - </b></td>
            <td>-</td>
            <td>208,916.71</td>
            <td><b> 208,916.71 </b></td>
            <td>(208,916.71)</td>
        </tr>
        <tr style='text-align: right;'>
            <td colspan='2'><b>TOTAL:</b></td>
            <td>-</td>
            <td>-</td>
            <td><b> - </b></td>
            <td>-</td>
            <td>208,916.71</td>
            <td><b> 208,916.71 </b></td>
            <td>(208,916.71)</td>
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