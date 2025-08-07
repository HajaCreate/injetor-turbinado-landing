<?php
/**
 * Tema Curso Unidade Injetora Functions
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

// Setup do tema
function curso_unidade_injetora_setup() {
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Suporte a menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'curso-unidade-injetora'),
        'footer' => __('Menu Footer', 'curso-unidade-injetora'),
    ));
    
    // Suporte a widgets
    add_theme_support('widgets');
    
    // Suporte ao editor de blocos
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    
    // Tamanhos de imagem personalizados
    add_image_size('hero-image', 1920, 1080, true);
    add_image_size('unit-image', 400, 300, true);
    add_image_size('testimonial-avatar', 100, 100, true);
}
add_action('after_setup_theme', 'curso_unidade_injetora_setup');

// Enfileirar estilos e scripts
function curso_unidade_injetora_scripts() {
    // CSS principal
    wp_enqueue_style(
        'curso-unidade-injetora-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
    // CSS customizado
    wp_enqueue_style(
        'curso-unidade-injetora-custom',
        get_template_directory_uri() . '/assets/css/theme-custom.css',
        array('curso-unidade-injetora-style'),
        wp_get_theme()->get('Version')
    );
    
    // JavaScript principal
    wp_enqueue_script(
        'curso-unidade-injetora-script',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Localizar scripts para AJAX
    wp_localize_script('curso-unidade-injetora-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('curso_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'curso_unidade_injetora_scripts');

// Registrar áreas de widgets
function curso_unidade_injetora_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'curso-unidade-injetora'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets da sidebar principal', 'curso-unidade-injetora'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer', 'curso-unidade-injetora'),
        'id'            => 'footer-1',
        'description'   => __('Widgets do footer', 'curso-unidade-injetora'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'curso_unidade_injetora_widgets_init');

// Customizer
function curso_unidade_injetora_customize_register($wp_customize) {
    // Seção Contatos
    $wp_customize->add_section('contacts_section', array(
        'title'    => __('Informações de Contato', 'curso-unidade-injetora'),
        'priority' => 30,
    ));
    
    // WhatsApp
    $wp_customize->add_setting('whatsapp_number', array(
        'default'           => '5511999999999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('whatsapp_number', array(
        'label'   => __('Número WhatsApp', 'curso-unidade-injetora'),
        'section' => 'contacts_section',
        'type'    => 'text',
    ));
    
    // Telefone
    $wp_customize->add_setting('phone_number', array(
        'default'           => '(11) 99999-9999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('phone_number', array(
        'label'   => __('Número de Telefone', 'curso-unidade-injetora'),
        'section' => 'contacts_section',
        'type'    => 'text',
    ));
    
    // Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'contato@exemplo.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => __('Email de Contato', 'curso-unidade-injetora'),
        'section' => 'contacts_section',
        'type'    => 'email',
    ));
    
    // Seção Hero
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Seção Hero', 'curso-unidade-injetora'),
        'priority' => 35,
    ));
    
    // Título Hero
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Domine a Reparação de Unidades Injetoras',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Título Principal', 'curso-unidade-injetora'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Subtítulo Hero
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'O curso mais completo do mercado',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Subtítulo', 'curso-unidade-injetora'),
        'section' => 'hero_section',
        'type'    => 'textarea',
    ));
    
    // Imagem Hero
    $wp_customize->add_setting('hero_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'hero_image',
        array(
            'label'   => __('Imagem de Fundo', 'curso-unidade-injetora'),
            'section' => 'hero_section',
        )
    ));
    
    // Seção Benefícios
    $wp_customize->add_section('benefits_section', array(
        'title'    => __('Seção Benefícios', 'curso-unidade-injetora'),
        'priority' => 40,
    ));
    
    // Título da seção
    $wp_customize->add_setting('benefits_title', array(
        'default'           => 'Por que Escolher Nosso Curso?',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('benefits_title', array(
        'label'   => __('Título da Seção', 'curso-unidade-injetora'),
        'section' => 'benefits_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'curso_unidade_injetora_customize_register');

// Função para obter configurações do customizer
function get_theme_option($option, $default = '') {
    return get_theme_mod($option, $default);
}

// Adicionar suporte a campos personalizados (ACF-like básico)
function curso_unidade_injetora_add_meta_boxes() {
    add_meta_box(
        'hero_meta_box',
        'Configurações da Página Inicial',
        'curso_unidade_injetora_hero_meta_box_callback',
        'page'
    );
}
add_action('add_meta_boxes', 'curso_unidade_injetora_add_meta_boxes');

function curso_unidade_injetora_hero_meta_box_callback($post) {
    wp_nonce_field('curso_unidade_injetora_save_meta_box_data', 'curso_unidade_injetora_meta_box_nonce');
    
    $is_homepage = get_post_meta($post->ID, '_is_homepage', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="is_homepage">É a página inicial?</label></th>';
    echo '<td><input type="checkbox" id="is_homepage" name="is_homepage" value="1" ' . checked(1, $is_homepage, false) . ' /></td>';
    echo '</tr>';
    echo '</table>';
}

function curso_unidade_injetora_save_meta_box_data($post_id) {
    if (!isset($_POST['curso_unidade_injetora_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['curso_unidade_injetora_meta_box_nonce'], 'curso_unidade_injetora_save_meta_box_data')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }
    
    $is_homepage = isset($_POST['is_homepage']) ? 1 : 0;
    update_post_meta($post_id, '_is_homepage', $is_homepage);
}
add_action('save_post', 'curso_unidade_injetora_save_meta_box_data');

// Adicionar classes de body personalizadas
function curso_unidade_injetora_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'homepage';
    }
    
    return $classes;
}
add_filter('body_class', 'curso_unidade_injetora_body_classes');

// Otimizações SEO básicas
function curso_unidade_injetora_seo_meta() {
    if (is_front_page()) {
        echo '<meta name="description" content="Domine a reparação de unidades injetoras com o curso mais completo do mercado. Linha Rodoviária, CAT e formação completa. Aumente sua renda em até 300%.">' . "\n";
        echo '<meta name="keywords" content="reparação unidade injetora, curso mecânico, diesel, CAT, rodoviária, especialização">' . "\n";
    }
}
add_action('wp_head', 'curso_unidade_injetora_seo_meta');

// Remover versão do WordPress por segurança
remove_action('wp_head', 'wp_generator');

// Função auxiliar para números de telefone limpos
function clean_phone_number($phone) {
    return preg_replace('/[^0-9]/', '', $phone);
}

// Shortcode para botão WhatsApp
function whatsapp_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'text' => 'Falar no WhatsApp',
        'message' => 'Olá! Gostaria de saber mais sobre o curso de reparação de unidades injetoras.',
        'class' => 'btn btn-primary'
    ), $atts);
    
    $whatsapp = clean_phone_number(get_theme_option('whatsapp_number', '5511999999999'));
    $url = 'https://wa.me/' . $whatsapp . '?text=' . urlencode($atts['message']);
    
    return '<a href="' . esc_url($url) . '" target="_blank" rel="noopener" class="' . esc_attr($atts['class']) . '">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('whatsapp_button', 'whatsapp_button_shortcode');

// Shortcode para telefone
function phone_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'text' => 'Ligar Agora',
        'class' => 'btn btn-secondary'
    ), $atts);
    
    $phone = clean_phone_number(get_theme_option('phone_number', '11999999999'));
    
    return '<a href="tel:+55' . esc_attr($phone) . '" class="' . esc_attr($atts['class']) . '">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('phone_button', 'phone_button_shortcode');
?>