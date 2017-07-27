		<footer>
			<a href="redir/steam.php" target="_blank"><img src="img/steam.png" width="30" alt="steam"></a>
			<a href="redir/mail.php"><img src="img/mail.png" width="30" alt="mail"></a>
			<a href="redir/github.php"><img src="img/github.png" width="30" alt="github"></a>
			<a href="redir/youtube.php" target="_blank"><img src="img/youtube.png" width="30" alt="youtube"></a>
			<a href="redir/twitter.php" target="_blank"><img src="img/twitter.png" width="30" alt="twitter"></a>
			<a href="redir/facebook.php" target="_blank"><img src="img/facebook.png" width="30" alt="facebook"></a>
			<?php echo CREDITS; ?> - Copyright 2015-<?php echo date("Y"); ?>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<select id="langue" name="langue" size="1" onchange="this.form.submit()" >
					<option  <?php if($_SESSION['lang']=="") { echo " selected"; } ?> >Francais</option>
					<option  <?php if($_SESSION['lang']=="en") { echo " selected"; } ?> >English</option>
					<!--<option  <?php if($_SESSION['lang']=="de") { echo " selected"; } ?> >Deutsch</option>-->
				</select>
			</form>
		</footer>
	</body>