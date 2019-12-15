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
    echo $fruits;
}
