<?php

function sum(){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり 10 より大きくなるまでループする
    for($i = 1; $i <= 10; $i++){

        // $result に　$i を順番に足していく
        $result += $i;
    }

               // $result を結果として返す
    return $result;
}
 echo sum();
 