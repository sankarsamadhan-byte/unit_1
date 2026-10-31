<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <input type="number" name="n1">
    <input type="submit" value="sub">


</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

$num=$_POST["n1"];
$sum=0;
for($i=1;$i<=$num;$i++)
    {
        $sum=$sum+$i;
    }
    echo "is  the $sum";



}


?>
    
</body>
</html>