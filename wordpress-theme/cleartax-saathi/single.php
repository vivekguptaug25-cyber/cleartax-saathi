<?php
/**
 * Single post template.
 *
 * @package CleartaxSaathi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main style="max-width:900px;margin:0 auto;padding:140px 24px 80px;">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article>
			<div style="font-size:14px;color:#94A3B8;margin-bottom:14px;"><?php echo esc_html( get_the_date() ); ?></div>
			<h1 style="font-size:clamp(2.4rem,4vw,4rem);margin-bottom:22px;"><?php the_title(); ?></h1>
			<div style="color:#c6d2e1;line-height:1.9;">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
