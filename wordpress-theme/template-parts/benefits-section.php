<?php
/**
 * Template part para a seção de Benefícios
 */

$benefits = array(
    array(
        'icon' => '🎯',
        'title' => 'Metodologia Exclusiva',
        'description' => 'Sistema de ensino desenvolvido ao longo de 15 anos de experiência prática no mercado'
    ),
    array(
        'icon' => '⚡',
        'title' => 'Prática Intensiva',
        'description' => 'Mais de 20 horas de aulas práticas com equipamentos reais e casos do dia a dia'
    ),
    array(
        'icon' => '🔧',
        'title' => 'Ferramentas Profissionais',
        'description' => 'Aprenda a usar as mesmas ferramentas e equipamentos dos melhores profissionais'
    ),
    array(
        'icon' => '🎓',
        'title' => 'Certificação Reconhecida',
        'description' => 'Certificado profissional que comprova sua especialização no mercado'
    ),
    array(
        'icon' => '⏰',
        'title' => 'Acesso Vitalício',
        'description' => 'Acesso permanente ao conteúdo, incluindo atualizações e novos materiais'
    ),
    array(
        'icon' => '💼',
        'title' => 'Oportunidades de Trabalho',
        'description' => 'Conexão com empresas parceiras e oportunidades exclusivas de trabalho'
    )
);
?>

<section id="benefits" class="section benefits-section">
    <div class="container">
        <h2 class="section-title">
            <?php esc_html_e('Por que Escolher Nosso', 'curso-ui'); ?> 
            <span class="section-highlight"><?php esc_html_e('Curso?', 'curso-ui'); ?></span>
        </h2>
        
        <p class="section-subtitle">
            <?php esc_html_e('Transforme sua carreira com o treinamento mais completo e prático do mercado brasileiro', 'curso-ui'); ?>
        </p>
        
        <div class="benefits-grid">
            <?php foreach ($benefits as $benefit): ?>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <?php echo $benefit['icon']; ?>
                    </div>
                    <h3 class="benefit-title"><?php echo esc_html($benefit['title']); ?></h3>
                    <p class="benefit-description"><?php echo esc_html($benefit['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>