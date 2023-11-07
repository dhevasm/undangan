<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon.png">
    <title>Login</title>
    <link rel="stylesheet" href="src/css/login.css">

    <!-- montserrat font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card">
            <?php
                $connect = mysqli_connect("localhost", "root", "", "undangan");
            ?>
            <h1>Login</h1>
            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="input" required>
                <label for="password">password</label>
                <div style="margin-bottom: 30px;" class="input pws">
                    <input type="password" name="password" id="password" style="box-shadow: none; border: none; outline: none;" required>
                    <img src="icon/spw.svg" width="20px" height="20px" id="toggle">
                </div>
                <center>
                    <input type="submit" class="input" name="sub">
                </center>
            </form>
                <?php
                    if(isset($_POST['sub'])){
                        $username = $_POST['username'];
                        $pass= $_POST['password'];
                        $data = mysqli_query($connect, "SELECT * FROM account WHERE username = '$username'");
                        if(mysqli_num_rows($data) === 1){
                            $row = mysqli_fetch_assoc($data);
                            if($pass === $row['password']){
                                header("Location: index.php");
                            }else{
                                ?>
                                <div style="color: red;"><?php
                                echo "password salah";
                                ?></div><?php
                            }
                        }else{
                            ?>
                            <div style="color: red;"><?php
                            echo "username belum terdaftar";
                            ?></div><?php
                        }
                        
                    }
                ?>  
        </div>
        <center><p>Belum memiliki akun? <a href="register.php">Datar sekarang</a></p></center>
    </div>

    <script src="src/js/login.js"></script>
</body>
</html>