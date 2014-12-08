<?php
/* creates todays date */
$date = new DateTime("Today");

/*creates todays time*/
$time = new DateTime('America/Los_Angeles');

/*echos the date and time*/
echo $date->format("M/D" . " " . "d/Y") . " at " . $time->format("h:i");

?>
