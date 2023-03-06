<?php
    require'controller.php';

    if(isset($_POST["submit"])) {
        if (tambahData($_POST) > 0){
            echo "<script>
            alert('Data berhasil di tambahkan')
            document.location.href = 'index.php'; 
            </script>";
        } else {
            echo "<script>
            alert('Data gagal di tambahkan')
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
        <li> nama <input type="text" name="nama"></li>
        <li> nis <input type="text" name="nis"></li>
        <li> rombel <input type="text" name="rombel"></li>
        <li> rayon <input type="text" name="rayon"></li>
        <li> status <input type="text" name="status"></li>
    </ul>
    <button type="submit" name="submit">kirim</button><br><br><br>
    </form>
</body>
</html>