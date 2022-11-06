<?php
session_start();

require '../function.php';

$id = $_GET["id"];
$user = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
            alert('silahkan login terlebih dahulu')
            window.location: '../login/index.php';
        </script>
    ";
}

if(isset($_POST["submit"])){
    if(editOrang($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil diubah');
            window.location = 'resepsionis.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal diubah');
            window.location = 'resepsionis.php';
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
                    <h3>edit resepsionis</h3>
            
                    <form action="" method="POST">
                        <input type="hidden" name="id_resepsionis" value="<?= $user["id_resepsionis"]; ?>"><br> 

                        <label for="username">username</label>
                        <input type="text" name="username" class="form-control" value="<?= $user["username"]; ?>"><br>
            
                        <label for="nama_lengkap">nama lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"]; ?>"><br>
            
                        <label for="kelas">kelas</label>
                        <input type="text" name="kelas" class="form-control" value="<?= $user["kelas"]; ?>"><br>
            
                        <label for="password">password</label>
                        <input type="text" name="password" class="form-control" value="<?= $user["password"]; ?>"><br>

                        
                        <label for="roles">roles</label>
                        <select name="roles" class="form-control" value="<?= $user["roles"]; ?>">
                            <option value="Admin">Admin</option>
                            <option value="Resepsionis">Resepsionis</option>
                        </select><br>
            
                        <button type="submit" name="submit" class="btn btn-dark">kirim</button>
                    </form>
                </div>
            </div>
        </div>
            
    </div>
    
</body>
</html>