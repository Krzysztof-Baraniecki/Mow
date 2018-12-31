<?php
session_start();

if (isset($_SESSION['online']) && isset($_POST['name'])){

    
    $name = $_POST['name'];
    $max = $_POST['max'];

    
    // dodać walidacje walidacje
    
    //dodawanie do bazy danych
    require_once '../connection/database.php';

    echo "wprowadzono:> " . $name . " " . $max;
    // `groups`(`id_group`, `center`, `name`, `max`, `who_add`, `when`
    $insert = $db->prepare('INSERT INTO groups VALUES (NULL, :center, :nameg, :maxg, "0", "2018-01-01")');
    $insert->bindValue(':center', "test", PDO::PARAM_STR);
    $insert->bindValue(':nameg', $name, PDO::PARAM_STR);
    $insert->bindValue(':maxg',  $max, PDO::PARAM_STR);
    $insert->execute();

    if($insert) {
        echo "udało się";
    }else{
        echo "Błąd";
    }

}
else{
    header('Location: index.php');
	exit();
}


?>