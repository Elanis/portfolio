<?php
include_once("lib/base.php");
?>
<section class="corps">
	<div class="corps-part">
		<?php if(!isset($_POST[''])) { ?>
		<form method="post" action="contact.php">
		<h2><?php echo APPROXIMATE_PRICE; ?></h2>
		<fieldset>





		</fieldset>

		<input type="submit" value="<?php echo CALC; ?>">
		</form>
		<?php 
		}
		else {



		} ?>
		
	<div>
</section>

<?php
include('lib/php/footer.php');
?>