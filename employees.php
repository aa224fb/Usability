<?php 
include("includes/header.php"); ?>
<section>
	<h1><?= $lang['EMPLOYEE_HEADING']; ?></h1>
	<!--Information och bild på varje anställd-->
	<div class="employees">
		<img src="images/placeholder.png" alt="<?= $lang['ALT_PLACEHOLDER']; ?>">
		<h2>Ann Carlsson</h2>
		<span class="title"><?= $lang['EMPLOYEE_TITLE1']; ?></span>
		<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Proin rhoncus est nibh, pharetra sodales dolor fringilla sit amet.</p>
	</div>
		<div class="employees">
		<img src="images/placeholder.png" alt="<?= $lang['ALT_PLACEHOLDER']; ?>">
		<h2>Egon Andersson</h2>
		<span class="title"><?= $lang['EMPLOYEE_TITLE1']; ?></span>
		<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Proin rhoncus est nibh, pharetra sodales dolor fringilla sit amet.</p>
	</div>
		<div class="employees">
		<img src="images/placeholder.png" alt="<?= $lang['ALT_PLACEHOLDER']; ?>">
		<h2>Meg Smith</h2>
		<span class="title"><?= $lang['EMPLOYEE_TITLE2']; ?></span>
		<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Proin rhoncus est nibh, pharetra sodales dolor fringilla sit amet.</p>
	</div>
		<div class="employees">
		<img src="images/placeholder.png" alt="<?= $lang['ALT_PLACEHOLDER']; ?>">
		<h2>Aron Lucas</h2>
		<span class="title"><?= $lang['EMPLOYEE_TITLE2']; ?></span>
		<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Proin rhoncus est nibh, pharetra sodales dolor fringilla sit amet.</p>
	</div>
		<div class="employees">
		<img src="images/placeholder.png" alt="<?= $lang['ALT_PLACEHOLDER']; ?>">
		<h2>Pål Pålsson</h2>
		<span class="title"><?= $lang['EMPLOYEE_TITLE3']; ?></span>
		<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Proin rhoncus est nibh, pharetra sodales dolor fringilla sit amet.</p>
	</div>
		<div class="employees">
		<img src="images/placeholder.png" alt="<?= $lang['ALT_PLACEHOLDER']; ?>">
		<h2>Katrin Larsson</h2>
		<span class="title"><?= $lang['EMPLOYEE_TITLE4']; ?></span>
		<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Proin rhoncus est nibh, pharetra sodales dolor fringilla sit amet.</p>
	</div>
</section>
<!--Sidebar-->
<aside>
<!--Inkludera ikoner för socialmedia-->
<?php include('includes/socialmedia.php'); ?>
</aside>
<!--Footer-->
<?php include("includes/footer.php"); ?>