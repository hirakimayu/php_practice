<?php
$a=3;
$b=7;
$arry_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $arry_month [7];
$hello = "Hello";
$name = "hiraki_mayu";
$world = "'sworld!";
echo $hello.$name.$world;
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

//【5.応用】
$calendar_2018 = [
 "january" => "1月",
 "February" => "2月",
 "March" => "3月",
 "April" => "4月",
 "May" => "5月",
 "June" => "6月",
 "July" => "7月",
 "August" => "8月",
 "September" => "9月",
 "October" => "10月",
 "November" => "11月",
 "December" => "12月",
];
    echo $calendar_2018["December"];
  
  
  
    
//PHP・Laravel03 課題
//課題１
$name = "hiraki_mayu";
if ($name == "hiraki_mayu") {
    echo "私は平木眞由です。";
} else if ($name != "hiraki_mayu") {
    echo "私は平木眞由ではありません。";
}

//課題２
for ($a = 0; $a <= 1000; $a++){
    echo $a;
}

//課題３
$fruits = array ("イチゴ","みかん","りんご","なし","ぶどう");
foreach ($fruits as $fruits) {
    echo $fruits."\n";
}

//課題４応用

//1〜100までの間
for ($i =1; $i <= 100; $i ++) {
    if ($i %5 === 0) {
        echo $i."\n";
    }
}

?>

<?php
//PHP・Laravel 04 課題１
function sum($max) {
    return $max *2;
}
 echo sum(100)."\n";

//課題２
function f($a, $b) {
    return $a + $b;
 }
 echo f(5,2)."\n";

//課題３ 
function g($arr) {
  $result =1;
  foreach ($arr as $value){
    $result *= $value;
  }
  return $result;
}
$arr =[1,3,5,7,9];
echo g($arr)."\n";

//課題４
function max_array($arr) {
  $max_number =$arr [0];
  foreach($arr as $a) {
if($max_number < $a) {
    $max_number = $a;
}
  }
  return $max_number;
}
$list =[2,8,1,7,5];
echo max_array  ($list);
