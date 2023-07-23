<?php

/**
Plugin Name: Etc Test
Plugin URI: https://github.com/DenisTolmachev/EtcTest
Description: Etcetera Agency - WP Developer - Test Task.
Version: 1.0
Author: Denys Tolmachov
Author URI: https://github.com/DenisTolmachev
 */

// Реєстрація нового типу запису "Об'єкт нерухомості"
function create_property_post_type() {
    $labels = array(
        'name'               => 'Об\'єкти нерухомості',
        'singular_name'      => 'Об\'єкт нерухомості',
        'menu_name'          => 'Об\'єкти нерухомості',
        'name_admin_bar'     => 'Об\'єкт нерухомості',
        'add_new'            => 'Додати новий',
        'add_new_item'       => 'Додати новий об\'єкт нерухомості',
        'edit_item'          => 'Редагувати об\'єкт нерухомості',
        'new_item'           => 'Новий об\'єкт нерухомості',
        'view_item'          => 'Переглянути об\'єкт нерухомості',
        'all_items'          => 'Всі об\'єкти нерухомості',
        'search_items'       => 'Шукати об\'єкти нерухомості',
        'not_found'          => 'Об\'єкти нерухомості не знайдені',
        'not_found_in_trash' => 'Об\'єкти нерухомості не знайдені в кошику',
        'parent_item_colon'  => 'Батьківський об\'єкт нерухомості:',
        'featured_image'     => 'Зображення об\'єкту нерухомості',
        'set_featured_image' => 'Вибрати зображення об\'єкту нерухомості',
        'remove_featured_image' => 'Видалити зображення об\'єкту нерухомості',
        'use_featured_image'    => 'Використовувати як зображення об\'єкту нерухомості',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'property' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-multisite',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    );

    register_post_type( 'property', $args );
}
add_action( 'init', 'create_property_post_type' );

// Реєстрація нової таксономії "Район"
function create_district_taxonomy() {
    $labels = array(
        'name'                       => 'Райони',
        'singular_name'              => 'Район',
        'search_items'               => 'Шукати райони',
        'popular_items'              => 'Популярні райони',
        'all_items'                  => 'Всі райони',
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => 'Редагувати район',
        'update_item'                => 'Оновити район',
        'add_new_item'               => 'Додати новий район',
        'new_item_name'              => 'Назва нового району',
        'separate_items_with_commas' => 'Розділяйте райони комами',
        'add_or_remove_items'        => 'Додати або видалити райони',
        'choose_from_most_used'      => 'Оберіть з найпопулярніших районів',
        'not_found'                  => 'Райони не знайдені',
        'menu_name'                  => 'Райони',
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'district' ),
    );

    register_taxonomy( 'district', 'property', $args );
}
add_action( 'init', 'create_district_taxonomy' );

