<?php
require '../function.php';
$datas = query("SELECT * FROM resepsionis")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
</head>
<body>
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-9">
                <div class="container mt-5">
                <h1>Data resepsionis</h1>
                <a href="tambah_orang.php" class="btn btn-primary">tambah orang</a>
                
                <table>
                    <tr>
                        <th>NO</th>
                        <th>username</th>
                        <th>nama lengkap</th>
                        <th>kelas</th>
                        <th>roles</th>
                        <th>Aksi</th>
                    </tr>
                    
                    <?php $i = 1; ?>
                    <?php foreach($datas as $data) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data["username"] ?></td>
                            <td><?= $data["nama_lengkap"] ?></td>
                            <td><?= $data["kelas"] ?></td>
                            <td><?= $data["roles"] ?></td>
                            <td>
                                <a href="edit_orang.php?id=<?= $data["id_resepsionis"]; ?>" class="edit"><i class="fa-solid fa-user-pen"></i></a>
                                <a href="hapus_orang.php?id=<?= $data["id_resepsionis"]; ?>" class="hapus"  onClick="return confirm('anda yakin ingin menghapus?')" ><i class="fa-solid fa-trash"></i></a>
                            </td>                
                        </tr>
                    <?php $i++;?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        
    </div>
    

</body>
</html>