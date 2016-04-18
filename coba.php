<?php
     $now = time(); // or your date as well
     $your_date = strtotime("2016-04-30");
     $datediff = $your_date - $now;
     echo floor($datediff/(60*60*24));
?>