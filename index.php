<?php
    require 'controller.php';
    $students = query("SELECT * FROM students");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="input-data.php"><b>input data</b></a>
    <table border="10">
        <thead>
            <tr>
            <th>No.</th>
            <th>nama</th>
            <th>nis</th>
            <th>rombel</th>
            <th>rayon</th>
            <th>status</th>
            <th>aksi</th>
            <tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach($students as $student) { ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $student["nama"]?></td>
                <td><?php echo $student["nis"]?></td>
                <td><?php echo $student["rombel"]?></td>
                <td><?php echo $student["rayon"]?></td>
                <td><?php echo $student["status"]?></td>
                <td><a href="delete.php?id=<?= $student ["id"]?>">hapus</td>
                <td><a href="update.php?id=<?= $student ["id"]?>">update</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>