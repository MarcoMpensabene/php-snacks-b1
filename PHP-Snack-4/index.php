Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta <br>

<?php 

$randomArrayNum = [];

while (count($randomArrayNum) < 15){
    $randNum = random_int( 1 , 100);
    if (!in_array($randNum, $randomArrayNum)){
    $randomArrayNum[] = $randNum; 
    }
}

var_dump($randomArrayNum);



?>