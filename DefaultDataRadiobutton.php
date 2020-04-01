
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Default Data Radio Button</title>
</head>

<body>

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
        Jenis Kelamin
        <input type="radio" name="sex" value="Pria"  />Pria
        <input type="radio" name="sex" value="Wanita" checked='checked'/>Wanita <br />

        <input type="submit" value="ok" />
    </form>
<?php
if (isset($_GET['sex'])) {
    echo $_GET['sex'];
}
?>
</body>
</html>