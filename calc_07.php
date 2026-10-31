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
<input type="number" name="n2">
<input type="submit" value="sub">



</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        
        $sum=$n1+$n2;
        $sub=$n1-$n2;
        $mul=$n1*$n2;
        echo "sum os$sum";
        echo "subs is $sub";
        echo "mutil is $mul";

    }


?>

    
</body>
</html>