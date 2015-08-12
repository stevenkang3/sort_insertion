
<?php
for ($x =0; $x<=1000; $x++)
{
  $numbers[ ] = rand(1,100);
}
// var_dump($numbers);

function insertion_sort($numbers)
{
  for ($counter=0; $counter<count($numbers)-1; $counter++)
  {
    $length = $counter +1;
    $first = $numbers[$counter];

    if($numbers[$length]<$first)
    {
      for ($num = 0; $num<$length; $num++)
      {
        if ($numbers[$length]<$numbers[$num])
        {
          $temp = $numbers[$num];
          $numbers[$num] = $numbers[$length];
          $numbers[$length] = $temp;
      }
    }
  }
}
var_dump($numbers);
}

  function microtime_float()
  {
      list($usec, $sec) = explode(" ", microtime());
      return ((float)$usec + (float)$sec);
  }
  $time_start = microtime_float();
  insertion_sort($numbers);
  $time_end = microtime_float();
  $time = $time_end - $time_start;
  echo "Did nothing in $time seconds\n";
  ?>
