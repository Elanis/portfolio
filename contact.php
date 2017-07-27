<?php
include_once("lib/base.php");
require 'lib/php/recaptchalib.php';
?>
<section class="corps">
	<div class="corps-part">
	<?php
		if(!isset($_POST['txt']))
		{ ?>
	
		<h2>Contact</h2>
		<br/>
		<p><?php echo BY_MAIL; ?> ***REMOVED***</p>
		<br/>
		<p><?php echo COND_OR; ?></p>
		<br />
		<form method="post" action="contact.php">
		<script src='https://www.google.com/recaptcha/api.js'></script>
			<input type ="text" id="mail" name="mail" placeholder="<?php echo CONTACT_MAIL; ?> " required><br/>
			<select id="reason" name="reason" required>
				<option selected disabled><?php echo REASON; ?></option>
				<optgroup label="<?php echo MENU_SITES; ?>">
					<option>Dev42</option>
					<option>Liink</option>
					<option>Randomeme</option>
				</optgroup>
				<optgroup label="<?php echo MENU_M_A; ?>">
					<option>Scifipack</option>
					<option>SpaceLife</option>
					<option>Ultimate Constrainer</option>
				</optgroup>
				<option><?php echo JOB; ?></option>
				<option><?php echo GMOD_SERVER; ?></option>
				<option><?php echo OTHER_REASON; ?></option>
			</select><br/>
			<textarea cols="40" rows="6" id="txt" name="txt" placeholder="<?php echo CONTACT_TXT; ?>" required></textarea><br/>
			<div class="g-recaptcha" data-sitekey="***REMOVED***"></div>
			<input type="submit" value="<?php echo CONTACT_SEND; ?>" />
		</form>
		
		<?php }
		else {
			$reCaptcha = new ReCaptcha("***REMOVED***");

			$resp = $reCaptcha->verifyResponse(
				$_SERVER["REMOTE_ADDR"],
				$_POST["g-recaptcha-response"]
				);
			if ($resp != null && $resp->success) {

			require_once 'swiftmailer-5.x/lib/swift_required.php';

			// Create the Transport
			$transport = Swift_SmtpTransport::newInstance('***REMOVED***', 465, 'ssl')
			  ->setUsername('***REMOVED***')
			  ->setPassword('***REMOVED***')
			  ;

			// Create the Mailer using your created Transport
			$mailer = Swift_Mailer::newInstance($transport);

			// Create a message
			$message = Swift_Message::newInstance($_POST['reason'])
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
</section>