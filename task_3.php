<?php
echo "dissending order \n";

$grade = [85, 92, 78, 88, 95];
arsort($grade);
function assendingArraySort($number)
{
    foreach ($number as $item) {
        echo $item . "\n";
    }
}
assendingArraySort($grade);
echo "\n";








echo "assending order";
echo "\n";
$grade = [85, 92, 78, 88, 95];
asort($grade);
function dessensingArraySort($number)
{
    foreach ($number as $item) {
        echo $item . "\n";
    }
}
dessensingArraySort($grade);
