<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="get">
        <label>Enter a Number</label>
        <input type="number"name="marks">
        <input type="submit"name="t2"value="calculate">
    </form>
    <?php
    if(isset($_GET['t2']))
        {
          $marks=$_GET['marks'];
    if($marks>=90)
        {
        echo("Grade A+");
    } 
    elseif($marks>=80 && $marks<90)
        {
        echo("grade A");
    }
      elseif($marks>=70 && $marks<80){
        echo("grade B+");
    }
     elseif($marks>=60 && $marks<70){
        echo("grade B");
    }
    elseif($marks>=50 && $marks<60){
        echo("grade C");
    }
    else{
        echo("fail");
    }
        }
        
    ?>
    
</body>
</html>