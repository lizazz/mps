<?php
include("controllers/Stats.php");

if (isset($_POST['string'])) {
	echo Stats::show_statistics($_POST['string']);
}
