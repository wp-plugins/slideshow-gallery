<?php
	
if (!defined('ABSPATH')) exit; // Exit if accessed directly	
	
?>

<?php if (!empty($message)) : ?>
	<div class="error fade">
		<p><?php echo $message; ?></p>
	</div>
<?php endif; ?>