<?php 
include("includes/header.php"); ?>
<div id="banner"><img src="images/dogbear.jpg" alt="<?= $lang['ALT_LOGO'];?>"></div>
<span id="slogan"><?= $lang['SLOGAN']; ?></span>
<section>
	<h1><?= $lang['HEADING']; ?></h1>
	<p><?= $lang['INTRODUCTION']; ?></p>
	<article class="frontShort">
		<h3><?=$lang['HEADING1'] ?></h3>
		<p><?=$lang['TEXT1'] ?></p>
			<a href="advice.php"><?=$lang['LINK1'] ?></a>
	</article>
	<article class="frontShort">
		<h3><?=$lang['HEADING2'] ?></h3>
		<p><?=$lang['TEXT2'] ?></p>
		<a href="boka.php"><?=$lang['LINK2'] ?></a>
	</article>
</section>
<aside id="startNews">
<h3 class="asideHeading"><?=$lang['ASIDE_HEADING1']; ?></h3>
<article>
	<h4><?=$lang['ASIDE_HEADING2']; ?> 3</h4>
	<span>2016-05-14</span>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Proin rhoncus est nibh, pharetra sodales dolor fringilla sit amet. 
		<br><a href="#"><?=$lang['LINK3'] ?></a></p>
</article>
<article>
	<h4><?=$lang['ASIDE_HEADING2']; ?> 2</h4>
	<span>2016-05-11</span>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Proin rhoncus est nibh, pharetra sodales dolor fringilla sit amet. 
		<br><a href="#"><?=$lang['LINK3'] ?></a></p>
</article>
<article>
	<h4><?=$lang['ASIDE_HEADING2']; ?> 1</h4>
	<span>2016-05-08</span>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Proin rhoncus est nibh, pharetra sodales dolor fringilla sit amet. 
		<br><a href="#"><?=$lang['LINK3'] ?></a></p>
</article>
<?php include('includes/socialmedia.php'); ?>
</aside>
<?php include("includes/footer.php"); ?>