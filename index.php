<!-- Index.php -->
<?php get_header(); ?>

<body class="index"> <!-- Allows body to be dynamically changed per page, regardless of page tags or attributes. -->
<?php get_template_part( navbar ); ?> 
    
    <!-- Begin main content of the website -->
	<section id="maincontent" role="main">
    
    
    	<!-- ContentWidth provices a way to dynamically scale content within a parent class while allowing the parent class to break the illusion of paddeded content and whitespace by painting colors and shapes across the whole screen.-->
    	<div class="contentwidth">
        
        	<!-- Begin Post Loop Logic -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
                <?php comments_template(); ?>
            <?php endwhile; endif; ?>
            
            <!-- Page Navigation -->
            <?php get_template_part( 'nav', 'below' ); ?>
            
        </div><!--/ContentWidth-->
	</section><!--/MainContent-->
    
<?php get_footer(); ?>