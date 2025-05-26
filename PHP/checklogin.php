<?php
    $username="";
    $password="";
    $bLoginSuccess=false;

    if(isset($_POST['username']))
    {
        $username=$_POST['username'];
    }
    if(isset($_POST['password']))
    {
        // $password = hash('sha512', $_POST['password']); // SHA512 Hash

        $password = $_POST['password'];
    }

    $dbFirstname="";$dbLastname="";$dbUsername="";

    if($username!=="" && $password!=="")
    {
        include 'dbsettings.php';

        $conn=new PDO("mysql:host=localhost;dbname=".$dbDatabasename,$dbLoginUsername,$dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM shopuser WHERE username='".$username."' AND password='".$password."'";

        foreach ($conn->query($sql) as $row) 
        {
             // PHP Session starten!
             session_start();

             $_SESSION['id']=$row['id'];
             $_SESSION['firstname'] = $row['firstname'];
             $_SESSION['lastname'] = $row['lastname'];
             $_SESSION['username'] = $row['username'];
             $_SESSION['login'] = 111;
             $_SESSION['email'] = $row['email'];
             $_SESSION['time'] = time();
             $_SESSION['showPopup'] = true;
             
            $bLoginSuccess=true;
        }

        $conn=null; //Verbindung schließen
    }

    //Weiterleitung
    if($bLoginSuccess)
    {
        header("Location: ../html/index.php");
    }
    else
    {
        header("Location: test.php");
        echo "Failed";
    }

?>