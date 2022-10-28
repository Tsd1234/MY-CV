<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php 

include "config.php";



    if (isset($_POST['submit'])) {


        $id = $_POST['id'];
        $user= $_POST['user'];

        $email = $_POST['email'];

        $subject = $_POST['subject']; 
        $mess = $_POST['message']; 

        $sql = "UPDATE `contact` SET `user`='$user',`email`='$email',`subject`='$subject',`message`='$mess' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {
            header('Location: facth.php');

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

          $id = $_GET['id'];
          $user= $_GET['user'];
          $email = $_GET['email'];  
          $subject = $_GET['subject']; 
          $mess = $_GET['message']; 

        } 
        
    ?>



<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>">
                  <br>
                  <input type="text" name="user" placeholder="Full Name" class="form-control" value="<?php echo $user; ?>">
                  
               <br>
             
                  <input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo $email;?>">
                  <br>
       
                  <input type="text" name="subject" placeholder="Subject" class="form-control"value="<?php echo $subject; ?>">
                  <br>
                <textarea name="message"  value="<?php echo $mess; ?>"></textarea>
                <br>
                <input type="submit" name="submit" value="submit">
                <!-- <div class="col-md-12 sub-but"><button class="btn btn-general btn-white" value='submit' name="submit" role="button">Send</button></div> -->
              
            </form>  
            </body>

</html> 
    
<?php

} else{ 

    header('Location: facth.php');

} 

}

?> 

