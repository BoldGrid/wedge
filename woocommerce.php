<?php
/**
 * The template for the WooCommerce shop page.
 *
 * @package BoldGrid
 */
get_header(); ?>

<div class="row background-primary">
    <div class="container">
         <div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php woocommerce_content(); ?>
			</main>
         </div>
    </div><!-- .container -->
</div><!-- .background-primary -->

<?php get_footer(); ?>
