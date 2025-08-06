<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
    <meta property="og:description" content="Domine a reparação de unidades injetoras com o curso mais completo do mercado. Linha Rodoviária, CAT e formação completa. Aumente sua renda em até 300%.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.jpg">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
    <meta name="twitter:description" content="Domine a reparação de unidades injetoras com o curso mais completo do mercado.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    
    <?php wp_head(); ?>
    
    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "Curso de Reparação de Unidade Injetora",
        "description": "Curso profissionalizante para reparação de unidades injetoras",
        "provider": {
            "@type": "Organization",
            "name": "<?php bloginfo('name'); ?>"
        },
        "courseMode": "online",
        "educationalLevel": "Professional",
        "teaches": "Reparação de Unidades Injetoras",
        "offers": {
            "@type": "Offer",
            "price": "597",
            "priceCurrency": "BRL"
        }
    }
    </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigation (opcional - pode ser adicionada se necessário) -->
<!--
<nav style="position: fixed; top: 0; width: 100%; background: rgba(21, 21, 21, 0.95); backdrop-filter: blur(10px); z-index: 1000; padding: 1rem 0;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
        <div style="font-size: 1.25rem; font-weight: bold; color: var(--primary);">
            <?php bloginfo('name'); ?>
        </div>
        <div style="display: flex; gap: 2rem;">
            <a href="#benefits" style="color: white; text-decoration: none;">Benefícios</a>
            <a href="#units" style="color: white; text-decoration: none;">Unidades</a>
            <a href="#plans" style="color: white; text-decoration: none;">Planos</a>
            <a href="https://wa.me/5511999999999" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.875rem;">
                Contato
            </a>
        </div>
    </div>
</nav>
-->