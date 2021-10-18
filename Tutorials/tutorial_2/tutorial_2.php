<?php
$size=13;
$x=($size/2)+1;
for($i=1; $i <=$size; $i++)
{
   for($j =1;$j<=$size;$j++)
   {
     if(($j>=$x)!= false && $j<=$size-$x+1)
     {
        echo "*";
     }
     else
     {
        echo "&nbsp&nbsp";
     }
   }
   if($i<=$size/2)
   {
      $x--;
   }
   else
   {
      $x++;
   }
  echo "<br>";
}


?>