<?php
    include_once("./connect.php");

    if (isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES(
        NULL,'$nama', '$telp', '$email'
        )");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
</head>
<body>
    <h1>Form Tambah STAFF</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="telp">Telepon</label>
        <input type="text" id="telp" name="telp">

        <br>
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    
    <br>
    <br>
    <a href="./staff.php">Kembali ke halaman staff</a>
    <br>
    <a href="./index.php">Kembali ke halaman utama</a>
</body>
</html>