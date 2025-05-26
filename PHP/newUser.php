<?php
session_start();

    //Variablen deklarieren

    $firstname="";
    $lastname="";
    $email="";
    $password="";
    $username = "";
    // $iSessionUserId = $_SESSION['id'];

    if(isset($_POST['firstname']))
    {
        $firstname = $_POST['firstname'];
    }

    if(isset($_POST['lastname']))
    {
        $lastname = $_POST['lastname'];
    }

    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
    }

    if(isset($_POST['password']))
    {
        $password = hash('sha512', $_POST['password']); // SHA512 Hash
    }

    if(isset($_POST['password']))
    {
        $username = $_POST['username'];
    }


try{
    include 'dbsettings.php';

    //Verbindung zur db
    $conn=new PDO("mysql:host=localhost;dbname=".$dbDatabasename,$dbLoginUsername,$dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $newUserId = $conn->lastInsertId();


    $sql = "INSERT INTO shopuser (id, firstname, lastname, email, username, password, 2facode) VALUES (?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$newUserId, $firstname, $lastname, $email, $username, $password, '1']);

    $sql2 = "SELECT * FROM shopuser WHERE username='".$username."' AND password='".$password."'";

        foreach ($conn->query($sql2) as $row) 
        {
             // PHP Session starten!

             $_SESSION['id']=$row['id'];
             $_SESSION['firstname'] = $row['firstname'];
             $_SESSION['lastname'] = $row['lastname'];
             $_SESSION['username'] = $row['username'];
             $_SESSION['login'] = 111;
             $_SESSION['email'] = $row['email'];
             $_SESSION['time'] = time();
             
            //$bLoginSuccess=true;
        }

    $conn = null;
}

catch(Exception $e){
    echo "Fehler: " .$e;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Du wurdest hinzugefügt: <?php echo $_SESSION['email'] ?></p>
</body>
</html>