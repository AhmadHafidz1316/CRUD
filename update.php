<?php

require 'controller.php';
$id = $_GET['id'];
$student = query("SELECT * FROM students WHERE id = $id")[0];



if (isset($_POST["submit"])) {

if (ubahData($_POST) > 0 ){
    echo "<script>
    alert('Data berhasil di update')
    document.location.href = 'index.php'; 
    </script>";
} else {
    echo "<script>
    alert('Data gagal di update')
    document.location.href = 'index.php'; 
    </script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input data</title>
</head>
<body>
    <ul>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $student ["id"] ?>">
        <li> nama <input type="text" name="nama" value="<?=$student ["nama"] ?>"></li>
        <li> nis <input type="text" name="nis" value="<?= $student ["nis"] ?>"></li>
        <li> rombel <input type="text" name="rombel" value="<?= $student ["rombel"] ?>"></li>
        <li> rayon <input type="text" name="rayon" value="<?= $student ["rayon"] ?>"></li>
        <li> status <input type="text" name="status" value="<?= $student ["status"] ?>"></li>
    </ul>
    <button type="submit" name="submit">kirim</button><br><br><br>
    </form>
</body>
</html>