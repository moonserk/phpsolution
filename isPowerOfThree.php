<?php
  function isPowerOfThree($n){
    return log($n, 3) - intval(log($n, 3)) == 0;
  }
