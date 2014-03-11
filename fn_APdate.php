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
"December",
"Mar.",
"Apr.",
"Jun.",
"Jul.",
"Sep.",
"Jan",
"Feb",
"Mar",
"Apr",
"May",
"Jun",
"Jul",
"Aug",
"Sep",
"Oct",
"Nov",
"Dec"
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
"Dec.",
"March",
"April",
"June",
"July",
"Sept.",
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