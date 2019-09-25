<?php get_header(); ?> 

<?php #if ( have_posts() ) : ?>
	<div class="archive-left">

		<header class="archive-page-header container-fluid text-center">
			<img src="https://piratescollective.oss-cn-shanghai.aliyuncs.com/wp-content/uploads/2019/09/wp-bg.jpg" alt="">
			<div class="archive-box">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
			</div>
			<!-- <div class="container"> -->
				<?php
				#the_archive_title( '<h1 class="page-title">', '</h1>' );
				#the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			<!-- </div> -->


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
					<?php
					if ( have_posts() ) :

						while ( have_posts() ) : the_post();

							get_template_part( 'content', get_post_format() );

						endwhile;

						the_posts_pagination();

					else :

						get_template_part( 'content', 'none' );

					endif;
					?>

				</div>

				<?php #get_sidebar( 'right' ); ?>

			</div>
			<!-- end content container -->

			<?php get_footer(); ?>
	</div>

<?php #endif; ?>
