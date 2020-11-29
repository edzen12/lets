<?php
/*
*Template Name: Шаблон Главной Страницы
*/
 get_header(); ?>

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured right">
    <div class="swiper-container no-slider animation slider-h-100">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                <img data-aos="zoom-out-up" data-aos-delay="800" src="<?php echo esc_html(get_theme_mod('os_banners_bkgimage')); ?>" class="hero-image" alt="Hero Image">
                <div class="slide-content row" data-mask-768="70">
                    <div class="col-12 d-flex inner">
                        <div class="left align-self-center text-center text-md-left">
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="mt-5 title_bek effect-static-text">
                                <?php echo esc_html(get_theme_mod('os_banners_medium_title')); ?><br> 
                                <?php echo esc_html(get_theme_mod('os_banners_big_title')); ?>
                            </h1>
                            <p data-aos="zoom-out-up" data-aos-delay="800" class="description">
                                <?php echo esc_html(get_theme_mod('os_banners_content')); ?>
                            </p>
                            <a href="https://wa.me/<?php echo esc_html(get_theme_mod('os_banners_link')); ?>" data-aos="zoom-out-up" data-aos-delay="1200" class=" ml-auto mr-auto ml-md-0 mt-4 btn dark-button" target="_blank">
                                <i class="icon-phone"></i>
                                <?php echo esc_html(get_theme_mod('os_banners_btn')); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- About [video] -->
<?php if (get_theme_mod('os_about_setting_option') == 'enable') { ?>

<section id="video" class="section-1 odd highlights image-center featured left">
    <div class="container smaller">
        <div class="row text-center intro">
            <div class="col-12">
                <h2><?php echo esc_html(get_theme_mod('os_about_title')); ?></h2>
                <p class="text-max-800"><?php echo esc_html(get_theme_mod('os_about_content')); ?></p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 gallery">

                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/lc6Y0pDyeE4?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
        </div>
    </div>
</section>

<?php } ?>

<!-- Portfolio -->
<?php
if (get_theme_mod('os_portfolio_setting_option') == 'enable') {
$wl_port_cat = get_theme_mod('os_portfolio_setting_category');
if ($wl_port_cat != '0'):
?>
<section id="portfolio" class="section-3 odd offers secondary featured left">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <h2 class="featured"><?php echo esc_html(get_theme_mod('os_portfolio_title')); ?></h2>
                <p><?php echo esc_html(get_theme_mod('os_portfolio_content')); ?></p>
            </div>
            <div class="col-12 col-md-3 align-self-end">
                <a href="<?php echo esc_html(get_theme_mod('os_portfolio_btn_link')); ?>" 
                	class="btn mx-auto mr-md-0 ml-md-auto primary-button">
                    <i class="icon-grid"></i>
                    <?php echo esc_html(get_theme_mod('os_portfolio_btn_name')); ?>
                </a>
            </div>
        </div>
        <div class="row justify-content-center text-center items">

        	<?php
            $port_args = array('cat' => $wl_port_cat, 'post_status' => 'publish', 'posts_per_page' => 3);
            $port_query = new WP_Query($port_args);
            $i = 0;
            if ($port_query->have_posts()):
                while ($port_query->have_posts()): $port_query->the_post();
                    $i++;
                    ?>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card featured">
                    <a href="<?php the_permalink(); ?>"> 
                        <h4><?php the_title(); ?></h4>
                    </a>
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

<!-- Services -->
<?php
if (get_theme_mod('os_services_setting_option') == 'enable') {
$wl_port_cat = get_theme_mod('os_services_setting_category');
if ($wl_port_cat != '0'):
?>
<section id="services" class="section-4 odd offers featured right">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <h2 class="featured"><?php echo esc_html(get_theme_mod('os_services_title')); ?></h2>
                <p><?php echo esc_html(get_theme_mod('os_services_desc')); ?></p>
            </div>
            <div class="col-12 col-md-3 align-self-end">
                <a href="<?php echo esc_html(get_theme_mod('os_services_btn_link')); ?>" class="btn mx-auto mr-md-0 ml-md-auto primary-button">
                    <i class="icon-grid"></i><?php echo esc_html(get_theme_mod('os_services_btn_tit')); ?>
                </a>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
        	<?php
            $port_args = array('cat' => $wl_port_cat, 'post_status' => 'publish', 'posts_per_page' => 3);
            $port_query = new WP_Query($port_args);
            $i = 0;
            if ($port_query->have_posts()):
                while ($port_query->have_posts()): $port_query->the_post();
                    $i++;
                    ?>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card featured">
                	<a href="<?php the_permalink();?>">
                        <?php if (has_post_thumbnail()):
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'os-portfolio-image');?>
                        	<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid m-auto']);?>
                        <?php endif;?>
                    </a>
                    <a href="<?php the_permalink();?>">
                        <h4 class="mt-2"><?php the_title(); ?></h4>
                    </a>
                    <p><?php do_excerpt(get_the_excerpt(), 8); ?></p>
                    <a href="<?php the_permalink();?>"><i class="btn-icon icon-arrow-right-circle"></i></a>
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

<!-- Partners -->
<?php
if (get_theme_mod('os_partners_setting_option') == 'enable') {
$wl_port_cat = get_theme_mod('os_partners_setting_category');
if ($wl_port_cat != '0'):
?>
<section id="partner" class="section-5 odd logos featured left">
    <div class="overflow-holder">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured"><?php echo esc_html(get_theme_mod('os_partners_big_title')); ?></h2>
                        <p><?php echo esc_html(get_theme_mod('os_partners_content')); ?></p>
                    </div>
                </div>
            <div class="swiper-container min-slider mt-3">
                <div class="swiper-wrapper">
                	<?php
            		$port_args = array('cat' => $wl_port_cat, 'post_status' => 'publish', 'posts_per_page' => 14);
            		$port_query = new WP_Query($port_args);
            		$i = 0;
            		if ($port_query->have_posts()):
                		while ($port_query->have_posts()): $port_query->the_post();
                   		 $i++;
                    ?>
                    <div class="swiper-slide slide-center item">
                        <?php if (has_post_thumbnail()):
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'os-portfolio-image');?>
	                    	<?php the_post_thumbnail('post-thumbnail', ['class' => 'fit-image w-85']);?>
	                    <?php endif;?>
                    </div>
                    <?php
		            endwhile;
		            endif;
		            wp_reset_postdata(); 
		            ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
}
?>

 <?php get_footer(); ?>