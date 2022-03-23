
<?php include_once 'includes/functions.php';
require 'style/header.php'; ?>
<main class="login-main">   
  <div class="center">
    <h1>Login</h1>
    <form action="login-index.php" method="post">
       <div class="txt_field">
         <input type="text" required>
         <span></span>
         <label>Username</label>
       </div>
       <div class="txt_field">
         <input type="password" required>
         <span></span>
         <label>Password</label>
       </div>
       <div class="pass">Forgot Password?</div>
       <input type="submit" value = "Login" id="TT">
       <div class="signup_link">
         Not a member? <a href="signup.php">Signup</a>
       </div>
    </form>
  </div>    
</main> 
<?php require 'style/footer.php';?>