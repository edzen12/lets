<?php
/*
*Template Name: Шаблон Контакты Страницы
*/
 get_header(); ?>
<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                
                <img src="<?php echo esc_html(get_theme_mod('os_page_contacts_bkgimage')); ?>" class="full-image" data-mask="70">
                
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
<!-- Contacts -->
<section id="contacts" class="section-1 offers">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <h2 class="featured" style="color: #FCA311">
                <?php echo esc_html(get_theme_mod('os_page_contacts_big_title')); ?></h2>
                <p class="text-white"><?php echo esc_html(get_theme_mod('os_page_contacts_content')); ?></p>
            </div>
            <div class="col-12 col-md-3 align-self-end">
                <a href="https://wa.me/<?php echo esc_html(get_theme_mod('os_banners_link')); ?>" class=" btn mx-auto mr-md-0 ml-md-auto primary-button" target="_blank"><i class="icon-speech"></i><?php echo esc_html(get_theme_mod('os_banners_btn')); ?></a>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card featured">
                    <i class="icon icon-phone"></i>
                    <a href="tel:<?php echo esc_html(get_theme_mod('os_page_contacts_card_1_phone')); ?>">
                    	<h4>
                    		<?php echo esc_html(get_theme_mod('os_page_contacts_card_1_phone')); ?>
                    	</h4>
	                </a>
                    <p class="mb-1"><?php echo esc_html(get_theme_mod('os_page_contacts_card_1_text')); ?></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="fa fa-whatsapp" style="font-size: 35px; color: #FCAE2F"></i>
                    <a href="https://wa.me/+996551947777">
                    	<h4>
	                    	<?php echo esc_html(get_theme_mod('os_page_contacts_card_2_email')); ?>
	                    </h4>
                    </a>
                    <p class="mb-1"><?php echo esc_html(get_theme_mod('os_page_contacts_card_2_text')); ?></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card featured">
                    <i class="icon icon-location-pin"></i>
                    <h4><?php echo esc_html(get_theme_mod('os_page_contacts_card_3_loc')); ?></h4>
                    <p class="mb-1"><?php echo esc_html(get_theme_mod('os_page_contacts_card_3_text')); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom -->
<section id="custom" class="section-2 map">
    <a class="dg-widget-link" href="http://2gis.kg/osh/firm/70000001035645205/center/72.79506683349611,40.53420384390963/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Оша</a><div class="dg-widget-link"><a href="http://2gis.kg/osh/firm/70000001035645205/photos/70000001035645205/center/72.79506683349611,40.53420384390963/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.kg/osh/center/72.79507,40.533886/zoom/16/routeTab/rsType/bus/to/72.79507,40.533886╎КАРПОУ, IT академия?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до КАРПОУ, IT академия</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":'100%',"height":600,"borderColor":"#a3a3a3","pos":{"lat":40.53420384390963,"lon":72.79506683349611,"zoom":16},"opt":{"city":"osh"},"org":[{"id":"70000001035645205"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
</section>
 <?php get_footer(); ?>