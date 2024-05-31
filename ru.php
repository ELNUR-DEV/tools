
<?php

function primal($n)
{
    for($i = 1; $i <= $n; $i++) {
        $count = 0;

        for($j = 1;$j <= $i;$j++) {
            if($i % $j == 0) {
                $count++;
            }
        }
        if ($count == 2) {
            echo($i." "."это простое число;"."\n");
        }
    }
}
primal(20);
