<?php
echo 'hello php!' . "\n"; 

//$nameに自分の名前（Muto＿Manami）を代入する
$name = "Muto_Manami";   //if文で $name が自分の名前だったら 「私は Muto＿Manami です」、もし違ったら「Muto＿Manamiではありません」と表示する
if ($name == "Muto_Manami" ) {
  echo "私は Muto＿Manami です" . "\n";
} else {
  echo "Muto＿Manamiではありません" . "\n"; 
}

//for文を使って、1から10000までの合計の値を表示
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i; }
    echo $total . "\n";
    

//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力
$fruits = array("orange","strawberry","blueberry","yuzu","lime");
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

//1から100までの間で5の倍数のみ表示する
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i < $end; $i++) {  //１から始まり、１００より小さい数まで１を足し続ける
// 5で割り切れたら{}内を実行する
if ($i % 5 == 0) {
echo $i . "\n";
  }
}