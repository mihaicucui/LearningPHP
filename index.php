<?php
//1
$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" . '<br>';

//2
$color = array('white', 'green', 'red');
foreach ($color as $colorValue){
    echo $colorValue . ', ';
}

echo '<br>';
for($x=1; $x<=count($color);$x++){
    echo $color[$x%count($color)] . '<br>';
}

//3
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
echo '<br>';

foreach ($ceu as $key => $value){
    echo 'The capital of ' . $key . ' is ' . $value . '<br>';
}

//4
$x = array(1, 2, 3, 4, 5);
unset($x[2]);
foreach ($x as $key=>$value)
    echo $key . $value . '<br>';

$x = array_values($x);
echo '<br>';
foreach ($x as $key=>$value)
    echo $key . $value . '<br>';
//foreach ($x as $key=>$value)
//    echo $key . $value . '<br>';

//5
echo '<br>';
echo <