	<footer>
		<table>
			<tr class="first-footer">
				<td>		
					<ul>
						<li><h3>Elanis</h3></li>
						<li><a href="/"><?php echo MENU_HOME; ?></a></li>
						<li><a href="CV_Axel_Soupe_Elanis_FR.pdf">CV (FR)</a></li>
						<li><a href="CV_Axel_Soupe_Elanis_EN.pdf">CV (EN)</a></li>
						<li><a href="contact"><?php echo MENU_CONTACT; ?></a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><h3><?php echo PROJECT_WEBSITE; ?></h3></li>
						<li><a href="https://scifi.elanistudio.eu">Spacelife/Scifipack</a></li>
						<li><a href="https://dev42.elanistudio.eu">Dev42</a></li>
						<li><a href="https://getiny.link">Get Tiny Link</a></li>
						<li><a href="https://randomeme.xyz">Randomeme</a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><h3><?php echo PROJECT_GAME; ?></h3></li>
						<li><a href="https://github.com/Space-Scifi/SciFi-Pack-Addon-Gamemode">SciFi Pack</a></li>
						<li><a href="https://github.com/Space-Scifi/SpaceLife">SpaceLife</a></li>
						<li><a href="https://spacegame.elanistudio.eu">Galactae: Space Age Rising</a></li>
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
				<td>Galactae: Space Age Rising - Crée par Elanis - Copyright 2016-2017 - Tout droits reservés</td>
			</tr>
		</table>
	</footer>
<?php
$fin = round(microtime(true) * 1000);
echo "<!-- Generated in ".($fin-$debut)." ms. -->";
?>