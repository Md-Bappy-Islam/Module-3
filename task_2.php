<?php
$numbers=[1,2,3,4,5,6,7,8,9,10];
function removeEvenNumber($number)
{
    for ($i = 1; $i <= count($number); $i++) {
        if ($i % 2 == 1)
            echo $i . "\n";
    }
}
removeEvenNumber($numbers);







$number=[1,2,3,4,5,6,7,8,9,10];
function removeEven($number){
    $oddNumber=array_filter($number,fn($n) => $n % 2 !==0) ;
        return $oddNumber;
    
}
print_r(removeEven($number));
