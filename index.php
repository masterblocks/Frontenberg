<?php

get_header();

$data = get_plugin_data( WP_PLUGIN_DIR . '/gutenberg/gutenberg.php' );
$gutenberg_version = $data['Version'];

?>
<div id="wpwrap">
	<div id="wpcontent">
		<div id="wpbody" role="main">
			<div id="wpbody-content" aria-label="Main content" tabindex="0">
				<div class="nvda-temp-fix screen-reader-text">&nbsp;</div>
				<div class="block-editor gutenberg">
					<div id="editor" class="block-editor__container gutenberg__editor"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php

get_footer();
