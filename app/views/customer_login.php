
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/public/login/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

<body style="margin-bottom">
  <?php
                  if(!empty($_GET['msg'])){
                     $msg = unserialize(urldecode($_GET['msg']));
                     foreach ($msg as $key => $value){
                        echo '<span style=";color:#fff ;font-weight:bold">'.$value.'</span>';
                     }
                  }
                  ?> 
  <div class="cont">
    <form autocomplete="off" action="<?php echo BASE_URL ?>/khachhang/login_customer" method="POST" class="sign-in-form">
     <div class="form sign-in">
      
        <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input  type="text" name="username"required  />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password"required/>
      </label>
      <input style="display: block;
              margin: 0 auto;
              width: 260px;
              height: 36px;
              border-radius: 30px;
              color: #fff;
              font-size: 15px;
              cursor: pointer;
              margin-top: 40px;
              margin-bottom: 30px;
              text-transform: uppercase;
              font-weight: 600;
              font-family: 'Nunito', sans-serif;
              background: -webkit-linear-gradient(left, #7579ff, #b224ef);
            " type="submit" name="dangnhap" value="Sign In" class="submit" />
      <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><img src="<?php echo BASE_URL?>/public/login/images/facebook.png"></li>
          <li><img src="<?php echo BASE_URL?>/public/login/images/twitter.png"></li>
          <li><img src="<?php echo BASE_URL?>/public/login/images/linkedin.png"></li>
          <li><img src="<?php echo BASE_URL?>/public/login/images/instagram.png"></li>
        </ul>
      </div>

      
      
      </div>
    </form>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form action="<?php echo BASE_URL ?>/khachhang/insert_dangky" method="POST" class="sign-up-form">
        <div class="form sign-up">
       

        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="txtHoTen" required>
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="txtEmail" required>
        </label>
        <label>
          <span>Password</span>
          <input type="password"  name="txtPassword"  required>
        </label>
       <!--  <label>
          <span>Confirm Password</span>
          <input type="password">
        </label> -->
        <input style="display: block;
              margin: 0 auto;
              width: 260px;
              height: 36px;
              border-radius: 30px;
              color: #fff;
              font-size: 15px;
              cursor: pointer;
              margin-top: 40px;
              margin-bottom: 30px;
              text-transform: uppercase;
              font-weight: 600;
              font-family: 'Nunito', sans-serif;
              background: -webkit-linear-gradient(left, #7579ff, #b224ef);
            " type="submit" name="submit" value="Sign Up" class="submit" />
        
       
        </div>
       </form>
    </div>
  </div>
<script type="text/javascript" src="<?php echo BASE_URL?>/public/login/script.js"></script>
</body>
