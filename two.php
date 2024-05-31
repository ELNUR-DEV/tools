<?php

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $K);
$absdiff = abs($N - $K);
if ($absdiff <= 20) {
    echo "да";
} else {
    echo "нет";
}
