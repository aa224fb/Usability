<div id="navContainer">
		<nav>
			<ul>
				<li><a href="index.php" <?php if(basename($_SERVER["SCRIPT_FILENAME"]) == 'index.php'){ ?>class="current" <?php } ?>><?= $lang['MENU_HOME']; ?></a></li>
				<li><a href="price.php" <?php if(basename($_SERVER["SCRIPT_FILENAME"]) == 'price.php'){ ?>class="current" <?php } ?>><?= $lang['MENU_PRICES']; ?></a></li>
				<li><a href="boka.php" <?php if(basename($_SERVER["SCRIPT_FILENAME"]) == 'boka.php'){ ?>class="current" <?php } ?>><?= $lang['MENU_APPOINTMENT']; ?></a></li>
				<li><a href="about.php" <?php if(basename($_SERVER["SCRIPT_FILENAME"]) == 'about.php'){ ?>class="current" <?php } ?>><?= $lang['MENU_ABOUT_US']; ?><span class="arrow"></span></a>
					<ul class="drop">
						<li><a href="employees.php"><?= $lang['MENU_EMPLOYEES']; ?></a></li>
					</ul>
				</li>
				<li><a href="contact.php" <?php if(basename($_SERVER["SCRIPT_FILENAME"]) == 'contact.php'){ ?>class="current" <?php } ?>><?= $lang['MENU_CONTACT']; ?></a></li>
				<li><a href="advice.php" <?php if(basename($_SERVER["SCRIPT_FILENAME"]) == 'advice.php'){ ?>class="current" <?php } ?>><?= $lang['MENU_ADVICES']; ?><span class="arrow"></span></a>
					<ul class="drop">
						<li><a href="#"><?= $lang['MENU_VISIT']; ?></a></li>
						<li><a href="#"><?= $lang['MENU_DOG']; ?></a></li>
						<li><a href="#"><?= $lang['MENU_RABBIT']; ?></a></li>
						<li><a href="#"><?= $lang['MENU_CAT']; ?></a></li>	
						<li><a href="#"><?= $lang['MENU_GPIG']; ?></a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>