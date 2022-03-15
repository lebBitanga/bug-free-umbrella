<?php
function number($x) {
  if ($x > 0)
    {$message = "The number" ($x) "is positive";}
  if ($x < 0)
    {$message = "The number" ($x) "is negative";}
  echo $message."\n";
}

number(4);
number(-5);
?>
