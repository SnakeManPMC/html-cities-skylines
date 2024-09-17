<!DOCTYPE html>
<html lang="en">
<head>
<title>Roundabout Cities Skylines - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Roundabout Cities Skylines - PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Roundabout Cities Skylines - PMC Tactical</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Overview</h2>

<p>
Roundabout helps to prevent <a href="traffic-jam.php">traffic jams</a> by allowing free flowing traffic through a busy intersection.
</p>

<p>
See also <a href="highway.php">Highway, HOWTO Fix Road Not Connected</a>.
</p>

	<h2>Creating Roundabout</h2>

<p>
Use dirt road as its narrow and cheap. Place straight road from north to south so that cost shows at least 100, 120 maybe 140.
</p>

<p>
Then from the center of that road create one going east with cost 140, then another one from the center going west cost 140.
</p>

<p>
Now switch to curve road tool, click north tip and move mouse towards east until road grid tool shows it matches the eastern road tip, click and then just drag down and another click to finish the round curve road from north tip to east tip. Then repeat the same procedure for south and west completing the roundabout circle.
</p>

<p>
Once its done leave the cross "x" in the middle, then use road upgrade tool with whatever road type you prefer, but usually its two lane one way or three lane one way road, important thing is to have it ONE WAY road. It doesn't really matter which direction the road is going, just make it one way.
</p>

<p>
Now you can connect roads coming from these compass headings (N, E, S and W) to this roundabout.
</p>

<p>
Once all the other road connections are made, now you are free to delete the dirt road cross "x" from the center. If you delete it before connecting the other roads then game engine adjusts the roundabout road pieces and you don't want that.
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
