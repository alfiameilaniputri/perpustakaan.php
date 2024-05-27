<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
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
    <h1>Daftar Buku</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nama Buku</th>
                <th>ISBN</th>
                <th>Unit</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($query as $buku) { ?>
                <tr>
                    <td><?php echo $buku["nama"] ?></td>
                    <td><?php echo $buku["isbn"] ?></td>
                    <td><?php echo $buku["unit"] ?></td>
                    <td>
                        <a href=<?php echo "edit-buku.php?id=" . $buku["id"]?>>EDIT</a> |
                        <a href=<?php echo "delete-buku.php?id=" . $buku["id"]?>>DELETE</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <a href="./tambah-buku.php">Tambah data buku</a>
    <br>
    <a href="./index.php">Kembali ke halaman utama</a>
    
</body>
</html>
