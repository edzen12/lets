<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//Последние новости Section
$wp_customize->add_section('os_page_contacts_section', array(
    'priority' => 83,
    'title' => __('Страница: Контакты', 'os'),
    'panel' => 'os_homepage_setups',
));


//call to action background image
$wp_customize->add_setting('os_page_contacts_bkgimage', array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'os_page_contacts_bkgimage', array(
    'label' => __('Баннер фотографии', 'os'),
    'section' => 'os_page_contacts_section',
    'setting' => 'os_page_contacts_bkgimage'
)));

//Services Little Title Грант
$wp_customize->add_setting('os_page_contacts_big_title', array(
    'default' => __('Большой заголовок', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_contacts_big_title', array(
    'type' => 'text',
    'label' => __('Большой заголовок', 'os'),
    'section' => 'os_page_contacts_section',
    'setting' => 'os_page_contacts_big_title',
));

//Services Little Title Грант
$wp_customize->add_setting('os_page_contacts_content', array(
    'default' => __('Контент', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_contacts_content', array(
    'type' => 'textarea',
    'label' => __('Контент', 'os'),
    'section' => 'os_page_contacts_section',
    'setting' => 'os_page_contacts_content',
));

//Services Little Title Грант
$wp_customize->add_setting('os_page_contacts_card_1_phone', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_contacts_card_1_phone', array(
    'type' => 'text',
    'label' => __('Первая карта - номер', 'os'),
    'section' => 'os_page_contacts_section',
    'setting' => 'os_page_contacts_card_1_phone',
));
//Services Little Title Грант
$wp_customize->add_setting('os_page_contacts_card_1_text', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_contacts_card_1_text', array(
    'type' => 'text',
    'label' => __('Первая карта - контент', 'os'),
    'section' => 'os_page_contacts_section',
    'setting' => 'os_page_contacts_card_1_text',
));

//Services Little Title Грант
$wp_customize->add_setting('os_page_contacts_card_2_email', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_contacts_card_2_email', array(
    'type' => 'text',
    'label' => __('Вторая карта - email', 'os'),
    'section' => 'os_page_contacts_section',
    'setting' => 'os_page_contacts_card_2_email',
));
//Services Little Title Грант
$wp_customize->add_setting('os_page_contacts_card_2_text', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_contacts_card_2_text', array(
    'type' => 'text',
    'label' => __('Вторая карта - контент', 'os'),
    'section' => 'os_page_contacts_section',
    'setting' => 'os_page_contacts_card_2_text',
));

//Services Little Title Грант
$wp_customize->add_setting('os_page_contacts_card_3_loc', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_contacts_card_3_loc', array(
    'type' => 'text',
    'label' => __('Третье карта - локация', 'os'),
    'section' => 'os_page_contacts_section',
    'setting' => 'os_page_contacts_card_3_loc',
));
//Services Little Title Грант
$wp_customize->add_setting('os_page_contacts_card_3_text', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_contacts_card_3_text', array(
    'type' => 'text',
    'label' => __('Третье карта - контент', 'os'),
    'section' => 'os_page_contacts_section',
    'setting' => 'os_page_contacts_card_3_text',
));
