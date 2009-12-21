<?php

global $user_ID, $post_ID, $post, $wp_meta_boxes;
$post_ID = 1;
$post = get_default_post_to_edit();
$wp_meta_boxes = false;

add_meta_box('submitdiv', __('Save Settings', $this -> plugin_name), array($this -> Metabox, "settings_submit"), 'post', 'side', 'core');
add_meta_box('generaldiv', __('General Settings', $this -> plugin_name), array($this -> Metabox, "settings_general"), 'post', 'normal', 'core');
add_meta_box('stylesdiv', __('Appearance &amp; Styles', $this -> plugin_name), array($this -> Metabox, "settings_styles"), 'post', 'normal', 'core');

wp_nonce_field('autosave', 'autosavenonce', false);
wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false);
wp_nonce_field('getpermalink', 'getpermalinknonce', false);
wp_nonce_field('samplepermalink', 'samplepermalinknonce', false);
wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false);

?>

<div class="wrap">
	<h2><?php _e('Configuration Settings', $this -> plugin_name); ?></h2>
	
	<form action="<?php echo $this -> url; ?>" name="post" id="post" method="post">
		<div id="poststuff" class="metabox-holder has-right-sidebar">			
			<div id="side-info-column" class="inner-sidebar">			
				<?php do_meta_boxes('post', 'side', $post); ?>
			</div>
			<div id="post-body">
				<div id="post-body-content">
					<?php do_meta_boxes('post', 'normal', $post); ?>
				</div>
			</div>
			<br class="clear" />
		</div>
	</form>
</div>