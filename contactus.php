<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="css/contactus.css"/>
    <title>Sports Web</title>
</head>
<body>
    <div class="contain">

      <?php
        include "includes/header.php";
      ?>

        <!-- Body of the page -->
    
        <section>   
            <div class="section-header">
              <div class="sub-container">
                <h2>Contact Us</h2>
                <p>If any queries/problems related to the SportsWeb application you can reachout our support team. </p>
              </div>
            </div>
            
            <div class="sub-container">
              <div class="row">
                
                <div class="contact-info">
                  <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-house" style="color: #ffffff;"></i>
                    </div>
                    
                    <div class="contact-info-content">
                      <h4>Address</h4>
                      <p>Near Sai Baba Temple,<br/> Charaka Road, Ravulapalem, Andhra Pradesh <br/>533238</p>
                    </div>
                  </div>
                  
                  <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                    </div>
                    
                    <div class="contact-info-content">
                      <h4>Phone</h4>
                      <p>9347583391, 7995493488</p>
                    </div>
                  </div>
                  
                  <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                    </div>
                    
                    <div class="contact-info-content">
                      <h4>Email</h4>
                     <p>sportswebsupport@gmail.com</p>
                    </div>
                  </div>
                </div>
                
                <div class="contact-form">
                  <form action="" id="contact-form">
                    <h2>Send Message</h2>
                    <div class="input-box">
                      <input type="text" required="true" name="">
                      <span>Full Name</span>
                    </div>
                    
                    <div class="input-box">
                      <input type="email" required="true" name="">
                      <span>Email</span>
                    </div>
                    
                    <div class="input-box">
                      <textarea required="true" name=""></textarea>
                      <span>Type your Message...</span>
                    </div>
                    
                    <div class="input-box">
                      <input type="submit" value="Send" name="">
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </section>

          <?php
        include "includes/signup_modal.php";
        include "includes/login_modal.php";
        include "includes/footer.php";
        ?>

    </div>        
    
</body>
</html>
