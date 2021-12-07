<?php
$handle = fopen("https://adventofcode.com/2021/day/1/input", "r");
$first_number = fscanf($handle, "%d\n");
$count = 0;
while ($number = fscanf($handle, "%d\n")) {
    if ($number > $first_number) $count++;
    $first_number = $number;
}
fclose($handle);
?>
