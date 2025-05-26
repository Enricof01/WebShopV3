<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/shoppingCart.css">
    <link rel="stylesheet" href="../css/header.css">

    <link href="../extern/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body onload="updateCart2();">
    <!-- Nav Bar + Searching -->
    <?php include 'navbar.php'; ?>

    <div class="container cartBody">
        <div class="row titleBox">
            <h2>Einkaufswagen</h2>
            <div class="rowPrice">
                <p style="color:gray; text-align:right;">Preis</p>
            </div>

        </div>

        <hr style="width: 100%;">

        <div class="cartArea">


            <div class="row product1">
                <div class="col-2">

                    <div class="productImage">
                        <img src="https://placehold.co/150x150" alt="" class="img-fluid">
                    </div>

                </div>

                <div class="col-5">
                    <p>Prodcut description and more details</p>
                    <select class="form-select" aria-label="Default select example" style="width: 20%;">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                    </select>
                    <div style="margin-top: 1%;">
                        <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>

                    </div>
                </div>

                <div class="col-5 price">
                    <div class="productPrice">
                        <p>29,99</p>
                    </div>

                </div>

            </div>
            <script src="../extern/bootstrap/js/bootstrap.bundle.min.js"></script>

            <hr style="width: 100%;">

            <div class="row product1">
                <div class="col-2">

                    <div class="productImage">
                        <img src="https://placehold.co/150x150" alt="" class="img-fluid">
                    </div>

                </div>

                <div class="col-5">
                    <p>Prodcut description and more details</p>
                    <select class="form-select" aria-label="Default select example" style="width: 20%;">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                    </select>

                    <div style="margin-top: 1%;">
                        <button onclick="updateCart2();" type="button" class="btn btn-danger"><i
                                class='bx bx-trash'></i></button>

                    </div>
                </div>

                <div class="col-5 price">
                    <div class="productPrice">
                        <p>29,99</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="cartFooter">
            <div class="row">

                <div class="col-2">

                </div>

                <div class="col-5">
                </div>

                <div id="cartSum" class="col-5">
                    <!-- <h2>Gesamtsumme: </h2> -->
                    <button class="btn-primary">Checkout</button>
                </div>
            </div>
        </div>

    </div>
    <script src="../extern/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/cart.js"></script>

    <!-- Fotter + Impressum -->
    <footer style="
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #f8f8f8;
    text-align: center;
    padding: 1rem 0;
    margin-top: 20px;
    border-top: 5px solid black;
    font-family: 'Segoe UI', sans-serif;
    font-size: 0.9rem;
    z-index: 1000;">
        <p style="margin: 0;">Gesamtsumme hier!!!!</p>
    </footer>
</body>

</html>