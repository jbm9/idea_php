<?php

// This has no security!  Anyone can write to your files whatever they want.
// Just be forewarned.

$idea = $_POST["idea"];

if ("" == $idea) {
  echo "No idea specified!\n";
} else {
  $ts = time();

  $filename = $ts . ".txt";

  $f = fopen($filename, "a");


  fwrite($f, $idea);
  fwrite($f, "\n");
  fclose($f);

  echo "Wrote your idea to $filename: $idea";
}


?>