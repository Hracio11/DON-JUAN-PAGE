<?php get_header();?>
<section class="container">
    <div class="row banner1">
        <div class="banner autoplay">
            <img class="banner" src="http://localhost/wordpress/wp-content/uploads/2023/10/1.png" alt="">
        </div>
        <div class="banner autoplay">
            <img class="banner" src="http://localhost/wordpress/wp-content/uploads/2023/10/3.png" alt="">
        </div>
        <div class="banner autoplay">
            <img class="banner" src="http://localhost/wordpress/wp-content/uploads/2023/10/2.png" alt="">
        </div>
    </div>
    <div class="row">
        <h2>Productos recien agregados</h2>
        <?php echo do_shortcode("[products limit='3' orderby='date']"); ?>
        <h2>Productos en oferta</h2>
        <?php echo do_shortcode("[products limit='3' on_sale='true']"); ?>
        <h2>Productos más vendidos</h2>
        <?php echo do_shortcode("[best_selling_products limit='3']"); ?>
</section>
<?php get_footer();?>