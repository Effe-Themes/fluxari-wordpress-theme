<?php
/**
 * Title: front-page
 * Slug: fluxari/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"63px"}}} -->
<h1 class="wp-block-heading has-text-align-left" style="font-size:63px"><?php echo __('Next-Level Design for Agencies', 'fluxari');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo __('Unlock the potential of your agency with a modern, block-based theme designed to showcase creativity, drive engagement, and deliver exceptional results for your clients.', 'fluxari');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hero-button","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons hero-button"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"width":"0px","style":"none"},"color":{"gradient":"linear-gradient(135deg,rgb(132,7,227) 0%,rgb(24,170,245) 47%,rgb(81,224,224) 100%)"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background wp-element-button" href="#" style="border-style:none;border-width:0px;background:linear-gradient(135deg,rgb(132,7,227) 0%,rgb(24,170,245) 47%,rgb(81,224,224) 100%);padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php echo __('Get Started', 'fluxari');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero.jpg" alt="<?php echo __('', 'fluxari');?>" style="border-radius:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"gradient":"custom-main-gradiant","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-main-gradiant-gradient-background has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"200px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-example-1.png" alt="<?php echo __('', 'fluxari');?>" style="width:200px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"200px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-example-2.png" alt="<?php echo __('', 'fluxari');?>" style="width:200px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"200px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-example-3.png" alt="<?php echo __('', 'fluxari');?>" style="width:200px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"200px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-example-4.png" alt="<?php echo __('', 'fluxari');?>" style="width:200px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about.webp" alt="<?php echo __('', 'fluxari');?>" style="border-radius:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Who Are We?', 'fluxari');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('We specialize in crafting high-performance, block-based WordPress themes designed to elevate brands and businesses. With a focus on modern design, seamless functionality, and top-tier performance, our themes empower agencies, freelancers, and entrepreneurs to build stunning websites effortlessly.', 'fluxari');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hero-button","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons hero-button"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"width":"0px","style":"none"},"color":{"gradient":"linear-gradient(135deg,rgb(132,7,227) 0%,rgb(24,170,245) 47%,rgb(81,224,224) 100%)"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background wp-element-button" href="#" style="border-style:none;border-width:0px;background:linear-gradient(135deg,rgb(132,7,227) 0%,rgb(24,170,245) 47%,rgb(81,224,224) 100%);padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php echo __('Read More', 'fluxari');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->