<?php
/*
*Template Name: Шаблон Услуги Страницы
*/
 get_header(); ?>
<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                
                <img src="<?php echo esc_html(get_theme_mod('os_page_services_bkgimage')); ?>" class="full-image" data-mask="70">
                
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">
                            <?php the_title(); ?>
                        </h1>
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb" style="background: none">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo get_home_url();?>">Главная</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: var(--primary-color);"><?php the_title(); ?>
                                 </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<?php
if (get_theme_mod('os_page_services_setting_option') == 'enable') {
$wl_port_cat = get_theme_mod('os_page_services_setting_category');
if ($wl_port_cat != '0'):
?>
<section id="services" class="section-1 offers">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left text-white">
                <h2 class="featured" style="color: #fca311">
                    <?php echo esc_html(get_theme_mod('os_page_services_big_title')); ?>
                </h2>
                <p class="text-white"><?php the_post(); the_content(); ?></p>
            </div>
            <div class="col-12 col-md-3 align-self-end">
                <a href="<?php echo esc_html(get_theme_mod('os_check_3_check')); ?>" target="_blank" class=" btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-speech"></i>СВЯЗАТЬСЯ</a>
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
                <div class="card featured">
                    <a href="<?php the_permalink();?>">
                        <?php if (has_post_thumbnail()):
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'os-portfolio-image');?>
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid m-auto']);?>
                        <?php endif;?>
                    </a>
                    <a href="<?php the_permalink();?>">
                        <h4 style="padding-top: 10px"><?php the_title(); ?></h4>
                    </a>
                    <p><?php do_excerpt(get_the_excerpt(), 6); ?></p>
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
<section id="partner" class="section-2 odd logos">
    <div class="overflow-holder">
        <div class="container">
            <div class="swiper-container min-slider">
                <div class="swiper-wrapper">
                	<?php
                	// The Loop
               		 if (have_posts()) : query_posts('cat=5');
                    	while (have_posts()) :
                        the_post(); ?>
                    <div class="swiper-slide slide-center item">
                        <!-- <img src="assets/images/logo-2.png" class="fit-image w-85" alt="Fit Image"> -->
                        <?php the_post_thumbnail( 'post-thumbnail', ['class'=>'fit-image w-85'] ); ?>
                    </div>
                    <?php
                    endwhile;
	                endif;
	                wp_reset_query();
	            	?>
                </div>
            </div>
        </div>
    </div>
</section>

 <?php get_footer(); ?>