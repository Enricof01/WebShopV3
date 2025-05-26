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
    <?php include 'navbar.php'; ?>
  <!-- Formular für Registrierung -->
  <div class="containerLogin">
    <div class="row">
      <div class="warpper">
        <form action="../PHP/newUser.php" method = "post">
          <h1>Konto erstellen</h1>
          <div class="input-box">
            <input type="text" name = "firstname" placeholder="Vorname" required>
            <i class='bx bxs-user'></i>
          </div>
              <div class="input-box">
            <input type="text" name = "lastname" placeholder="Nachname" required>
            <i class='bx bxs-user'></i>
          </div>
          <div class="input-box">
            <input type="mail" name = "email" placeholder="E-Mail Adresse" required>
            <i class='bx bxl-gmail'></i>
          </div>
          <div class="input-box">
            <input type="text" name = "username" placeholder="Benutzername" required>
            <i class='bx bxs-lock-alt'></i>
          </div>
          <div class="input-box">
            <input type="password" name = "password" placeholder="Passwort" required>
            <i class='bx bxs-lock-alt'></i>
          </div>
          <!-- <div class="input-box">
            <input type="password" placeholder="Passwort wiederholen" required>
            <i class='bx bxs-lock-alt'></i>
          </div> -->
          <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#"><b>Passwort vergessen?</b></a>
          </div>
          <button type="submit" class="login-btn">Registrierung</button>
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