<?php 
  require 'style/header.php';
<<<<<<< HEAD
  include 'includes/Open-db.php';
=======
>>>>>>> d5ea87ad7fb4f57c0dc947b27cfb8a893a6844d0
  include 'includes/fetch.php';


?>


<main class="signup">
<div class="container">
  <div class="title">Registration</div>
  
  <form action="login.php" method="POST">
    <div class="user-details">
      <div class="input-box">
        <span class="details">Full name</span>
        <input type="text" placeholder="Enter your name">
      </div>
      <div class="input-box">
        <span class="details">First name</span>
        <!--first name--><input type="text" name="firstname" placeholder="Enter your first name" required>
      </div>      
      <div class="input-box">
        <span class="details">Last name</span>
       <!--last name--> <input type="text" name="lastname" placeholder="Enter your last name" required>
      </div>      
      <div class="input-box">
        <span class="details">Username</span>
        <!--username--><input type="text" name="username" placeholder="Enter your username" required>
      </div>      <div class="input-box">
        <span class="details">Phone Number</span>
        <!--phone number--><input type="number" name="phone" placeholder="Enter your number" required>
      </div>      <div class="input-box">
        <span class="details">Password</span>
        <!--password--><input type="password" name="pass" placeholder="Enter your password" required>
      </div>      
      
      <div class="input-box">
        <span class="details">Repeat Password</span>
        <!--re password--><input type="password" name="re-pass" placeholder="Repeat your password" required>
      </div>
    </div>
    
    <div class="gender-details">
      <input type="radio" name="gender" id="dot-1">
      <!--the gender--><input type="radio" name="gender" id="dot-2">
      <span class="gender-title">Gender</span>
      <div class="category">
        <label for="dot-1">
          <span class="dot one"></span>
          <span class="gender">Male</span>
        </label>
        <label for="dot-2">
          <span class="dot two"></span>
          <span class="gender">Female</span>
      </div>
    </div>
    <div id="btn">
      <!-- submit --><input type="submit" name="submit" value="Register">
    </div>
  </form>

</div>
</main>

  <?php 
  
    require 'style/footer.php';
  ?>