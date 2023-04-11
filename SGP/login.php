<?php
include("connection.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $f=1;
    $mno = $_POST['number'];
    $password = $_POST['psw'];
    $sql1 = "SELECT `mobile_no.`,`password` FROM `sign_up1` WHERE `mobile_no.`=$mno";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result1);
    if ($row['mobile_no.'] == $mno && $row['password'] == $password) {
        header("Location: ../SGP/demo.php");
        die();
    } else if ($row['mobile_no.'] == $mno && $row['password'] != $password) {
        echo "<script> 
        alert('password is incorrect');
        </script>";
    } else {
        
        echo "<script> 
        alert('please create account first');
        window.location.href='../SGP/newacc.php';
        </script>";
        
        //header('Location: ../SGP/newacc.php');
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../SGP/login.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../SGP/logo.jpeg">
    <link rel="icon" type="image/png" sizes="32x32" href="../SGP/logo.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="../SGP/logo.jpeg">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="./SGP/logo.jpeg">
    <title>Login Page</title>
</head>

<body>
    <img class="img1" src="../SGP/main.jpeg">
    <div class="main">
        <div class="maincontainer">
            <div class="header">
                <label for="" class="icon">
                    <a href="../SGP/demo.php">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </a>
                </label>
                <div class="headLogin">
                    <h1 class="main_heading" style="color: rgb(255, 255, 255);"><b>Login / SignUp</b></h1>
                </div>
                <div class="loginwith">
                    <label for="">
                        <p style="color: white;">Using &nbsp;
                            <i class="fa fa-google" style='font-size:30px; color: rgb(255, 255, 255);'></i>
                            &nbsp;
                            <i class="fa fa-google-plus-circle" style='font-size:32px; color: rgb(255, 255, 255);'></i>
                            &nbsp;
                            <i class='fa fa-linkedin' style='font-size:32px; color: rgb(255, 255, 255);'></i>
                        </p>
                    </label>
                </div>
            </div>
            <div class="container">


                <hr>
                <form action="/web developement/SGP/login.php" method="post">
                    <p>Mobile Number: <input type="text" style="width: 100%;padding: 10px;border: 1px solid #ccc;border-radius: 8px;margin: 10px;" name="number" id="number" pattern="*[0,9]{10}" required placeholder="9999999999">
                    </p>
                    <p>
                        Password: <input type="password" name="psw" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required placeholder="8 charactor required">
                    </p>
                    <div class="container2">
                        <div class="submitBtn">
                            <input type="submit" id="submit" value="Login" style="color: white; font-size: 20px;"><br>
                        </div>
                        <div style="height: 10px;" class="space">

                        </div>
                    </div>
                    <div id="psw_error"></div>
                    <div class="h6">
                        <div class="h51">
                            <a style="text-decoration: none;" href="newacc.php">
                                <h6> Create new account </h6>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="h52">
                    <h5> <b>  </b></h5>
                </div> -->


                </form>
            </div>
        </div>
    </div>
</body>

</html>