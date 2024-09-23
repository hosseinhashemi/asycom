<?php
/**
 * comments Template
 *
 */

if ( post_password_required() ) {
	return;
}

$discussion = asycom_get_discussion_data();
?>

<div id="bw-comments" class="bw-comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="bw-comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( 1 === $comments_number ) {
				printf(
					/* translators: %s: post title */
					esc_html_x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'asycom' ),
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
                                        /* translators: 1: number of comments, 2: post title */
					esc_html( _nx(
						'%1$s thought on &ldquo;%2$s&rdquo;',
						'%1$s thoughts on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'asycom'
					) ),
					absint( number_format_i18n( $comments_number ) ),
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
			}
			?>
		</h3>

    

                
                
                
                

		<?php asycom_comment_nav(); ?>

		<ol class="bw-comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol>

		<?php asycom_comment_nav(); ?>

	<?php endif; ?>

	<?php
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="bw-no-comments"><?php esc_html_e( 'Comments are closed.', 'asycom' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- .bw-comments-area -->
