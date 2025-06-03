<?php
/**
 * Default page template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
?>
	<div class="content-builder">
		<?php gulp_wp_content_builder(); ?>
	</div>	
<?php

get_footer();
