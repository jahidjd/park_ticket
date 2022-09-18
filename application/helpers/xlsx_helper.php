<?php
include 'excel/autoload.php';
use Shuchkin\SimpleXLSX;
function xlsx($file){
    $h=array();
    $data=array();
    if ( $xlsx = SimpleXLSX::parse($file) ) {
        foreach($xlsx->rows() as $k=>$d){
            $r=array();
            if($k==0){
                $h=$d;
            }else{
                foreach($d as $i=>$t){
                    if($t==''){
                        $r[$h[$i]]='N/A';
                    }else{
                        $r[$h[$i]]=$t;
                    }
                    
                }
                $data[]=$r;
            }
        }
    } 
    return $data;
}