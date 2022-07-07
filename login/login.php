<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['nama'])) {
    header("Location: ../user/index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
            
    $sql = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: ../admin/index.php");}
        else {
            echo "<script>alert('Maaf! Username atau Password Anda Salah.')</script>";}
        }
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Login Tahap I</title>
        <link rel="shortcut icon" href="../images/logojaksa.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="form">
            <br>
            <a href="../index.php"><img src="../images/logokejari.png" style="width: 200px;"></a>
            <h4>Login Akun Tahap I</h4>
            <form action="" method="POST" class="login-email">

                <input type="text" name="username" placeholder="username" value="<?php echo $_POST['username']; ?>" required>
                <input type="password" name="password" placeholder="password" value="<?php echo $_POST['password']; ?>" required>

                <button name="submit">login</button>
               

            </form>
        </div>
    </body>
    </html>
