<?php
include_once("lib/include.php");
?>
		<div class="corps">
			<h2>Bienvenue sur le site d'Elanis / Welcome on Elanis' Website !</h2>
			<br/>
			<img src="img/Elanis.png" width="50%"class="corps_image">
			<br/>
			<script type="text/javascript">


			var delay = 10000;
			//My Sites
			var my_url_sites=['http://dev42.download/','http://liink.xyz/','http://space-scifi.fr/'];
			var my_title_sites=['Dev42[FR/EN]','Liink[FR/EN]','Space-scifi.fr[FR/EN]'];

			var my_current_site = 0;

			function my_next()
			{
				my_current_site++;

				if(my_current_site>=my_url_sites.length)
				{
					my_current_site = 0;
				}

				my_changeSite();
			}

			function my_prev()
			{
				my_current_site--;

				if(my_current_site<0)
				{
					my_current_site = my_url_sites.length;
				}

				my_changeSite();
			}

			function my_changeSite()
			{
				var frame = document.getElementById('my_site_frame');
				frame.src = my_url_sites[my_current_site];

				var title = document.getElementById('my_site_title');
				title.innerHTML = my_title_sites[my_current_site];
				title.href = my_url_sites[my_current_site];

				window.setTimeout("my_next()", delay);
			}
			//Client Sites
			var cl_url_sites=['http://stargate-evolutionaddonpack.com/','***REMOVED***/'];
			var cl_title_sites=['Evolution Addon Pack[FR]','Gaspar.ovh[FR]'];

			var cl_current_site = 0;

			function cl_next()
			{
				cl_current_site++;

				if(cl_current_site>=cl_url_sites.length)
				{
					cl_current_site = 0;
				}

				cl_changeSite();
			}

			function cl_prev()
			{
				cl_current_site--;

				if(cl_current_site<0)
				{
					cl_current_site = cl_url_sites.length;
				}

				cl_changeSite();
			}

			function cl_changeSite()
			{
				var frame = document.getElementById('cl_site_frame');
				frame.src = cl_url_sites[cl_current_site];

				var title = document.getElementById('cl_site_title');
				title.innerHTML = cl_title_sites[cl_current_site];
				title.href = cl_url_sites[cl_current_site];

				window.setTimeout("cl_next()", delay);
			}


			function Load()
			{
				my_changeSite();
				cl_changeSite();
			}
			window.addEventListener('load',Load);
			</script>

			<h2>Mes Sites<h2>

			<h3><a href="#" target="blank" id="my_site_title">Nom</a></h3>
			<a class="left" id="my_prev">Prev</a> <a class="right" id="my_next">Next</a>
			<iframe src="" width="780px" height="480px" id="my_site_frame" ></iframe>

			<h2>Sites de Clients<h2>

			<h3><a href="#" target="blank" id="cl_site_title">Nom</a></h3>
			<a class="left" id="cl_prev">Prev</a> <a class="right" id="cl_next">Next</a>
			<iframe src="" width="780px" height="480px" id="cl_site_frame" ></iframe>

			<h3><a href="websites.php">→ Historique ←</a></h3>

			<p>Sur ce site , je vais vous presenter toutes mes creations en tant que develloppeur Web mais aussi en tant que createur d'addons , de mods et de programmes en tout genre ainsi qu'en tant que videaste youtube amateur.</p>
			
			<a class="coolbutton" target="blank" href="CV_Axel_Soupe_Elanis_FR.pdf">CV ( Francais )</a>
			
			<p>On this Website , i will show you what i made on Web , Addons , Mods , and other programs. I will show you too my youtube videos.</p>

			<a class="coolbutton" target="blank" href="CV_Axel_Soupe_Elanis_EN.pdf">CV ( English )</a>
			<br />
		</div>
<?php
include_once("lib/footer.php");
?>