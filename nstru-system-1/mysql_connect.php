<?php
	$link = mysqli_connect("localhost", "root", "", "nstru_activity_system");
	if(!$link) { exit("Can not connect database"); }
	mysqli_set_charset($link, "utf8");
?>