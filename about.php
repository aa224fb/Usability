<?php 
include("includes/header.php"); ?>
<section>
	<h1><?= $lang['ABOUT_H1']; ?></h1>
	<p><?= $lang['ABOUT_P']; ?></p>
	<img src="images/cat.jpg" alt="<?= $lang['ALT_ABOUT']; ?>">
</section>
<aside>
<article>
	<h3 class="asideHeading"><?= $lang['ABOUT_ASIDEH3'] ; ?></h3>
	<p><a href="employees.php"><?= $lang['ABOUT_ASIDELINK']; ?></a></p>
</article>
<?php include('includes/socialmedia.php'); ?>
</aside>
<?php include("includes/footer.php"); ?>