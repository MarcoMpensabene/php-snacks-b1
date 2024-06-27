Snack 8
        Creare un array di animali, che abbiano nome, specie, classe in un file animals.php. Creo quattro array diversi in cui inserire soltanto mammiferi, pesci, rettili e tutti gli altri. Nel nostro index.php stampiamo in pagina ognuno di questi array. <br>


<?php  
   include __DIR__ . "/animals.php" ;
   
   
   echo "<h1>Mammiferi</h1>";
   foreach ($mammals as $mammal) {
       echo "<p>{$mammal['name']} ({$mammal['species']})</p>";
   }
   
   echo "<h1>Pesci</h1>";
   foreach ($fishs as $fish) {
       echo "<p>{$fish['name']} ({$fish['species']})</p>";
   }
   
   echo "<h1>Rettili</h1>";
   foreach ($reptiles as $reptile) {
       echo "<p>{$reptile['name']} ({$reptile['species']})</p>";
   }
   
   echo "<h1>Altri</h1>";
   foreach ($birds as $bird) {
       echo "<p>{$bird['name']} ({$bird['species']})</p>";
   }
   
   ?>







?>