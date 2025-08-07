<?php
/**
 * Template part para a seção de Planos
 */

$plans = array(
    array(
        'name' => 'Linha Rodoviária',
        'subtitle' => 'Especialização em veículos rodoviários',
        'price' => 'R$ 497',
        'original_price' => 'R$ 697',
        'description' => 'Domine completamente a reparação de unidades injetoras para caminhões, ônibus e veículos pesados rodoviários.',
        'features' => array(
            '20+ horas de aulas práticas',
            'Diagnóstico avançado de falhas', 
            'Técnicas de desmontagem e montagem',
            'Calibração e teste de funcionamento',
            'Mercedes, Iveco, Scania, Volvo, Daf',
            'Certificado de conclusão',
            'Acesso vitalício ao conteúdo'
        ),
        'is_popular' => false,
        'button_text' => 'Começar Agora'
    ),
    array(
        'name' => 'Linha CAT',
        'subtitle' => 'Especialização em equipamentos Caterpillar', 
        'price' => 'R$ 597',
        'original_price' => 'R$ 897',
        'description' => 'Torne-se especialista em unidades injetoras de equipamentos Caterpillar, um dos mercados mais valorizados.',
        'features' => array(
            '25+ horas de aulas práticas',
            'Foco em equipamentos CAT',
            'Tecnologias exclusivas CAT',
            'Ferramentas especializadas',
            'Diagnóstico computadorizado',
            'Suporte técnico por 120 dias',
            'Certificado especializado CAT',
            'Acesso vitalício ao conteúdo'
        ),
        'is_popular' => false,
        'button_text' => 'Escolher CAT'
    ),
    array(
        'name' => 'Completo: Rodoviária + CAT',
        'subtitle' => 'Formação completa e mais valorizada',
        'price' => 'R$ 797', 
        'original_price' => 'R$ 1.394',
        'description' => 'A formação mais completa do mercado! Domine tanto a linha rodoviária quanto CAT e torne-se o profissional mais requisitado.',
        'features' => array(
            '45+ horas de aulas práticas',
            'Ambas as especializações',
            'Bônus exclusivos',
            'Acesso prioritário a atualizações',
            'Grupo VIP de alunos',
            'Suporte técnico por 180 dias',
            'Dupla certificação',
            'Garantia estendida de 60 dias',
            'Acesso vitalício ao conteúdo'
        ),
        'is_popular' => true,
        'button_text' => 'Quero o Completo',
        'discount' => '43% OFF'
    )
);

$whatsapp_number = get_whatsapp_number();
?>

<section id="plans" class="section plans-section">
    <div class="container">
        <div class="plans-header">
            <h2 class="section-title">
                <?php esc_html_e('Escolha o', 'curso-ui'); ?> 
                <span class="section-highlight"><?php esc_html_e('Plano Ideal', 'curso-ui'); ?></span> 
                <?php esc_html_e('para Você', 'curso-ui'); ?>
            </h2>
            
            <p class="section-subtitle">
                <?php esc_html_e('Investimento que se paga em poucos serviços. Escolha sua especialização e comece a faturar mais ainda hoje.', 'curso-ui'); ?>
            </p>
            
            <div class="limited-offer-badge">
                <span class="star-icon">⭐</span>
                <?php esc_html_e('Oferta por tempo limitado - Últimas vagas!', 'curso-ui'); ?>
            </div>
        </div>
        
        <div class="plans-grid">
            <?php foreach ($plans as $index => $plan): ?>
                <div class="plan-card <?php echo $plan['is_popular'] ? 'plan-popular' : ''; ?>">
                    <?php if ($plan['is_popular']): ?>
                        <div class="plan-badge">
                            <span class="star-icon">⭐</span>
                            <?php esc_html_e('MAIS ESCOLHIDO', 'curso-ui'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (isset($plan['discount'])): ?>
                        <div class="plan-discount-badge">
                            <?php echo esc_html($plan['discount']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="plan-header">
                        <h3 class="plan-name"><?php echo esc_html($plan['name']); ?></h3>
                        <p class="plan-subtitle"><?php echo esc_html($plan['subtitle']); ?></p>
                        
                        <div class="plan-pricing">
                            <div class="plan-original-price">
                                <?php echo esc_html($plan['original_price']); ?>
                            </div>
                            <div class="plan-price">
                                <?php echo esc_html($plan['price']); ?>
                            </div>
                            <div class="plan-installments">
                                <?php esc_html_e('ou 12x sem juros', 'curso-ui'); ?>
                            </div>
                        </div>
                        
                        <p class="plan-description"><?php echo esc_html($plan['description']); ?></p>
                    </div>
                    
                    <div class="plan-content">
                        <ul class="plan-features">
                            <?php foreach ($plan['features'] as $feature): ?>
                                <li>
                                    <span class="check-icon">✓</span>
                                    <?php echo esc_html($feature); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <a href="<?php echo get_whatsapp_link('Olá! Tenho interesse no plano ' . $plan['name']); ?>" 
                           class="btn <?php echo $plan['is_popular'] ? 'btn-primary' : 'btn-secondary'; ?> plan-button"
                           target="_blank" rel="noopener">
                            <?php echo esc_html($plan['button_text']); ?>
                        </a>
                        
                        <p class="plan-guarantee">
                            ✅ <?php esc_html_e('Garantia de 30 dias', 'curso-ui'); ?> • 
                            ✅ <?php esc_html_e('Acesso imediato', 'curso-ui'); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="plans-footer">
            <p class="plans-footer-text">
                <?php esc_html_e('Ainda tem dúvidas? Fale conosco no WhatsApp', 'curso-ui'); ?>
            </p>
            <a href="<?php echo get_whatsapp_link('Olá! Gostaria de tirar algumas dúvidas sobre os cursos.'); ?>" 
               class="btn btn-secondary" target="_blank" rel="noopener">
                💬 <?php esc_html_e('Tirar Dúvidas no WhatsApp', 'curso-ui'); ?>
            </a>
        </div>
    </div>
</section>