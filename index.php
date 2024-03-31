<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="calculate">
      <form action="" method="POST">
        <input class="number" type="number" name="num1" />
        <select class="operation"name="operation">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
        <input class="number" type="number" name="num2" />
        <button type="sumbit">CLICK</button>
      </form>
    </div>

    <?php 

    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operation = $_POST['operation'];
    }

    if ($operation == '+') {
      $result = $num1 + $num2;
      echo "answer is " . $result;
    }  elseif($operation == '-') {
        $result = $num1 - $num2;
        echo "answer is " . $result;
    } elseif($operation == '*') {
        $result = $num1 * $num2;
        echo "answer is " . $result;
    } elseif($operation == '/') {
        $result = $num1 / $num2;
        echo "answer is " . $result;
    }
    ?>
  </body>
</html>
