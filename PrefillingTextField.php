<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Prefilling Text Field</title>
</head>

<body>

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">Nama
    <input type="text" name="nama"
        value="Universitas Negeri Yogyakarta"
    /> <br />

    <input type="submit" value="OK" />
    </form>
    <?php
    if (isset($_POST['nama'])) {
        echo $_POST['nama'];
    }
    ?>
</body>
</html>