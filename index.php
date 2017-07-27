<?php
include_once("lib/base.php");
?>
<section class="corps">
	<div class="corps-part">
		<h2 class="center-header"><?php echo ABOUT_ME; ?></h2>
		<img src="img/Elanis_300.png" alt="elanis"  id="elanis"/>
		<p> <?php echo ABOUT_ME_P1; echo (date('Y')-2011); echo ABOUT_ME_P2; echo (date('Y')-2013); echo ABOUT_ME_P3; echo floor((time()-899151000)/(365*24*3600)); echo ABOUT_ME_P4; ?> </p>
		<table class="cv-table">
		<tr><td><a class="coolbutton" target="blank" href="CV_Axel_Soupe_Elanis_FR.pdf">CV ( Francais )</a></td>
		<td><a class="coolbutton" target="blank" href="CV_Axel_Soupe_Elanis_EN.pdf">CV ( English )</a></td></tr>
		</table>
	</div>

	<div class="corps-part">
		<img src="img/competence_web.png" alt="competences-web" class="demi-part">
		<img src="img/competence_others.png" alt="competences-others" class="demi-part">
	</div>

	<h2 class="center-header"><?php echo MY_SITES; ?></h2>

	<div class="mini-part">
		<h3><a href="http://randomeme.xyz" target="blank">Randomeme [EN]</a></h3>
		<a href="http://randomeme.xyz" target="blank"><img src="img/randomeme_small.png" alt="randomeme"/></a>
	</div>

	<div class="mini-part">
		<h3><a href="http://liink.xyz" target="blank">Liink [FR/EN]</a></h3>
		<a href="http://liink.xyz" target="blank"><img src="img/liink_small.png" alt="liink"/></a>
	</div>

	<div class="mini-part">
		<h3><a href="http://dev42.elanistudio.eu/" target="blank">Dev42 [FR/EN]</a></h3>
		<a href="http://dev42.elanistudio.eu/" target="blank"><img src="img/dev42_small.png" alt="dev42" /></a>
	</div>

	<div class="mini-part">
		<h3><a href="http://scifi.elanistudio.eu/" target="blank">Space-scifi [FR/EN]</a></h3>
		<a href="http://scifi.elanistudio.eu/" target="blank"><img src="img/space-scifi_small.png" alt="space-scifi" /></a>
	</div>

	<h2 class="center-header"><?php echo CL_SITES; ?></h2>

	<div class="mini-part">
		<h3><a href="***REMOVED***/" target="blank">***REMOVED***</a></h3>
		<a href="***REMOVED***/" target="blank"><img src="img/***REMOVED***.png" alt=***REMOVED*** /></a>
	</div>

	<h3 class="center-header"><a href="websites.php">→ Historique des sites←</a></h3>
</section>

<?php
include('lib/php/footer.php');
?>