<?php
/**
 * Blog index fallback.
 *
 * @package CleartaxSaathi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main style="max-width:1100px;margin:0 auto;padding:140px 24px 80px;">
	<header style="margin-bottom:40px;">
		<h1 style="font-size:clamp(2.4rem,4vw,4rem);margin-bottom:12px;"><?php bloginfo( 'name' ); ?> Blog</h1>
		<p style="color:#94A3B8;max-width:720px;">Latest articles and updates published through WordPress.</p>
	</header>

	<?php if ( have_posts() ) : ?>
		<div style="display:grid;gap:24px;">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article style="padding:28px;border-radius:24px;background:rgba(16,28,43,0.74);border:1px solid rgba(255,255,255,0.07);">
					<h2 style="font-size:1.6rem;margin-bottom:10px;">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<div style="font-size:14px;color:#94A3B8;margin-bottom:14px;"><?php echo esc_html( get_the_date() ); ?></div>
					<div style="color:#c6d2e1;line-height:1.8;"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
		</div>
		<div style="margin-top:32px;"><?php the_posts_pagination(); ?></div>
	<?php else : ?>
		<p>No posts found.</p>
	<?php endif; ?>
</main>
<?php
get_footer();
