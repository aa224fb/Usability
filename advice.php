<?php 
include("includes/header.php"); ?>
<section>
<h1><?= $lang['ADVICE_H1']; ?></h1>
<p><?= $lang['ADVICE_P']; ?></p>
<img src="images/whitedog.jpg" alt="<?= $lang['ALT_ADVICE']; ?>">
</section>
<!--Sidebar-->
<aside>
<article>
	<h3 class="asideHeading">Tips och Råd</h3>
	<ul>
		<li><a href="#"><?= $lang['ADVICE_LINK1']; ?></a></li>
		<li><a href="#"><?= $lang['ADVICE_LINK2']; ?></a></li>
		<li><a href="#"><?= $lang['ADVICE_LINK3']; ?></a></li>	
		<li><a href="#"><?= $lang['ADVICE_LINK4']; ?></a></li>
		<li><a href="#"><?= $lang['ADVICE_LINK5']; ?></a></li>
	</ul>
</article>
<!--Inkludera ikoner för socialmedia-->
<?php include('includes/socialmedia.php'); ?></aside>
<!--Footer-->
<?php include("includes/footer.php"); ?>