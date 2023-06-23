<?php
include "koneksi.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: indeks.php");
    } else {
        echo "<script>alert('Email atau password yang anda masukkan salah')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <h1>Login Dulu Ngab!!!</h1>
        <form action="" method="post">
            <label for="email">Masukkan email</label><br>
            <input type="email" name="email" id="email"><br>
            <label for="password">Masukkan Password</label><br>
            <input type="password" name="password" id="password"><br><br>
            <button name="login" value="login" type="submit">Login</button>
        </form>
    </div>
</body>

</html>