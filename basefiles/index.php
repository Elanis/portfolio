<?php
include_once('./basefiles/header.php');
?>
	<div class="corps" id="presentation">
		<h2 class="center-header"><?php echo ABOUT_ME; ?></h2>
		<img src="https://01.cdn.elanis.eu/elanis/Elanis.png" alt="elanis" style="border-radius: 256px; border: 3px solid black; width: 450px;" id="index-img-elanis"/>
		<p><?php echo ABOUT_ME_P1.(date('Y')-2011).ABOUT_ME_P2.floor((time()-1387062000)/365/86400).ABOUT_ME_P3.floor((time()-899071200)/365/86400).ABOUT_ME_P4; ?></p>
		<table class="cv-table">
		<tr><td><a class="coolbutton" target="blank" href="CV_Axel_Soupe_Elanis_FR.pdf">CV ( Francais )</a></td>
		<td><a class="coolbutton" target="blank" href="CV_Axel_Soupe_Elanis_EN.pdf">CV ( English )</a></td></tr>
		</table>
	</div>

	<div class="corps" id="skills">
		<table>
			<tr><td>
				<h1 class="center-header"><?php echo WEB_SKILLS; ?></h1>
				<div id="PHP" class="skills"></div>
				<div id="JavaScript" class="skills"></div>
				<div id="JQuery" class="skills"></div>
				<div id="NodeJS" class="skills"></div>
				<div id="HTML/CSS" class="skills"></div>
				<div id="Responsive" class="skills"></div>
				<div id="Referencement" class="skills"></div>
			</td><td>
				<h1 class="center-header"><?php echo OTHER_SKILLS; ?></h1>
				<div id="C++" class="skills"></div>
				<div id="Lua" class="skills"></div>
				<div id="Source Engine" class="skills"></div>
				<div id="Windows/Batch" class="skills"></div>
				<div id="Linux/Shell" class="skills"></div>
				<div id="Photoshop/Gimp" class="skills"></div>
				<div id="Blender" class="skills"></div>
			</td></tr>
		</table>
	</div>

	<h2 class="center-header" id="projets"><?php echo MY_PROJECTS; ?></h2>

	<div class="mini-part">
		<h3><a href="https://dehash.me" target="blank"><span class="website"><?php echo PROJECT_WEBSITE; ?></span> [English] Dehash.me</a></h3>
		<a href="https://dehash.me" target="blank"><img src="img/dehashme_small.png" alt="dehashme"/></a>
		<a href="#" class="apercu" id="7"><?php echo PROJECT_PREVIEW; ?></a>
	</div>

	<div class="mini-part">
		<h3><a href="https://randomeme.xyz" target="blank"><span class="website"><?php echo PROJECT_WEBSITE; ?></span> [English] Randomeme</a></h3>
		<a href="https://randomeme.xyz" target="blank"><img src="img/randomeme_small.png" alt="randomeme"/></a>
		<a href="#" class="apercu" id="0"><?php echo PROJECT_PREVIEW; ?></a>
	</div>

	<div class="mini-part">
		<h3><a href="https://galactae.eu" target="blank"><span class="game"><?php echo PROJECT_GAME; ?></span> [Francais/English] Galactae</a></h3>
		<a href="https://galactae.eu" target="blank"><img src="img/galactae_small.png" alt="galactae"/></a>
		<a href="#" class="apercu" id="5"><?php echo PROJECT_PREVIEW; ?></a>
	</div>

	<div class="mini-part">
		<h3><a href="https://scifi.elanis.eu/" target="blank"><span class="addon"><?php echo PROJECT_ADDON; ?></span> [English] Spacelife</a></h3>
		<table>
			<tr>
				<td>
					<img src="./img/spacelife.jpg" alt="spacelife">
				</td>
				<td>
					<a href="https://scifi.elanis.eu" target="_blank"><?php echo PROJECT_WEBSITE; ?></a>
					<a href="https://github.com/Space-Scifi/SpaceLife" target="_blank">Github</a>
					<a href="http://steamcommunity.com/sharedfiles/filedetails/?id=659445283" target="_blank">Steam Workshop</a>
				</td>
			</tr>
		</table>
	</div>

	<div class="mini-part">
		<h3><a href="https://scifi.elanis.eu/" target="blank"><span class="addon"><?php echo PROJECT_ADDON; ?></span> [English] Scifi-Pack</a></h3>
		<table>
			<tr>
				<td>
					<img src="./img/sfpack.jpg" alt="scifi-pack">
				</td>
				<td>
					<a href="https://scifi.elanis.eu" target="_blank"><?php echo PROJECT_WEBSITE; ?></a>
					<a href="https://github.com/Space-Scifi/SciFi-Pack-Addon-Gamemode" target="_blank">Github</a>
					<a href="http://steamcommunity.com/workshop/filedetails/?id=459240346" target="_blank">Steam Workshop</a>
				</td>
			</tr>
		</table>
	</div>

	<div class="mini-part">
		<h3><a href="https://sg-eap.space" target="blank"><span class="addon"><?php echo PROJECT_ADDON; ?></span> [English] Ultimate Constrainer</a></h3>
		<table>
			<tr>
				<td>
					<img src="./img/UtlimateConstrainer.jpg" alt="ultimate-constrainer">
				</td>
				<td>
					<a href="http://steamcommunity.com/sharedfiles/filedetails/?id=659473058" target="_blank">Steam Workshop</a>
				</td>
			</tr>
		</table>
	</div>

	<div class="mini-part">
		<h3><a href="https://scifi.elanis.eu/" target="blank"><span class="website"><?php echo PROJECT_WEBSITE; ?></span> [Francais/English] Space-scifi</a></h3>
		<a href="https://scifi.elanis.eu/" target="blank"><img src="img/space-scifi_small.png" alt="space-scifi" /></a>
		<a href="#" class="apercu" id="3"><?php echo PROJECT_PREVIEW; ?></a>
	</div>

	<h2 class="center-header"><?php echo PROJECT_DEV; ?></h2>

	<div class="mini-part">
		<h3><a href="https://sg-eap.space" target="blank"><span class="addon"><?php echo PROJECT_ADDON; ?></span> [Multi-Languages] Evolution Addon Pack</a></h3>
		<table>
			<tr>
				<td>
					<img src="./img/eap.jpg" alt="eap">
				</td>
				<td>
					<a href="http://sg-eap.space" target="_blank"><?php echo PROJECT_WEBSITE; ?></a>
					<a href="https://github.com/williamdefly/Evolutionaddonpack" target="_blank">Github</a>
					<a href="http://steamcommunity.com/sharedfiles/filedetails/?id=515981131" target="_blank">Steam Workshop</a>
				</td>
			</tr>
		</table>
	</div>

	<div class="mini-part">
		<h3><a href="***REMOVED***/" target="blank"><span class="website"><?php echo PROJECT_WEBSITE; ?></span> [Francais] Gaspar</a></h3>
		<a href="***REMOVED***/" target="blank"><img src="img/***REMOVED***.png" alt=***REMOVED*** /></a>
		<a href="#" class="apercu" id="4"><?php echo PROJECT_PREVIEW; ?></a>
	</div>

	<details>
      <summary class="center-header"><?php echo OLD_PROJECTS; ?></summary>
		<div class="mini-part">
			<h3><a href="https://getiny.link/" target="blank"><span class="website"><?php echo PROJECT_WEBSITE; ?></span> [Francais/English] getiny.link</a></h3>
			<a href="https://getiny.link/" target="blank"><img src="img/getinylink_small.png" alt="getinylink" /></a>
			<a href="#" class="apercu" id="1"><?php echo PROJECT_PREVIEW; ?></a>
		</div>

		<div class="mini-part">
			<h3><a href="#" target="blank"><span class="website"><?php echo PROJECT_WEBSITE; ?></span> [Francais] SG-E / EAP v2</a></h3>
			<a href="#" target="blank"><img src="img/eap_small.png" alt="sge" /></a>
			<a href="#" class="apercu" id="6"><?php echo PROJECT_PREVIEW; ?></a>
		</div>

		<div class="mini-part">
			<h3><a href="https://dev42.elanis.eu/" target="blank"><span class="website"><?php echo PROJECT_WEBSITE; ?></span> [Francais/English] Dev42</a></h3>
			<a href="https://dev42.elanis.eu/" target="blank"><img src="img/dev42_small.png" alt="dev42" /></a>
			<a href="#" class="apercu" id="2"><?php echo PROJECT_PREVIEW; ?></a>
		</div>
	</details>

	<div id="FrameOverlay">
		<h2 class="center-header"><a id="titleFrame" href="#" target="_blank"></a></h2>
		<p class="center-header" id="versionFrame"></p>
		<a id="quitFrame" href="#">X</a>
		<iframe id="ApercuFrame"></iframe>
	</div>

	<script type="text/javascript" src="./lib/graph/main.js"></script>
	<script type="text/javascript" src="./lib/iFrameOverlay/main.js"></script>
	<script type="text/javascript">
		window.addEventListener('load', function() {
			function skillsGraph() {
				var skills = document.getElementById("skills");
				var presentation = document.getElementById("presentation");
				var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
				var docHeight = (document.documentElement.scrollTop!=0)?document.documentElement.scrollTop:document.body.scrollTop;
				var presHeight = presentation.offsetHeight + 75;

				if((docHeight + windowHeight) > presHeight) {
					// Premiere colonne
					linearGraph("PHP",85,"#8e44ad");
					linearGraph("JavaScript",78,"#2980b9");
					linearGraph("JQuery",67,"#3498db");
					linearGraph("NodeJS",73,"#27ae60");
					linearGraph("HTML/CSS",77,"#f1c40f");
					linearGraph("Responsive",68,"#e67e22");
					linearGraph("Referencement",60,"#c0392b");
					// Seconde colonne
					linearGraph("C++",35,"#c0392b");
					linearGraph("Lua",80,"#e67e22");
					linearGraph("Source Engine",30,"#f1c40f");
					linearGraph("Windows/Batch",60,"#27ae60");
					linearGraph("Linux/Shell",80,"#3498db");
					linearGraph("Photoshop/Gimp",45,"#2980b9");
					linearGraph("Blender",15,"#8e44ad");

					document.removeEventListener("scroll", skillsGraph);
				}
			}
			document.addEventListener("scroll", skillsGraph);
			skillsGraph();
		});
	</script>
</body>
</html>