<?php


function prie($n1,$n2,$n3)
{

if($n1<0||$n2<0||$n3<0)
    {
        echo "- value not  allowerd";
        return;
    }
if($n1==0||$n2==0||$n3==0)
    {
        echo "o is not  llowed";
        return;
    }

$sum=$n1+$n2+$n3;

echo "$sum is ";

if($sum<2)
    {
        echo "NOT pime nuemrb ";
    }

    for($i=2;$i<$sum;$i++)
        {

        if($sum%$i==0)
            {
                echo "NOT  prime  numebr ";
                return;
            }


        }
        echo "  prim num";

}
if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];
        prie($n1,$n2,$n3);

    }



?>