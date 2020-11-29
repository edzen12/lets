<?php
/*
*Template Name: Шаблон О нас Страницы
*/
 get_header(); ?>

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                
                <img src="<?php echo esc_html(get_theme_mod('os_page_about_bkgimage')); ?>" class="full-image" data-mask="70">
                
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

<!-- About [image] -->
<section id="about" class="section-1 highlights image-right">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                <div class="row intro">
                    <div class="col-12 p-0">
                        <h2 class="featured alt" style="color: #FCA311">
                            <?php echo esc_html(get_theme_mod('os_page_about_big_title')); ?>
                        </h2>
                        <p class="text-white"><?php echo esc_html(get_theme_mod('os_page_about_content')); ?></p>
                    </div>
                </div>
                <div class="row items">
                    <div class="col-12 p-0">
                        <div class="row item">
                            <div class="col-12 col-md-2 align-self-center">
                                <i class="icon icon-badge"></i>
                            </div>
                            <div class="col-12 col-md-9 align-self-center text-white">
                                <h4 style="color: #FCA311"><?php echo esc_html(get_theme_mod('os_page_about_big_ic2')); ?></h4>
                                <p><?php echo esc_html(get_theme_mod('os_page_about_content2')); ?></p>
                            </div>  
                        </div>
                        <div class="row item">
                            <div class="col-12 col-md-2 align-self-center">
                                <i class="icon icon-briefcase"></i>
                            </div>
                            <div class="col-12 col-md-9 align-self-center text-white">
                                <h4 style="color: #FCA311"><?php echo esc_html(get_theme_mod('os_page_about_big_ic3')); ?></h4>
                                <p><?php echo esc_html(get_theme_mod('os_page_about_content3')); ?></p>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery col-12 col-md-6">
                <a href="<?php echo esc_html(get_theme_mod('os_page_about_bkgimage2')); ?>">
                    <img src="<?php echo esc_html(get_theme_mod('os_page_about_bkgimage2')); ?>" class="fit-image" alt="About Us">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section id="features" class="section-2 odd offers">
    <div class="container">
        <div class="row justify-content-center text-center items">

            <div class="col-12 col-md-12 col-lg-12 item">
                <div class="card no-hover">
                    <?php the_content() ?>
                </div>
            </div>

        </div>
    </div>
</section>

 <?php get_footer(); ?>