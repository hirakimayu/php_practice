<?php
$a=3;
$b=7;
echo $a+$b;
$arry_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $arry_month [7];
$arry_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $arry_month [7];
$hello = "Hello";
$name = "hiraki_mayu";
$world = "'sworld!";
echo $hello.$name.$world;
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;
$height = 160;
if ($height < 150) {
    echo"150㎝未満の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
$name = "hiraki_mayu";
if ($name == "hiraki_mayu") {
    echo "私は平木眞由です。";
} else if ($name != "hiraki_mayu") {
    echo "私は平木眞由ではありません。";
}
for ($a = 0; $a <= 1000; $a++){
    echo $a;
}
$fruits = array ("イチゴ","みかん","りんご","なし","ぶどう");
foreach ($fruits as $fruits) {
    echo $fruits;
}
$start = 1;
$end = 100;
for($i = $start; $i <= 100; $a++){
    if (($i %5 ) ==0 ){
        echo $i;
    }
}