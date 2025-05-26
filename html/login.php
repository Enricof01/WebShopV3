<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/header.css">
  <link href="../extern/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <!-- Nav Bar + Searching -->
  <?php include 'navbar.php'?>
  <!-- AnnmeldeFormular -->
  <div class="containerLogin">
    <div class="row">
      <div class="warpper">
        <form action="../PHP/checklogin.php" method = "post">
          <h1>Login</h1>
          <div class="input-box">
            <input type="text" name = "username" placeholder="Anmeldename" required>
            <i class='bx bxs-user'></i>
          </div>
          <div class="input-box">
            <input type="password" name = "password" placeholder="Passwort" required>
            <i class='bx bxs-lock-alt'></i>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#"><b>Passwort vergessen?</b></a>
          </div>
          <button type="submit" class="login-btn">Login</button>
          <div class="register-link">
            <p>Sie haben noch keinen Account?<a href="registrierung.html"> Registrierung</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="../extern/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Fotter + Impressum -->
  <footer>
    <hr style="border: 5px solid black; margin: 0;">
    <div class="bottom-bar" style="text-align: center;">
      <p>&copy; 1899 Custom Chocolate by ENKOMA</p>
    </div>
  </footer>
</body>

</html>