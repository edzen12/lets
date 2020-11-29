<?php 
get_header();
?>
<!-- Hero -->
<section id="slider" class="hero p-0 odd">
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
                            <ol class="breadcrumb" style="background: none;">
                                <li class="breadcrumb-item"><a href="<?php echo get_home_url();?>">Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page" 
                                	style="color: var(--primary-color);">
                                	<?php the_title(); ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="content" class="section-1 single">
    <div class="container">
        <div class="row">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'single' );

            endwhile; // End of the loop.
            ?>
            
        </div>
    </div>
</section>


<?php
get_footer();
