<?php

//compare any three integer and find the greatest number 
$a = 4;
$b = 8;
$c = 20;

if ($a >= $b && $a >= $c) {
    echo " a  is greatest number";
} elseif ($b >= $a && $b >= $c) {
    echo " b  is greatest number";
} elseif ($c >= $a && $c >= $b) {
    echo " c  is greatest number";
}
