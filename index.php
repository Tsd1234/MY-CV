<?php 

include "conn.php";

if (isset($_POST['submit'])) {

  $user = $_POST['user'];
  $email= $_POST['email'];

  $subj = $_POST['subject'];
  $mess = $_POST['message'];

  $sql = "INSERT INTO `contact`(`user`, `email`, `subject`,  `message`) VALUES ('$user','$email','$subj','$mess')";


    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>tsi protofilo</title>

    <!-- Global stylesheets -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <div class="me">
          <img src="image/me.jpg" alt="">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
              
                
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

    <!--====================================================
                        ABOUT
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
          <div>
              
              <div class="about-section">
              <h2 class="title"> Hi, I am tsion
                <span class="text-primary">dawit</span>
              </h2>
              <div class="auto" >
              <p  id="style1" style="max-width: 500px;" > I am willing to work passionately my work as well as with my team and I am ready to learn new things that are important to increase my level of skills  If u hire me I will do very good .</p>
              </div><div class="social-style">
              <ul class="list-inline list-social-icons mb-0">
                <a href="https://t.me/Dayetsle1234">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-telegram fa-stack-1x" style="color:white"></i>
                  </span>
                </a>
                <a href="https://www.linkedin.com/in/tsion-dawit-954bb252">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x" style="color:white"></i>
                  </span>
                </a>
                <a href="https://github.com/tsd1234">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse" style="color:white"></i>
                  </span>
                </a>
                </ul>
            </div>
          </div>
        </div>
      </section>


   
    <!--====================================================
                        SKILLS
    ======================================================-->       
      <section class=" d-flex flex-column" id="skills">
         <div class="p-lg-5 p-3 skill-cover">
          <h3 class="text-center ">Coding Skills</h3>
          <div class="row text-center my-auto "> 
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-html5 fa-5x"></i>
                      <h2><span class="counter"> 84 </span><span>%</span></h2>
                      <p>HTML5</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-css3 fa-5x"></i>
                      <h2><span class="counter"> 95 </span><span>%</span></h2>
                      <p>CSS3</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-code fa-5x"></i>
                      <h2><span class="counter"> 65 </span><span>%</span></h2>
                      <p>javascript</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-globe fa-5x"></i>
                      <h2><span class="counter"> 89 </span><span>%</span></h2>
                      <p>PHP</p>
                  </div>
              </div>
          </div>
          <h3 class="text-center ">other Skills</h3>
         </div> 
      </section>

    <!--====================================================
                           education
    ======================================================-->       
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
          <div class="row my-auto">
              <div class="col-12">
                <h3 class="text-center">Education </h3>
                <div class="mb-5 heading-border"></div>
              </div> 
              <div class="main-education" id="education-box">
                  <div class="education">
                      <div class="education-icon"></div>
                      <div class="education-content">
                        <p>schools I used to learn</p>
                        <h5 class="discription">promise keepers primary school</h5>
                        <h5 class="discription">Falcon academy scondary school</h6>
                        
                      </div>
                  </div>
                  <div class="education">
                      <div class="education-icon"></div>
                      <div class="education-content">
                    
                          <p>sep 2019- July 2023</p>
                          <h5 class="discription"> Bachiler of information science at addis ababa university</h5>
                          
                      </div>
                  </div>
              </div>
          </div>
      </section> 

    <!--====================================================
                          CONTACT
    ======================================================-->       
      <section class="resume-section p-3 p-lg-5 d-flex flex-column">
          <div class="row my-auto" id="contact"> 
            <div class="col-md-8">
              <div class="contact-cont">
                <h3>CONTACT ME</h3>
                <div class="heading-border-light"></div>
                <h5 id="style1">Get in touch</h5> 
                <p> I am happy to answer any of your questions please feel free to ask your questions!</p>
              </div> 
              <form action="" method="POST">
              <div class="row con-form">
                <div class="col-md-12">
                  <input type="text" name="user" placeholder="Full Name" class="form-control">
                </div>
                <div class="col-md-12">
                  <input type="text" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="col-md-12">
                  <input type="text" name="subject" placeholder="Subject" class="form-control">
                </div>
                <div class="col-md-12"><textarea name="message" id=""></textarea></div>
                <input type="submit" name="submit" value="submit">
                <!-- <div class="col-md-12 sub-but"><button class="btn btn-general btn-white" value='submit' name="submit" role="button">Send</button></div> -->
              </div>
            </form> 
            </div>
            <div class="col-md-4 col-sm-12 mt-5"> 
              <div class="contact-cont2"> 
                <div class="contact-add contact-box-desc">
                  <h3><i class="fa fa-map-marker cl-atlantis fa-2x"></i> Address</h3>
                  <p>ADDIS ABABA,ETHIOPIA
                  </p>
                </div>
                <div class="contact-phone contact-side-desc contact-box-desc">
                  <h3><i class="fa fa-phone cl-atlantis fa-2x"></i> Phone</h3>
                  <p>+251987070964</p>
                </div>
                <div class="contact-mail contact-side-desc contact-box-desc">
                  <h3><i class="fa fa-envelope-o cl-atlantis fa-2x"></i> Email</h3>
                    <p>dawittsion45@gmail.com</p>
               
                <ul class="list-inline social-icon-f top-data">
                  <a href="https://t.me/Dayetsle1234">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-telegram fa-stack-1x" style="color:white"></i>
                    </span>
                  </a>
                  <a href="https://www.linkedin.com/in/tsion-dawit-954bb252">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-linkedin fa-stack-1x" style="color:white"></i>
                    </span>
                  </a>
                  <a href="https://https://github.com/tsd1234">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-github fa-stack-1x fa-inverse" style="color:white"></i>
                    </span>
                  </a>
                </ul>
                </div>
              </div>
            </div> 
          </div>
      </section>

     
</body>

</html>