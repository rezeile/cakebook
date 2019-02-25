<?php
  if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo "We dont have mysqli!!!";
  } else {
    echo "We dont have it\n";
  }
?>
