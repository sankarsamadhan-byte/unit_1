<?php


function ispr($n1,$n2,$n3)
{

if($n1<0||$n2<0||$n3<0)
    {
        echo("NEGAI not  alow");
        return;
    }
if($n1==0||$n2==0||$n3==0)
    {
        echo ("0 is  not  allows");
        return;
    }

$sum=$n1+$n2+$n3;
if($sum<2)
    {
        echo("not  prime numebr");
        return;
    }

for($i=2;$i<$sum;$i++)
    {
        if($sum%$i==0)
            {
                echo("NOT prie");
                return;
            }
           

    }
     echo ("this is  prime ");





    }
if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];

        ispr($n1,$n2,$n3);

    }



?>