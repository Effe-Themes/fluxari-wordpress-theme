<?php
/**
 * Title: 404
 * Slug: fluxari/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"200px"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:200px"><?php echo __('404', 'fluxari');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo __('Oops! Page Not Found', 'fluxari');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo __('We couldn\'t find the page you\'re looking for. It might have been moved or no longer exists.', 'fluxari');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hero-button","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons hero-button"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"width":"0px","style":"none"},"color":{"gradient":"linear-gradient(135deg,rgb(132,7,227) 0%,rgb(24,170,245) 47%,rgb(81,224,224) 100%)"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background wp-element-button" href="#" style="border-style:none;border-width:0px;background:linear-gradient(135deg,rgb(132,7,227) 0%,rgb(24,170,245) 47%,rgb(81,224,224) 100%);padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php echo __('Back to Home', 'fluxari');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->