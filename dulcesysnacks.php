<?php get_header();?>
    <section class="container">
        <div class="row">
            <h2><?php the_category();?></h2>
            <?php echo do_shortcode("[products limit='20']"); ?>
        </div>
    </section>
    <?php get_footer();?>