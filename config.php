<?php 

include "conn.php";

  if (isset($_POST['submit'])) {

    $user = $_POST['user'];
     $email= $_POST['email'];

    $subj = $_POST['subj'];
    $mess = $_POST['mess'];

    $sql = "INSERT INTO 'contact'('user', 'email', 'subj', 'mess') VALUES ('$user','$email','$subj','$mess')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

