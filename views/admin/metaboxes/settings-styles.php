<?php $styles = $this -> get_option('styles'); ?>

<table class="form-table">
	<tbody>
		<tr>
			<th><label for="layout_responsive"><?php _e('Layout', $this -> plugin_name); ?></label>
			<?php echo GalleryHtmlHelper::help(__('Choose responsive if you have a responsive theme and you want the slideshow to resize width/height in a responsive manner on different devices.<br/><br/><strong>Override per slideshow:</strong> Using parameter <code>layout</code> with value <code>responsive</code> or <code>specific</code> eg. <code>[slideshow layout="specific"]</code>.', $this -> plugin_name)); ?></th>
			<td>
				<label><input onclick="jQuery('#layout_specific_div').hide(); jQuery('#layout_responsive_div').show();" <?php echo ($styles['layout'] == "responsive") ? 'checked="checked"' : ''; ?> type="radio" name="styles[layout]" value="responsive" id="layout_responsive" /> <?php _e('Responsive', $this -> plugin_name); ?></label>
				<label><input onclick="jQuery('#layout_specific_div').show(); jQuery('#layout_responsive_div').hide();" <?php echo (empty($styles['layout']) || $styles['layout'] == "specific") ? 'checked="checked"' : ''; ?> type="radio" name="styles[layout]" value="specific" id="layout_specific" /> <?php _e('Fixed', $this -> plugin_name); ?></label>
				<span class="howto"><?php _e('Choose whether you want a responsive or fixed/specific layout for the slideshow.', $this -> plugin_name); ?></span>
			</td>
		</tr>
	</tbody>
</table>

