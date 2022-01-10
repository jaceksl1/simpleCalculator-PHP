<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  </body>

</html>
