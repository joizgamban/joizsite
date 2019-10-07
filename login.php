<?php
    $username = $_POST['username'];
    //$email = $_POST['email'];
    $password = $_POST['password'];

    //Database Connection
    $conn = new mysqli('localhost', 'joiz', 'joizgamban12', 'joizsite');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into users_login(username, password)
        values(?, ?)");
        $stmt->bind_param("ss",$username, $password);
        $stmt->execute();
        echo "Welcome to my site!";
        $stmt->close();
        $conn->close();
    }

    /*if (!empty($username)) {
        if (!empty($password)) {
            $host = "localhost";
            $dbusername = "joiz";
            $dbpassword = "joizgamban12";
            $dbname = "joizsite";

        //Connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
        }

        else {
            $sqL = "INSERT INTO users_login (username, `password`)
            values ('$username', '$password')";
            if ($conn->query($sqL)){
                echo "New recort is inserted succesfully";
            }
            else {
                echo "Error: ". $sqL ."<br>".$conn->error;
            }
            $con->close();
        }

        else {
            echo "Password should not be empty";
            die();
        }
    }

    else {
        echo "Username should not be empty";
        die();
    }*/
?>