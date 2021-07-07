<?php 
include("includes/header.php"); ?>
<section>
	<h1><?= $lang['BOOKING_H1']; ?></h1>
	<p><?= $lang['BOOKING_P']; ?></p>
	<!--Slider som visar det tänkta bokningssystemet-->
	<div id="slider">
		<ul class="slides">
			<li class="slide selected"><img src="images/bokningssystemdel1.png" alt="<?= $lang['ALT_BOOKING']; ?>"></li>
			<li class="slide"><img src="images/bokningssystemdel2.png" alt="<?= $lang['ALT_BOOKING']; ?>"></li>
			<li class="slide"><img src="images/bokningssystemdel3.png" alt="<?= $lang['ALT_BOOKING']; ?>"></li>
			<li class="slide"><img src="images/bokningssystemdel4.png" alt="<?= $lang['ALT_BOOKING']; ?>"></li>
		</ul>
	</div>
<div id="buttons">
	<input type="button" id="prev" value="Tillbaka">
	<input type="button" id="next" value="Nästa">
</div>
</section>
</script>
<?php include("includes/footer.php"); ?>
