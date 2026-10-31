
<?php
function sum($n1)
{
    $sum=0;
    $dig=str_split($n1);
    foreach($dig as $sam)
        {
                $sum=$sum+$sam;
        }
        return $sum;
}
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $n1=$_POST["n1"];
        $see =sum($n1);
        echo "sum is $see";

    }

?>