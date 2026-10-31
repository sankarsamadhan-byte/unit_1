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
    <input type="submit" value="s1">


</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $n1=$_POST["n1"];

        $sq=$n1*$n1;
        $cub=$n1*$n1*$n1;
        echo "this $sq";
        echo "this $cub";

        

    }


?>

    
</body>
</html>