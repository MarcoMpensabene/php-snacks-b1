Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato, da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno. <br>

<?php     

include __DIR__ . "/listStudents.php";


foreach ($classFaiga as  $info) {
        echo "<p>{$info['name']}</p>";
        echo "<p>{$info['lastname']}</p>";
        foreach ($info as $vote){
            echo "<p>{$vote['votes']}</p>";
        }
        }

?>