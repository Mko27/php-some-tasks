<?php
//phpinfo();

//1
/*
$color = ['white', 'green', 'red', 'blue', 'black'];

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";*/

//2
/*
$color = ['white', 'green', 'red'];

echo "{$color[1]} <br> {$color[2]} <br> {$color[0]}";*/

//3
/*
$ceu = [ "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"];
asort($ceu);

foreach ($ceu as $country => $city) {
    echo "The capital of {$country} is {$city} <br>";
}*/

//4
/*
$x = [1, 2, 3, 4, 5];
var_dump($x);
unset($x[3]);
$x = array_values($x);
echo "<br>";
var_dump($x);*/

//5
/*
$color = [4 => 'white', 6 => 'green', 11=> 'red'];

echo reset($color);*/

//6

/*
function PrintJsonInString($value,$key)
{
    echo "$key : $value <br>";
}

$JSON = '{  "Title": "The Cuckoos Calling",
            "Author": "Robert Galbraith",
            "Detail": {
               "Publisher": "Little Brown"
          }}';

$obj = json_decode($JSON, true);
array_walk_recursive($obj, "PrintJsonInString");*/

//7
/*
function array_insert(&$array, $position, $elem)
{
    if (is_int($position)) {
        array_splice($array, $position, 0, $elem);
    } else {
        $pos   = array_search($position, array_keys($array));
        $array = array_merge(
            array_slice($array, 0, $pos),
            $elem,
            array_slice($array, $pos)
        );
    }
}

$arr = array(1, 2, 3, 4, 5);

array_insert($arr, 3, "$");

for ($i = 0;$i < count($arr);$i ++)
    echo "$arr[$i] <br>";*/

//8
/*
$arr = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];

asort($arr);

foreach ($arr as $key => $value) {
    echo "{$key} => {$value} <br>";
}
echo "<br>";

ksort($arr);

foreach ($arr as $key => $value) {
    echo "{$key} => {$value} <br>";
}
echo "<br>";

arsort($arr);

foreach ($arr as $key => $value) {
    echo "{$key} => {$value} <br>";
}
echo "<br>";

krsort($arr);

foreach ($arr as $key => $value) {
    echo "{$key} => {$value} <br>";
}*/

//9
/*
function temp($arr)
{
    $sum = 0;
    for($i = 0;$i < count($arr);$i ++)
    {
        $sum += $arr[$i];
    }

    $average = $sum/count($arr);

    echo "Average Temperature is :  $average";
    $arr = array_unique($arr);

    sort($arr);

    echo "<br>";
    echo "List of five lowest temperatures : ";
    for($i = 0;$i < 5; $i ++)
        echo "$arr[$i]".",";

    echo "<br>";
    echo "List of five highest temperatures : ";
    for($i = count($arr) - 5;$i < count($arr); $i ++)
        echo "$arr[$i]".",";

}

$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

temp($temps);*/

//10
/*
function columns($uarr)
{
    $n=$uarr;
    if (count($n) == 0)
        return array();
    else if (count($n) == 1)
        return array_chunk($n[0], 1);
    array_unshift($uarr, NULL);
    $transpose = call_user_func_array('array_map', $uarr);
    return array_map('array_filter', $transpose);
}

function bead_sort($uarr)
{
    foreach ($uarr as $e)
        $poles []= array_fill(0, $e, 1);
    return array_map('count', columns(columns($poles)));
}

$array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
$sorted = bead_sort($array);
print_r($sorted);*/

//11
/*
$array1 = [[77, 87], [23, 45]];
$array2 = ["w3resource", "com"];

$result = array_merge($array1, $array2);
print_r($result);*/

//12
/*
$Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];

foreach ($Color as $key => $value){
    $Color[$key] = strtolower($value);
}
print_r($Color);

echo "<br>";

foreach ($Color as $key => $value){
    $Color[$key] = strtoupper($value);
}
print_r($Color);
*/

//13
/*
function up($str)
{
    $res = strtoupper($str);
    return $res;
}

function low($str)
{
    $res = strtolower($str);
    return $res;
}

function firstUp($str)
{
    $res = ucfirst($str);
    return $res;
}

function firstUpAllWords($str)
{
    $res = ucwords($str);
    return $res;
}*/

//14
/*
function stringContain($str, $con)
{
    if (strpos($str, $con) !== false)
    {
        return true;
    }
    else
    {
        return false;
    }
}

$str1 = 'The quick brown fox jumps over the lazy dog.';

echo stringContain($str1, 'fox');
*/

