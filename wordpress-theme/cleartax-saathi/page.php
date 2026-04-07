<?php
/**
 * Default page template.
 *
 * @package CleartaxSaathi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main style="max-width:1100px;margin:0 auto;padding:140px 24px 80px;">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article>
			<h1 style="font-size:clamp(2.4rem,4vw,4rem);margin-bottom:18px;"><?php the_title(); ?></h1>
			<div style="color:#c6d2e1;line-height:1.8;">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
