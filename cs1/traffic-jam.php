<!DOCTYPE html>
<html lang="en">
<head>
<title>Traffic Jam Cities Skylines - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Traffic Jam Cities Skylines - PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Traffic Jam Cities Skylines - PMC Tactical</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Overview</h2>

<p>
Commercial, industry and office zones generate traffic. When industry sends products to commercial zones you get a lot of vehicles. When goods and materials are imported from outside connection this generates many semi-trucks, box trucks and vans.
</p>

<p>
Residential zones of course generate traffic as well when citizens are driving to work and service vehicles do drive there as well.
</p>

<p>
One of the biggest bottle necks in traffic system is the outside highway connection to your city, this should have good roads built in, roundabout etc system to allow smooth traffic flow.
</p>

<p>
Coal and oil power plants also require semi-truck deliveries, ie heavy vehicles, this generates some traffic. Garbage disposal might be one of the biggest city services traffic generator, all those garbage trucks driving around, its madness in a large city. Even though bus lines are good because they <i>reduce</i> traffic, they actually can CAUSE traffic if designed or used poorly, too many buses stopping in narrow strees is a bad idea.
</p>

	<h2>Small Roads Are Slow</h2>

<p>
Small two lane roads, especially the smallest dirt road is very slow. If you have a lot of traffic, this road type can cause huge gridlock of vehicles.
</p>

<p>
Once you have the money and traffic jams, obviously heh, increase your road width to four or even six lane roads for long distances, surround city centers with these roads and have the local roads as two lane asphalt roads.
</p>

	<h2>Outside Connections</h2>

<p>
Check outside connections import/export tabs, if "goods" importing is large number then increase your generic industry.
</p>

<p>
Industry areas need a quick easy route to commercial zones and outside connection (if you got a lot of exports), this route should NOT go through residential areas because that causes a lot of noise pollution for citizens.
</p>

<p>
When you zone new high density residential, there will be huge number of personal cars driving into the city through highway outside connection. Build intercity bus station, passenger train station, harbor or airport, which all take load off from the private car traffic.
</p>

<p>
See also <a href="highway.php">Highway, HOWTO Fix Road Not Connected</a>.
</p>

	<h2>Cargo Train Terminal</h2>

<p>
Use one way road for cargo train terminal coming from "right side", the first vehicle to turn into the building is the in slot and second is the out, when your one way road comes from "right side" there is no traffic congestion as vehicles will not "collide".
</p>

	<h2>Industrial Zones</h2>

<p>
Build offices around the collector road or industrial zone so that vehicles doing deliveries and pickups always use local roads therefore not blocking traffic when they do a U-turn.
</p>

<p>
If you don't want to use offices in dirty polluted industrial area, then leave one square / unit un-zoned along the collector road which prevents vehicles doing deliveries / pickups.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>Back to <a href="index.php">PMC Cities Skylines 1 root page</a></p>
<br><br>
<p><i>PMC Skylines 2022 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
