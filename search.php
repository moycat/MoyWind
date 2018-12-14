<?php
/**
 * The search template.
 * @package highwind
 * @since 1.0
 */
?>

<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
get_header();
?>

<?php highwind_content_before(); ?>

<section class="content" role="main">

	<?php highwind_content_top(); ?>

	<header class="page-header">

		<h1 class="page-title"><?php printf( __( '[%s]的搜索结果', 'highwind' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

	</header><!-- .page-header -->

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>

		<?php get_template_part( 'loop' ); ?>

	<?php else : ?>

		<article id="post-0" class="post no-results not-found">

			<header class="entry-header">

				<h1 class="entry-title"><?php _e( '无可奉告', 'highwind' ); ?></h1>

			</header><!-- .entry-header -->

			<div class="entry-content">

				<p><?php _e( '没有符合条件的搜索结果。', 'highwind' ); ?></p>

				<?php get_search_form(); ?>

			</div><!-- .entry-content -->

		</article><!-- #post-0 -->

	<?php endif; ?>

	<?php highwind_content_bottom(); ?>

</section>

<?php highwind_content_after(); ?>

<?php get_footer(); ?>