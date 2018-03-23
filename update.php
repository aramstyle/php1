<?php
require_once('lib/print.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php print_title(); ?></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php print_list(); ?>
    </ol>

    <form action="update_process.php" method="post">
      <input type="hidden" name="old_title" value="<?php print_title(); ?>">
      <p>
        <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
      </p>
      <p>
        <textarea name="desc" placeholder="Description"><?php print_description(); ?></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>

  </body>
</html>
