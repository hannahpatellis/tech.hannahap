<?php

$title = "SQFMI Beepy";
require_once("../partial/page-header.php");

?>

<h2><?php print($title); ?></h2>

<img src="../assets/img/beepy.jpg" height="250px" width="250px" />
<p><a href="https://beepy.sqfmi.com">What's a SQFMI Beepy?? https://beepy.sqfmi.com</a></p>
<h3>Status + specifications</h3>
<p>Status: Running Buildroot</p>
<ul>
  <li>Sharp Memory LCD 2.7″ (400x240)</li>
  <li>Powered by a Raspberry Pi Zero 2 W</li>
  <li>16GB microSD</li>
</ul>
<ul>
  <li>Blackberry keyboard + backlight + touchpad (mine is Latin + Arabic!)</li>
  <li>Programmable RGB LED for notifications</li>
  <li>Programmable side button</li>
  <li>Onboard RP2040 MCU (for keyboard and peripherals control)</li>
  <li>GPIOs breakout</li>
  <li>USB-C programming & charging</li>
  <li>2000mAh LiPo battery</li>
  <li>74mm x 104mm x 15mm</li>
</ul>
<br />

<h3>Software</h3>
<ul>
  <li><a href="https://github.com/ardangelo/beepberry-rp2040/releases">Running firmware v3.8</a></li>
  <li><a href="https://github.com/ardangelo/beepberry-buildroot/releases">Running Buildroot v1.2</a>
    <ul>
      <li>gomuks: Beeper command line client</li>
      <li>mosh: Mobile remote shell</li>
      <li>w3m: Text based browser</li>
      <li>aerc: Command line email client</li>
      <li>nmtui: Network management</li>
      <li>Python 3 with pip</li>
    </ul>
  </li>
</ul>

<?php require_once("../partial/page-footer.php"); ?>