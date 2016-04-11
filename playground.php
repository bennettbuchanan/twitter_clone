<!DOCTYPE html>
<html>
  <head><title>Hello world!</title></head>
  <body>

    <p><?php echo "Hello world"; ?></p>

    <p><?php echo 3 + 6; ?></p>


    <?php
      $i = 0;
      $array = ["One", "Two", "Three"];

      foreach ($array as $elem) {
      if($elem == "Two") {
        echo $elem;
        echo $i;
      }
      $i++;
      }
    ?>

  </body>
</html>
