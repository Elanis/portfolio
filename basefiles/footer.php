	<footer>
		<table>
			<tr class="first-footer">
				<td>		
					<ul>
						<li><h3>Elanis</h3></li>
						<li><a href="/"><?php echo MENU_HOME; ?></a></li>
						<li><a href="https://01.cdn.elanis.eu/portfolio/pdf/CV_Axel_Soupe_Elanis_FR.pdf">CV (FR)</a></li>
						<li><a href="https://01.cdn.elanis.eu/portfolio/pdf/CV_Axel_Soupe_Elanis_EN.pdf">CV (EN)</a></li>
						<li><a href="contact"><?php echo MENU_CONTACT; ?></a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><h3><?php echo PROJECT_WEBSITE; ?></h3></li>
						<li><a href="https://dehash.me">Dehash.me</a></li>
						<li><a href="https://howtoopen.me">HowToOpen.me</a></li>
						<li><a href="https://randomeme.xyz">Randomeme</a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><h3><?php echo PROJECT_GAME; ?></h3></li>
						<li><a href="https://galactae.eu">Galactae: Space Age Dawn</a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><h3>Reseaux Sociaux</h3></li>
						<li><a href="https://www.facebook.com/elanisgaming/">Facebook</a></li>
						<li><a href="https://twitter.com/ElanisGaming">Twitter</a></li>
						<li><a href="https://www.youtube.com/user/ElanisGaming">Youtube</a></li>
					</ul>
				</td>
			</tr>
		</table>
		<table>
			<tr class="second-footer">
				<td>Elanis.eu - Copyright 2015-<?php echo date('Y'); ?> - Tout droits reservés</td>
			</tr>
		</table>
	</footer>
<?php
$fin = round(microtime(true) * 1000);
echo "<!-- Generated in ".($fin-$debut)." ms. -->";
?>