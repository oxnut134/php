<?php
function triangle($a,$b){
    return $a * $b / 2;
}
function rectangle($a,$b){
    return $a * $b;
}
function trapezoid($a,$b,$c){
    return ($a + $b) * $c / 2;
}

$ta = 20;
$tb = 10;

echo "width and height of triangle: ", $ta," , " , $tb,"\n";
echo "Area of triangle: ", triangle($ta, $tb), "\n";

$ra = 20;
$rb = 10;

echo "width and height of rectangle: ", $ra," , " , $rb,"\n";
echo "Area of rectangle: ", rectangle($ra, $rb), "\n";

$tpa = 20;
$tpb = 10;
$tpc=10;


echo "wth-btm, wth-top, height of trapezoid: ", $tpa," , " , $tpb," , " , $tpc,"\n";
echo "Area of trapezoid: ", trapezoid($tpa, $tpb,$tpc), "\n";

/*function result($score1,$score2,$score3){
$total=$score1+$score2+$score3;
    if ($total>210){
    echo "合計点は",$total,"なので合格です","\n";
}else{
    echo "合計点は",$total,"なので不合格です","\n";
}
return;

}

result(71,70,70);
*/
