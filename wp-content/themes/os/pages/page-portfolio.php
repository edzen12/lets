<?php
/*
*Template Name: Шаблон Портфолио Страницы
*/
 get_header(); ?>
<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                
                <img src="<?php echo esc_html(get_theme_mod('os_page_portfolio_bkgimage')); ?>" class="full-image" data-mask="70">
                
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">
                            <?php the_title(); ?>
                        </h1>
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb" style="background: none">
                                <li class="breadcrumb-item"><a href="<?php echo get_home_url();?>">Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: var(--primary-color);"><?php the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<div id="features" class="section-2 odd offers" style="background: #040402">
    <div class="container">
        <div class="row justify-content-center text-center items">

            <div class="col-12 col-md-12 col-lg-12 item">
                <div class="card no-hover text-white">
                    <?php the_post(); the_content(); ?>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Portfolio -->
<?php
if (get_theme_mod('os_page_portfolio_setting_option') == 'enable') {
$wl_port_cat = get_theme_mod('os_page_portfolio_setting_category');
if ($wl_port_cat != '0'):
?>
<section id="portfolio" class="section-1 odd offers secondary">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <h2 class="mb-0 super effect-static-text">
                	<?php echo esc_html(get_theme_mod('os_page_portfolio_medium_title')); ?>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
            <?php
            $port_args = array('cat' => $wl_port_cat, 'post_status' => 'publish');
            $port_query = new WP_Query($port_args);
            $i = 0;
            if ($port_query->have_posts()):
                while ($port_query->have_posts()): $port_query->the_post();
                    $i++;
                    ?>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <h4><?php the_title(); ?></h4>
                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()):
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'os-portfolio-image');?>
                            	<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid dzen_gi']);?>
                            <?php endif;?>
                        </a>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            endif;
            wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>
<?php
endif;
}
?>


 <?php get_footer(); ?>