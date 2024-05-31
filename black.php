<?php

//$words = [$str];


// $num = readline("write a number ");
// for($i=0; $i<=$num; $i++){
//     file_put_contents('my_file1',$num);
//}
$str = readline("Write a text");
$sir = preg_replace('/ +/', ' ', $str);
$words = explode("\n", $sir);
var_dump($words);

file_put_contents('my_file2', $str);
?>


    <ul>
        <?php foreach($words as $word): ?>
            <li>
                <?= $word; ?>
            </li>
        <?php endforeach; ?>
    </ul>    

    