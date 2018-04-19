<?php
include("controllers/Stats.php");

/**
 * controller for main function
 */
if (isset($_POST['string'])) {
	echo Stats::show_statistics($_POST['string']);
}
