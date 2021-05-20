<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="calculator.php" method="POST">
        <label for="firstNumber">First Number</label>
        <input type="text" name="firstNumber" id="">
        <select name="operand" id="">
            <option value="plus">Sum</option>
            <option value="minus">Minus</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Division</option>
        </select>
        <label for="secondNumber">Second Number</label>
        <input type="text" name="secondNumber" id="">
        <button type="submit">Calculate</button>
    </form>
</body>

</html>