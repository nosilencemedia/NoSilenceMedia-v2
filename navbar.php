<div class="bodycontainer"> <!-- <?php //body_class(); ?> -->
<!-- BodyContainer provides a way to control all of the content in Body, except for notifications, drop-down windows, etc. Provides ability to include depth in the website. -->
    
    <!-- Begin Header SuperBar -->
	<header id="mnavbar">
    
    	<!-- ContentWidth provices a way to dynamically scale content within a parent class while allowing the parent class to break the illusion of paddeded content and whitespace by painting colors and shapes across the whole screen.-->
        <div class="contentwidth">
            
            <!-- Branding -->
            <section id="branding">
            
            	<!-- Site Title -->
                <div id="site-title">
                	<script type="text/javascript">
						var str= "<?php echo esc_html( get_bloginfo( 'name' ) ); ?>";
						var matches = str.match(/\b(\w)/g);
						var acronym = matches.join(''); 
                    </script>
                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
					<script type="text/javascript">
					document.write(acronym);
					</script>
                    </a>
                </div>
                
                <div id="site-description">
					<?php bloginfo( 'description' ); ?>
                </div>
            </section>
            
            <!-- Links -->
			<nav>
            <?php wp_nav_menu( array( 'theme_location' => 'navbar-menu' ) ); ?>
            </nav>

            <section id="search">
            <?php get_search_form(); ?>
            </section>
            
        </div><!--/ContentWidth-->
    </header>
    
    <!-- The navigation bar is fixed to the webview. This placeholder keeps from cutting content off and also allows the Wordpress Admin bar to still display without affecting the rest of the site's design. -->
    <section id="navbarfill" role="complementary"></section>
