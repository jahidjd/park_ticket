<?php
require 'vendor/autoload.php';
function barcode($id){
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    echo $generator->getBarcode($id, $generator::TYPE_CODE_39);
}
