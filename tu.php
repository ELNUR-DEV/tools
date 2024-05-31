<?php

for($x = 1; $x <= 10; $x++) {
    for($y = 1; $y <= $x; $y++) {
        for($z = 1; $z <= $y; $z++) {
            for($r = 1; $r <= $z; $r++) {
                for($q = 1; $q <= $r; $q++) {

                    echo("x: $x y: $y z: $z r: $z q: $q\n");
                }
                echo("\n");
            }

        }

    }
}

?>
    
