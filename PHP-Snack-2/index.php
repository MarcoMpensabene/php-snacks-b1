

<?php 
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if (strlen($name) <= 3 ){
    echo "accesso negato";
} elseif ( !str_contains($mail , "@")) {
    echo "accesso negato";
}   elseif (!is_numeric($age)){
    echo "accesso negato";
} else {
    echo "accesso riuscito";
};




?>

<form action="" method="GET">
    <label for="name">First name :</label>
    <input type="text" id="name" name="name">
    <label for="mail">Email :</label>
    <input type="text" id="mail" name="mail"> 
    <label for="age">Age :</label>
    <input type="text" id="age" name="age">
    <button type=submit>press</button>
 
</form>
