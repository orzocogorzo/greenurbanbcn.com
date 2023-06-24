<?php

/**
 * Title: Contact Footer
 * Slug: greenurban/contact-footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div id="contacto" class="wp-block-group"><!-- wp:separator {"backgroundColor":"cyan-bluish-gray"} -->
	<hr class="wp-block-separator has-text-color has-cyan-bluish-gray-color has-alpha-channel-opacity has-cyan-bluish-gray-background-color has-background" />
	<!-- /wp:separator -->

	<!-- wp:spacer {"height":"5vh"} -->
	<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
		<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:100%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:400">
					En qué te podemos ayudar?
				</h3>
				<!-- /wp:heading -->

				<!-- wp:pattern {"slug":"greenurban/contact-form"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"large"} -->
				<h2 class="wp-block-heading has-primary-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700">
					GREEN URBAN
				</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">
					Dona Reformas - Exposición<br>Torrent de l'Olla 57<br>08012
					Barcelona
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">
					Comercialización e instalación<br>08195 Sant Cugat del
					Vallès
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Encuéntranos en</p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#444444","className":"is-style-logos-only"} -->
				<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"@greenurbanbcn","service":"instagram"} /-->

					<!-- wp:social-link {"url":"000000000","service":"whatsapp"} /-->

					<!-- wp:social-link {"url":"info@greenurbanbcn.com","service":"mail"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
