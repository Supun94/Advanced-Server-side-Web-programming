<?php
$address = "10 Downing Street, Whitehall, London, SW1";
$word = explode(",", $address);
foreach ($word as $address) {
	echo $address . "<br>";
}

