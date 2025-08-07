<?php
/**
 * Header do tema
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    
    <?php if (is_front_page()): ?>
        <meta property="og:title" content="<?php echo get_theme_option('hero_title', 'Curso de Reparação de Unidade Injetora - Especialização Profissional'); ?>">
        <meta property="og:description" content="Domine a reparação de unidades injetoras com o curso mais completo do mercado. Linha Rodoviária, CAT e formação completa. Aumente sua renda em até 300%.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo home_url('/'); ?>">
        <?php if (get_theme_option('hero_image')): ?>
            <meta property="og:image" content="<?php echo esc_url(get_theme_option('hero_image')); ?>">
        <?php endif; ?>
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo get_theme_option('hero_title', 'Curso de Reparação de Unidade Injetora'); ?>">
        <meta name="twitter:description" content="Domine a reparação de unidades injetoras com o curso mais completo do mercado.">
        <?php if (get_theme_option('hero_image')): ?>
            <meta name="twitter:image" content="<?php echo esc_url(get_theme_option('hero_image')); ?>">
        <?php endif; ?>
    <?php endif; ?>
    
    <link rel="canonical" href="<?php echo get_permalink(); ?>">
    
    <?php wp_head(); ?>
    
    <!-- Schema.org structured data -->
    <?php if (is_front_page()): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "<?php echo get_theme_option('hero_title', 'Curso de Reparação de Unidade Injetora'); ?>",
        "description": "Curso completo de reparação de unidades injetoras para linha rodoviária e CAT",
        "provider": {
            "@type": "Organization",
            "name": "<?php bloginfo('name'); ?>",
            "url": "<?php echo home_url('/'); ?>"
        },
        "hasCourseInstance": {
            "@type": "CourseInstance",
            "courseMode": "online",
            "instructor": {
                "@type": "Organization",
                "name": "<?php bloginfo('name'); ?>"
            }
        }
    }
    </script>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <div id="page" class="site">
        <?php if (has_nav_menu('primary')): ?>
            <header id="masthead" class="site-header fixed top-0 w-full z-50 bg-background/95 backdrop-blur-sm border-b border-border">
                <nav class="main-navigation container flex justify-between items-center py-4" role="navigation" aria-label="<?php esc_attr_e('Menu Principal', 'curso-unidade-injetora'); ?>">
                    <div class="site-branding">
                        <?php if (has_custom_logo()): ?>
                            <?php the_custom_logo(); ?>
                        <?php else: ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="text-xl font-bold text-foreground hover:text-primary transition-colors">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                        <?php endif; ?>
                        
                        <?php $description = get_bloginfo('description', 'display'); ?>
                        <?php if ($description || is_customize_preview()): ?>
                            <p class="site-description text-sm text-muted-foreground"><?php echo $description; ?></p>
                        <?php endif; ?>
                    </div>
                    
                    <button class="menu-toggle md:hidden" aria-controls="primary-menu" aria-expanded="false">
                        <span class="sr-only"><?php esc_html_e('Menu Principal', 'curso-unidade-injetora'); ?></span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'primary-menu hidden md:flex space-x-6',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'walker'         => new Custom_Nav_Walker(),
                    ));
                    ?>
                    
                    <!-- Botões de contato no header -->
                    <div class="header-actions hidden lg:flex space-x-4">
                        <?php
                        $whatsapp = clean_phone_number(get_theme_option('whatsapp_number', '5511999999999'));
                        $phone = get_theme_option('phone_number', '(11) 99999-9999');
                        ?>
                        
                        <a href="https://wa.me/<?php echo $whatsapp; ?>?text=<?php echo urlencode('Olá! Gostaria de saber mais sobre o curso.'); ?>" 
                           target="_blank" 
                           rel="noopener"
                           class="btn btn-primary text-sm px-4 py-2">
                            WhatsApp
                        </a>
                        
                        <a href="tel:+55<?php echo clean_phone_number($phone); ?>" 
                           class="btn btn-secondary text-sm px-4 py-2">
                            <?php echo esc_html($phone); ?>
                        </a>
                    </div>
                </nav>
                
                <!-- Menu mobile -->
                <div id="mobile-menu" class="mobile-menu hidden md:hidden bg-background border-t border-border">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'mobile-menu-list px-4 py-4 space-y-2',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ));
                    ?>
                    
                    <div class="mobile-actions px-4 pb-4 space-y-2">
                        <a href="https://wa.me/<?php echo $whatsapp; ?>?text=<?php echo urlencode('Olá! Gostaria de saber mais sobre o curso.'); ?>" 
                           target="_blank" 
                           rel="noopener"
                           class="btn btn-primary w-full text-center block">
                            Falar no WhatsApp
                        </a>
                        
                        <a href="tel:+55<?php echo clean_phone_number($phone); ?>" 
                           class="btn btn-secondary w-full text-center block">
                            Ligar: <?php echo esc_html($phone); ?>
                        </a>
                    </div>
                </div>
            </header>
        <?php endif; ?>
        
        <div id="content" class="site-content">