<?php
file_put_contents('data/'.$_POST['title'], $_POST['desc']);
header('Location: /php1/index.php?id='.$_POST['title']);
?>
