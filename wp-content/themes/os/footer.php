<!-- Footer -->
<footer class="odd">

    <!-- Footer [links] -->
    <div id="footer" class="footer" style="position: relative;width: 100%; padding: 60px 0;background-size: cover;background-attachment: fixed;background-position: center;">
        <div class="container">
            <div class="row items footer-widget">
                
                <div class="col-12 col-lg-12 p-0">                            
                    <div class="row">
                        <div class="col-12 col-lg-3 p-3 text-center text-lg-left item">
                            <div class="brand">
                                <a href="/" class="logo">
                                    Lets.kg.                                 
                                    <!-- 
                                        Custom Logo
                                        <img src="assets/images/logo.svg" alt="Leverage">
                                    -->
                                </a>
                            </div>
                            <p class="mt-3">Заходите на наши социальные сети, пишите и общайтесь. Появились вопросы пишите</p>

                        </div>
                        <div class="col-12 col-lg-3 p-3 text-center text-lg-left item">
                            <h4 class="title">Связаться</h4>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="tel:<?php echo esc_html(get_theme_mod('os_check_1_check')); ?>" class="nav-link">
                                        <i class="icon-phone mr-2"></i>
                                        <?php echo esc_html(get_theme_mod('os_check_1_check')); ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-location-pin mr-2"></i>
                                        <?php echo esc_html(get_theme_mod('os_check_6_check')); ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo esc_html(get_theme_mod('os_check_3_check')); ?>" 
                                        class="nav-link" target="_blank">
                                        <i class="fa fa-whatsapp mr-2" style="font-size: 19px"></i>
                                        WhatsApp
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo esc_html(get_theme_mod('os_check_3_check')); ?>" class="mt-4 mr-auto ml-auto ml-lg-0 btn dark-button " target="_blank">
                                        <i class="icon-speech"></i>ПОСЛАТЬ СООБЩЕНИЕ
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6 p-2 text-center text-lg-left item">
                            <h4 class="title">Местоположение</h4>
                            <div class="container">
                                <a class="dg-widget-link" href="http://2gis.kg/osh/firm/70000001035645205/center/72.79506683349611,40.53420384390963/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Оша</a><div class="dg-widget-link"><a href="http://2gis.kg/osh/firm/70000001035645205/photos/70000001035645205/center/72.79506683349611,40.53420384390963/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.kg/osh/center/72.79507,40.533886/zoom/16/routeTab/rsType/bus/to/72.79507,40.533886╎КАРПОУ, IT академия?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до КАРПОУ, IT академия</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":'100%',"height":40,"borderColor":"#a3a3a3","pos":{"lat":40.53420384390963,"lon":72.79506683349611,"zoom":16},"opt":{"city":"osh"},"org":[{"id":"70000001035645205"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Copyright -->
    <section id="copyright" class="p-3 copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                    <p>Наслаждайтесь оптимальной ценой и качественной работой</p>
                    <!--
                        Suggestion: Replace the text above with a description of your website.
                     -->
                </div>
                <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                    <p>© 2020 Все права защищены <a href="https://wa.me/+996771494083">ENIGMA</a>.</p>
                </div>
            </div>
        </div>
    </section>

</footer>

<!-- #region Global ============================ -->

<!-- Modal [search] -->
<div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                Поиск <i class="icon-close"></i>
            </div>
            <div class="modal-body">
                <form class="row" action="<?php bloginfo( 'url' ); ?>" method="get">
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>Что вы ищете?</h2>
                                <p>Ищите услуги и новости о лучшем, что у нас есть.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input  type="text" class="form-control" name="s" placeholder="Введите слово" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button"><i class="icon-magnifier"></i>ПОИСК</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal [responsive menu] -->
<div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                Меню <i class="icon-close"></i>
            </div>
            <div class="menu modal-body">
                <div class="row w-100">
                    <div class="items p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                    <div class="contacts p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll [to top] -->
<div id="scroll-to-top" class="scroll-to-top">
    <a href="#header" class="smooth-anchor">
        <i class="icon-arrow-up"></i>
    </a>
</div> 

<?php wp_footer(); ?>

</body>
</html>
