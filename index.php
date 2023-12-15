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
    <a class="Ir" href="https://donjuan.ayphu.cloud/?post_type=product">Ir a Tienda</a>
    <div class="row">
        
        <h2 class="titulos">Productos en oferta</h2>
        <div><?php echo do_shortcode("[products limit='3' on_sale='true']"); ?></div>
        <h2 class="titulos">Ultimos Productos</h2>
        <div><?php echo do_shortcode("[products limit='3' orderby='date']"); ?></div>
        <h2 class="titulos">Productos que te interecen</h2>
        <div><?php echo do_shortcode("[products limit='3' orderby='rand']"); ?></div>
    </div>
</section>
<?php get_footer();?>