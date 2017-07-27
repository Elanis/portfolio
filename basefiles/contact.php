<?php
include_once('./basefiles/header.php');
?>
<section class="corps" id="contact-form">
	<?php
		if(!isset($_POST['txt']))
		{ ?>
	
		<h2>Contact</h2>
		<br/>
		<p><?php echo BY_MAIL; ?> ***REMOVED***</p>
		<br/>
		<p><?php echo COND_OR; ?></p>
		<br />
		<form method="post" action="contact">
			<input type ="text" id="mail" name="mail" placeholder="<?php echo CONTACT_MAIL; ?> " required><br/>
			<select id="reason" name="reason" required>
				<option selected disabled><?php echo REASON; ?></option>
				<optgroup label="<?php echo SITES; ?>">
					<option>Dev42</option>
					<option>Liink</option>
					<option>Randomeme</option>
				</optgroup>
				<optgroup label="<?php echo ADDONS; ?>">
					<option>Scifipack</option>
					<option>SpaceLife</option>
					<option>Ultimate Constrainer</option>
				</optgroup>
				<option><?php echo JOB; ?></option>
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
				require_once './lib/swiftmailer/swift_required.php';

				// Create the Transport
				$transport = Swift_SmtpTransport::newInstance('***REMOVED***', 465, 'ssl')
				  ->setUsername('***REMOVED***')
				  ->setPassword('***REMOVED***')
				  ;

				// Create the Mailer using your created Transport
				$mailer = Swift_Mailer::newInstance($transport);

				// Create a message
				$message = Swift_Message::newInstance($_POST['reason'])
				  ->setFrom(array('***REMOVED***' => 'Contact portfolio'))
				  ->setTo(array('***REMOVED***' => 'Elanis'))
				  ->setBody($_POST['txt'].'<br/><br/>'.$_POST['mail'] , 'text/html')
				  ;

				// Send the message
				$result = $mailer->send($message);
				
				echo'<h2>'.CONTACT_OK.'</h2>';
			} else {
				echo'<h2>'.CONTACT_PAS_OK.'</h2>';
			}
		}
		?>
</section>