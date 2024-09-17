<!DOCTYPE html>
<html lang="en">
<head>
<title>Roads Cities Skylines - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Roads Cities Skylines - PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Roads Cities Skylines - PMC Tactical</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Road Hierarchy</h2>

<p>
Road hierarchy in Cities Skylines. First (highest on the below list) is more mobility while last (lowest on the list) is more access.
</p>

<ul>
<li>
highway
</li>

<li>
arterial
</li>

<li>
collector
</li>

<li>
local
</li>
</ul>

	<h2>General Road Info</h2>

<p>
<b>Highway</b> is what you find in all "New Game" starts, every new terrain begins with open highway outside connection to your first terrain grid tile. Highways are three lane 100km/h speed roads, very fast, very mobile.
</p>

<p>
<b>Arterial</b> road is the six lane road. Connect arterial roads to a highway. Arterial road goes through or perhaps on the outskirts of the city and collector roads are connected to it. Do not add too many collector road connections because intersections, even roundabouts slow the arterial road traffic. Avoid 4 way intersections on arterial road. Do not use traffic lights in arterial road, they do not belong to this high speed road.
</p>

<p>
<b>Collector</b> road is four lane road, going through a community. Four lane road (medium roads tab). In the beginning with little money use small dirt roads coming out of the four lane collector road.
</p>

<p>
<b>Local</b> road is dirt road in the beginning (cheap) and later its upgraded to two lane asphalt road (small road tab).
</p>

<p>
Road and railroad bridges should be created first and only then create rest of the road, you have finer control for the bridge part.
</p>

<p>
Traffic routes dialog, click adjust road tab, select your road, then make it priority road and all your traffic lights automatically have stop signs on the local roads.
</p>

<p>
Upgrade local dirt roads to small two lane roads when city grows over 5,000 population, or well when it looks like you need to improve them a bit.
</p>

<p>
Road upgrade button when used with same road type it will revert direction in one way roads.
</p>

<p>
See also <a href="highway.php">Highway, HOWTO Fix Road Not Connected</a>.
</p>

	<h2>Good City Roads</h2>

<p>
Question: are 6 lane 2 way roads good for cities?<br>
Answer: YES <img src="https://www.pmctactical.org/images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
When you use the roads with trees pre planted on them, those reduce noise pollution a bit and of course look a bit more nicer than plain asphalt on the ground.
</p>

	<h2>Conclusion</h2>

<p>
Yeah but how does these roads actually work in-game?
</p>

<p>
In-game building menu has the right most road tab the largest roads, highways. Next to the left is 6 lane roads which are arterial, next is 4 lane collectors, and finally the left most is 2 lane roads which are local roads.
</p>

<p>
What this means is, today at 2022-03-13T21:06:00Z I have spent all my Cities Skylines life placing only those local roads haha! Well almost, I have used the larger roads few times but very rarely, my feeling and experience is that once you build your city road design, its almost impossible to upgrade the 2 lane road to 6 lane unless you want to demolish everything around that road. If there are city services then you simply cant upgrade, you have to move or bulldoze the service building.
</p>

<p>
2022-07-30
</p>

<p>
Last nights game-play in "snake04" savegame I basically demolished my 170k population city by replacing key dirt roads with six lane roads instead. I had to move several service building which was real easy, no big deal, the zoning around the road went bad of course and buildings were de-zoned.
</p>

<p>
Overall; don't be chicken shit pussy, just upgrade the roads when you got enough cash and traffic.
</p>

	<h2>Examples</h2>

<p>
Tested new road grid, 22u * 10u, meaning twenty two units times ten units road creation. Lemme show you.
</p>

<a href="screenshots/Cities-Skylines-2022-08-30T0907.jpg" target="_blank"><img src="screenshots/thumbs/Cities-Skylines-2022-08-30T0907.jpg" class="terrainimg" loading="lazy" alt="PMC Cities Skylines Screenshot"></a>

<p>
Colors are just for reference. One of those road grids allows nice fit for five 4 x 4 unit zone blocks. Hmm I might start to use it, even though its much harded to create in the first place, but dunno never even realized that now I'm done two 4 x 4 PLUS two units heh.
</p>

<p>
The next batch of high density residential zoning goes slowly with one 4 x 4 block at the time in row, what I mean is its 4 x gazillion in a row. Its still a lot and easy to zone, but its not nearly as much as zoning 8 x full row which definitely causes traffic jams. I could go even smaller blocks, but then it becomes hard to differentiate normal traffic and the convoys of private cars moving into the city.
</p>

<p>
2D top-down view of the "row" I'm talking about, dunno cant be bothered to count how many 4 x length of the row that is, its quite long.
</p>

<a href="screenshots/Cities-Skylines-2022-08-30T2237.jpg" target="_blank"><img src="screenshots/thumbs/Cities-Skylines-2022-08-30T2237.jpg" class="terrainimg" loading="lazy" alt="PMC Cities Skylines Screenshot"></a>

<p>
Quote: <i>I'm going to test zoning using long roads without "side roads" err dunno how to explain, and use pedestrian walking paths between every two 4 x 4 unit building zone blocks. Err OK screenshot time.</i>
</p>

<a href="screenshots/Cities-Skylines-2022-09-02T0235.jpg" target="_blank"><img src="screenshots/thumbs/Cities-Skylines-2022-09-02T0235.jpg" class="terrainimg" loading="lazy" alt="PMC Cities Skylines Screenshot"></a>

<p>
As you can see there is 1 unit empty space between each two building blocks. I don't have the road width correct yet, I think its now 10 unit per err grid guide line, I need to find a way to make two building blocks - pedestrian path - two building blocks - pedestrian path and two more building blocks before the next "side road", hope that clears it up <img src="https://www.pmctactical.org/images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
On the next low density residential expansion I used this kind of criss cross pattern for road grid, limit 4 way intersections.
</p>

<a href="screenshots/Cities-Skylines-2022-09-02T0301.jpg" target="_blank"><img src="screenshots/thumbs/Cities-Skylines-2022-09-02T0301.jpg" class="terrainimg" loading="lazy" alt="PMC Cities Skylines Screenshot"></a>

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
