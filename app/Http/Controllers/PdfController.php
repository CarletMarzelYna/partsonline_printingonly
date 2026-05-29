<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function print(Request $request)
    {
        $format = $request->query('format', 'receipt');
        $reportType = $request->query('reportType');
        $taxCertType = $request->query('taxCertType');
        $loRPTdaType = $request->query('loRPTdaType');
        $rptDueBillType = $request->query('rptDueBillType');
        $rptAoCType = $request->query('rptAoCType');
        $rptSoCType = $request->query('rptSoCType');
        $rptMCRType = $request->query('rptMCRType');

        $cecrType = $request->query('cecrType');
        $rptpType = $request->query('rptpType');


        $rptrType = $request->query('rptrType');

        $view = 'print.receipt';
        $orientation = 'landscape';
        $paper = 'letter';

        switch ($format) {
            case 'Adetailed':
                $view = 'print.receipt_aDetailed';
                $orientation = 'landscape';
                $paper = 'letter';
                break;

            case 'B':
                $view = 'print.receipt_b';
                $orientation = 'landscape';
                $paper = 'letter';
                break;

            case 'Bdetailed':
                $view = 'print.receipt_bDetailed';
                $orientation = 'landscape';
                $paper = 'letter';
                break;

            case 'report':
                switch ($reportType) {
                    case 'RPTAR':
                        $view = 'print.report.RPTAR';
                        $orientation = 'landscape';
                        $paper = 'legal';
                        break;

                    case 'LoAPwLP':
                        $view = 'print.report.LoAPwLP';
                        $orientation = 'landscape';
                        $paper = 'legal';
                        break;

                    case 'TC':
                        switch ($taxCertType) {
                            case 'provincial':
                                $view = 'print.report.TC.provincial';
                                $orientation = 'portrait';
                                $paper = 'legal';
                                break;

                            case 'municipal':
                                $view = 'print.report.TC.municipal';
                                $orientation = 'portrait';
                                $paper = 'legal';
                                break;

                            default:
                                $view = 'print.report.TC.default';
                                break;
                        }
                        break;

                    case 'LoRPTDA':
                        switch ($loRPTdaType) {
                            case 'top':
                                $view = 'print.report.LoRPTDA.top';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;
                            
                            case 'lot':
                                $view = 'print.report.LoRPTDA.lot';
                                $orientation = 'landscape';
                                $paper = 'legal';    
                                break;

                            case 'class':
                                $view = 'print.report.LoRPTDA.class';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            default:
                                $view = 'print.report.LoRPTDA.default';
                                break;
                        }
                        break;

                    case 'RPTDB':
                        switch ($rptDueBillType) {
                            case 'orig':
                                $view = 'print.report.RPTDB.orig';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'bpp':
                                $view = 'print.report.RPTDB.bpp';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'sy':
                                $view = 'print.report.RPTDB.sy';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            default:
                                $view = 'print.report.RPTDB.default';
                                break;
                        }
                        break;

                    case 'RPTAoC':
                        switch ($rptAoCType) {
                            case 'a':
                                $view = 'print.report.RPTAoC.a';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'ap':
                                $view = 'print.report.RPTAoC.ap';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'ac':
                                $view = 'print.report.RPTAoC.ac';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            default:
                                $view = 'print.report.RPTAoC.default';
                                break;
                        }
                        break;

                    case 'RPTDCS':
                        $view = 'print.report.RPTDCS';
                        $orientation = 'landscape';
                        $paper = 'legal';
                        break;
                
                    case 'RPTSoC':
                        switch ($rptSoCType) {
                            case 'cm':
                                $view = 'print.report.RPTSoC.cm';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'cy':
                                $view = 'print.report.RPTSoC.cy';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'd':
                                $view = 'print.report.RPTSoC.d';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'by':
                                $view = 'print.report.RPTSoC.by';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            default:
                                $view = 'print.report.RPTSoC.default';
                                break;
                        }
                        break;
                
                    case 'RPTMCR':
                        switch ($rptMCRType) {
                            case 'revised':
                                $view = 'print.report.RPTMCR.revised';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'basic':
                                $view = 'print.report.RPTMCR.basic';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'sef':
                                $view = 'print.report.RPTMCR.sef';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            default:
                                $view = 'print.report.RPTMCR.default';
                                break;
                        }
                        break;

                    case 'RPTCRbPC':
                        $view = 'print.report.RPTCRbPC';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'GAoC':
                        $view = 'print.report.GAoC';
                        $orientation = 'landscape';
                        $paper = 'legal';
                        break;

                    case 'CR':
                        $view = 'print.report.CR';
                        $orientation = 'portrait';
                        $paper = 'legal';
                        break;

                    case 'CECR':
                        switch ($cecrType) {
                            case 'basic':
                                $view = 'print.report.CECR.basic';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'sef':
                                $view = 'print.report.CECR.sef';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            default:
                                $view = 'print.report.CECR.default';
                                break;
                        }
                        break;

                    case 'RPTP':
                        switch ($rptpType) {
                            case 'p':
                                $view = 'print.report.RPTP.p';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'pb':
                                $view = 'print.report.RPTP.pb';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            case 'dpb':
                                $view = 'print.report.RPTP.dpb';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            default:
                                $view = 'print.report.RPTP.default';
                                break;
                        }
                        break;

                    case 'TR':
                        $view = 'print.report.TR';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'IL':
                        $view = 'print.report.IL';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'RPTR':
                        switch ($rptrType) {
                            case 'r':
                                $view = 'print.report.RPTR.r';
                                $orientation = 'portrait';
                                $paper = 'legal';
                                break;

                            case 'rpb':
                                $view = 'print.report.RPTR.rpb';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;

                            default:
                                $view = 'print.report.RPTR.default';
                                $orientation = 'landscape';
                                $paper = 'legal';
                                break;
                        }
                        break;

                    default:
                        $view = 'print.report';
                        break;
                }
                break;

            default:
                $view = 'print.receipt_a';
                $orientation = 'landscape';
                $paper = 'letter';
                break;
        }

        $pdf = Pdf::loadView($view)
        ->setPaper($paper, $orientation)
        ->setOptions([
            'isRemoteEnabled' => true,
            'defaultFont' => 'Arial',
            'dpi' => 96,
        ]);

    return $pdf->stream('receipt.pdf');
    }
}