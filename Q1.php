<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    
<input type="number" name="n1">
<input type="submit" name="sub" value="sub">

</form>>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $num=$_POST["n1"];

        if($num>0){
            echo "this is  postve";
        }
        else if($num<0)
            {
                echo "this is  negative";
            }
            else{
                echo "this is    Zer  ";
            }




    }



?>

    
</body>
</html>