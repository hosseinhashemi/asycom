<?php
if ( ! class_exists( 'WP_Customize_Control' ) ){
    return NULL;
}

	class ASYCOM_WP_Customize_Page_Control extends WP_Customize_Control {
		public $type = 'asycom_page_dropdown';

		public function render_content() {

		$latest = new WP_Query( array(
			'post_type'     => 'page',
			// 'post_status'   => 'publish',
			'orderby'       => 'date',
			'order'         => 'DESC',
      'posts_per_page' => -1
		));



		?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<select <?php $this->link(); ?>>
					<?php
					while( $latest->have_posts() ) {
						$latest->the_post();
						echo "<option " . esc_attr( selected( $this->value(), get_the_ID() ) ) . " value='" . esc_attr( get_the_ID() ) . "'>" . esc_html( the_title( '', '', false ) ) . "</option>";
					}
					?>
				</select>
			</label>
		<?php
		}
	}
