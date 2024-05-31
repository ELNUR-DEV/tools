<?php

const NAME123 = 'sdfgsdfg';



$read = readline("Введите текст\n");

//var_dump($read);

//exit();


$read = preg_replace('/ +/', ' ', $read);
$words = explode(' ', $read);

//print_r($words);
//exit();

///echo __FILE__ . "\n". "\n";


///Users/elnur/Desktop/four.php

file_put_contents('my_file1', $read);

// foreach ($words as $word) {
//     file_put_contents('')
//     //echo "\n" . $word . "\n";
// }

// $arr [] = $read;
// foreach($arr as $item){
//     echo $item."\n";
// }
// $one = $read."\n";
// $two = "go";
// $three = "some";
// $four = "whire";
// echo $one."\n";
// echo $two."\n";
// echo $three."\n";
// echo $four."\n";
//
