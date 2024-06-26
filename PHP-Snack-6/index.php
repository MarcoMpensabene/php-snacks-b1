Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. <br>

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    
    foreach ($db as $key => $info) {
        echo "<div class='$key'>";
        echo "<h2>$key</h2>";
        foreach ($info as $name) {
            echo "<h3>{$name['name']}</h3>";
            echo "<p>{$name['lastname']}</p>";
        }
        echo "</div>";
    }
    ?>

<style>
.teachers {
    background-color: gray;
    padding: 1rem;
    margin: 1rem;
}

.pm {
    background-color: green;
    padding: 1rem;
    margin: 1rem;
}
</style>

