<?php

$studentGrades = [

    "student_1" => ["Math" => "80", "English" => "70", "Science" => "90"],

    "student_2" => ["Math" => "60", "English" => "70", "Science" => "40"],

    "student_3" => ["Math" => "0", "English" => "40", "Science" => "20"],


];

function studentGrades($marks)
{
    foreach ($marks as $stIndex => $grades) {
        $total = array_sum($grades);
        $avarage = $total / count($grades) . "\n";
        $avrFormate = number_format($avarage);
        echo  $stIndex . "==>" . "($avrFormate)" . "\n";
 
  
      
    }
}
studentGrades($studentGrades);
