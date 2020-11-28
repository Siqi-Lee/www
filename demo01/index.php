<?php
$name="世界如烟，一切皆幻";
echo $name;
echo $EOL;
// unset($name);
$a=&$name;
echo $a.$name;
?>