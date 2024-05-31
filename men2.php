
<?php
fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
$c = $a;
if ($a > $b) {
    echo'Сумма не существует';
}for ($i = $a; $i < $b; $i++) {
    echo $c," ";
    $c = $a + 1;
    $a++;

}


?>