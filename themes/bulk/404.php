<?php get_header(); ?>
<div class="archive-left">
	<header class="archive-page-header container-fluid text-center">
			<img src="https://piratescollective.oss-cn-shanghai.aliyuncs.com/wp-content/uploads/2019/09/wp-bg.jpg" alt="">
			<div class="archive-box">
				<?php
					if ( is_search() ) :
						/* Translators: %s: Search result */ 
						echo "<h1 class='search-head text-center'>" . sprintf( esc_html__( 'Search Results for: %s', 'bulk' ), get_search_query() ) . "</h1>";
						
					endif;
					?>
			</div>
	</header><!-- .page-header -->
	<?php get_template_part( 'template-parts/template-part', 'content' ); ?>
	<!-- start content container -->
	<div class="row">
		<div class="col-md-12 col-content">
				<div class="col-left">
					<img src="https://piratescollective.oss-cn-shanghai.aliyuncs.com/wp-content/uploads/2019/09/small.jpg" alt="">
				</div>
				<div class="col-right">
					<?php get_sidebar( 'right' ); ?>
				</div>
		</div>
		<!-- <div class="col-md-<?php #bulk_main_content_width_columns(); ?>"> -->
		<div class="col-md-12">
			<div class="main-content-page">
				<div class="error-template text-center">
					<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bulk' ); ?></h1>
					<p class="error-details">
						<?php esc_html_e( 'Looks like nothing was found at this location. Want to try a search?', 'bulk' ); ?>
					</p>
					<div class="error-actions">
						<?php get_search_form(); ?>    
					</div>
				</div>
			</div>
		</div>

		<?php #get_sidebar( 'right' ); ?>

	</div>
	<!-- end content container -->

	<?php get_footer(); ?>
</div>
