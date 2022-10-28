<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $id = $_POST['id'];

    $edu_title = $_POST['edu_title'];

    $edu_content = $_POST['edu_content'];



    $edu_date = $_POST['edu_date'];

    $sql = "INSERT INTO `education`(`id`, `edu_title`, `edu_content`,  `edu_date`) VALUES ('$id','$edu_title','$edu_content','$edu_date')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>">
                  <br>
                  <input type="text" name="edu_title" placeholder="education title" class="form-control" value="<?php echo $id; ?>">
                  
               <br>
             
                  <input type="text" name="edu_content" placeholder="edu_content" class="form-control" value="<?php echo $edu_title;?>">
                  <br>
       
                  <input type="text" name="edu_date" placeholder="edu_date" class="form-control"value="<?php echo $edu_date; ?>">
                  <br>
                
                <br>
                <input type="submit" name="submit" value="submit">
                <!-- <div class="col-md-12 sub-but"><button class="btn btn-general btn-white" value='submit' name="submit" role="button">Send</button></div> -->
              
            </form>  
            </body>

</html> 
    
<?php

 

    header('Location: facth.php');





?> 
