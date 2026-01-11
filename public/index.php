<?php

if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'localhost:80') {
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
	<title>Tech Projects of Hannah A. Patellis</title>
	<?php if($retroTreatment == false) {print('<link rel="stylesheet" type="text/css" href="../assets/style.css">');} ?>
</head>
<body>
	<?php if($retroTreatment == false) { ?>
	<nav>
		<ul class="nav-container">
			<a class="nav-link" href="https://hannahap.com" title="Back to Hannah A. Patellis' website">
				<li class="nav-item"><img id="flag-logo" src="/assets/circle-arrow-left-light.svg" alt="Back arrow" /> Back to hannahap.com</li>
			</a>
		</ul>
	</nav>
	<?php } ?>
	<h1>Introduction</h1>
	<p>Hi friends! I'm Hannah A. Patellis. Welcome to the workbench.</p>
	<p>This site is dedicated to my tech projects, both vintage and not-so-vintage.</p>
	<p>Click a photo to learn more about each device/category. Pages include...</p>
	<ul>
		<li>System specifications</li>
		<li>Upgrades/how-tos</li>
		<li>Software I'm running and where to find it</li>
		<li>...and more!</li>
	</ul>
	<p><?php 
		if($retroTreatment == false) {
			print('You can visit this site on a retro computer without any SSL or CSS! Visit <a href="http://retro.hannahap.com">retro.hannahap.com</a>.');
		} else if ($retroTreatment == true) {
			print('To visit this site with SSL and some CSS styling, visit <a href="https://tech.hannahap.com">tech.hannahap.com</a>.');
		}
	?></p>
	<p>This site and its subpages are written to be viewable on a retro device (oldest tested thus far is Mac OS 7.5 on a 68030 with Netscape 2.02). However most external links will NOT be compatible because of HTTPS or modern code.</p>
	<br />
	<br />
	<table>
		<tr>
			<th style="text-align:left">Retro sites (No SSL)</th>
			<th style="text-align:left">My links</th>
		</tr>
		<tr>
			<td>
				<ul>
					<li><a href="http://frogfind.com/">FrogFind!</a></li>
					<li><a href="http://68k.news/">68k.news</a></li>
					<li><a href="http://www.system7today.com/">System 7 Today</a></li>
					<li><a href="http://www.macintoshlibrarian.com/">Macintosh Librarian</a></li>
					<li><a href="http://theoldnet.com">The Old Net</a></li>
					<li><a href="http://www.mac84.net/">Mac84</a></li>
				</ul>
			</td>
			<td>
				<ul>
					<li>Follow me on Mastodon! <a href="https://oldbytes.space/@hannahpatellis">@hannahpatellis@oldbytes.space</a></li>
					<li>Check out what <a href="/page/general.php">resources, software, hardware, and tools I'm using and YouTubers I'm watching here</a>!</li>
					<li><a href="/page/wishlist.php">My wishlist</a></li>
					<li><a href="#dailydrivers">My daily-drivers</a></li>
					<li><a href="#servers">My servers</a></li>
					<li><a href="#studio">My collection</a></li>
				</ul>
			</td>
		</tr>
	</table>
	<br />
	<br />
	<h2 id="dailydrivers">My daily-drivers</h2>
	<table>
		<tr>
			<td><img src="assets/img/mbp_m1.jpg" height="250px" width="250px" /></td>
			<td>
				<h3>Apple MacBook Pro (14-inch, 2021, M1 Pro)</h3>
				<p>Status: Running macOS 26 (Thaoe)</p>
			</td>
		</tr>
		<tr>
			<td><img src="assets/img/x1.jpg" height="250px" width="250px" /></td>
			<td>
				<h3>Lenovo ThinkPad X1 Carbon (Gen 6 2018, Intel Core i7-8650U)</h3>
				<p>Status: Running Ubuntu 25.10 + Windows 11 Pro</p>
			</td>
		</tr>
	</table>
	<br />
	<br />
	<h2 id="servers">My servers</h2>
	<table>
		<tr>
			<td><a href="/page/homelab.php"><img src="assets/img/homeserver.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/homelab.php"><h3>My Home Lab/Home Server</h3></a>
				<p>Status: Running Ubuntu Server 24.04.3 LTS</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/etower_533id2.php"><img src="assets/img/etower_533id2.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/etower_533id2.php"><h3>eMachines eTower 533id2</h3></a>
				<p>Status: Running Windows 2000 Server SP4</p>
			</td>
		</tr>
	</table>
	<br />
	<br />
	<h2 id="studio">My collection</h2>
	<table>
		<tr>
			<td><a href="/page/se_30.php"><img src="assets/img/se_30.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/se_30.php"><h3>Apple Macintosh SE/30</h3></a>
				<p>Status: Running Mac OS 7.1 on a BlueSCSI V2 with Wi-Fi via DaynaPORT emulation</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/powerbook_g3_pdq.php"><img src="assets/img/powerbook_g3.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/powerbook_g3_pdq.php"><h3>Apple PowerBook G3 Wallstreet II/PDQ</h3></a>
				<p>Status: Running Mac OS 9.2</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/blackbook.php"><img src="assets/img/blackbook.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/blackbook.php"><h3>Apple MacBook (13" 2008, Black) AKA BlackBook</h3></a>
				<p>Status: Running Mac OS X Leopard + Windows Vista Business</p>
				<p>This is the perfect go-between computer for vintage devices!</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/thinkpad_390e.php"><img src="assets/img/thinkpad_390e.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/thinkpad_390e.php"><h3>IBM ThinkPad 390E 2626-D0U</h3></a>
				<p>Status: Running OS/2 Warp 4.52 (CP2 Refresh)</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/thinkpad_x230_tablet.php"><img src="assets/img/thinkpad_x230_tablet.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/thinkpad_x230_tablet.php"><h3>Lenovo ThinkPad X230 Tablet 3437-3KU</h3></a>
				<p>Status: Running Haiku R1 Beta 5</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/evo_n620c.php"><img src="assets/img/evo_n620c.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/evo_n620c.php"><h3>Compaq Evo N620c</h3></a>
				<p>Status: Running Windows XP Professional SP3</p>
			</td>
		</tr>
		<tr>
			<td><img src="assets/img/handhelds.jpg" height="250px" width="250px" /></td>
			<td>
				<h3>Handhelds and PDAs</h3>
				<ul>
					<li>Palm III</li>
					<li>Sony Clié PEG-NX60/U</li>
					<li>Palm Zire 21</li>
					<li>iPod + HP 20GB (4th generation)</li>
					<li>Palm T|X</li>
					<li>Palm LifeDrive</li>
					<li>iPod shuffle (2nd generation)</li>
					<li>Palm Pre Plus (Verizon)</li>
					<li>iPod touch 8GB (4rd generation)</li>
					<li>HP TouchPad</li>
					<li>iPhone 5</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="/page/beepy.php"><img src="assets/img/beepy.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/beepy.php"><h3>Beepy</h3></a>
				<p>Status: Running Buildroot</p>
			</td>
		</tr>
	</table>
	<br />
	<br />
	<h2>Collection archive</h2>
	<ul>
		<li><a href="/page/trs_80_100.php">Radio Shack TRS-80 Model 100</a></li>
		<li><a href="/page/powermac_5500.php">Apple Power Macintosh 5500/225</a></li>
		<li><a href="/page/ibook_g3_clamshell.php">Apple iBook G3 (1st gen clamshell)</a></li>
		<li><a href="/page/powerbook_1400.php">Apple PowerBook 1400c/166</a></li>
		<li><a href="/page/portege_3010ct.php">Toshiba Portégé 3010CT</a></li>
	</ul>
	<br />
	<br />
	<center><img src="assets/img/madewith.gif" height="31px" width="88px" /></center>
	<center><p>Most of these photos were taken with my Palm Pre Plus</p></center>
	<center><p>This site is stored on <a href="https://github.com/hannahpatellis/tech.hannahap">Github</a></p></center>
	<center><p>Follow me on Mastodon! <a href="https://oldbytes.space/@hannahpatellis">@hannahpatellis@oldbytes.space</a></p></center>
</body>
</html>
