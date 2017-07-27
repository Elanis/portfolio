<?php
include_once("lib/include.php");
?>
		<div class="corps">
		<?php
			if(!isset($_POST['obj']))
			{ ?>
		
			<h2>Contact</h2>
			<br/>
			<form method="post" action="contact.php">
			<script src='https://www.google.com/recaptcha/api.js'></script>
			<center>
				<input type ="text" name="obj" id="obj" placeholder="<?php echo CONTACT_OBJ; ?> " required><br/>
				<input type ="text" id="mail" name="mail" placeholder="<?php echo CONTACT_MAIL; ?> " required><br/>
				<textarea cols="40" rows="6" id="txt" name="txt" placeholder="<?php echo CONTACT_TXT; ?>" required></textarea><br/>
				<div class="g-recaptcha" data-sitekey="***REMOVED***"></div>
				<input type="submit" value="<?php echo CONTACT_SEND; ?>" />
			</center>
			</form>
			
			<?php }
			else {
				if($_POST['g-recaptcha-response']!='***REMOVED***')
				{
				require_once 'swiftmailer-5.x/lib/swift_required.php';

				// Create the Transport
				$transport = Swift_SmtpTransport::newInstance('***REMOVED***', 465, 'ssl')
				  ->setUsername('***REMOVED***')
				  ->setPassword('***REMOVED***')
				  ;

				// Create the Mailer using your created Transport
				$mailer = Swift_Mailer::newInstance($transport);

				// Create a message
				$message = Swift_Message::newInstance($_POST['obj'])
				  ->setFrom(array('***REMOVED***' => 'Contact elanistudio'))
				  ->setTo(array('***REMOVED***' => 'Elanis'))
				  ->setBody($_POST['txt'].'<br/><br/>'.$_POST['mail'] , 'text/html')
				  ;

				// Send the message
				$result = $mailer->send($message);
				
				echo'<h2>'.CONTACT_OK.'</h2>';
				}
				else
				{
				echo'<h2>'.CONTACT_PAS_OK.'</h2>';
				}
			}
			?>
		</div>
<?php
include_once("lib/footer.php");
?>