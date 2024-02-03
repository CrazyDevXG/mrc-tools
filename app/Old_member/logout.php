<?php
session_start();

unset($_SESSION['MyID']);
session_destroy();
	
	header("location: ../login");

?>