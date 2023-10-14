<!DOCTYPE html>
<html lang="en">
<head>
<title>Highway Cities Skylines - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Highway Cities Skylines - PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("../../include/google-ads.php"); ?>
	<h1>Highway Cities Skylines - PMC Tactical</h1>
</header>

<section>
	<h2>Outside Connections</h2>

<p>
On the info view (keyboard hotkey I by default) in Outside Connections tab you find import/export data, this is done in the beginning by highway connection to the "outside world".
</p>

<p>
Once your city grows and you get money, you can (and often times will) purchase cargo train terminal, ship harbor / port terminal or even cargo airport. These become outside connections import/export data.
</p>

	<h2>Highway Road</h2>

<p>
Every new savegame begins with just empty terrain and highway road connection.
</p>

<p>
Highway connection goes to and comes from terrain edge.
</p>

<p>
In roads menu you can place highways, it begins with highway ramp and goes all the way up to six lane one way highway.
</p>

<p>
You can use highway roads everywhere in the terrain, even through the city center which kind of feels odd, but sometimes its justified, highway through the city and big roundabout to distribute traffic flow into arterial roads.
</p>

<p>
Most of the time highways are one way roads with several lanes, but there is also two way traffic highway road pieces available, sometimes you can find good use for those.
</p>

<p>
Be careful with transitions from highway to normal roads because the speed difference, this can cause some issues and just looks wrong if you go from 30km/h road to 100km/h just like that.
</p>

	<h2>HOWTO Fix Road Not Connected</h2>

<p>
After you add lets say in-game cloverleaf intersection to your highway outside connection, it might be that vehicles just disappear on the intersection and old highway point where these two connect, vehicles just simply vanish when they arrive to that point "poof!" and no new vehicles get sent from outside the terrain. What is this?
</p>

<p>
It is a game bug, well known game bug apparently. HOWTO fix it? After you create big road changes like intersection, save game, exit to desktop, restart Cities Skylines and load the just saved game. Now roads are "re-calculated" and should work OK.
</p>

<p>
This bug happens quite rarely, out of my dozen or so cloverleaf intersections created, only one (1) had this bug.
</p>

</section>

<footer>
<p>Back to <a href="index.php">PMC Cities Skylines 1 root page</a></p>
<br><br>
<p><i>PMC Cities Skylines 2022 - <?php print(date("Y")); ?>.</i></p>
<?php include("../../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
