<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `contact` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: facth.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>