<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label>Enter a Number</label>
        <input type="number"name="value">
        <input type="submit"name="t2"value="table of a number">
    </form>
    <?php
    if(isset($_GET['t2']))
    {
        $value=$_GET['value'];
    for($i=1;$i<=10;$i++)
        {
            echo($value ." x " .$i ."=" .($value*$i));
            echo("<br>");
        }
    }
    ?>
    
</body>
</html>