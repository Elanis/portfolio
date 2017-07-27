	<ul class="menu">
		<li><a href="/"><?php echo MENU_HOME; ?></a></li>
		<li><a href="modaddons.php"><?php echo MENU_M_A; ?></a></li>
		<li><a href="websites.php"><?php echo MENU_SITES; ?></a></li>
		<li><a href="ui_ux.php"><?php echo MENU_UI_UX; ?></a></li>
		<li><a href="videos.php"><?php echo MENU_VIDEOS; ?></a></li>	
		<!--<li><a href="prestations.php"><?php echo MENU_PREST; ?></a></li>-->
		<li><a href="contact.php"><?php echo MENU_CONTACT; ?></a></li>
		<li><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<select id="langue" name="langue" size="1" onchange="this.form.submit()" >
					<option<?php if($_SESSION['lang']=="") { echo " selected"; } ?> >Francais</option>
					<option<?php if($_SESSION['lang']=="en") { echo " selected"; } ?> >English</option>
					<!--<option<?php if($_SESSION['lang']=="de") { echo " selected"; } ?> >Deutsch</option>-->
				</select>
			</form>
		</li>
	</ul>

	<ul class="socialnetworks">
		<li><a href="redir/steam.php" target="_blank"><img src="img/steam.png" alt="steam"></a></li>
		<li><a href="mailto:***REMOVED***" target="_blank"><img src="img/mail.png" alt="mail"></a></li>
		<li><a href="redir/github.php" target="_blank"><img src="img/github.png" alt="github"></a></li>
		<li><a href="redir/youtube.php" target="_blank"><img src="img/youtube.png" alt="youtube"></a></li>
		<li><a href="redir/twitter.php" target="_blank"><img src="img/twitter.png" alt="twitter"></a></li>
		<li><a href="redir/facebook.php" target="_blank"><img src="img/facebook.png" alt="facebook"></a></li>
	</ul>