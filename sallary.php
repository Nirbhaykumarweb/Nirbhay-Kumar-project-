<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sallary</title>
    <form method="get">
       <label>Employee</label>
       <input type="number"name="emplo">
         <label>HRA</label>
       <input type="number"name="HRA">
         <label>DA</label>
       <input type="number"name="Da">
       <input type="submit"name="total"value="total sallary">
    </form>
     <?php
    if(isset($_GET['total']))
        {
            $emplo=$_GET['emplo'];
            $HRA=$_GET['HRA'];
            $Da=$_GET['Da'];
           
            $total_sallary=$emplo + $HRA + $Da;
            
            echo("marks=".$total_sallary);
            
            
        }

    ?>
</head>
<body>
    
</body>
</html>