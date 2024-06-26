




<?php 

$basketPlay = [
    "squadra-1" =>[
        "casa" => "squadra verde",
        "punti casa" => "50",
        "ospite" => "squadra arancione",
        "punti ospite" => "23"
    ],
    "squadra-2" =>[
        "casa" => "squadra gialla",
        "punti casa" => "44",
        "ospite" => "squadra arancione",
        "punti ospite" => "11"
    ],
    "squadra-3" =>[
        "casa" => "squadra viola",
        "punti casa" => "88",
        "ospite" => "squadra magenta",
        "punti ospite" => "74"
    ],
    "squadra-4" =>[
        "casa" => "squadra viola",
        "punti casa" => "12",
        "ospite" => "squadra magenta",
        "punti ospite" => "66",
    ],
];

foreach ($basketPlay as $key => $element){
    echo($element["casa"] . "-" . $element["ospite"] . "|" . $element["punti casa"] . "-" . $element["punti ospite"]);
};


 ?>




