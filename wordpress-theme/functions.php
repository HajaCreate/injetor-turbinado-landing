<?php
/**
 * Curso Reparação Unidade Injetora Theme Functions
 */

// Impedir acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuração do tema
 */
function curso_ui_theme_setup() {
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
    
    // Suporte a feeds automáticos
    add_theme_support('automatic-feed-links');
    
    // Suporte a logotipo customizável
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Tamanhos de imagem personalizados
    add_image_size('unit-card', 400, 300, true);
    add_image_size('hero-bg', 1920, 1080, true);
}
add_action('after_setup_theme', 'curso_ui_theme_setup');

/**
 * Enfileirar estilos e scripts
 */
function curso_ui_scripts() {
    // Estilo principal
    wp_enqueue_style('curso-ui-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Font Awesome (opcional)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');
    
    // Google Fonts (opcional)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap', array(), null);
    
    // Script personalizado
    wp_enqueue_script('curso-ui-script', get_template_directory_uri() . '/js/theme.js', array(), '1.0.0', true);
    
    // Remover scripts desnecessários do WordPress
    wp_deregister_script('wp-embed');
}
add_action('wp_enqueue_scripts', 'curso_ui_scripts');

/**
 * Configurações do WordPress Customizer
 */
function curso_ui_customize_register($wp_customize) {
    // Seção de contato
    $wp_customize->add_section('curso_ui_contact', array(
        'title'    => __('Informações de Contato', 'curso-ui'),
        'priority' => 30,
    ));
    
    // WhatsApp
    $wp_customize->add_setting('whatsapp_number', array(
        'default'           => '5511999999999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('whatsapp_number', array(
        'label'   => __('Número do WhatsApp', 'curso-ui'),
        'section' => 'curso_ui_contact',
        'type'    => 'text',
    ));
    
    // Telefone
    $wp_customize->add_setting('phone_number', array(
        'default'           => '5511999999999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('phone_number', array(
        'label'   => __('Número do Telefone', 'curso-ui'),
        'section' => 'curso_ui_contact',
        'type'    => 'text',
    ));
    
    // Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'contato@cursounidadeinjetora.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => __('Email de Contato', 'curso-ui'),
        'section' => 'curso_ui_contact',
        'type'    => 'email',
    ));
}
add_action('customize_register', 'curso_ui_customize_register');

/**
 * Widgets
 */
function curso_ui_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'curso-ui'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets para a sidebar principal', 'curso-ui'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'curso-ui'),
        'id'            => 'footer-1',
        'description'   => __('Widgets para o footer', 'curso-ui'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'curso_ui_widgets_init');

/**
 * Filtros de segurança e otimização
 */

// Remover versão do WordPress do head
remove_action('wp_head', 'wp_generator');

// Remover RSD link
remove_action('wp_head', 'rsd_link');

// Remover wlwmanifest link
remove_action('wp_head', 'wlwmanifest_link');

// Remover links de posts adjacentes
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

// Desabilitar XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Remover emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Otimizações de performance
 */

// Desabilitar Gutenberg para posts (opcional)
function curso_ui_disable_gutenberg($current_status, $post_type) {
    if ($post_type === 'post') return false;
    return $current_status;
}
add_filter('use_block_editor_for_post_type', 'curso_ui_disable_gutenberg', 10, 2);

// Limpar wp_head
function curso_ui_clean_head() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');
}
add_action('wp_enqueue_scripts', 'curso_ui_clean_head', 100);

/**
 * Funções auxiliares
 */

// Obter número do WhatsApp
function get_whatsapp_number() {
    return get_theme_mod('whatsapp_number', '5511999999999');
}

// Obter número do telefone
function get_phone_number() {
    return get_theme_mod('phone_number', '5511999999999');
}

// Obter email de contato
function get_contact_email() {
    return get_theme_mod('contact_email', 'contato@cursounidadeinjetora.com.br');
}

// Gerar link do WhatsApp
function get_whatsapp_link($message = '') {
    $number = get_whatsapp_number();
    $encoded_message = urlencode($message);
    return "https://wa.me/{$number}?text={$encoded_message}";
}

/**
 * Shortcodes personalizados
 */

// Shortcode para botão do WhatsApp
function curso_ui_whatsapp_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'text' => 'Falar no WhatsApp',
        'message' => 'Olá! Gostaria de saber mais sobre o curso de reparação de unidade injetora.',
        'class' => 'btn btn-primary'
    ), $atts);
    
    $link = get_whatsapp_link($atts['message']);
    
    return '<a href="' . esc_url($link) . '" class="' . esc_attr($atts['class']) . '" target="_blank">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('whatsapp_button', 'curso_ui_whatsapp_button_shortcode');

// Shortcode para botão de telefone
function curso_ui_phone_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'text' => 'Ligar Agora',
        'class' => 'btn btn-secondary'
    ), $atts);
    
    $phone = get_phone_number();
    
    return '<a href="tel:+' . esc_attr($phone) . '" class="' . esc_attr($atts['class']) . '">' . esc_html($atts['text']) . '</a>';
}
add_shortcode('phone_button', 'curso_ui_phone_button_shortcode');

/**
 * Meta tags SEO personalizadas
 */
function curso_ui_custom_meta_tags() {
    if (is_front_page()) {
        echo '<meta name="keywords" content="reparação unidade injetora, curso mecânico, diesel, CAT, rodoviária, especialização">' . "\n";
        echo '<meta name="author" content="Curso Reparação Unidade Injetora">' . "\n";
    }
}
add_action('wp_head', 'curso_ui_custom_meta_tags');

/**
 * Configurações de segurança
 */

// Ocultar erros de login
function curso_ui_login_errors() {
    return 'Usuário ou senha incorretos.';
}
add_filter('login_errors', 'curso_ui_login_errors');

// Desabilitar edição de arquivos pelo painel
define('DISALLOW_FILE_EDIT', true);

/**
 * Configurações de contato e formulários
 */

// Adicionar suporte ao Contact Form 7 (se estiver instalado)
function curso_ui_cf7_support() {
    if (function_exists('wpcf7_add_form_tag')) {
        // Personalizações do Contact Form 7 podem ser adicionadas aqui
    }
}
add_action('init', 'curso_ui_cf7_support');
?>