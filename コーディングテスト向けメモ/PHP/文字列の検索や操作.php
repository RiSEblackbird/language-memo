<?php////////////////////////////////////////////////////////////////?>
<?php
?>
<?php////////////////////////////////////////////////////////////////?>
<?php
// 文字列を分解して配列に格納する
$input_0 = rtrim(fgets(STDIN));
$split_0 = str_split($input_0);
// $split_0 = str_split($input_0, 3); // 分割単位の文字数を指定する場合
var_dump($split_0);
?>
<?php////////////////////////////////////////////////////////////////?>
<?php
// 変数内の文字列の検索と置換
// strtr() : 一致する文字は全て置換
$a = "hbtmpncuygnrgnbceryxmrcnhj";
$result = strtr($a, 'cuyghmnrgnbc', '000000');
echo $result . PHP_EOL;
// ====> 0bt0pn0000nr0nb0er0x0r0n0j
//
//
//// str_replace() : 完全に一致する部分のみ置換する
$a = "hbtmpncuygnrgnbceryxmrcnhj";
$result = str_replace('cuygnrgnbce', 'IIIIIII', $a);
echo $result . PHP_EOL;
// ====> hbtmpnIIIIIIIryxmrcnhj
//
// さらに、置換回数をカウントすることが出来る
$a = "hbtcuygmpnccuyguygcuygnrgcuygnbcercuygyxmrccuygnhj";
$result = str_replace('cuyg', '@', $a, $count);
echo $result . PHP_EOL;
echo '回数：',$count . PHP_EOL;
// ====> 回数：6
?>
<?php////////////////////////////////////////////////////////////////?>
<?php
// 対象の文字列が、検索文字列の何番目から現れるか
$a = 'I am strong.';
echo strpos($a, 'strong');
// ====> 5
?>
<?php////////////////////////////////////////////////////////////////?>
