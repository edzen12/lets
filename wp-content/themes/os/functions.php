<?php


// Подключение главных настроек
require get_template_directory() . '/inc/theme-settings.php';
// Подключение Стилей
require get_template_directory() . '/inc/styles.php';
// Customizer additions.
require get_template_directory() . '/customizer/customizer.php';
// Подключение sanitizer
require get_template_directory() . '/inc/sanitizer.php';
// Подключение os-functions
require get_template_directory() . '/inc/os-functions.php';
//include file sldier and excerpt
require get_template_directory() . '/inc/os-classes.php';


function remove_menus(){
  remove_menu_page( 'index.php' );                  //Консоль
  // remove_menu_page( 'edit.php' );                   //Записи
  remove_menu_page( 'upload.php' );                 //Медиафайлы
  // remove_menu_page( 'edit.php?post_type=page' );    //Страницы
  remove_menu_page( 'edit-comments.php' );          //Комментарии
  // remove_menu_page( 'themes.php' );                 //Внешний вид
//   remove_menu_page( 'plugins.php' );                //Плагины
  // remove_menu_page( 'users.php' ); s                 //Пользователи
  remove_menu_page( 'tools.php' );                  //Инструменты
  // remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menus' );



