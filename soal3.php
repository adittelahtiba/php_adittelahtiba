<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>

<body>
    <div style="padding: 40px;" border="1">
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align:center;"><button type="submit" name="data">Search</button></td>
                </tr>
            </table>
        </form>
        <div style="padding: 20px;">
            <table border="1">
                <?php
                include 'db.php';
                $where = '';
                if (isset($_POST['data'])) {
                    $where = " WHERE a.nama like '%" . $_POST['nama'] . "%' and a.alamat  like '%" . $_POST['alamat'] . "%'";
                }

                $data = mysqli_query($koneksi, "select * from person a inner join hobi b on a.id=b.person_id " . $where);
                while ($aData = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $aData['nama']; ?></td>
                    <td><?php echo $aData['alamat']; ?></td>
                    <td><?php echo $aData['hobi']; ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
</body>

</html>