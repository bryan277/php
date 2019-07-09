<?php

function printStringReturnNumber(){
  echo "string";
  return 5;
}

$my_num = printStringReturnNumber();
echo "\n";
echo $my_num;
