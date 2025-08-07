<?php
/**
 * Template part para a seção de Depoimentos
 */

$testimonials = array(
    array(
        'text' => 'O curso mudou completamente minha carreira. Hoje sou o profissional mais procurado na minha região para reparação de unidades injetoras. O investimento se pagou em menos de 2 meses!',
        'author' => 'Carlos Eduardo',
        'location' => 'São Paulo - SP',
        'profession' => 'Mecânico Especializado'
    ),
    array(
        'text' => 'Metodologia excepcional! As aulas práticas fizeram toda a diferença. Consegui abrir minha própria oficina especializada e hoje tenho uma agenda lotada de clientes.',
        'author' => 'Roberto Silva', 
        'location' => 'Belo Horizonte - MG',
        'profession' => 'Proprietário de Oficina'
    ),
    array(
        'text' => 'Recomendo 100%! O conhecimento adquirido me tornou referência no mercado. Passei de funcionário para sócio da empresa onde trabalho.',
        'author' => 'Ana Paula',
        'location' => 'Curitiba - PR', 
        'profession' => 'Sócia de Oficina'
    )
);
?>

<section id="testimonials" class="section testimonials-section">
    <div class="container">
        <h2 class="section-title">
            <?php esc_html_e('O que Nossos', 'curso-ui'); ?> 
            <span class="section-highlight"><?php esc_html_e('Alunos Dizem', 'curso-ui'); ?></span>
        </h2>
        
        <p class="section-subtitle">
            <?php esc_html_e('Histórias reais de transformação profissional e sucesso no mercado', 'curso-ui'); ?>
        </p>
        
        <div class="testimonials-grid">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="testimonial-card">
                    <div class="testimonial-quote">
                        <span class="quote-mark">"</span>
                    </div>
                    <p class="testimonial-text">
                        <?php echo esc_html($testimonial['text']); ?>
                    </p>
                    <div class="testimonial-author">
                        <strong><?php echo esc_html($testimonial['author']); ?></strong>
                        <div class="testimonial-location"><?php echo esc_html($testimonial['location']); ?></div>
                        <div class="testimonial-profession"><?php echo esc_html($testimonial['profession']); ?></div>
                    </div>
                    <div class="testimonial-rating">
                        <span class="stars">⭐⭐⭐⭐⭐</span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>