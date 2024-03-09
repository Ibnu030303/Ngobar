<?php 

    require_once 'database/koneksi.php';

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = $db -> query("SELECT * FROM anggota WHERE username = '$username' AND password = '$password'");

        if ($data->num_rows > 0) {
            $user = $data->fetch_assoc();

            header("Location: dashboard.php");

        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Silahkan Login Terlebih Dahulu</h1>

    <form action="login.php" method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">

        <label for="password"></label>
        <input type="password" name="password" id="password">

        <button type="submit" name="submit">Login</button>
    </form>

</body>

</html>