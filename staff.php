<?php
include_once("./connect.php");

$query = mysqli_query($db, "SELECT * FROM staff");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar staff</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Staff</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nama Staff</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($query as $staff) { ?>
            <tr>
                <td><?php echo $staff["nama"] ?></td>
                <td><?php echo $staff["telp"] ?></td>
                <td><?php echo $staff["email"] ?></td>
                <td>
                    <a href=<?php echo "edit-staff.php?id=" . $staff["id"]?>>EDIT</a> |
                    <a href=<?php echo "delete-staff.php?id=" . $staff["id"]?>>DELETE</a>
                </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <br>
    <a href="./tambah-staff.php">Tambah data staff</a>
    <br>
    <a href="./index.php">Kembali ke halaman utama</a>
    
</body>
</html>
