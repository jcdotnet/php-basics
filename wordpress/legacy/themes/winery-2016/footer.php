                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="list-group">
                                    <li class="list-group-item style-1 list-group-label">Products</li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=*">All Products</a></li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=.red-wines">Red Wines</a></li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=.white-wines">White Wines</a></li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=.rose-wines">Rosé Wines</a></li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=.food-specialties">Food Specialties</a></li>
                                </ul>    	
                            </div>
                            <div class="col-sm-3">
                                <ul class="list-group">
                                    <li class="list-group-item style-1 list-group-label">About</li>
                                    <li class="list-group-item style-1"><a href="who-we-are.html">Who we are</a></li>
                                    <li class="list-group-item style-1"><a href="our-history.html">Our History</a></li>
                                    <li class="list-group-item style-1"><a href="the-vineyard.html">The Vineyard</a></li>
                                    <li class="list-group-item style-1"><a href="gallery.html">Gallery</a></li>
                                </ul>    	
                            </div>
                            <div class="col-sm-3">
                                <ul class="list-group">
                                    <li class="list-group-item style-1 list-group-label">Clients</li>
                                    <li class="list-group-item style-1"><a href="register.html">Register</a></li>
                                    <li class="list-group-item style-1"><a href="login.html">Login</a></li>
                                    <li class="list-group-item style-1"><a href="contact.html">Contact</a></li>
                                    <li class="list-group-item style-1"><a href="faq.html">FAQ</a></li>
                                </ul>    	
                            </div>
                            <div class="col-sm-3">
                                <ul class="list-group">
                                    <li class="list-group-item style-1 list-group-label">Services</li>
                                    <li class="list-group-item style-1"><a href="buy-online.html">Buy Online <span class="badge">New!</span></a></li>
                                    <li class="list-group-item style-1"><a href="#">Blog</a></li>
                                </ul>    	
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-4 pad-v text-center">
                                <?php if ( has_custom_logo() ) { the_custom_logo(); } else { echo get_template_directory_uri().'/assets/images/logo.png'; }?>
                            </div>
                        </div>

                    </div>
                </footer>
                
            </div>
            <!-- /#main-row -->
        </div>
        <!-- /#main-container -->
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript">if (!window.jQuery) { document.write('<script src="<?php bloginfo('template_directory');?>/assets/js/jquery-1.11.3.min.js"><\/script>'); }</script>
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jquery.swipebox.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jquery.stellar.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/sticky.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/chateau-script.js"></script>
        <script type="text/javascript">
        	var map;
        	
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                	// Disable mouse scroll
                	scrollwheel: false,
                	
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(38.499012, -122.423551),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"road","stylers":[{"hue":"#5e00ff"},{"saturation":-79}]},{"featureType":"poi","stylers":[{"saturation":-78},{"hue":"#6600ff"},{"lightness":-47},{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"lightness":22}]},{"featureType":"landscape","stylers":[{"hue":"#6600ff"},{"saturation":-11}]},{},{},{"featureType":"water","stylers":[{"saturation":-65},{"hue":"#1900ff"},{"lightness":8}]},{"featureType":"road.local","stylers":[{"weight":1.3},{"lightness":30}]},{"featureType":"transit","stylers":[{"visibility":"simplified"},{"hue":"#5e00ff"},{"saturation":-16}]},{"featureType":"transit.line","stylers":[{"saturation":-72}]},{}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(38.499012, -122.423551),
                    map: map,
                    title: 'Snazzy!'
                });
            }
            
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
            
            // Keep the map centered when resize
			google.maps.event.addDomListener(window, 'resize', function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, 'resize');
			map.setCenter(center); 
			});            
			
        </script>
        <?php wp_footer(); ?>
	</body>
</html>