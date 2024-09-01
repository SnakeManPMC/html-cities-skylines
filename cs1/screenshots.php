<!DOCTYPE html>
<html lang="en">
<head>
<title>Screenshots Cities Skylines - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Screenshots Cities Skylines - PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Screenshots Cities Skylines - PMC Tactical</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Keyboard Hotkey For Screenshots</h2>

<p>
Cities Skylines game has its own screenshot feature, you don't need to use steam overlay (F12) to take screenshots.
</p>

<p>
Configure screenshot shortcut from in-game menu: options -&gt; keymapping -&gt; shared -&gt; screenshot
</p>

<p>
Saved screenshot images are placed in "C:\Users\YOURNAME\AppData\Local\Colossal Order\Cities_Skylines\Screenshots\" directory.
</p>

<p>
Unfortunately this in-game tool to take screenshots was created by some idiot. First screenshot in the directory is called "Screenshot.png" and second is called "Screenshot 1.png" yes with a empty space character in the file name, haha!
</p>

<p>
Never use special characters in directory or file names. Guess colossal order didn't get that lesson, huh.
</p>

<p>
What this file naming means is that you cannot just F12 grab a screenshot and then use batch file to move the screenshot into your regular Cities Skylines or all games screenshot archive directory because everytime you do that, game reverts to the stupid "Screenshot.png" file name and the next time you do the move it would result in conflicting file names. You would have to configure your screenshot moving bat file to automatically rename the PNGs which is a pain.
</p>

<p>
Easiest solution would probably be to use tool like <a href="https://www.irfanview.com/" target="_blank">irFanview</a> to automatically move / rename the PNGs, but that is one extra software required to simply take some screenshots.
</p>

<p>
I simply cannot believe how stupid the devs are for not adding UTC time stamping into the screenshot file name. Cities Skylines is the first game in history I see with such limited screenshot tool.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>Back to <a href="index.php">PMC Cities Skylines 1 root page</a></p>
<br><br>
<p><i>PMC Cities Skylines 2022 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
