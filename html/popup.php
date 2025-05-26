

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Willkommen</title>
    <style>
        #popup {
            display: none;
            position: fixed;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 2px solid #333;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            z-index: 1000;
        }
        #overlay {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 999;
        }
    </style>
</head>
<body>

<div id="overlay"></div>
<div id="popup">
    <p>Willkommen zurück <?php echo $_SESSION['email']?> <br>Sie waren zuletzt angemeldet am: </p>
    <button onclick="schließePopup()">Schließen</button>
</div>

<script>
    function schließePopup() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }

    <?php if ($_SESSION['showPopup']): ?>
        document.getElementById('popup').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
        <?php $_SESSION['showPopup'] = false;?>
    <?php endif; ?>
</script>

</body>
</html>
