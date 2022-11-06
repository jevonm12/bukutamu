<?php
require '../function.php';

$id = $_GET["id"];

    if(hapusguru($id) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data gagal dihapus');
            window.location = 'gtk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data  berhasi dihpus');
            window.location = 'gtk.php';
        </script>
    ";
    }

?>