<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <form action="functions.php" method="get">
      <h1>PHP calculator</h1>
      <input type="text" name="num01" value=0 />
      <input type="text" name="num02" value=0 />
      <select name="oper">
        <label>Choose operation!</label>
        <option value="add">Add</option>
        <option value="sub">Substract</option>
        <option value="multi">Mulitply</option>
        <option value="div">Divide</option>
      </select>
      <button type="submit">Calculate!</button>
</form>
<h2>
<?php
function myCalculator($num01, $oper, $num02) {
  $sum;
  switch ($oper) {
    default:
    $sum = "Error";
    break;
    case "add":
      $sum = $num01 + $num02;
      break;
    case "sub":
      $sum = $num01 - $num02;
      break;
    case "multi":
      $sum = $num01 * $num02;
      break;
    case "div":
        $sum = $num01 / $num02;
      break;
    
  }
  return $sum;
}

$num01 = $_GET["num01"];
$num02 = $_GET["num02"];
$oper = $_GET["oper"];

echo "Result: " . myCalculator($num01, $oper, $num02);
?> </h2>

</body>
</html>