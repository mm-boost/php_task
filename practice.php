<?php
echo 'hello php!' . "\n"; 
//echo 'hello php!';

$a = 3;
$b = 7;
echo $a + $b . "\n";

$array_month = ["1月", "2月", "3月", "4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month [7] . "\n";

$hello = "Hello,";
$name = "Muto_Manami";
$world = "'s World!";
echo $hello.$name.$world . "\n";

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost . "\n";

$year2018_calendar = [
  "January" => "1月",
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
  "December" => "12月"
 ];

// 12月を表示する
$month = "December";
echo $year2018_calendar [$month] . "\n";


//$nameに自分の名前（Muto＿Manami）を代入する
$name = Muto_Manami;   //if文で $name が自分の名前だったら 「私は Muto＿Manami です」、もし違ったら「Muto＿Manamiではありません」と表示する
if ($name) {
  echo "私は Muto＿Manami です";
} else {
  echo "Muto＿Manamiではありません";
}