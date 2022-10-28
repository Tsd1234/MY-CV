<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $user = $_POST['user'];

        

        $email = $_POST['email'];

        $subject = $_POST['subject'];


        $mess= $_POST['message']; 

        $sql = "UPDATE `contact` SET `user`='$user',`email`='$email',`subject`='$subject',`message`='$message' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `contact` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $user = $row['user'];

            $email = $row['email'];

            $subject = $row['subject'];

            $mess= $row['message'];

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="user" value="<?php echo $user; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            Last name:<br>

            <input type="text" name="email" value="<?php echo $email; ?>">

            <br>

            subject:<br>

            <input type="subject" name="subject" value="<?php echo $subject; ?>">


            message:<br>

            <input type="radio" name="message" value="Male" <?php if($mess== 'Male'){ echo "checked";} ?> >Male

            <input type="radio" name="message" value="Female" <?php if($mess== 'Female'){ echo "checked";} ?>>Female

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: facth.php');

    } 

}

?> 