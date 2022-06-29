<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <style type="text/css">
 

  </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/template/css/css_login_admin/style.css">
  </head>
  <body>
    <div class="center">
      <h1 style="font-size: 40px;font-family: Lucida Bright;">Login</h1>
      <form autocomplete="off" action="<?php echo BASE_URL ?>/login/authentication_login" method="POST">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" name="login" value="Login">
        <p style="margin-top:10px; text-align: center;font-size: 20px;color: #9C9C9C;">or</p>
          <div  style="  width: 100%;text-align: center;" class="social-media">
        <ul>
          <li style="display: inline-block;cursor: pointer;  margin: 5px 15px 25px;"><img style="width: 40px;height: 40px;" src="<?php echo BASE_URL?>/public/login/images/facebook.png"></li>
          <li  style="display: inline-block;cursor: pointer;  margin: 5px 15px;"><img style="width: 40px;height: 40px;"src="<?php echo BASE_URL?>/public/login/images/twitter.png"></li>
          <li  style="display: inline-block;cursor: pointer;  margin: 5px 15px;"><img style="width: 40px;height: 40px;"src="<?php echo BASE_URL?>/public/login/images/linkedin.png"></li>
          <li  style="display: inline-block;cursor: pointer;  margin: 5px 15px;"><img style="width: 40px;height: 40px;"src="<?php echo BASE_URL?>/public/login/images/instagram.png"></li>
        </ul>
      </div>
      </form>
    </div>

  </body>
</html>