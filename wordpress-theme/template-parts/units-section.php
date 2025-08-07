<?php
/**
 * Template part para a seção de Unidades
 */

$units = array(
    array(
        'image' => 'cat-3126.jpg',
        'title' => 'CAT 3126',
        'description' => 'Unidade injetora para motores Caterpillar 3126, aplicada em caminhões e máquinas pesadas.'
    ),
    array(
        'image' => 'cat-c7-c9.jpg', 
        'title' => 'CAT C7 / C9',
        'description' => 'Sistemas de injeção eletrônica CAT C7 e C9, com tecnologia avançada de controle.'
    ),
    array(
        'image' => 'cat-c15-c18.jpg',
        'title' => 'CAT C15 / C18', 
        'description' => 'Unidades de alta performance para motores CAT C15 e C18 de grande porte.'
    ),
    array(
        'image' => 'volvo-d12-d.jpg',
        'title' => 'Volvo D12',
        'description' => 'Sistema de injeção Volvo D12 com tecnologia diesel e controle eletrônico.'
    ),
    array(
        'image' => 'volvo-d13.jpg',
        'title' => 'Volvo D13',
        'description' => 'Unidade injetora Volvo D13, referência em eficiência e durabilidade.'
    ),
    array(
        'image' => 'volvo-d12-ac.jpg',
        'title' => 'Volvo D12 AC',
        'description' => 'Versão AC do sistema Volvo D12 com características específicas.'
    ),
    array(
        'image' => 'scania-ui.jpg',
        'title' => 'Scania UI',
        'description' => 'Unidade injetora Scania para caminhões e ônibus de última geração.'
    ),
    array(
        'image' => 'mercedes-up.jpg',
        'title' => 'Mercedes UP',
        'description' => 'Sistema Mercedes UP (Unit Pump) para aplicações comerciais e industriais.'
    ),
    array(
        'image' => 'iveco-ui.jpg',
        'title' => 'Iveco UI',
        'description' => 'Unidade injetora Iveco para linha pesada de caminhões e utilitários.'
    ),
    array(
        'image' => 'daf.jpg',
        'title' => 'DAF',
        'description' => 'Sistema de injeção DAF para caminhões europeus com alta tecnologia.'
    )
);
?>

<section id="units" class="section units-section">
    <div class="container">
        <h2 class="section-title">
            <?php esc_html_e('Unidades que Você Vai', 'curso-ui'); ?> 
            <span class="section-highlight"><?php esc_html_e('Dominar', 'curso-ui'); ?></span>
        </h2>
        
        <p class="section-subtitle">
            <?php esc_html_e('Aprenda a trabalhar com as principais marcas e modelos do mercado brasileiro e internacional', 'curso-ui'); ?>
        </p>
        
        <div class="units-grid">
            <?php foreach ($units as $unit): ?>
                <div class="unit-card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/units/' . $unit['image']); ?>" 
                         alt="<?php echo esc_attr($unit['title']); ?>" 
                         class="unit-image">
                    <div class="unit-content">
                        <h3 class="unit-title"><?php echo esc_html($unit['title']); ?></h3>
                        <p class="unit-description"><?php echo esc_html($unit['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>