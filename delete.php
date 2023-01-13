<?php
    require("db.php");

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $db->query("DELETE FROM cards WHERE id=$id");

        echo "<script>
            alert('Ваша карточка удалена');
            location.href = 'index.php';
        </script>";
    }
?>