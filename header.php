<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DON JUAN</title>
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url");?>/style.css?v=1.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 cajalogo">
                    <a href="<?php echo home_url(); ?>"><img class="logo"src="https://donjuan.ayphu.cloud/wp-content/uploads/2023/12/logo-1.png" alt=""></a>
                </div>
                <div class="col-md-6 menu-principal">
                    <?php wp_nav_menu('header-menu');?>
                </div>
                <div class="col-md-3">
                    <form method="GET">
                        <input type="hidden" name="post_type" value="product">
                        <input class="buscar" type="search" name="s" placeholder=" Buscar">
                        <button class="lupa">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div> 
    </header>