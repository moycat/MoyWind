<?php
/**
 * The template for displaying 404 pages (Not Found).
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

		<?php highwind_content_header_top(); ?>

		<h1 class="page-title" data-text="<?php the_title(); ?>"><?php _e( '404 not Found', 'highwind' ); ?></h1>

		<?php highwind_content_header_bottom(); ?>

	</header><!-- /.page-header -->

	<section class="article-content">

		<?php highwind_content_entry_top(); ?>

		<p><?php _e( '请尝试搜索：', 'highwind' ); ?>

		<?php

			// Display a search form and some helpful widgets

			$archive_content = '<p>' . sprintf( __( '请尝试搜索：', 'highwind' ) ) . '</p>';

			get_search_form();?>
<blockquote>
<p>Out, out, brief candle!</p>
<p>Life's but a walking shadow; a poor player,</p>
<p>That struts and frets his hour upon the stage,</p>
<p>And then is heard no more: it is a tale</p>
<p>Told by an idiot, full of sound and fury,</p>
<p>Signifying nothing.</p>
</blockquote>
			<?php
		?>

		<?php highwind_content_entry_bottom(); ?>

	</section>

	<?php highwind_content_bottom(); ?>

</section>

<?php highwind_content_after(); ?>

<?php get_footer(); ?>