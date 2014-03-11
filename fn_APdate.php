<?php
//NAME: APdate
//TYPE: Function
//AUTHOR: Curtis Oden:coden@bravozulu.bz
//Function to reformat dates (months) to comply with AP Style.
function APdate($datestring){
$APstyleDate = (str_replace(array(
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December"
),
array(
"Jan.",
"Feb.",
"March",
"April",
"May",
"June",
"July",
"Aug.",
"Sept.",
"Oct.",
"Nov.",
"Dec."
), $datestring));
return $APstyleDate;
}
?>