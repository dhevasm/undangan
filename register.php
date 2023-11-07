<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon.png">
    <title>Register</title>
    <link rel="stylesheet" href="src/css/register.css">

    <!-- montserrat font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card" style="padding: 170px 100px 170px;">
            <h1>Register</h1>
            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="input" required>
                <label for="password">password</label>
                <div style="margin-bottom: 30px;" class="input pws">
                    <input type="password" name="password" id="password" class="pw1" style="box-shadow: none; border: none; outline: none;" required>
                    <img src="icon/spw.svg" width="20px" height="20px" id="toggle">
                </div>
                <label for="password1">konfirmasi password</label>
                <div style="margin-bottom: 30px;" class="input pws">
                    <input type="password" name="password1" id="password" class="pw2" style="box-shadow: none; border: none; outline: none;" required>
                    <img src="icon/spw.svg" width="20px" height="20px" id="toggle">
                </div>
                <label for="email">Email</label>
                <input type="email" name="email" class="input" required>
                <label for="no">Phone number</label>
                <input type="text" name="number" class="input" required>
                <center>
                    <input type="submit" class="input" name="submit" style="margin: 20px;">
                </center>
                <?php
                    $connect = mysqli_connect("localhost", "root", "", "undangan");

                    if(isset($_POST["submit"])){
                        $pw1 = $_POST["password"];
                        $pw2 = $_POST["password1"];
                        $username = $_POST["username"];
                        $email = $_POST["email"];
                        $number = $_POST["number"];

                        if($pw2 != $pw1){?>
                        <center>
                            <p style="color: red;">
                            <?php 
                                echo "Password tidak valid";
                            ?>
                            </p>
                        </center>
                        <?php
                        }
                        else{
                            mysqli_query($connect, "INSERT INTO account
                            VALUES ('$username', '$pw1', '$email', '$number');
                            ");
                            header("Location: login.php");
                        }
                    }
                ?>
            </form>
        </div>
        <center><p>Sudah memiliki akun? <a href="login.php">Login</a></p></center>
    </div>

    <script src="src/js/register.js"></script>
</body>
</html>