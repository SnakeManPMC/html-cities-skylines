<!DOCTYPE html>
<html lang="en">
<head>
<title>Garbage Cities Skylines - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Garbage Cities Skylines - PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Garbage Cities Skylines - PMC Tactical</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Cities Skylines Garbage Collection and Disposal</h2>

<p>
<b>2022-07-27T17:30:00Z</b>
</p>

<p>
<a href="https://skylines.paradoxwikis.com/Garbage_disposal" target="_blank">Official paradox garbage disposal wiki</a> page.
</p>

<p>
Garbage / trash collection more specifically. In-game you can see garbage statistics when you open info view - garbage tab. The panel shows landfill usage, garbage processing status.
</p>

<a href="screenshots/Cities-Skylines-2022-08-04T0304.jpg" target="_blank"><img src="screenshots/thumbs/Cities-Skylines-2022-08-04T0304.jpg" class="terrainimg" loading="lazy" alt="PMC Cities Skylines Screenshot"></a>

<p>
More detailed statistics are landfill storage, landfill capacity, garbage production units / week, and processing capacity units / week.
</p>

<p>
The best garbage solution is incineration plant with proper road connections (no traffic jams).
</p>

	<h2>Landfill Site</h2>

<p>
Landfill site is a huge pile of garbage in the slightly large area it covers, it sends out 15 garbage trucks and has capacity of 8 million units. Pollution 100.
</p>

<p>
Once landfill site is full it stops accepting more garbage (well doh). Then you need to empty it, garbage trucks are sent to deliver garbage into incineration plants.
</p>

<p>
Landfill site cannot be bulldozed demolished when there are any garbage, just like other storage facility buildings (like cemetery), they need to be empty.
</p>

	<h2>Incineration Plant</h2>

<p>
<b>Incineration plant is The Best garbage collecting option in Cities Skylines.</b>
</p>

<p>
Incineration plant is a large building which burns garbage, it sends out 27 garbage trucks to collect garbage and garbage will just disappear, processing rate 48k units / week, power output 12 megawatts. Requires water 192m3 / week. Pollution 100, noise pollution 50.
</p>

<p>
This is a very simple functioning building, it collects garbage and gets rid of it, no questions asked. You don't need to empty it, its all automatic; garbage in power out.
</p>

<p>
Distribute incineration plants so garbage trucks have easy access to every part of the city, do not create huge garbage processing centers to minimize pollution, such mega site just causes traffic jams.
</p>

<p>
Incineration plant sends garbage trucks out to great distances. Its both annoying and great at the same time. Its great when you see garbage collecting working OK, but it annoys you if you place an incineration plant to lets say west side of the city but it sends trucks all over the city even in the far edges of opposite east side completely against what you had in mind when placing the plant. Don't worry about incineration plants location as it will send trucks where it needs to, just keep a fair distance to avoid pollution getting there it doesn't belong.
</p>

<p>
One option for incinerator plant placement is on industrial zones, either generic, oil or ore industry. Farming and forestry will tolerate some pollution but they are not immune to it, choose generic / oil / ore industry zones. Good idea would be to not have a massive industry zone somewhere away from the city (downtown), but instead of having few smaller industry areas distributed across the city.
</p>

	<h2>Recycling Center</h2>

<p>
Medium size narrow building (PMCTODO specifications missing). It pollutes very little but JUST enough to make residents sick so do not put it into a residential zone, have some parks or commercial or office buildings surrounding it. This building collects garbage and recycles it, once process is done it sends truck to deliver PMCTODO material to PMCTODO buildings or it could simply export it through highway or train, harbor etc.
</p>

<p>
Recycling center is "cute" building, meaning it might be a nice option at new savegame start, but once you have access to incinerator plant you really have no use for recycling centers anymore, unless you want to "role-play" using them to make a very little of PMCTODO material.
</p>

<p>
Recycling center comes from a DLC.
</p>


	<h2>Waste Transfer Facility</h2>

<p>
Waste Transfer Facility is narrow building, capacity 250k, garbage trucks 20. Pollution 10, noise pollution 25. Water 240m3 / week, electricity 480 KW. This building pollutes less than the waste processing complex so this can be placed closer to city center.
</p>

<p>
This building is annoying as it gets the "building is full" icon appearing which triggers you to get scared that something is wrong, nothing is wrong, building just shows its full and once waste processing complex garbage trucks come and pickup garbage the icon disappears again. But yeah, its annoying, I really don't like to see the icon.
</p>

<p>
Its important to understand that <b>Waste Transfer Facility building will pollute</b>. This is not some miracle cure non polluting fantasy building, it will make your nearby building residences sick. Waste transfer facility should be placed surrounded by commercial or office buildings, or just that far away from residential buildings as needed.
</p>

<p>
Waste transfer facilities count as landfill storage in garbage info panel.
</p>

<p>
Waste transfer facility comes from a DLC.
</p>

	<h2>Waste Processing Complex</h2>

<p>
Waste Processing Complex is a huge building, cannot directly collect garbage from buildings, it sends out garbage trucks to collect from waste transfer facilities and landfill sites. Processing rate 192k units / week, power output 40 MW, garbage trucks 15. Water 480m3 / week. Pollution 250, noise pollution 100.
</p>

<p>
Waste processing complex comes from a DLC.
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
