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
			foreach($_POST as $key => $value) {
				$variablesPost[htmlspecialchars(trim($key), ENT_QUOTES | ENT_HTML5, 'UTF-8')] = htmlspecialchars(trim($value), ENT_QUOTES | ENT_HTML5, 'UTF-8');
			}

			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$data = array(
				'secret' => '***REMOVED***',
				'response' => $variablesPost["g-recaptcha-response"]
			);
			$options = array(
				'http' => array (
					'method' => 'POST',
					'content' => http_build_query($data)
				)
			);
			$context  = stream_context_create($options);
			$verify = file_get_contents($url, false, $context);
			$resp=json_decode($verify);

			if ($resp != null && $resp->success) {
				require_once './lib/swiftmailer/swift_required.php';

				// Create the Transport
			    $transport = Swift_SmtpTransport::newInstance('***REMOVED***', 587, 'tls')
			      ->setUsername('***REMOVED***')
			      ->setPassword('***REMOVED***')
			      ->setStreamOptions(array('ssl' => array('allow_self_signed' => true, 'verify_peer_name' => false, 'verify_peer' => false)))
			      ;

				// Create the Mailer using your created Transport
				$mailer = Swift_Mailer::newInstance($transport);

				// Create a message
				$message = Swift_Message::newInstance($variablesPost['reason'])
				  ->setFrom(array('***REMOVED***' => 'Contact portfolio'))
				  ->setTo(array('***REMOVED***' => 'Elanis'))
				  ->setBody($variablesPost['txt'].'<br/><br/>'.$variablesPost['mail'] , 'text/html')
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