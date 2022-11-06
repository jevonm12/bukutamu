<?php
require '../function.php';

$id = $_GET["id"];

    if(hapusOrang($id) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data gagal dihapus');
            window.location = 'resepsionis.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data  berhasi dihpus');
            window.location = 'resepsionis.php';
        </script>
    ";
    }

?>