//// Переклади для полів ACF
//add_filter('acf/settings/l10n_textdomain', function() {
//    return 'your-text-domain'; // Замініть 'your-text-domain' на тексти, які ви використовуєте в своєму плагіні або темі
//});
//
//// Реєстрація набору полів ACF
//function realestate_register_acf_fields() {
//    if (function_exists('acf_add_local_field_group')) {
//        acf_add_local_field_group(array(
//            'key' => 'group_real_estate_fields',
//            'title' => 'Поля об\'єктів нерухомості',
//            'fields' => array(
//                array(
//                    'key' => 'field_house_name',
//                    'label' => 'Назва будинку',
//                    'name' => 'house_name',
//                    'type' => 'text',
//                ),
//                array(
//                    'key' => 'field_location_coordinates',
//                    'label' => 'Координати місцезнаходження',
//                    'name' => 'location_coordinates',
//                    'type' => 'text',
//                ),
//                array(
//                    'key' => 'field_floor_count',
//                    'label' => 'Кількість поверхів',
//                    'name' => 'floor_count',
//                    'type' => 'number',
//                    'min' => 1,
//                    'max' => 20,
//                ),
//                array(
//                    'key' => 'field_building_type',
//                    'label' => 'Тип будівлі',
//                    'name' => 'building_type',
//                    'type' => 'radio',
//                    'choices' => array(
//                        'панель' => 'Панель',
//                        'цегла' => 'Цегла',
//                        'піноблок' => 'Піноблок',
//                    ),
//                ),
//                array(
//                    'key' => 'field_ecological_rating',
//                    'label' => 'Екологічність',
//                    'name' => 'ecological_rating',
//                    'type' => 'number',
//                    'min' => 1,
//                    'max' => 5,
//                ),
//                array(
//                    'key' => 'field_image',
//                    'label' => 'Зображення',
//                    'name' => 'image',
//                    'type' => 'image',
//                ),
//                array(
//                    'key' => 'field_rooms',
//                    'label' => 'Приміщення',
//                    'name' => 'rooms',
//                    'type' => 'repeater',
//                    'layout' => 'block',
//                    'sub_fields' => array(
//                        array(
//                            'key' => 'field_room_area',
//                            'label' => 'Площа',
//                            'name' => 'room_area',
//                            'type' => 'number',
//                        ),
//                        array(
//                            'key' => 'field_room_bedrooms',
//                            'label' => 'Кількість кімнат',
//                            'name' => 'room_bedrooms',
//                            'type' => 'radio',
//                            'choices' => array(
//                                1 => '1',
//                                2 => '2',
//                                3 => '3',
//                                4 => '4',
//                                5 => '5',
//                                6 => '6',
//                                7 => '7',
//                                8 => '8',
//                                9 => '9',
//                                10 => '10',
//                            ),
//                        ),
//                        array(
//                            'key' => 'field_room_balcony',
//                            'label' => 'Балкон',
//                            'name' => 'room_balcony',
//                            'type' => 'radio',
//                            'choices' => array(
//                                'так' => 'Так',
//                                'ні' => 'Ні',
//                            ),
//                        ),
//                        array(
//                            'key' => 'field_room_bathroom',
//                            'label' => 'Санвузол',
//                            'name' => 'room_bathroom',
//                            'type' => 'radio',
//                            'choices' => array(
//                                'так' => 'Так',
//                                'ні' => 'Ні',
//                            ),
//                        ),
//                        array(
//                            'key' => 'field_room_image',
//                            'label' => 'Зображення',
//                            'name' => 'room_image',
//                            'type' => 'image',
//                        ),
//                    ),
//                ),
//            ),
//            'location' => array(
//                array(
//                    array(
//                        'param' => 'post_type',
//                        'operator' => '==',
//                        'value' => 'real_estate',
//                    ),
//                ),
//            ),
//        ));
//    }
//}
//add_action('acf/init', 'realestate_register_acf_fields');

// Реєстрація шорткоду для відображення блоку фільтра
function realestate_filter_shortcode($atts) {
    ob_start();
    // Код для відображення блоку фільтра
    // Використовуйте ваш HTML та PHP-код для створення блоку фільтра
    echo '<div>Ваш блок фільтра тут</div>';
    return ob_get_clean();
}
add_shortcode('realestate_filter', 'realestate_filter_shortcode');

// Створення класу віджету для відображення блоку фільтра
class RealestateFilterWidget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'realestate_filter_widget',
            'Фільтр нерухомості',
            array('description' => 'Відображає блок фільтра для об\'єктів нерухомості')
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo $args['before_title'] . 'Фільтр нерухомості' . $args['after_title'];
        // Код для відображення блоку фільтра
        // Використовуйте ваш HTML та PHP-код для створення блоку фільтра
        echo '<div>Ваш блок фільтра тут Додати щось</div>';
        echo $args['after_widget'];
    }

    public function form($instance) {
        // Форма настройки віджету (якщо потрібно)
    }

    public function update($new_instance, $old_instance) {
        // Оновлення налаштувань віджету (якщо потрібно)
    }
}

// Реєстрація віджету
function realestate_register_widget() {
    register_widget('RealestateFilterWidget');
}
add_action('widgets_init', 'realestate_register_widget');
