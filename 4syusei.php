<?php
//課題1
//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function vx($answer) {
    $result = $answer*2;
    return $result;
}
    echo vx(24); 
    echo "\n";
    
//課題2
/* $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

　参考）引数は下記のように指定すると、複数の仮引数を使うことができます。
　
　 function f($a, $b){
 //処理したい内容
 } 
 */

function f($a, $b){
    $result = $a+$b;
    return $result;
}
echo f(4,5);
echo "\n";

//課題3
//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function ans($arr){
    $total=1;
    foreach($arr as $arr2){
    $total *= $arr2;
        
    }
    return $total;
}
echo ans(array(1, 3, 5 ,7, 9));
echo "\n";

//課題4
//【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
/*
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }*/
 
 
 
 
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 arsort($arr);
 $max_number = $arr[0];
 foreach($arr as $ar){
 if($max_number<$ar){
 $max_number = $ar;
 }
 }
 return $max_number;
 }
 echo max_array(array(1, 3, 5 ,7, 9));
 echo "\n";
 
 //　課題5
 //次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

/*
strip_tags
array_push
array_merge
time, mktime
date      

*/

//strip_tags

 $string ='<li><a href="#">Home</a></li>';
 $result =strip_tags($string);
 echo $result;
 echo "\n";
 
 //array_push
 
 $date =array(12,43,21);
 array_push($date,7,55);
 print_r($date);
 echo "\n";
 
 //array_merge
 
  $date2 = array("No1" => "B`z", "No2" => "Mr.Children", "No3" => "サザンオールスターズ");
 $Newdate2 = array("No2" => "AKB48", "No3" => "Mr.Children", "No4" => "サザンオールスターズ");
 $result = array_merge($date2,$Newdate2);
 print_r($result);
 echo "\n";
 
 //time
 
 $now = time();
 print $now;
 echo "\n";
 
 //mktime
 
  $timestamp = mktime(13,0,0,5,24,2020);
 print $timestamp;
 echo "\n";
 
 //date
 
  $timestamp = time() + (60*60*24)*7 ;
  date_default_timezone_set('Asia/Tokyo');
 $next_week = date('Y年m月d日H時i分s秒',$timestamp);
 print $next_week; 
 echo "\n";
 
 //特別課題
 //１～ｎまでの7倍数の中で3番目に大きい数字を返す関数をつくるfunction ($n){    //処理を書く}
 
 function bz($n){
     
     $start = 1;
     $end = $n;
     
     for($i = $start; $i <= $end; $i++){
         if($i%7==0){
             
             echo $i;
             echo "\n";
         }
     }
         return $n;
     
 }
 echo bz(100);