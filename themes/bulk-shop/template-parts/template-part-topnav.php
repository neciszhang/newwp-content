<div class="main-menu">
	<nav id="site-navigation" class="navbar navbar-default navbar-fixed-top">     
		<div class="container">   
			<div class="navbar-header">
				<?php if ( has_nav_menu( 'main_menu' ) ) : ?>
					<div id="main-menu-panel" class="open-panel" data-panel="main-menu-panel">
						<span></span>
						<span></span>
						<span></span>
					</div>
				<?php endif; ?>
				<div class="site-header" >
					<div class="site-branding-logo">
						<?php the_custom_logo(); ?>
					</div>
					<div class="site-branding-text navbar-brand">
						<?php if ( is_front_page() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>

						<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) :
							?>
							<p class="site-description">
								<?php echo $description; ?>
							</p>
						<?php endif; ?>
					</div><!-- .site-branding-text -->
				</div>
				<?php if ( class_exists( 'woocommerce' ) ) { ?>
					<ul class="nav navbar-nav navbar-right visible-xs login-cart">
						<li class="header-cart-inner">
							<?php bulk_shop_opt_cart(); ?>
						</li>
					</ul>
				<?php } ?>
			</div>
			<?php if ( class_exists( 'woocommerce' ) ) { ?>
				<ul class="nav navbar-nav navbar-right hidden-xs login-cart">
					<li class="header-cart-inner">
						<?php bulk_shop_opt_cart(); ?>
					</li>
				</ul>
			<?php } ?>
			
			<div class="menu-container">
				<ul class="nav navbar-nav navbar-tag navbar-right">
					<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-tag">
						<a href="http://pirates.tbwa.com.cn/?tag=Designer">Designer</a>
					</li>
					<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-tag">
						<a href="http://pirates.tbwa.com.cn/?tag=Musician">Musician</a>
					</li>
					<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-tag">
						<a href="http://pirates.tbwa.com.cn/?tag=Illustator">Illustator</a>
					</li>
					<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-tag">
						<a href="http://pirates.tbwa.com.cn/?tag=Photographer">Photographer</a>
					</li>
					<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-tag">
						<a href="http://pirates.tbwa.com.cn/?tag=Writer">Writer</a>
					</li>
					<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-tag">
						<a href="http://pirates.tbwa.com.cn/?tag=Film-director">Film director</a>
					</li>
					<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-tag">
						<a href="http://pirates.tbwa.com.cn/?tag=Technologist">Technologist</a>
					</li>
					<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-tag">
						<a href="http://pirates.tbwa.com.cn/?tag=Animator">Animator</a>
					</li>
					
				</ul>
			</div>

			<script>
				console.log(jQuery);
				function GetQueryString(name) {
					var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
					var r = window.location.search.substr(1).match(reg);
					if (r != null) return decodeURIComponent(r[2]);
					return "";
				}
				var tagname=GetQueryString("tag");
				if(tagname){
					switch(tagname){
						case 'Designer':
						jQuery(".menu-tag").eq(0).addClass('active');
						break;
						case 'Musician':
						jQuery(".menu-tag").eq(1).addClass('active');
						break;
						case 'Illustator':
						jQuery(".menu-tag").eq(2).addClass('active');
						break;
						case 'Photograhper':
						jQuery(".menu-tag").eq(3).addClass('active');
						break;
						case 'Writer':
						jQuery(".menu-tag").eq(4).addClass('active');
						break;
						case 'Film-director':
						jQuery(".menu-tag").eq(5).addClass('active');
						break;
						case 'Technologist':
						jQuery(".menu-tag").eq(6).addClass('active');
						break;
						case 'Animator':
						jQuery(".menu-tag").eq(7).addClass('active');
						break;
					}
				}
			</script>

			<div class="nav-center"></div>
			
			<?php
			wp_nav_menu( array(
				'theme_location'	 => 'main_menu',
				'depth'				 => 5,
				'container'			 => 'div',
				'container_class'	 => 'menu-container',
				'menu_class'		 => 'nav navbar-nav navbar-right',
				'fallback_cb'		 => 'wp_bootstrap_navwalker::fallback',
				'walker'			 => new wp_bootstrap_navwalker(),
			) );
			?>
		</div>    
	</nav> 
</div>
<?php if ( has_header_image() && is_home() ) { ?>
	<div class="custom-header">

		<!-- <div class="wp-custom-header"> -->
			<img src="https://piratescollective.oss-cn-shanghai.aliyuncs.com/wp-content/uploads/2019/09/wp-bg.jpg" alt="">
		<!-- </div> -->

		<!-- <div class="custom-header-media"> -->
			<?php #the_custom_header_markup(); ?>
		<!-- </div> -->

		<!-- <div class="site-branding-text-header header-image-text"> -->

			<!-- <p class="site-title"><a href="<?php #echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php #bloginfo( 'name' ); ?></a></p> -->

			<?php
			#$description = get_bloginfo( 'description', 'display' );
			#if ( $description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"> -->
					<?php #echo $description; ?>
				<!-- </p> -->
			<?php #endif; ?>
		<!-- </div> -->
		<!-- .site-branding-text -->

		<div class="page-area">

	</div><!-- .custom-header -->


<?php 
}
