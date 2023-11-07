<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon.png">
    <title>Account List</title>
</head>
<body>
    <?php
    $connect = mysqli_connect("localhost", "root", "", "undangan");
    ?>
    <h1>Account list</h1>
    <table border="1" style="border-collapse: collapse;">
    <style>
        tr, th, td{
            padding: 5px;
        }
    </style>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>No.telp</th>
        </tr>
    <?php
        $result = mysqli_query($connect, "SELECT * FROM account");
        $arr = mysqli_fetch_assoc($result);
        $i = 1;
        while($row = mysqli_fetch_assoc($result)):
    ?>
        <tr class="table">
            <td><?php echo $i ?></td>
            <td><?php echo $row["username"];?></td>
            <td><?php echo $row["password"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["notelp"];?></td>
        </tr>
    <?php
        $i++;
        endwhile;
    ?>
    </table>
</body>
</html>