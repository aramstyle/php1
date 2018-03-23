<?php
if(unlink('data/'.basename($_POST['id']))) {
    header('Location: /php1/index.php');
}
?>
