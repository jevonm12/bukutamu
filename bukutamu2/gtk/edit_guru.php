<?php
session_start();

require '../function.php';

$id = $_GET["id"];
$guru = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
            alert('silahkan login terlebih dahulu')
            window.location: '../login/index.php';
        </script>
    ";
}

if(isset($_POST["submit"])){
    if(editguru($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil diubah');
            window.location = 'gtk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal diubah');
            window.location = 'gtk.php';
        </script>
    ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-8">
            <div class="main mt-5">
                <div class="box">
                    <h3>edit guru</h3><br>
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_gtk" value="<?= $guru["id_gtk"]; ?>"> <br>

                        <label for="nama_lengkap">nama lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="<?= $guru["nama_lengkap"]; ?>"><br>
            
                        <label for="job">job</label>
                        <input type="text" name="job" class="form-control" value="<?= $guru["job"]; ?>"><br>
            
                        <label for="foto">foto</label>
                        <input type="file" name="foto" class="form-control" value="<?= $guru["foto"]; ?>"><br>
            
                        <label for="roles">roles</label>
                        <select name="roles" class="form-control" value="<?= $guru["roles"]; ?>"><br>
                            <option value="kepala sekolah">kepala sekolah</option>
                            <option value="wakil kepala sekolah">wakil kepala sekolah</option>
                            <option value="guru">guru</option>
                        </select><br>
            
                        <button type="submit" class="btn btn-dark" name="submit">kirim</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>