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
        $rptDueBillType = $request->query('rptDueBillType');
        $cecrType = $request->query('cecrType');
        $rptpType = $request->query('rptpType');
        $rptrType = $request->query('rptrType');
        $loRPTdaType = $request->query('loRPTdaType');

        $view = 'print.receipt';
        $orientation = 'landscape';
        $paper = 'letter';

        switch ($format) {
            case 'Adetailed':
                $view = 'print.receipt_aDetailed';
                break;

            case 'B':
                $view = 'print.receipt_b';
                break;

            case 'Bdetailed':
                $view = 'print.receipt_bDetailed';
                break;

            case 'report':
                switch ($reportType) {
                    case 'RPTAR':
                        $view = 'print.report.RPTAR';
                        $paper = 'legal';
                        break;

                    case 'LoAPwLP':
                        $view = 'print.report.LoAPwLP';
                        $paper = 'legal';
                        break;

                    case 'TC':
                        switch ($taxCertType) {
                            case 'provincial':
                                $view = 'print.report.TC.provincial';
                                break;

                            case 'municipal':
                                $view = 'print.report.TC.municipal';
                                break;

                            default:
                                $view = 'print.report.TC.default';
                                break;
                        }
                        $orientation = 'portrait';
                        $paper = 'legal';
                        break;

                    case 'LoRPTDA':
                        switch ($loRPTdaType) {
                            case 'top':
                                $view = 'print.report.LoRPTDA.top';
                                break;
                            
                            case 'lot':
                                $view = 'print.report.LoRPTDA.lot';
                                break;

                            case 'class':
                                $view = 'print.report.LoRPTDA.class';
                                break;

                            default:
                                $view = 'print.report.LoRPTDA.default';
                                break;
                        }
                        $orientation = 'landscape';
                        $paper = 'legal';
                        break;

                    case 'RPTDB':
                        switch ($rptDueBillType) {
                            case 'orig':
                                $view = 'print.report.RPTDB.orig';
                                break;

                            case 'bpp':
                                $view = 'print.report.RPTDB.bpp';
                                break;

                            case 'sy':
                                $view = 'print.report.RPTDB.sy';
                                break;

                            default:
                                $view = 'print.report.RPTDB.default';
                                break;
                        }
                        $orientation = 'landscape';
                        $paper = 'legal';
                        break;

                    case 'RPTAoC':
                        $view = 'print.report.RPTAoC';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'RPTDCS':
                        $view = 'print.report.RPTDCS';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'RPTSoC':
                        $view = 'print.report.RPTSoC';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'RPTMCR':
                        $view = 'print.report.RPTMCR';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'RPTCRbPC':
                        $view = 'print.report.RPTCRbPC';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'GAoC':
                        $view = 'print.report.GAoC';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'CR':
                        $view = 'print.report.CR';
                        $orientation = '';
                        $paper = '';
                        break;

                    case 'CECR':
                        switch ($cecrType) {
                            case 'basic':
                                $view = 'print.report.CECR.basic';
                                break;

                            case 'sef':
                                $view = 'print.report.CECR.sef';
                                break;

                            default:
                                $view = 'print.report.CECR.default';
                                break;
                        }
                        $orientation = 'landscape';
                        $paper = 'legal';
                        break;

                    case 'RPTP':
                        switch ($rptpType) {
                            case 'p':
                                $view = 'print.report.RPTP.p';
                                break;

                            case 'pb':
                                $view = 'print.report.RPTP.pb';
                                break;

                            case 'dpb':
                                $view = 'print.report.RPTP.dpb';
                                break;

                            default:
                                $view = 'print.report.RPTP.default';
                                break;
                        }
                        $orientation = 'landscape';
                        $paper = 'legal';
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
                                break;

                            case 'rpb':
                                $view = 'print.report.RPTR.rpb';
                                $orientation = 'landscape';
                                break;

                            default:
                                $view = 'print.report.RPTR.default';
                                $orientation = 'landscape';
                                break;
                        }
                        $paper = 'legal';
                        break;

                    default:
                        $view = 'print.report';
                        break;
                }
                break;

            default:
                $view = 'print.receipt_a';
                break;
        }

        $pdf = Pdf::loadView($view)
            ->setPaper($paper, $orientation)
            ->setOption(['isRemoteEnabled' => true]);

        return response($pdf->stream('receipt.pdf'))
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }
}