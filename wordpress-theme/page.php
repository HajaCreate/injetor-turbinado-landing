<?php get_header(); ?>

<main class="section">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header" style="text-align: center; margin-bottom: 3rem;">
                    <h1 class="entry-title section-title"><?php the_title(); ?></h1>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div style="margin: 2rem 0;">
                            <?php the_post_thumbnail('large', array('style' => 'max-width: 100%; height: auto; border-radius: 1rem;')); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <div class="entry-content" style="max-width: 800px; margin: 0 auto; line-height: 1.8; font-size: 1.1rem;">
                    <?php
                    the_content();
                    
                    wp_link_pages(array(
                        'before' => '<div class="page-links" style="margin-top: 2rem; text-align: center;">',
                        'after'  => '</div>',
                        'link_before' => '<span class="btn btn-secondary" style="margin: 0 0.25rem; padding: 0.5rem 1rem;">',
                        'link_after' => '</span>',
                    ));
                    ?>
                </div>
            </article>

            <!-- CTA para páginas específicas -->
            <?php if (is_page('sobre') || is_page('about')) : ?>
                <div style="background: linear-gradient(135deg, var(--brand-dark), var(--brand-brown)); color: white; padding: 3rem 2rem; border-radius: 1rem; text-align: center; margin: 3rem 0;">
                    <h3 style="font-size: 1.75rem; margin-bottom: 1rem; color: white;">
                        Conheça Nosso <span style="color: var(--primary);">Curso Profissionalizante</span>
                    </h3>
                    <p style="margin-bottom: 2rem; font-size: 1.125rem;">
                        Mais de 15 anos de experiência formando especialistas em reparação de unidades injetoras.
                    </p>
                    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                        <a href="<?php echo get_whatsapp_link('Olá! Gostaria de saber mais sobre o curso de reparação de unidade injetora.'); ?>" class="btn btn-primary">
                            📱 Falar com Especialista
                        </a>
                        <a href="/#plans" class="btn btn-secondary">
                            Ver Nossos Planos
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (is_page('contato') || is_page('contact')) : ?>
                <!-- Informações de contato adicionais para página de contato -->
                <div style="background: var(--muted); padding: 3rem 2rem; border-radius: 1rem; margin: 3rem 0;">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; text-align: center;">
                        <div>
                            <h3 style="color: var(--primary); margin-bottom: 1rem;">📱 WhatsApp</h3>
                            <p><a href="<?php echo get_whatsapp_link(); ?>" style="color: var(--foreground); font-weight: bold;"><?php echo get_whatsapp_number(); ?></a></p>
                            <p>Atendimento rápido e personalizado</p>
                        </div>
                        <div>
                            <h3 style="color: var(--primary); margin-bottom: 1rem;">📞 Telefone</h3>
                            <p><a href="tel:+<?php echo get_phone_number(); ?>" style="color: var(--foreground); font-weight: bold;"><?php echo get_phone_number(); ?></a></p>
                            <p>Seg a Sex: 8h às 18h | Sáb: 8h às 12h</p>
                        </div>
                        <div>
                            <h3 style="color: var(--primary); margin-bottom: 1rem;">✉️ Email</h3>
                            <p><a href="mailto:<?php echo get_contact_email(); ?>" style="color: var(--foreground); font-weight: bold;"><?php echo get_contact_email(); ?></a></p>
                            <p>Resposta em até 24 horas</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Comentários (se habilitados para a página) -->
            <?php
            if (comments_open() || get_comments_number()) {
                echo '<div style="margin-top: 3rem; max-width: 800px; margin-left: auto; margin-right: auto;">';
                comments_template();
                echo '</div>';
            }
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>