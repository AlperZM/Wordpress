<?php
/* The template for displaying comments */

/* If the current post is protected by a password and */
if ( post_password_required() ) {
	return;
}

$seges_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php if ( '1' === $seges_one_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'segesone' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $seges_one_comment_count, 'Comments title', 'segesone' ) ),
					esc_html( number_format_i18n( $seges_one_comment_count ) )
				);
				?>
			<?php endif; ?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'segesone' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? seges_one_get_icon_svg( 'ui', 'arrow_right' ) : seges_one_get_icon_svg( 'ui', 'arrow_left' ),
					esc_html__( 'Older comments', 'segesone' )
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					esc_html__( 'Newer comments', 'segesone' ),
					is_rtl() ? seges_one_get_icon_svg( 'ui', 'arrow_left' ) : seges_one_get_icon_svg( 'ui', 'arrow_right' )
				),
			)
		);
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'segesone' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'title_reply'        => esc_html__( 'Leave a comment', 'segesone' ),
			'title_reply_before' => '<h6 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h6>',
		)
	);
	?>

</div><!-- #comments -->
