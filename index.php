<?php
//1
$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" . '<br>';

//2
$color = array('white', 'green', 'red');
foreach ($color as $colorValue) {
    echo $colorValue . ', ';
}

echo '<br>';
for ($x = 1; $x <= count($color); $x++) {
    echo $color[$x % count($color)] . '<br>';
}

//3
$ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
echo '<br>';

foreach ($ceu as $key => $value) {
    echo 'The capital of ' . $key . ' is ' . $value . '<br>';
}

//4
$x = array(1, 2, 3, 4, 5);
unset($x[2]);
foreach ($x as $key => $value)
    echo $key . $value . '<br>';

$x = array_values($x);
echo '<br>';
foreach ($x as $key => $value)
    echo $key . $value . '<br>';
//foreach ($x as $key=>$value)
//    echo $key . $value . '<br>';

//5
echo '<br>';
echo $color[0];

$jsonString = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';

//6

echo '<br>';

$jsonArray = json_decode($jsonString, true);
function print_json($array)
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            print_json($value);
        } else
            echo "$key : $value<br />";
    }
}

print_json($jsonArray);


//7
$arr = array(1, 2, 3, 4, 5);
$x = '$';
array_splice($arr, 3, 0, $x);
foreach ($arr as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}


//8
echo '<br>';
$arr = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

asort($arr);
foreach ($arr as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}

echo '<br>';
ksort($arr); //dupa cheie crescator
foreach ($arr as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}

echo '<br>';
arsort($arr); //dupa valoare descrescator
foreach ($arr as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}

echo '<br>';
krsort($arr); //dupa cheie descrescator
foreach ($arr as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}

//9
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temperatures) / count($temperatures);

echo 'Avg = ' . $average;
echo '<br>';
asort($temperatures);
$first5 = array_slice(array_unique($temperatures), 0, 5);
$last5 = array_slice(array_unique($temperatures), -5);

foreach ($first5 as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}
echo '<br>';
foreach ($last5 as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}


//10 beadsort

function beadSort($arr)
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max)
            $max = $arr[$i];
    }
    $beads = array();
    $beads = array_fill(0, $max * count($arr), 0);
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < $arr[$i]; $j++) {
            $beads[$i * $max + $j] = 1;
        }
    }

    for ($j = 0; $j < $max; $j++) {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $sum += $beads[$i * $max + $j];
            $beads[$i * $max + $j] = 0;
        }
        for ($i = count($arr) - $sum; $i < count($arr); $i++) {
            $beads[$i * $max + $j] = 1;
        }
    }

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < $max && $beads[$i * $max + $j]; $j++) {
            $arr[$i] = $j;
        }
    }
    return $arr;
}

echo '<br>';
$arr = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
$arr = beadSort($arr);
foreach ($arr as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}


//11
//pentru fiecare apel de functie se face un array nou in care se adauga elementele
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
function merge_arrays_by_index($x, $y)
{
    $temp = array(); $temp[] = $x; if(is_scalar($y))
{
    $temp[] = $y;
}
else
{
    foreach($y as $k => $v)
    {
        $temp[] = $v;
    }
}
    return $temp;
}
echo '<pre>'; print_r(array_map('merge_arrays_by_index',$array2, $array1));

