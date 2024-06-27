Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato, da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno. <br>

<?php     

include __DIR__ . "/listStudents.php";


foreach ($classFaiga as $key => $info) {
        echo "<h1>$key</h1>";
        foreach ($info as $key => $name) {
            echo "<h3>{$name['name']}</h3>";
            echo "<p>{$name['lastname']}</p>";
            echo "<p>{$key}</p>";
        }
    }

?>