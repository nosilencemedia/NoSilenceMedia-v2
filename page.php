<!-- Page.php -->
	<?php get_header(); ?>
    
    <body class="page"> <!-- Allows body to be dynamically changed per page, regardless of page tags or attributes. -->
    <?php get_template_part( navbar ); ?> 
    
	<section id="maincontent" role="main">
    	<div class="contentwidth">
			
            <!-- Begin Article Logic -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="header">
                    <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
                </header>
                
                <section class="entry-content">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    <?php the_content(); ?>
                    <div class="entry-links"><?php wp_link_pages(); ?></div>
                </section>
            </article>
            
            <!-- Comments Template -->
            <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
            
            <?php endwhile; endif; ?>
            
        </div><!--/ContentWidth-->
	</section><!--/MainContent-->
	<?php get_footer(); ?>