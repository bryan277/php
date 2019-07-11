<?php

function increaseEnthusiasm($max) {
  return $max . "?";
};

echo increaseEnthusiasm("Hans");

function repeatThreeTimes($three) {
  return $three . " " . $three . " " . $three;
}

echo repeatThreeTimes("hi");

echo increaseEnthusiasm(repeatThreeTimes("bitch"));
