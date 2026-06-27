<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cube of a number</title>
</head>
<body>
    <form  method="get">
        <label>
            Enter a Number
        </label>
        <input type="number"name="number">
        <input type="submit"name="bt"value="calculate">
    </form>
    <?php
    if(isset($_GET['bt']))
        {
            $number=$_GET['number'];
            $result=$number*$number*$number;
            echo("The Result is  ".$result);
        }

    ?>
</body>
</html>