<?php
//NAME: APmeridian
//TYPE: Function
//AUTHOR: Curtis Oden:coden@bravozulu.bz
//Function to reformat time meridian (am,pm,a.m.,p.m.,AM,PM,etc.) to comply with AP Style.
function APtime($timestring){
$APstyleTime = (str_replace(array("am","pm","AM","PM","A.M.","P.M."), array("a.m.", "p.m.","a.m.", "p.m.","a.m.", "p.m."), $timestring));
return $APstyleTime;
}
?>