<?php

function os_customize_register($wp_customize) {

    require get_template_directory() . '/customizer/general-panel.php';

    require get_template_directory() . '/customizer/banner-panel.php';
    
    require get_template_directory() . '/customizer/about-panel.php';

    require get_template_directory() . '/customizer/portfolio-panel.php';

    require get_template_directory() . '/customizer/services-panel.php';

    require get_template_directory() . '/customizer/check-panel.php';

    require get_template_directory() . '/customizer/pathners-panel.php';

    require get_template_directory() . '/customizer/footer-panel.php';

    require get_template_directory() . '/customizer/page-about-panel.php';

    require get_template_directory() . '/customizer/page-portfolio-panel.php';

    require get_template_directory() . '/customizer/page-services-panel.php';
    
    require get_template_directory() . '/customizer/page-contacts-panel.php';

}
add_action('customize_register', 'os_customize_register');
