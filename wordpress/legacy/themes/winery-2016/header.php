<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?></title>
        
        <!-- meta -->
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        
        <!-- css -->
        <link href="<?php bloginfo('template_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory');?>/assets/css/font-awesome.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory');?>/assets/css/animate.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory');?>/assets/css/swipebox.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory');?>/assets/css/swiper.min.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        
        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
		<!-- head js -->
        <script src="<?php bloginfo('template_directory');?>/assets/js/modernizr-2.6.2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    
    <body>
    
    	<aside id="side-nav">
    	
    		<div>

				<form class="form-inline">
					<div class="form-group has-feedback">
						<label for="search-field">Search site</label>
						<input id="search-field" type="text" class="form-control" placeholder="Search...">
						<button id="search-btn" type="submit" class="btn"><span class="fa fa-search"></span></button>
					</div>
				</form>

				<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">About</li>
					<li class="list-group-item style-1"><a href="register.html">Register</a></li>
					<li class="list-group-item style-1"><a href="login.html">Login</a></li>
					<li class="list-group-item style-1"><a href="contact.html">Contact</a></li>
					<li class="list-group-item style-1"><a href="faq.html">FAQ</a></li>
				</ul>    	
		        
				<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">Social</li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-facebook-square"></span> Facebook</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-twitter-square"></span> Twitter</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-google-plus-square"></span> Google Plus</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-pinterest-square"></span> Pinterest</a></li>
				</ul>
				
    		</div>

    	</aside><!-- /#side-nav  -->

        <div class="container-fluid" id="main-container">
            <div class="row" id="main-row">
            
                <header>
                    <nav id="main-nav-bar" class="navbar navbar-default">
                        <div class="container">

                            <div class="navbar-header">
                                <div class = "hidden-xs hidden-sm">
                                    <a class="navbar-brand"  href="homepage.html"><?php if ( has_custom_logo() ) { the_custom_logo(); } else { echo get_template_directory_uri().'/assets/images/logo.png'; }?> </a>
                                </div>
                                <div class="hidden-lg hidden-md">
                                    <a class="navbar-brand hidden-lg hidden-md" href="homepage.html"><img alt="" src="<?php if ( get_theme_mod( 'mobile_logo' ) ) { get_theme_mod( 'mobile_logo' ); } else { echo get_template_directory_uri().'/assets/images/logo-mobile.png'; }?>"></a>
                                </div>
                                <button class="toggle-side-menu navbar-toggle" type="button"><span class="fa fa-ellipsis-v"></span></button>
                                <button class="navbar-toggle collapsed" data-target="#navigation" data-toggle="collapse" type="button"><span class="fa fa-navicon"></span></button>
                                <button class="navbar-toggle" type="button"><span class="fa fa-shopping-cart"></span></button>
                            </div>
                            <!-- navbar-header -->

                            <div class="collapse navbar-collapse navbar-right" id="navigation">
                            
                                <?php /* Primary navigation */
                                    wp_nav_menu( array(
                                        'theme_location'    => 'primary',
                                        'depth' => 2,
                                        'container' => false,
                                        'menu_id' => 'main-nav',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker' => new wp_bootstrap_navwalker())
                                    );
                                ?>
                                <!-- 
                                <ul id="main-nav" class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="products.html#filter=*">All Products</a></li>
                                            <li><a href="products.html#filter=.red-wines">Red Wines</a></li>
                                            <li><a href="products.html#filter=.white-wines">White Wines</a></li>
                                            <li><a href="products.html#filter=.rose-wines">Rosé Wines</a></li>
                                            <li><a href="products.html#filter=.food-specialties">Food Specialties</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="who-we-are.html">Who we are</a></li>
                                            <li><a href="our-history.html">Our History</a></li>
                                            <li><a href="the-vineyard.html">The Vineyard</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="blog-entry.html">Blog Entry 1</a></li>
                                            <li><a href="blog-entry-alternative.html">Blog Entry 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="elements.html">Elements</a></li>
                                    <li><a href="buy-online.html">Buy Online <span class="badge">New</span></a></li>
                                </ul>

                                <ul id="tool-nav" class="nav navbar-nav hidden-xs hidden-sm">
                                    <li><a href="cart.html"><span class="fa fa-shopping-cart"></span></a></li>
                                    <li><a href="#" class="toggle-side-menu"><span class="fa fa-ellipsis-v"></span></a></li>
                                </ul>
                                -->
							
                            </div>
                            <!-- /.navbar-collapse -->
                            
	                        
	                        <!-- /.container -->
	                        
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
				</header>
                
                <?php if (!is_front_page()): ?>
                <!-- .page-header -->
				<div class="page-header" data-stellar-background-ratio="0.2" style="background-image:url(http://placehold.it/1500x750)">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<ol class="breadcrumb">
									<li>
										<a href="<?php bloginfo('url');?>">Home</a>
									</li>
									<li class="active"><?php the_title(); ?>
									</li>
								</ol>
								<h1>
									<?php the_title(); ?>
								</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- /.page-header -->
                <?php endif; ?>