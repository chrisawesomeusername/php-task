<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP task</title>
  </head>
  <body class="container bg-light">
    <div class="jumbotron mt-5">
      <h1>PHP String Functions</h1>
    </div>

    <div class="p-3 w-50 rounded bg-white mx-auto mb-3">
      <h3>Length of string</h3>
      <div class="">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <input type="text" name="fname">
          <input class="btn btn-primary btn-sm" type="submit">
        </form>
      </div>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
          echo "String length is ". strlen ($name);
        }
    }
    ?>
    </div>

    <div class="p-3 w-50 rounded bg-white mx-auto mb-3">
      <h3>Word Count</h3>
      <div class="">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <input type="text" name="wcount">
          <input class="btn btn-primary btn-sm" type="submit">
        </form>
      </div>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $count = $_POST['wcount'];
        if (empty($count)) {
            echo "Name is empty";
        } else {
          echo str_word_count ($count) . " words";
        }
    }
    ?>
    </div>

    <div class="p-3 w-50 rounded bg-white mx-auto mb-3">
      <h3>Reverse String</h3>
      <div class="">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <input type="text" name="revstring">
          <input class="btn btn-primary btn-sm" type="submit">
        </form>
      </div>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $rev = $_POST['revstring'];
        if (empty($rev)) {
            echo "Name is empty";
        } else {
          echo strrev ($rev);
        }
    }
    ?>
    </div>
  </body>
</html>
