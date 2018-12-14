<?php
/**
 * The template for comments.
 * @package highwind
 * @since 1.0
 */
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php highwind_comments_before(); ?>

<div id="comments" class="comments<?php if ( ! comments_open() && post_type_supports( get_post_type(), 'comments' ) && is_page() ) { echo ' page-nocomments'; } ?>">

	<?php if ( post_password_required() ) : ?>

		<p class="nopassword"><?php _e( '此博文受密码保护，请输入密码以查看评论。', 'highwind' ); ?></p>

	</div><!-- #comments -->

	<?php
			return;
		endif;
	?>

	<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">
			<?php
				printf( _n( '&ldquo;%2$s&rdquo;已有一条评论', ' &ldquo;%2$s&rdquo;已有%1$s条评论', get_comments_number(), 'highwind' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="commentlist">
			<?php wp_list_comments( 'callback=highwind_comment&avatar_size=' . apply_filters( 'highwind_comment_avatar_size', $avatar_size = '96' ) ); ?>
		</ol>

		<?php highwind_comment_navigation(); ?>

	<?php
		elseif ( ! comments_open() && post_type_supports( get_post_type(), 'comments' ) && ! is_page() ) :
	?>

	<p class="nocomments"><?php _e( '评论已关闭', 'highwind' ); ?></p>

	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- .comments -->

<?php highwind_comments_after(); ?>
