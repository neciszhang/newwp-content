<article>
	<div <?php post_class(); ?>>                    
		<?php #if ( has_post_thumbnail() ) : ?>                               
			<a class="featured-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> 
			<?php 
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
				echo '<div style="background-image:url('.esc_url($featured_img_url).')" class="thumbnail-bg" rel="lightbox">'; 
        		echo '</div>';
			?>
		
				<?php #the_post_thumbnail( 'bulk-single' ); ?>
			</a>								               
		<?php #endif; ?>	
		<div class="main-content text-center">
			<h2 class="page-header h1">                                
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>                            
			</h2>
			<div class="post-meta">
				<?php bulk_time_link(); ?>
				<?php bulk_posted_on(); ?>
			</div><!-- .single-entry-summary -->
			<div class="content-inner">                                                      
				<div class="single-entry-summary">
					<?php the_excerpt(); ?>
					<?php bulk_entry_footer(); ?>
				</div><!-- .single-entry-summary -->
				<a class="btn btn-default btn-lg" href="<?php the_permalink(); ?>" > 
					<?php esc_html_e( 'Read more', 'bulk' ) ?>
				</a>
			</div>                                                             
		</div>
		
		<div class="last-more">
			<img src="https://piratescollective.oss-cn-shanghai.aliyuncs.com/wp-content/uploads/2019/09/tb-circle.png" alt="">
		</div>
	</div>
</article>
