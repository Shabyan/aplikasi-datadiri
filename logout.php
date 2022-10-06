<?php
    include('./input-config.php');

    session_destroy();

    echo "
        <script>
         alert('logut sukses');
         window.location='login.php'
        </script>
    ";
?>   