<?php

$animals = [
    [
        'name' => 'Leo',
        'species' => 'Lion',
        'class' => 'Mammal'
    ],
    [
        'name' => 'Slither',
        'species' => 'Snake',
        'class' => 'Reptile'
    ],
    [
        'name' => 'Tweety',
        'species' => 'Canary',
        'class' => 'Bird'
    ],
    [
        'name' => 'Nemo',
        'species' => 'Clownfish',
        'class' => 'Fish'
    ],
    [
        'name' => 'Bugs',
        'species' => 'Rabbit',
        'class' => 'Mammal'
    ],
    [
        'name' => 'Simba',
        'species' => 'Lion',
        'class' => 'Mammal'
    ],
    [
        'name' => 'Dory',
        'species' => 'Blue Tang',
        'class' => 'Fish'
    ],
    [
        'name' => 'Donald',
        'species' => 'Duck',
        'class' => 'Bird'
    ],
    [
        'name' => 'Kaa',
        'species' => 'Python',
        'class' => 'Reptile'
    ],
    [
        'name' => 'Garfield',
        'species' => 'Cat',
        'class' => 'Mammal'
    ]
];

$mammals = array_filter($animals, function($animal){
    return $animal['class'] === 'Mammal';
});
$reptiles = array_filter($animals, function($animal) {
    return $animal['class'] === 'Reptile';
});
$birds = array_filter($animals, function($animal) {
    return $animal['class'] === 'Bird';
});
$fishs = array_filter($animals, function($animal) {
    return $animal['class'] === 'Fish';
});







?>