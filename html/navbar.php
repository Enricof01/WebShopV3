<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="../html/index.php"><img src="../images/FirmenLogo.png" alt=""
                        style="width: 80px; height: 80px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="display: flex; justify-content: space-between;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"
                                style="font-size: 20px; font-weight: bold;"><i class='bx bx-home'></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php" style="font-size: 20px; font-weight: bold;"><i
                                    class='bx bxs-coffee-bean'></i> Produkte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shoppingCart.php" style="font-size: 20px; font-weight: bold;"><i
                                    class='bx bx-cart'></i>
                                Einkaufswagen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Benutzerseite.php" style="font-size: 20px; font-weight: bold;"><i
                                    class='bx bx-user'></i>
                                Benutzer</a>

                        <?php if (!isset($_SESSION['login']) || $_SESSION['login'] !== 111): ?>                    
                            <li class="nav-item" id="login">
                            <a class="nav-link" href="login.php" style="font-size: 20px;">Anmelden</a>
                            </li>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] === 111): ?>
                            <li class="nav-item" id="logout">
                            <a class="nav-link" href="logout.php" style="font-size: 20px;">Ausloggen</a>
                            </li>
                            <?php endif; ?>

                    </ul>
                </div>
            </div>
        </nav>
        <hr style="border: 5px solid black; margin: 0; margin-bottom: 0vh;">
    </header>
