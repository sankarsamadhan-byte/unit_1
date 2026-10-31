<?php

function pime($n1,$n2,$n3)
{

if($n1<0||$n2<0||$n3<0)
    {
        echo "Negative  nuemrb   is  not  allowd";
        return;
    }
if($n1==0||$n2==0||$n3==0)
    {
        echo "0 is  not    allowed";
        return;
    }

$sum=$n1+$n2+$n3;
if($sum<2){
    echo "NOT  prime  numebr ";
    return;
}
for($i=2;$i<$sum;$i++)
    {
        if($sum%$i==0)
            {
                echo "NOT prime numebr ";
                return;
            }
           }
 echo "thisis   prime  numebr ";
    

}


if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];
        pime($n1,$n2,$n3);


    }


?>