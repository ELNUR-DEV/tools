<?php
fscanf(STDIN,"%d", $N);



if ($N >10 && $N<30){
    echo "0";
}elseif($N < 50){
    echo $N*N;
}else {
    echo "Ошибка";

}
    ?>
