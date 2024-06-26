

<?php 
$name = $_GET["name"];


if (strlen($name) < 3 ){
    echo "accesso negato";
} else {
    echo "accesso riuscito";
}





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
