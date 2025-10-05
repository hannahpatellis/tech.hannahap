<?php

if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'localhost:8083') {
	$retroTreatment = false;
} else if($_SERVER['HTTP_HOST'] == 'retro.hannahap.com') {
	$retroTreatment = true;
} else if($_SERVER['HTTP_HOST'] == 'tech.hannahap.com') {
	$retroTreatment = false;
} else {
	$retroTreatment = true;
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title><?php print($title); ?> | Tech Projects of Hannah A. Patellis</title>
	<?php if($retroTreatment == false) {print('<link rel="stylesheet" type="text/css" href="../assets/style.css">');} ?>
</head>
<body>
	<center><h1>Tech projects of <a href="/index.php">Hannah A. Patellis</a></h1></center>
	<br />
	<br />