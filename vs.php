<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="on.js"></script>
    <form action="vs.php" method="POST">
        <label>quant</label><br>
        <input type="text" name="quant">
        <input type="submit" value="total">
    </form>

</body>

</html>

<?php
    $item = "xaa";
    $price = 100;
    $quant = $_POST["quant"];
    echo "you have {$quant} x  "
?>