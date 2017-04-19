<?php
$first = isset($_GET['first']) ? $_GET['first'] : '';
$second = isset($_GET['second']) ? $_GET['second'] : '';
$operation = isset($_GET['operation']) ? $_GET['operation'] : '';
switch  ($operation) {
    case '+':
        $result = $first + $second;
        break;
    case '-':
        $result = $first - $second;
        break;
    case '*':
        $result = $first * $second;
        break;
    case '/':
        $result = $first / $second;
        break;
    case '%':
        $result = $first % $second;
        break;
    default:
        $result = null;
        break;
}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get" action="index.php">
    <label>Enter number<input type="text" name="first"></label>
    <?php
    if (!$first) {
        echo "<span style= 'color: red'>Enter First</span>";
    }
    ?>
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
        <option value="%">%</option>
    </select>
    <label>Enter second number<input type="text" name="second"></label>
    <?php
    if (!$second) {
        echo "<span style= 'color: red'>Enter Second</span>";
    }
    ?>
    <span>=</span>
    <?php
    if ($result) {
        echo "<span>$result</span>";
    }else {?>
        <span>Clic "Culc"</span>
    <?php } ?>


    <br>
    <button type="submit">Calculate</button>
</form>
</body>
</html>