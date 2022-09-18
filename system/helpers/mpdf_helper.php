<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function pdf_create($html) 
{
    require_once __DIR__ . '/mpdf/vendor/autoload.php';
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . 'vendor\mpdf\mpdf\ttfonts',
    ]),
    'fontdata' => $fontData + [
        'solaimanlipi' => [
            'R' => 'SolaimanLipi.ttf','useOTL' => 0xFF,
        ]
    ],
    'default_font' => 'solaimanlipi',
	'mode' => 'utf-8', 
        'format' => 'A4', 
        'orientation' => 'P'
]);
$mpdf->autoScriptToLang = true;
$mpdf->baseScript = 1;
$mpdf->autoVietnamese = true;
$mpdf->autoArabic = true;
$mpdf->autoLangToFont = true;
$mpdf->showImageErrors = true;
$mpdf->WriteHTML($html);
// $mpdf->Output();
$mpdf->Output('Application.pdf', 'D');
}
?>