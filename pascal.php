<?php
function factorial($n)
{
  if($n <= 1){
    return 1;
  }else{
    return $n * factorial($n - 1);
  }
}

function genOne($a, $b){
  return factorial($a) / (factorial($b) * factorial($a - $b));
}

function generate($n):array
{
  $result = array();
  for($i = $n; $i >= 0; $i--){
    array_push($result, genOne($n, $i));
  }
  return $result;
}
