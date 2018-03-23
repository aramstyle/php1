<?php

if($_POST['old_title'] != $_POST['title']) {
  if(rename('data/'.$_POST['old_title'],'data/'.$_POST['title'])) {
    file_put_contents('data/'.$_POST['title'], $_POST['desc']);
    header('Location: /php1/index.php?id='.$_POST['title']);
  }
}
else {
  file_put_contents('data/'.$_POST['title'], $_POST['desc']);
  header('Location: /php1/index.php?id='.$_POST['title']);
}

?>
