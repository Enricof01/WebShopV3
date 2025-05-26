<?php
    session_start();
    if($_SESSION['login'] != 111)
    {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Chocolate Company</title>
    <link rel="stylesheet" href="../css/header.css">
    <link href="../extern/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Nav Bar + Searching -->
    <?php include 'navbar.php'; ?>
    <!-- Company Banner -->

    <?php include 'popup.php'; ?>
<div class="container2">
        <div class="row">
            <img src="../images/banner.png" alt="">
            <hr style="border: 5px solid black; margin: 0; margin-bottom: 3vh;">

        </div>
    </div>
<div class="container">
    <!-- Content here -->
    <!-- First Row -->
    <div class="row">
        <div class="col-12 col-md-6 p-4">
            <div
                style="font-family: 'Segoe UI', sans-serif; color: #2e2e2e; background-color: white; padding: 1.5rem; border-radius: 8px; width: 100%; max-width: 700px;">
                <h2 style="font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1rem;">
                    Dunkle Schokolade
                </h2>
                <p style="font-size: clamp(0.9rem, 2.5vw, 1.2rem); line-height: 1.6; margin: 0;">
                    Unsere dunkle Schokolade wird mit Liebe handgefertigt und besteht aus den besten Zutaten.
                    Jede Tafel ist ein kleines Kunstwerk mit intensivem Geschmack.
                    Erleben Sie echten Genuss – pur, edel und unverfälscht.
                    Qualität, die man schmeckt – mit Leidenschaft gemacht.
                </p>
                <br>
                <button class="btn btn-search"><a href="products.html"> <strong>Jetzt
                            bestellen!</strong></a></button>
            </div>
        </div>
        <div class="col-12 col-md-6 p-4">
            <div id="carouselExampleCaptions1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/slider1.1.png" class="d-block w-100" alt="..." width="60%" height="80%"
                            class="img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                            <strong>Edelbitter</strong></h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slider1.2.png" class="d-block w-100" alt="..." width="60%" height="80%"
                            class="img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                            <strong>Nachtzauber</strong></h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/silder1.3.png" class="d-block w-100" alt="..." width="60%" height="80%"
                            class="img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                            <strong>Mystic Cacao</strong></h3>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <!-- Second Row -->
    <div class="row">
            <div class="col-12 col-md-6 p-4">
                <div id="carouselExampleCaptions2" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/silder2.1.png" class="d-block w-100" alt="..." width="60%" height="80%"
                                class="img-fluid">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                            <strong>Vanilletraum</strong></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../images/silder2.2.png" class="d-block w-100" alt="..." width="60%" height="80%"
                                class="img-fluid">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                            <strong>Weiße Versuchung</strong></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../images/silder2.3.png" class="d-block w-100" alt="..." width="60%" height="80%"
                                class="img-fluid">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                                    <strong>Schneezauber</strong></h3>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6 p-4">
                <div
                    style="font-family: 'Segoe UI', sans-serif; color: #2e2e2e; background-color: white; padding: 1.5rem; border-radius: 8px; width: 100%; max-width: 700px;">
                    <h2 style="font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1rem;">
                        Weiße Schokolade
                    </h2>
                    <p style="font-size: clamp(0.9rem, 2.5vw, 1.2rem); line-height: 1.6; margin: 0;">
                        Unsere weiße Schokolade wird mit viel Liebe und Handarbeit gefertigt. 
                        Nur feinste Zutaten sorgen für ein cremig-sanftes Geschmackserlebnis. 
                        Jede Tafel ist ein Ausdruck echter Handwerkskunst. 
                        Erleben Sie Qualität, die man schmeckt – zart, edel und unverwechselbar.
                    </p>
                    <br>
                    <button class="btn btn-search"><a href="products.html"> <strong>Jetzt
                                bestellen!</strong></a></button>
                </div>
            </div>
    </div>
    <br>
    <!-- Third Row -->
    <div class="row">
        <div class="col-12 col-md-6 p-4">
            <div
                style="font-family: 'Segoe UI', sans-serif; color: #2e2e2e; background-color: white; padding: 1.5rem; border-radius: 8px; width: 100%; max-width: 700px;">
                <h2 style="font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1rem;">
                    Spezialitäten-Schokolade
                </h2>
                <p style="font-size: clamp(0.9rem, 2.5vw, 1.2rem); line-height: 1.6; margin: 0;">
                    Unsere Sorten wie Dubai, Mango, Erdbeer und Kirsch werden mit viel Liebe und Handarbeit gefertigt.
                    Nur die hochwertigsten Zutaten sorgen für ein außergewöhnliches Geschmackserlebnis.
                    Jede Tafel ist ein kleines Meisterwerk der Schokoladenkunst.
                    Entdecken Sie Vielfalt, Qualität und Leidenschaft in jeder Sorte.
                </p>
                <br>
                <button class="btn btn-search"><a href="products.html"> <strong>Jetzt
                            bestellen!</strong></a></button>
            </div>
        </div>
        <div class="col-12 col-md-6 p-4">
            <div id="carouselExampleCaptions3" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/silder3.1.png" class="d-block w-100" alt="..." width="60%" height="80%"
                            class="img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                                <strong>Dubai Schokolade</strong></h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/silder3.2.png" class="d-block w-100" alt="..." width="60%" height="80%"
                            class="img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                                <strong>Himbeertraum</strong></h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/silder3.3.png" class="d-block w-100" alt="..." width="60%" height="80%"
                            class="img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                                <strong>Strawberry Lemon</strong></h3>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <!-- Fourth Row -->
    <div class="row">
        <div class="col-12 col-md-6 p-4">
            <div id="carouselExampleCaptions4" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/silder4.2.png" class="d-block w-100" alt="..." width="605" height="80%"
                            class="img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                                <strong>Fairtrade</strong></h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/silder4.1.png" class="d-block w-100" alt="..." width="60%" height="80%"
                            class="img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                                <strong>Kakaobohnen aus Fairtrade Handel</strong></h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/silder4.3.png" class="d-block w-100" alt="..." width="60%" height="80%"
                            class="img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-weight: 700; color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); display: inline-block; padding: 0.5rem 1rem;">
                                <strong>Kakaobauer Westafrika</strong></h3>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions4"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions4"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-12 col-md-6 p-4">
            <div
                style="font-family: 'Segoe UI', sans-serif; color: #2e2e2e; background-color: white; padding: 1.5rem; border-radius: 8px; width: 100%; max-width: 700px;">
                <h2 style="font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1rem;">
                    Fairtrade
                </h2>
                <p style="font-size: clamp(0.9rem, 2.5vw, 1.2rem); line-height: 1.6; margin: 0;">
                    Willkommen bei unserem Unternehmen, wo Qualität und Nachhaltigkeit im Mittelpunkt stehen. 
                    Wir produzieren Schokolade mit Fairtrade-Zutaten und umweltfreundlichen Methoden. 
                    Unsere Mission: Genuss mit Verantwortung – für Mensch und Umwelt. 
                    Entdecken Sie, wie wir mit Leidenschaft und nachhaltigen Werten die Welt ein Stück besser machen.
                </p>
                <br>
                <button class="btn btn-search"><a href="überUns.html"> <strong>Über Uns!</strong></a></button>
            </div>
        </div>
    </div>
</div>
    <div id="soundfiles"></div>
    <script src="../extern/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/carousel-auto.js"></script>
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
                            <a class="icon"><i class="bx bxl-facebook-circle"></i></a>
                            <audio id="sound" src="../sounds/hub.mp3"></audio>
                            <a class="icon1"><i class="bx bxl-instagram"></i></a>
                            <audio id="sound1" src="../sounds/rick.mp3"></audio>
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
        <!-- FB/Insta/Hub -->
        <div>
            <script>
                document.querySelector('.icon').addEventListener('click', function () {
                    document.getElementById('sound').play();
                });
            </script>
            <script>
                document.querySelector('.icon1').addEventListener('click', function () {
                    document.getElementById('sound1').play();
                });
            </script>
        </div>
    </footer>
    <!-- Arrow for Up moving -->
    <a id="UpMove" href="#" class="btn btn-primary btn-lg">
        <i class='bx bxs-up-arrow-circle'></i>
    </a>
</body>

</html>