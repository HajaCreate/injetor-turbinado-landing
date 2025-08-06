<?php get_header(); ?>

<main class="section">
    <div class="container">
        <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
            <h1 class="section-title">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    echo 'Posts por ' . get_the_author();
                } elseif (is_date()) {
                    echo 'Arquivo de ' . get_the_date('F Y');
                } else {
                    echo 'Arquivo';
                }
                ?>
            </h1>
            
            <?php if (is_category() && category_description()) : ?>
                <div class="archive-description" style="max-width: 600px; margin: 0 auto; color: #666; font-size: 1.125rem;">
                    <?php echo category_description(); ?>
                </div>
            <?php endif; ?>
        </header>

        <?php if (have_posts()) : ?>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('benefit-card'); ?> style="text-align: left;">
                        <?php if (has_post_thumbnail()) : ?>
                            <div style="margin-bottom: 1rem;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 200px; object-fit: cover; border-radius: 0.5rem;')); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <header class="entry-header">
                            <h2 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.75rem;">
                                <a href="<?php the_permalink(); ?>" style="color: var(--foreground); text-decoration: none;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div style="color: #666; font-size: 0.875rem; margin-bottom: 1rem;">
                                <span><?php echo get_the_date(); ?></span>
                                <?php if (get_the_author()) : ?>
                                    <span> por <?php the_author(); ?></span>
                                <?php endif; ?>
                            </div>
                        </header>

                        <div class="entry-summary" style="color: #666; line-height: 1.6; margin-bottom: 1rem;">
                            <?php
                            if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 20, '...');
                            }
                            ?>
                        </div>

                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary" style="padding: 0.5rem 1rem; font-size: 0.875rem;">
                                Ler mais
                            </a>
                        </footer>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Paginação -->
            <nav class="pagination" style="text-align: center; margin-top: 3rem;">
                <?php
                echo paginate_links(array(
                    'prev_text' => '← Anterior',
                    'next_text' => 'Próxima →',
                    'before_page_number' => '<span class="btn btn-secondary" style="margin: 0 0.25rem; padding: 0.5rem 1rem;">',
                    'after_page_number' => '</span>',
                ));
                ?>
            </nav>

        <?php else : ?>
            <div style="text-align: center; padding: 3rem 0;">
                <h2 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--foreground);">
                    Nenhum post encontrado
                </h2>
                <p style="color: #666; margin-bottom: 2rem;">
                    Não há posts nesta categoria ou arquivo no momento.
                </p>
                <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                    Voltar ao Início
                </a>
            </div>
        <?php endif; ?>

        <!-- CTA Section -->
        <div style="background: linear-gradient(135deg, var(--brand-dark), var(--brand-brown)); color: white; padding: 3rem 2rem; border-radius: 1rem; text-align: center; margin: 3rem 0;">
            <h3 style="font-size: 1.75rem; margin-bottom: 1rem; color: white;">
                Transforme sua <span style="color: var(--primary);">Carreira Profissional</span>
            </h3>
            <p style="margin-bottom: 2rem; font-size: 1.125rem;">
                Aprenda reparação de unidades injetoras com quem é especialista no assunto há mais de 15 anos.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo get_whatsapp_link('Olá! Gostaria de saber mais sobre o curso de reparação de unidade injetora.'); ?>" class="btn btn-primary">
                    📱 Falar no WhatsApp
                </a>
                <a href="/#plans" class="btn btn-secondary">
                    Conhecer os Planos
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>