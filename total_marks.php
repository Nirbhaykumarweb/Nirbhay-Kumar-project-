<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label>Python</label>
       <input type="number"name="m1"><br>
        <label>Web Techonology</label>
       <input type="number"name="m2"><br>
        <label>Java</label>
       <input type="number"name="m3"><br>
        <label>C</label>
       <input type="number"name="m4"><br>
        <label>DSA</label>
       <input type="number"name="m5"><br>
       <input type="submit"name="total"value="calculate">
    </form>
    <?php
    if(isset($_GET['total']))
        {
            $m1=$_GET['m1'];
            $m2=$_GET['m2'];
            $m3=$_GET['m3'];
            $m4=$_GET['m4'];
            $m5=$_GET['m5'];
            $total_marks=$m1 + $m2 +$m3 + $m4 + $m5;
            $percentege=$total_marks/5;
            echo("marks=".$total_marks);
            echo("<br>");
            echo("percentage = ".$percentege ."%");
        }

    ?>
</body>
</html>