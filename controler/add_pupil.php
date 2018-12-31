<?php
session_start();

if (isset($_SESSION['online']) && isset($_POST['first_name']) && isset($_POST['last_name'])){
// dodaj pozostałe posty z obowiązkowych oraz walidacje 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $sex = $_POST['sex'];
    $group = $_POST['group'];
    $comment = $_POST['comment'];
    $status = $_POST['status'];
    $contact = $_POST['contact'];
    $patron = $_POST['patron'];
    $birth = $_POST['birth'];

    
    //dodawanie do bazy danych
    require_once '../connection/database.php';

    echo "wprowadzono:> " . $first_name . " " . $last_name . " " . $sex . " " . $group. " " .$comment. " " .$status. " " .$contact. " " .$patron. " " .$birth;

    $insert = $db->prepare('INSERT INTO pupils VALUES (NULL, :first_name, :last_name, "NULL", :sex, :group, :comment, :status, "NULL", :contact, :patron, :birth, "NULL", "Brak Oceny", "0000-00-00", "Brak Oceny", "0000-00-00")');
    $insert->bindValue(':first_name', $first_name, PDO::PARAM_STR);
    $insert->bindValue(':last_name', $last_name, PDO::PARAM_STR);
    $insert->bindValue(':sex',  $sex, PDO::PARAM_STR);
    $insert->bindValue(':comment',  $comment, PDO::PARAM_STR);
    $insert->bindValue(':status',  $status, PDO::PARAM_STR);
    $insert->bindValue(':contact',  $contact, PDO::PARAM_STR);
    $insert->bindValue(':patron',  $patron, PDO::PARAM_STR);
    $insert->bindValue(':birth',  $birth, PDO::PARAM_STR);
    $insert->bindValue(':group',  $group, PDO::PARAM_STR);
    $insert->execute();

    if($insert) {
        echo "udało się";
    }else{
        echo "Błąd";
    }

}
else{
    echo "else ;(";
    // header('Location: ../index.php');
	exit();
}


?>