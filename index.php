<?php
include "Dancer.php";
include "SquareDance.php";
$dancer= new Dancer('Tuan',"Nam");
$dancer1= new Dancer('Nhi',"Nu");
$dancer2= new Dancer('TuanAn',"Nam");
$squaredancer= new SquareDance();
$squaredancer->add($dancer);
$squaredancer->add($dancer1);
$squaredancer->add($dancer2);
echo $squaredancer->printPair();