<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="registerstyle.css" />
    <title>DaharJogja</title>
  </head>
  <body>
  <div class="wrapper">
      <div class="form-box">
        <div class="register-container" id="register">
          <div class="top">
            <header>DaharJogja</header>
          </div>
          <form action="aksi_register.php" method="POST">
          <div class="input-box">
              <input type="text" class="input-field" id="username" name="username" placeholder="Username" />
              <i class="bx bx-user"></i>
              <?php if (isset($errors['username'])) echo $errors['username']; ?>
            </div>
          <div class="input-box">
            <input type="text" class="input-field" id="email" name="email" placeholder="Email" />
            <span class="error">

            <i class="bx bx-envelope"></i>
            <?php if (isset($errors['email'])) echo $errors['email']; ?>
          </div>
          <div class="input-box">
            <input type="password" class="input-field" id="password" name="password" placeholder="Password" />
            <span class="error">
           
            <i class="bx bx-lock-alt"></i>
            <?php if (isset($errors['password'])) echo $errors['password']; ?>
          </div>
          <div class="input-box">
            <input type="submit" class="submit" name="register" value="Register" />
          </div>
          <div class="two-col">
            <div class="one">
              <input type="checkbox" id="register-check" />
              <label for="register-check"> Remember Me</label>
            </div>
            <div class="two">
              <label><a href="#">Terms & conditions</a></label>
            </div>
          </div>
          <div class="bot">
            <span>Have an account? <a href="index.php">Login</a></span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>