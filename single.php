<?php
/**
 * Default post template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
?>
	<article>
		<div class="content-builder">
			<?php gulp_wp_content_builder(); ?>
		</div>
	</article>
<?php
get_footer();
