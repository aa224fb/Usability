<?php 
include("includes/header.php"); ?>
<section>
<h1><?= $lang['CONTACT_H1']; ?></h1>
<p><span class="bold"><?= $lang['FOOTER_PHONE']; ?></span> 046 - 46 46 46<br>
<span class="bold">E-mail:</span> <a href="mailto:info@lundaveterinaren.com">info@lundaveterinaren.com >></a><br>
<?= $lang['CONTACT_NOEMAIL']; ?></p>
<h2><?= $lang['CONTACT_FIND']; ?></h2>
<!--Div för karta-->
<div id="map">
</div>
</section>
<!--Sidebar med kontaktinfo-->
<aside>
<article>
	<h3 class="asideHeading"><?= $lang['CONTACT_H22']; ?></h3>
	<p>Trollebergsvägen 7<br>
	223 45 Lund</p>
</article>
<article>
	<h3 class="asideHeading"><?= $lang['CONTACT_H21']; ?></h3>
	<p><?= $lang['FOOTER_TIMES']; ?></p>
<!--Inkludera ikoner för socialmedia-->
<?php include('includes/socialmedia.php'); ?>
</aside>
<!--Footer-->
<?php include("includes/footer.php"); ?>