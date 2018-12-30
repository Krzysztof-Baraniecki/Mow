<?php
session_start();

if (isset($_SESSION['online']) && isset($_POST['email'])){

    
    $first_name = $_POST['name'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $group = $_POST['group'];
    $password_hesh = password_hash($first_name, PASSWORD_DEFAULT);
    
    // dodać walidacje walidacje
    
    //dodawanie do bazy danych
    require_once '../connection/database.php';

    echo "wprowadzono:> " . $first_name . " " . $last_name . " " . $email . " " . $group;

    $insert = $db->prepare('INSERT INTO user VALUES (NULL, :first_name, :last_name, "NULL", "NULL", :email, "NULL", :password1, "NULL", 2, "NULL", "NULL")');
    $insert->bindValue(':first_name', $first_name, PDO::PARAM_STR);
    $insert->bindValue(':last_name', $last_name, PDO::PARAM_STR);
    $insert->bindValue(':email',  $email, PDO::PARAM_STR);
    $insert->bindValue(':password1',  $password_hesh, PDO::PARAM_STR);
    // $insert->bindValue(':group',  $group, PDO::PARAM_STR);
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