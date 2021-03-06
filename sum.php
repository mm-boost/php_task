<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
 
 
// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
 $result = $a + $b;
 echo $result;
 }
 echo f(5,6);
 echo "\n";

 
 // 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
 
/* function sum($array){
     $array = [1,3,5,7,9];
     for()
 }*/
 
 //strip_tags html タグや php タグを削除する
 $test = '<p>Test php.practice.</p>';
echo strip_tags($text);
echo "\n";

//array_push — 一つ以上の要素を配列の最後に追加する
$flower = array("iris", "daisy");
array_push($flower, "lily", "cherry blossom");
print_r($flower);
echo "\n";

//array_merge — ひとつまたは複数の配列をマージ(統合)する
$flower1 = array("iris", "daisy");
$flower2 = array("lily", "cherry blossom");
$result = array_merge($flower1, $flower2);
print_r($result);
echo "\n";

/*time, mktime - 現在時刻や指定した日時のUNIXタイムスタンプ
(コンピューターのシステム時刻の一種で、協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの経過時間)を取得*/
/*time関数→現在時刻のUNIXタイムスタンプを取得する
　mktime関数→指定した日時のUNIXタイムスタンプを取得する*/
 echo "現在のUnixタイムスタンプ：" . time();
 echo "\n";
 
 $timestamp = mktime(18, 30, 0, 8, 20, 2020);  //時 , 分 , 秒 , 月 , 日 , 年度
 echo "2020/8/20/18:30:00のUnixタイムスタンプ：" . $timestamp;
 echo "\n";
 
 //date — ローカルの日付/時刻を書式化する
 // 使用するデフォルトのタイムゾーンを指定
 date_default_timezone_set('Asia/Tokyo');
 echo date("Y/m/d H:i:s l") . "\n";  //Y=年度、m=月（2行表記）、d=日（2桁表記）、H=時間（24時間）、i=分、s=秒、l-曜日
 //時間を世界基準に設定する
 date_default_timezone_set('UTC');
 echo date("Y/m/d h:i:s l") . "\n";