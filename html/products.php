<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../extern/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/products.css">
<link rel="stylesheet" href="../css/header.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<title>Products</title>
</head>

<body>
  <!-- Nav Bar + Searching -->
    <?php include 'navbar.php'; ?>
  <!-- Product overview -->
  <div class="container productArea" id = "productArea">
    <!-- Reihe Eins Produkte -->
    <div class="row">
      <h1 style="text-align: center; font-weight: bold; color: #b47d49; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Unsere Klassiker</h1>
      <br>
      <br>
      <br>
      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/vollmilch.png" alt="" class="img-fluid">
        </div>
        <div class="buyBar1">
            <button id="product0" onclick="add(event)" type="button" class="btn btn-dark">Kaufen</button>
          </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>VOLLMILCH<br>3,99 €</p></h3>
        </div>   
      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/dunkel.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product1" type="button" onclick="add(event)"  class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>EDELBITTER<br>4,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/Nuss.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product2" type="button" onclick="add(event)"  type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>NUSS GENUSS <br>5,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/weiße.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product3" type="button" onclick="add(event)" type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>VANILLETRAUM <br>3,99 €</p></h3>
        </div>

      </div>


    </div>
    <!-- Reihe Zwei Produkte -->
    <div class="row productRow2">
      <h1 style="text-align: center; font-weight: bold; color: #b47d49; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Unsere Sommer Hits</h1>
        <br>
        <br>
        <br>
      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/minze.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product4" type="button" onclick="add(event)" type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>MINZTRAUM <br>4,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/erdbeere.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product5" type="button" onclick="add(event)" type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>ERDBEERSCHOKOLADE <br>5,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/himbeer.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product6" type="button" onclick="add(event)" type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>HIMBEERSCHOKOLADE <br>5,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/mango.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product7" type="button" onclick="add(event)" type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>KARIBISCHE MANGO <br>5,99 €</p></h3>
        </div>

      </div>


    </div>
    <!-- Reihe Drei Produkte -->
    <div class="row productRow2">
      <h1 style="text-align: center; font-weight: bold; color: #b47d49; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Unsere Spezialsorten</h1>
        <br>
        <br>
        <br>
      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/dubai.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product8" type="button" onclick="add(event)" type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>DUBAI SCHOKOLADE <br>12,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/kaffee.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product9" type="button" onclick="add(event)"  type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>KAFFEEZAUBER <br>6,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/lemon.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product10" type="button" onclick="add(event)" type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>ERDBEERE ZITRONE <br>6,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/chilli.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product11" type="button" onclick="add(event)" type="button" class="btn btn-dark">Kaufen</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>CHILLILADE <br>6,99 €</p></h3>
        </div>

      </div>


    </div>
  </div>

  <script src="../extern/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/cart.js"></script>
  <script src = "../js/products.js"></script>
  <br>
  <br>
  <!-- Footer+Impressum -->
  <footer>
    <hr style="border: 5px solid black; margin: 0; margin-top: 5vh;">
    <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong>Custom Chocolate Company</strong></h5>
            <p class="card-text">Burgstraße 1. | 72764 Reutlingen</p>
            <p class="card-text">07121/67890 | info@schokolade.de</p>
            <hr style="border: 1px solid black; margin: 0; margin-top: 1vh; margin-bottom: 1vh;">
            <button class="btn btn-search"><a href="datenschutz.html">
                <strong>Datenschutz</strong></a></button>
            <hr style="border: 1px solid black; margin: 0; margin-top: 1vh; margin-bottom: 1vh;">
            <button class="btn btn-search"><a href="impressum.html"> <strong>Impressum</strong></a></button>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong>Folgen Sie uns auf Social Media</strong></h5>
            <ul class="social-icons">
              <a href=""><i class="bx bxl-facebook-circle"></i></a>
              <a href=""><i class="bx bxl-instagram"></i></a>
              <a href=""><i class='bx bxl-youtube'></i></a>
              <a href=""><i class="bx bxl-linkedin-square"></i></a>
            </ul>
            <hr style="border: 1px solid black; margin: 0; margin-top: 1vh; margin-bottom: 1vh;">
            <h5 class="card-title"><strong>Zahlungsarten</strong></h5>
            <img src="https://www.lindt.de/media/wysiwyg/zahlungsarten-logos-2025.png" alt="Zahlungsarten"
              class=" ls-is-cached lazyloaded" width="365" height="64">
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-bar" style="text-align: center;">
      <p>&copy; 1899 Custom Chocolate by ENKOMA</p>
    </div>
  </footer>
  <!-- Arrow for Up moving -->
  <a id="UpMove" href="#" class="btn btn-primary btn-lg">
    <i class='bx bxs-up-arrow-circle'></i>
  </a>
</body>

</html>