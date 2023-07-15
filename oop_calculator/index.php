<?php

declare(strict_types=1);
include 'includes/calc-autoload.inc.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <form class="d-flex" method="POST" action="./includes/calc.inc.php">
        <input type="number" name="num1">
        <select name="oper" class="form-select w-25">
            <option selected>Open this select menu</option>
            <option value="add">Addition</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiple</option>
            <option value="div">Division</option>
        </select>

        <input type="number" name="num2">
        <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
    </form>
</body>

</html>