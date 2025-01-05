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
	<title>Hannah HQ</title>
	<?php if($retroTreatment == false) {print('<link rel="stylesheet" type="text/css" href="../assets/style.css">');} ?>
</head>
<body>
	<center><h1>Hi! Welcome to Hannah HQ!</h1></center>
	<center><h2><i>Home to cat fur-covered tech, retro bytes, and miscellaneous floating internet stuff.</i></h2></center>
	<br />
	<br />
	<h3>Introduction</h3>
	<p>Hi friend! I'm Hannah A. Patellis. Welcome to headquarters.</p>
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
	<h3 id="dailydrivers">My daily-drivers</h3>
	<table>
		<tr>
			<td><img src="assets/img/mbp_m1.jpg" height="250px" width="250px" /></td>
			<td>
				<h4>Apple MacBook Pro (14-inch, 2021, M1 Pro)</h4>
				<p>Status: Running macOS Sequoia 15.2</p>
			</td>
		</tr>
		<tr>
			<td><img src="assets/img/x1.jpg" height="250px" width="250px" /></td>
			<td>
				<h4>Lenovo ThinkPad X1 Carbon (Gen 6 2018, Intel Core i7-8650U)</h4>
				<p>Status: Running Ubuntu 24.10</p>
			</td>
		</tr>
	</table>
	<br />
	<br />
	<h3 id="servers">My servers</h3>
	<table>
		<tr>
			<td><a href="/page/homelab.php"><img src="assets/img/homeserver.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/homelab.php"><h4>My Home Lab/Home Server</h4></a>
				<p>Status: Running Ubuntu Server 24.04.1 LTS</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/etower_533id2.php"><img src="assets/img/etower_533id2.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/etower_533id2.php"><h4>eMachines eTower 533id2</h4></a>
				<p>Status: Running Windows 2000 Server SP4</p>
			</td>
		</tr>
	</table>
	<br />
	<br />
	<h3 id="studio">My studio</h3>
	<table>
		<tr>
			<td><a href="/page/se_30.php"><img src="assets/img/se_30.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/se_30.php"><h4>Apple Macintosh SE/30</h4></a>
				<p>Status: Running Mac OS 7.5 on a BlueSCSI V2 with Wi-Fi via DaynaPORT emulation</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/powerbook_1400.php"><img src="assets/img/powerbook_1400.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/powerbook_1400.php"><h4>Apple PowerBook 1400c/166</h4></a>
				<p>Status: Running Mac OS 7.6</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/powerbook_g3_pdq.php"><img src="assets/img/powerbook_g3.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/powerbook_g3_pdq.php"><h4>Apple PowerBook G3 Wallstreet II/PDQ</h4></a>
				<p>Status: Running Mac OS 9.2</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/blackbook.php"><img src="assets/img/blackbook.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/blackbook.php"><h4>Apple MacBook (13" 2008, Black) AKA BlackBook</h4></a>
				<p>Status: Running Mac OS X Leopard + Windows Vista Business</p>
				<p>This is the perfect go-between computer for vintage devices!</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/thinkpad_390e.php"><img src="assets/img/thinkpad_390e.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/thinkpad_390e.php"><h4>IBM ThinkPad 390E 2626-D0U</h4></a>
				<p>Status: Running OS/2 Warp 4.52 (CP2 Refresh)</p>
			</td>
		</tr>
		<tr>
			<td><a href="/page/thinkpad_x230_tablet.php"><img src="assets/img/thinkpad_x230_tablet.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/thinkpad_x230_tablet.php"><h4>Lenovo ThinkPad X230 Tablet 3437-3KU</h4></a>
				<p>Status: Running Kubuntu 24.10 (Ubuntu + KDE Plasma 6.1)</p>
			</td>
		</tr>
		<tr>
			<td><img src="assets/img/handhelds.jpg" height="250px" width="250px" /></td>
			<td>
				<h4>Handhelds and PDAs</h4>
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
					<li>iPhone 6S</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="/page/beepy.php"><img src="assets/img/beepy.jpg" height="250px" width="250px" /></a></td>
			<td>
				<a href="/page/beepy.php"><h4>Beepy</h4></a>
				<p>Status: Running Buildroot</p>
			</td>
		</tr>
	</table>
	<br />
	<br />
	<h4>Studio archive</h4>
	<ul>
		<li><a href="/page/trs_80_100.php">Radio Shack TRS-80 Model 100</a></li>
		<li><a href="/page/powermac_5500.php">Apple Power Macintosh 5500/225</a></li>
		<li><a href="/page/ibook_g3_clamshell.php">Apple iBook G3 (1st gen clamshell)</a></li>
	</ul>
	<br />
	<br />
	<center><img src="assets/img/madewith.gif" height="31px" width="88px" /></center>
	<center><p>Most of these photos were taken with my Palm Pre Plus</p></center>
	<center><p>This site is stored on <a href="https://github.com/hannahpatellis/retro.hannahap">Github</a></p></center>
	<center><p>Follow me on Mastodon! <a href="https://oldbytes.space/@hannahpatellis">@hannahpatellis@oldbytes.space</a></p></center>
</body>
</html>
