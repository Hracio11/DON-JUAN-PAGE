<?php get_header();?>
<section class="container">
    <div class="row banner1">
        <div class="banner autoplay">
            <img class="banner" src="http://localhost/wordpress/wp-content/uploads/2023/12/1.png" alt="">
        </div>
        <div class="banner autoplay">
            <img class="banner" src="http://localhost/wordpress/wp-content/uploads/2023/12/3.png" alt="">
        </div>
        <div class="banner autoplay">
            <img class="banner" src="http://localhost/wordpress/wp-content/uploads/2023/12/2.png" alt="">
        </div>
    </div>
    <div class="row">
        <h2 class="titulos">Productos recien agregados</h2>
        <?php echo do_shortcode("[products limit='3' orderby='date']"); ?>
        <h2 class="titulos">Productos en oferta</h2>
        <?php echo do_shortcode("[products limit='3' on_sale='true']"); ?>
        <h2 class="titulos">Productos más vendidos</h2>
        <?php echo do_shortcode("[best_selling_products limit='3']"); ?>
</section>
<?php get_footer();?>