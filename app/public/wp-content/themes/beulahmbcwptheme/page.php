<?php get_header();
/*Default Page*/
?>

<main class="container page section no-sidebars">
    <?php while(have_posts()): the_post(); ?>
        
        
        <?php 
            if(has_post_thumbnail()):
                the_post_thumbnail('header', array('class' => 'featured-image'));
            endif;

        ?>
        <h1 class="text-left display-2"><?php the_title();?></h1>
        <?php the_content();?>
           
        
    <?php endwhile;?>
</main>
<?php get_footer();?>