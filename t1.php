<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="logi.php" method="POST">

<input type="number" name="n1">
<input type="number" namw="n2">
<input type=" number" nmae="n3">

<input type="submit" value="subm">
</form>

    
</body>
</html>







<?php

function ipri($n1,$n2,$n3)
{


if($n1<0||$n2<0||$n3<0)
    {
        echo "0 is  not   allowed ";
        return;
    }
if($n1==0||$n2==0||$n3==0)
    {
        echo "-  is   not  value ";
        return;
    }

$sum=$n1+$n2+$n3;

if($sum<2)
    {
        echo "NOT prime numebr ";
    }

for($i=2;$i<$sum;$i++)
    {
        if($sum%i==0)
            {
                echo "NOT  prime ";
                return;
            }
    }
    eco ""

}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];
        ipri($n1,$n2,$n3);
        
    }









?>
