<div id="layout_responsive_div" style="display:<?php echo (!empty($styles['layout']) && $styles['layout'] == "responsive") ? 'block' : 'none'; ?>;">
	<table class="form-table">
		<tbody>
			<tr>
				<th><label for="resheight"><?php _e('Responsive Height', $this -> plugin_name); ?></label>
				<?php echo GalleryHtmlHelper::help(__('The responsive height can be either a fixed height in pixel or a percentage height. The percentage height is a percentage of the width of the slideshow.<br/><br/><strong>Override per slideshow:</strong> Using parameters <code>resheight</code> value a value and <code>resheighttype</code> with <code>px</code> for pixels or <code>%</code> for percentage eg. <code>[slideshow resheight="300" resheighttype="px"]</code>.', $this -> plugin_name)); ?></th>
				<td>
					<input class="widefat" style="width:45px;" type="text" name="styles[resheight]" value="<?php echo esc_attr(stripslashes($styles['resheight'])); ?>" id="resheight" />
					<?php /*<input type="hidden" name="styles[resheighttype]" value="pix" /> <?php _e('px', $this -> plugin_name); ?>*/ ?>
					<select name="styles[resheighttype]">
						<option <?php echo ($styles['resheighttype'] == "%") ? 'selected="selected"' : ''; ?> value="%"><?php _e('&#37;', $this -> plugin_name); ?></option>
						<option <?php echo ($styles['resheighttype'] == "px") ? 'selected="selected"' : ''; ?> value="px"><?php _e('px', $this -> plugin_name); ?></option>
					</select>
					<span class="howto"><?php _e('Choose a responsive height for your slideshow, either a pixel or percentage height.', $this -> plugin_name); ?></span>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<div id="layout_specific_div" style="display:<?php echo (empty($styles['layout']) || $styles['layout'] == "specific") ? 'block' : 'none'; ?>;">
	<table class="form-table">
		<tbody>
			<tr>
				<th><label for="styles.resizeimages"><?php _e('Resize Images', $this -> plugin_name); ?></label></th>
				<td>
					<label><input onclick="jQuery('#resizeimagesYdiv').show();" <?php echo (empty($styles['resizeimages']) || $styles['resizeimages'] == "Y") ? 'checked="checked"' : ''; ?> type="radio" name="styles[resizeimages]" value="Y" id="styles.resizeimages_Y" /> <?php _e('Yes', $this -> plugin_name); ?></label>
					<label><input onclick="jQuery('#resizeimagesYdiv').hide();" <?php echo ($styles['resizeimages'] == "N") ? 'checked="checked"' : ''; ?> type="radio" name="styles[resizeimages]" value="N" id="styles.resizeimages_N" /> <?php _e('No', $this -> plugin_name); ?></label>
					<span class="howto"><?php _e('Should images be resized proportionally to fit the width of the slideshow area?', $this -> plugin_name); ?></span>
					
					<div id="resizeimagesYdiv" style="display:<?php echo ($styles['resizeimages'] == "Y") ? 'block' : 'none'; ?>;">
						<p>
							<?php _e('When resize images is turned on, TimThumb will be used to resize/crop images.', $this -> plugin_name); ?><br/>
							<?php _e('Below is a test image and the URL to the image to ensure that TimThumb works.', $this -> plugin_name); ?><br/>
						</p>
						<?php
						
						$img = 'wp-content/plugins/' . $this -> plugin_name . '/screenshot-1.png';
						$src = site_url() . '/wp-content/plugins/slideshow-gallery/vendors/timthumb.php?src=' . $img . '&w=50&h=50&q=100&a=t';
						echo '<p><a target="_blank" href="' . $src . '">' . $src . '</a> <small>(' . __('click to open to test TimThumb', $this -> plugin_name) . ')</small></p>';
						echo '<p><img src="' . $src . '" /></p>';
						
						?>
					</div>
				</td>
			</tr>
			<tr>
				<th><label for="styles.width"><?php _e('Gallery Width', $this -> plugin_name); ?></label></th>
				<td>
					<input style="width:45px;" id="styles.width" type="text" name="styles[width]" value="<?php echo $styles['width']; ?>" /> <?php _e('px', $this -> plugin_name); ?>
					<span class="howto"><?php _e('Width of the slideshow gallery', $this -> plugin_name); ?></span>
				</td>
			</tr>
			<tr>
				<th><label for="styles.height"><?php _e('Gallery Height', $this -> plugin_name); ?></label></th>
				<td>
					<input style="width:45px;" id="styles.height" type="text" name="styles[height]" value="<?php echo $styles['height']; ?>" /> <?php _e('px', $this -> plugin_name); ?>
					<span class="howto"><?php _e('Height of the slideshow gallery', $this -> plugin_name); ?></span>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<table class="form-table">
	<tbody>
		<tr>
			<th><label for="styles.border"><?php _e('Slideshow Border', $this -> plugin_name); ?></label></th>
			<td>
				<input type="text" name="styles[border]" value="<?php echo $styles['border']; ?>" id="styles.border" style="width:145px;" />
				<span class="howto"><?php echo sprintf(__('Border style/color for the entire slideshow wrapper eg. %s', $this -> plugin_name), "1px #000000 solid"); ?>
			</td>
		</tr>
		<tr>
			<th><label for="styles.background"><?php _e('Slideshow Background', $this -> plugin_name); ?></label></th>
			<td>
				<input type="text" name="styles[background]" value="<?php echo $styles['background']; ?>" id="styles.background" style="width:65px;" />
				<span class="howto"><?php echo sprintf(__('Background color (hexidecimal) of the entire slideshow wrapper eg. %s', $this -> plugin_name), "#FFFFFF"); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="styles.infobackground"><?php _e('Information Background', $this -> plugin_name); ?></label></th>
			<td>
				<input type="text" name="styles[infobackground]" value="<?php echo $styles['infobackground']; ?>" id="styles.infobackground" style="width:65px;" />
				<span class="howto"><?php echo sprintf(__('Background color (hexidecimal) of the information bar eg. %s', $this -> plugin_name), "#000000"); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="styles.infocolor"><?php _e('Information Text Color', $this -> plugin_name); ?></label></th>
			<td>
				<input type="text" name="styles[infocolor]" value="<?php echo $styles['infocolor']; ?>" id="styles.infocolor" style="width:65px;" />
				<span class="howto"><?php echo sprintf(__('Text color (hexidecimal) of the information bar content eg. %s', $this -> plugin_name), "#FFFFFF"); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="thumbactive"><?php _e('Thumbnail Active Border', $this -> plugin_name); ?></label></th>
			<td>
				<input style="width:65px;" type="text" name="thumbactive" value="<?php echo $this -> get_option('thumbactive'); ?>" id="thumbactive" />
				<span class="howto"><?php echo sprintf(__('Border color (hexidecimal) for the active image thumbnail eg. %s', $this -> plugin_name), "#FFFFFF"); ?></span>
			</td>
		</tr>
	</tbody>
</table>