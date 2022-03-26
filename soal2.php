<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>

<body>
    <div style="padding: 40px;" border="1">
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Anda</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Umur Anda</td>
                    <td>:</td>
                    <td><input type="text" name="umur" id="nama"></td>
                </tr>
                <tr>
                    <td>Hobi Anda</td>
                    <td>:</td>
                    <td><input type="text" name="hobi" id="nama"></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align:center;"><button type="submit" name="data">SUBMIT</button></td>
                </tr>
            </table>
        </form>
    </div>

    <?php

    if (isset($_POST['data'])) {
    ?>
    <div style="padding: 40px;" border="1">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?php echo $_POST['nama']; ?></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>
                    <?php echo $_POST['umur']; ?></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <?php echo $_POST['hobi']; ?></td>
            </tr>
        </table>
    </div>
    <?php
    }
    ?>

</body>

</html>