//15
/*
$path1 = 'www.example.com/public_html/index.php';

function ext($path)
{
    //$file_name = substr(strrchr($path, "/"), 1);
    $file_name = explode( '/', $path );
    return $file_name[count($file_name) - 1];
}

echo ext($path1);*/

//16
/*
$mailid1  = 'rayy@example.com';

function extMail($mailid)
{
    $user = strstr($mailid, '@', true);
    return $user;
}

extMail($mailid1);*/

//17
/*
function lastThreeChar($str)
{
    $str = substr($str, - 3);
    return $str;
}

echo lastThreeChar('rayy@example.com');*/

//18
/*
function replace($str)
{
    $i = 1;
    $str = str_replace('the', 'That', $str, $i);
    return $str;
}

$str = 'the quick brown fox jumps over the lazy dog.';

echo replace($str);*/

//19
/*
function copmare($str1, $str2)
{
    $len = strlen($str1) < strlen($str2) ? strlen($str1) : strlen($str2);
    //echo $len;

    for($i = 0;$i < $len;$i ++)
    {
        if($str1[$i] != $str2[$i]) {
            echo "{$str1[$i]} vs {$str2[$i]}";
            return $i;
        }
    }
}

echo copmare('football','footboll');*/

//20
/*
function remCom($str)
{
    $str = str_replace( ',', '', $str);
    return $str;
}

$a = "2,543.12";

echo remCom($a);*/

//////////////////////////////////////////////////
/// ////////////////////////////////////////////////
/// ///////////////////////////////////////////////
//1
/*
$arr = array();
for($i = 0;$i < 25;$i ++)
{
    array_push($arr, rand(1, 100));
}

//print_r($arr);
echo "<br>";

$arr = array_unique($arr);
rsort($arr);

//print_r($arr);

echo "<table border = '2' width='200px' style = 'border-collapse: collapse; text-align: center' >";

for($i = 0;$i < count($arr);$i ++)
{
    $num = $i + 1;
    echo "<tr><td>{$num}</td><td>{$arr[$i]}</td></tr>";
}

echo "</table>";
*/
//3
/*
abstract class Car
{
    public $model;
    public $color;
    public $year;
    public $box;
    public $engine;
    public $maxSpeed;

    public function __construct($model, $color, $year, $box, $engine, $maxSpeed)
    {
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
        $this->box = $box;
        $this->engine = $engine;
        $this->maxSpeed = $maxSpeed;
    }

    public function Info()
    {
        echo "Model: {$this->model} <br> Color: {$this->color} <br> Year: {$this->year} <br> Box: {$this->box} <br> Engine: {$this->engine} <br> Max Speed: {$this->maxspeed} <br>";
    }

    abstract public function Start();
    abstract public function BreakCar();
}

class BMW extends Car
{
    public function Start()
    {
        echo "Please unlock the key <br>";
    }

    public function BreakCar()
    {
        echo "Press breaks clamp <br>";
    }
}

class Tesla extends Car
{
    public function Start()
    {
        echo "Please press the key <br>";
    }

    public function BreakCar()
    {
        echo "Press break key <br>";
    }
}

$bmw = new BMW("E50", "Black", "2021", "Automat", "5.7L", 240);

$bmw->Info();
$bmw->Start();
$bmw->BreakCar();

$tesla = new Tesla("Tesla20", "Blue", "2020", "Automat", "1.2L", 220);

$tesla->Info();
$tesla->Start();
$tesla->BreakCar();
*/

//2

//save select after submit not working

$alphabets = array(array(), array());
$numbers = array();

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

if(isset($submit))
{
    if($type == 'letters')
        echo "<p>".generateLet($alphabets)."</p>";
    elseif ($type == 'letAndNum')
        echo "<p>".generate($numbers, $alphabets)."</p>";
    elseif ($type == 'numbers')
        echo "<p>".generateNums($numbers)."</p>";
}

echo "<form action = 'index.php' method = 'post' style='background-color: #f2f2f2; border-radius: 5px; width: 200px'>";
    echo "<input type = 'text' name = 'data' style = 'margin: 8px 0' placeholder = 'տողի երկարությունը'><br>";
    echo "Տողի մեջ ներառել";
    echo "<select name = 'type'>";
        echo "<option value = 'numbers'>Թվեր</option>";
        echo "<option value = 'letters'>Տառեր</option>";
        echo "<option value = 'letAndNum'>Թվեր և Տառեր</option>";
    echo "</select>";
    echo "<input type = 'submit' value = 'Գեներացնել' name = 'submit'>";
echo "</form>";
























