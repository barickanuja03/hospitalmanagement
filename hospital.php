<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <?php
      include 'links.php';
    ?>
    <style>
        <?php include 'hospital.css'; ?>
    </style>
</head>
<body>
    <div class="navbar">
        <nav>
            <font face="franklin gothic">
                 HRM
            </font>
            <a href="hospital.php" id="home">HOME</a>
            <a href="" id="service">SERVICE</a>
            <a href="" id="aboutus">ABOUT US</a>
            <a href="" id="gallary">GALLARY</a>
            <a href="" id="contactus">CONTACT US</a>
            <a href="Login.php" id="login">lOGIN</a>
            <a href="booking.php" id="booking">Book An Appoitment</a>
        </nav>
        </div>
        <div>
            <img src="doctorbg.jpeg" id="img">
            <p id="hospital">hospital management system</p>
        </div>

        <div class="login">
          <Div>Login</Div>
        </div>
        <br><br>
        <div>
              <div class="logins">
                <img src="patient.jpeg" id="patientlogin">    
                <img src="doctor.jpeg" id="doctorlogin">
                <img src="admit.jpeg" id="admitlogin">
              </div>
              <div class="loginregister">
                 <div class="patient">
                     Patient login<br>
                     <a href="patientlogin.php" id="loginbutton1">Login</a>
                 </div>
                 <div class="doctor">
                     Doctor login<br>
                     <a href="doctorlogin.php" id="loginbutton2">Login</a>
                 </div>
                 <div class="admit">
                     Admit login<br>
                     <a href="admitlogin.php" id="loginbutton3">Login</a>
                 </div>
              </div>
         </div>

      <br><br>
      <!--<div class="feature">
          <div class="feature-heading">
            Our key Feature
          </div>
          <div class="featureparagraph">Take a look at some of our key feature</div>
      </div>-->
      <div class="flex-container">
        <div class="flex-child">
           <img src="aboutimg.jpeg" id="flex-img">
        </div>
        <div class="flex-child">
           <p class="aboutourhospital">
               About Our Hospital
           </p>
           <p class="about-our-hospital">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt natus dolor reprehenderit, 
               commodi aliquam sint dolore necessitatibus 
               officia blanditiis mollitia culpa vel placeat quasi. Reprehenderit qui dolorum beatae quod cupiditate!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quidem accusantium nihil earum, officiis est ea
             nam? Unde, voluptatem 
            laboriosam! Dolor, culpa nisi perferendis ducimus exercitationem eum expedita perspiciatis? Ad.
           </p>
        </div>
      </div>
      <br><br>
      <div class="gallary">
        <div>Our Gallary</div>
        <div>
        <a href="" id="gallary-button">Dental</a>
        <a href="" id="gallary-button">Cardiology</a>
        <a href="" id="gallary-button">Neurology</a>
        <a href="" id="gallary-button">Laboratory</a>
        </div>
        <br><br>
<img src="img1.jpeg" id="">
<img src="img2.jpeg" id="">
<img src="img3.jpeg" id=""><br><br>
<img src="img4.jpeg" id="">
<img src="th.jpeg" id="">
      </div>
      <br><br>
      <div>
        <div class="contact-form">Contact Form</div>
        <div class="user-input">
            <form method="post">
                <span class="user-input1">First name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input type="text" name="name" required id="input-user"><br>
                <span class="user-input1">Email Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                <input type="text" name="email" required id="input-user"><br>
                <span class="user-input1">Mobile No :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input type="text" name="phno" required id="input-user"><br>
                <span class="user-input1">Enter message :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <textarea col="3" name="message" id="input-user"></textarea><br>
                <input type="submit" value="Send Message" id="submit">
            </form>
        </div>
      </div>
      <div>
        <div>

        </div>
        <div>

        </div>
      </div>
</body>
</html>