<?php
//1
/*
$arr = array();
for($i = 0;$i < 25;$i ++)
{
    array_push($arr, rand(1, 100));
}

$arr = array_unique($arr);
rsort($arr);
*/
//2

$alphabets = [[], []];
$numbers = [];

for($i = 0;$i < 10;$i ++)
    array_push($numbers, $i);

for($i = 'a' , $j = 'A';$i < 'z';$i ++, $j ++)
{
    array_push($alphabets[0], $i);
    array_push($alphabets[1], $j);
}

array_push($alphabets[0], 'z');
array_push($alphabets[1], 'Z');

function rowLength()
{
    $len = (int) $_POST['data'];
    return $len;
}

function generateNums($num)
{
    $seq = "";
    for ($i = 0;$i < rowLength();$i ++)
    {
        $seq .= $num[rand(0,9)];
    }

    return $seq;
}

function generateLet($let)
{
    $seq = "";
    for ($i = 0;$i < rowLength();$i ++)
    {
        $seq .= $let[rand(0, 1)][rand(0, 25)];
    }

    return $seq;
}

function generate($num, $let)
{
    if(rowLength() == 2) {
        $seq = "";
        $seq .= $num[rand(0,9)];
        $seq .= $let[rand(0,1)][rand(0,25)];
        $seq = str_shuffle($seq);
        return $seq;
    }

    $seq = generateLet($let);
    $seq .= generateNums($num);
    $seq = str_shuffle($seq);
    $seq = substr($seq, 0, strlen($seq) / 2);

    return $seq;
}

$submit = $_POST['submit'];
$type = $_POST['type'];

