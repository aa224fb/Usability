<?php
include("includes/header.php"); ?>
<section>
<h1><?= $lang['PRICE_H1']; ?></h1>
	<p><?= $lang['PRICE_INTRO']; ?><br><a href="includes/prislista.pdf"><?= $lang['PRICE_PDF']; ?></a></p>
	<!--Tabell för priser-->
	<!--Allmänna priser-->
	<table>
		<caption><?=$lang['PRICE_H21']; ?></caption>
		<thead>
			<tr>
				<th><?= $lang['TABLE_HEADER1']; ?></th>
				<th><?= $lang['TABLE_HEADER2']; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $lang['TABLE_TREAT1']; ?></td>
				<td>550 kr</td>
			</tr>
			<tr class="second">
				<td><?= $lang['TABLE_TREAT2']; ?></td>
				<td>300 kr</td>
			</tr>
		</tbody>
	</table>
	<!--Priser för hund-->
	<table>
		<caption><?=$lang['PRICE_H22']; ?></caption>
		<thead>
			<tr>
				<th><?= $lang['TABLE_HEADER1']; ?></th>
				<th><?= $lang['TABLE_HEADER2']; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $lang['TABLE_TREAT3']; ?></td>
				<td>340 kr</td>
			</tr>
			<tr class="second">
				<td><?= $lang['TABLE_TREAT4']; ?></td>
				<td>700 kr</td>
			</tr>
			<tr>
				<td><?= $lang['TABLE_TREAT5']; ?></td>
				<td>4200 kr</td>
			</tr>
			<tr class="second">
				<td><?= $lang['TABLE_TREAT6']; ?></td>
				<td>2500 kr</td>
			</tr>
			<tr>
				<td><?= $lang['TABLE_TREAT7']; ?></td>
				<td>400 kr</td>
			</tr>
			<tr class="second">
				<td><?= $lang['TABLE_TREAT8']; ?></td>
				<td>350 kr</td>
			</tr>
			<tr>
				<td><?= $lang['TABLE_TREAT9']; ?></td>
				<td>1350 kr</td>
			</tr>
		</tbody>
	</table>
	<!--Priser för katt-->
	<table>
		<caption><?=$lang['PRICE_H23']; ?></caption>
		<thead>
			<tr>
				<th><?= $lang['TABLE_HEADER1']; ?></th>
				<th><?= $lang['TABLE_HEADER2']; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $lang['TABLE_TREAT10']; ?></td>
				<td>340 kr</td>
			</tr>
			<tr class="second">
				<td><?= $lang['TABLE_TREAT4']; ?></td>
				<td>500 kr</td>
			</tr>
			<tr>
				<td><?= $lang['TABLE_TREAT11']; ?></td>
				<td>1190 kr</td>
			</tr>
			<tr class="second">
				<td><?= $lang['TABLE_TREAT12']; ?></td>
				<td>520 kr</td>
			</tr>
			<tr>
				<td><?= $lang['TABLE_TREAT7']; ?></td>
				<td>400 kr</td>
			</tr>
			<tr class="second">
				<td><?= $lang['TABLE_TREAT8']; ?></td>
				<td>350 kr</td>
			</tr>
			<tr>
				<td><?= $lang['TABLE_TREAT9']; ?></td>
				<td>1050 kr</td>
			</tr>
		</tbody>
	</table>
	<!--Priser för kanin och marsvin-->
	<table>
		<caption><?=$lang['PRICE_H24']; ?></caption>
		<thead>
			<tr>
				<th><?= $lang['TABLE_HEADER1']; ?></th>
				<th><?= $lang['TABLE_HEADER2']; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $lang['TABLE_TREAT13']; ?></td>
				<td>250 kr</td>
			</tr>
			<tr class="second">
				<td><?= $lang['TABLE_TREAT14']; ?></td>
				<td>950 kr</td>
			</tr>
			<tr>
				<td><?= $lang['TABLE_TREAT15']; ?></td>
				<td>450 kr</td>
			</tr>
			<tr class="second">
				<td><?= $lang['TABLE_TREAT8']; ?></td>
				<td>350 kr</td>
			</tr>
		</tbody>
	</table>
</section>
<!--Sidebar-->
<aside>
<article>
	<h3 class="asideHeading"><?= $lang['PAYI_H2']; ?></h3>
	<p><?= $lang['PAYI_P']; ?></p>
</article>
<!--Inkludera ikoner för socialmedia-->
<?php include('includes/socialmedia.php'); ?>
</aside>
<!--Footer-->
<?php include("includes/footer.php"); ?>