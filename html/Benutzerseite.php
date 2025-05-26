<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ihr Benutzerprofil</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/benutzer.css">
    <link href="../extern/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Nav Bar + Searching -->

    <?php include 'navbar.php'; ?>
    
    <!-- Company Banner -->
    <div class="container2">
        <div class="row">
            <img src="../images/banner.png" alt="">
            <hr style="border: 5px solid black; margin: 0; margin-bottom: 5vh;">
        </div>
    </div>
    <!-- Benutzerprofil -->
    <div class="row">
        <div class="container_Benutzer">
            <h1>Ihr Benutzerprofil</h1>
            <div class="profile-content">
                <div id="profilePicPreview"></div>
                <form id="profileForm">
                    <div class="form-group">
                        <label for="name" style="font-weight: bold;">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" style="font-weight: bold;">E-Mail:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="profilePic" style="font-weight: bold;">Profilbild:</label>
                        <input type="file" id="profilePic" name="profilePic" accept="image/*">
                    </div>
                    <button type="submit">Speichern</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/benutzer.js"></script>
    <script src="../extern/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Arrow for Up moving -->
    <a id="UpMove" href="#" class="btn btn-primary btn-lg">
        <i class='bx bxs-up-arrow-circle'></i>
    </a>
    <hr style="border: 5px solid black; margin: 0; margin-top: 5vh;">
    <div class="bottom-bar" style="text-align: center;">
        <p>&copy; 1899 Custom Chocolate by ENKOMA</p>
    </div>
</body>

</html>