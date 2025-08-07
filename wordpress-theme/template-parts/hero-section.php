<?php
/**
 * Template part para a seção Hero
 */

$hero_title = get_theme_mod('hero_title', 'Domine a <span class="hero-highlight">Reparação de Unidade Injetora</span> com o Especialista do Mercado');
$hero_subtitle = get_theme_mod('hero_subtitle', 'Aprenda as técnicas profissionais que transformaram centenas de mecânicos em <strong>especialistas requisitados</strong> no mercado de reparação de sistemas de injeção');
$stat_students = get_theme_mod('stat_students', '500+');
$stat_experience = get_theme_mod('stat_experience', '15+');
$stat_satisfaction = get_theme_mod('stat_satisfaction', '98%');
?>

<section class="hero-section">
    <!-- Background Image -->
    <div class="hero-bg">
        <?php 
        $hero_image = get_template_directory_uri() . '/assets/hero-image.jpg';
        if (has_custom_header()) {
            $hero_image = get_header_image();
        }
        ?>
        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Reparação de Unidade Injetora', 'curso-ui'); ?>" class="hero-bg-image">
        <div class="hero-overlay"></div>
    </div>
    
    <!-- Content -->
    <div class="hero-content">
        <div class="container">
            <h1 class="hero-title">
                <?php echo wp_kses_post($hero_title); ?>
            </h1>
            
            <p class="hero-subtitle">
                <?php echo wp_kses_post($hero_subtitle); ?>
            </p>
            
            <div class="hero-buttons">
                <a href="#plans" class="btn btn-primary hero-btn-scroll">
                    <?php esc_html_e('Escolha Seu Plano Ideal', 'curso-ui'); ?>
                </a>
                
                <a href="#benefits" class="btn btn-secondary hero-btn-scroll">
                    <?php esc_html_e('Conhecer os Benefícios', 'curso-ui'); ?>
                </a>
            </div>
            
            <div class="hero-stats">
                <div class="hero-stat">
                    <div class="hero-stat-number"><?php echo esc_html($stat_students); ?></div>
                    <div class="hero-stat-label"><?php esc_html_e('Alunos Formados', 'curso-ui'); ?></div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-number"><?php echo esc_html($stat_experience); ?></div>
                    <div class="hero-stat-label"><?php esc_html_e('Anos de Experiência', 'curso-ui'); ?></div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-number"><?php echo esc_html($stat_satisfaction); ?></div>
                    <div class="hero-stat-label"><?php esc_html_e('Taxa de Satisfação', 'curso-ui'); ?></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
    </div>
</section>