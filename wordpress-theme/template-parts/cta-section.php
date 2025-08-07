<?php
/**
 * Template part para a seção de Call to Action
 */

$whatsapp_number = get_whatsapp_number();
$phone_number = get_phone_number();
?>

<section id="cta" class="section cta-section">
    <div class="cta-bg-elements">
        <div class="cta-pulse cta-pulse-1"></div>
        <div class="cta-pulse cta-pulse-2"></div>
        <div class="cta-pulse cta-pulse-3"></div>
    </div>
    
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">
                <?php esc_html_e('Não Perca Esta', 'curso-ui'); ?> 
                <span class="cta-highlight"><?php esc_html_e('Oportunidade Única!', 'curso-ui'); ?></span>
            </h2>
            
            <p class="cta-subtitle">
                <?php esc_html_e('Transforme sua carreira hoje mesmo. Vagas limitadas com preço promocional por tempo limitado.', 'curso-ui'); ?>
            </p>
            
            <div class="cta-features">
                <div class="cta-feature">
                    <span class="cta-feature-icon">⏰</span>
                    <div class="cta-feature-text">
                        <strong><?php esc_html_e('Oferta Limitada', 'curso-ui'); ?></strong>
                        <small><?php esc_html_e('Desconto especial por pouco tempo', 'curso-ui'); ?></small>
                    </div>
                </div>
                <div class="cta-feature">
                    <span class="cta-feature-icon">✅</span>
                    <div class="cta-feature-text">
                        <strong><?php esc_html_e('Garantia Total', 'curso-ui'); ?></strong>
                        <small><?php esc_html_e('30 dias para testar sem risco', 'curso-ui'); ?></small>
                    </div>
                </div>
                <div class="cta-feature">
                    <span class="cta-feature-icon">🚀</span>
                    <div class="cta-feature-text">
                        <strong><?php esc_html_e('Acesso Imediato', 'curso-ui'); ?></strong>
                        <small><?php esc_html_e('Comece hoje mesmo seu treinamento', 'curso-ui'); ?></small>
                    </div>
                </div>
            </div>
            
            <div class="cta-buttons">
                <a href="<?php echo get_whatsapp_link('Olá! Quero me inscrever no curso e aproveitar a oferta especial!'); ?>" 
                   class="btn btn-primary cta-btn-primary" target="_blank" rel="noopener">
                    💬 <?php esc_html_e('Falar no WhatsApp', 'curso-ui'); ?>
                </a>
                
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $phone_number)); ?>" 
                   class="btn btn-secondary cta-btn-secondary">
                    📞 <?php esc_html_e('Ligar Agora', 'curso-ui'); ?>
                </a>
                
                <a href="#plans" class="btn btn-outline cta-btn-scroll">
                    <?php esc_html_e('Ver Planos', 'curso-ui'); ?>
                </a>
            </div>
            
            <p class="cta-disclaimer">
                <?php esc_html_e('🔒 Seus dados estão seguros conosco | 📞 Atendimento de segunda à sexta das 8h às 18h', 'curso-ui'); ?>
            </p>
        </div>
    </div>
</section>