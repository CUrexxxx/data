<?php
require_once 'config.php';
error_reporting(E_ALL);
$anData = array(46,50,55,70,80,86,95);
$n = count($anData);
$halfn=0;
if($n % 2 == 0){ 
        $halfn = $n/2; 
} 
else{ 
        $halfn = ($n+1)/2;
} 
$xsquare;
$sigmaxsuare=0;
$sigmaxy=0;
$xy;
$sigmay=0;
For($x=0;$x< $n;$x++){
  $xsquare[$x] = pow($x+1-$halfn,2);
  $sigmaxsuare +=  pow($x+1-$halfn,2);;
  $sigmaxy += ($x+1-$halfn)* $anData[$x];
  $sigmay += $anData[$x];
}
$alpa = $sigmay/$n;
$beta = $sigmaxy/$sigmaxsuare;
$nextdata = $alpa+ ($beta*($n+1-$halfn));
echo $nextdata;
?>