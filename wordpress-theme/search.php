<?php get_header(); ?>

<main class="section">
    <div class="container">
        <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
            <h1 class="section-title">
                <?php if (have_posts()) : ?>
                    Resultados da busca por: <span style="color: var(--primary);">"<?php echo get_search_query(); ?>"</span>
                <?php else : ?>
                    Nenhum resultado encontrado
                <?php endif; ?>
            </h1>
            
            <!-- Formulário de busca -->
            <div style="max-width: 500px; margin: 2rem auto;">
                <form role="search" method="get" action="<?php echo home_url('/'); ?>" style="display: flex; gap: 0.5rem;">
                    <input 
                        type="search" 
                        placeholder="Digite sua busca..." 
                        value="<?php echo get_search_query(); ?>" 
                        name="s" 
                        style="flex: 1; padding: 0.75rem; border: 2px solid var(--border); border-radius: 0.5rem; font-size: 1rem;"
                    >
                    <button type="submit" class="btn btn-primary" style="padding: 0.75rem 1.5rem;">
                        Buscar
                    </button>
                </form>
            </div>
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
                                <span> em <?php the_category(', '); ?></span>
                            </div>
                        </header>

                        <div class="entry-summary" style="color: #666; line-height: 1.6; margin-bottom: 1rem;">
                            <?php
                            // Destacar termos de busca no excerpt
                            $excerpt = get_the_excerpt();
                            if ($excerpt) {
                                $search_term = get_search_query();
                                if ($search_term) {
                                    $excerpt = preg_replace('/(' . preg_quote($search_term, '/') . ')/i', '<mark style="background-color: var(--primary); color: var(--brand-dark); padding: 0.125rem 0.25rem;">$1</mark>', $excerpt);
                                }
                                echo $excerpt;
                            } else {
                                $content = wp_trim_words(get_the_content(), 20, '...');
                                $search_term = get_search_query();
                                if ($search_term) {
                                    $content = preg_replace('/(' . preg_quote($search_term, '/') . ')/i', '<mark style="background-color: var(--primary); color: var(--brand-dark); padding: 0.125rem 0.25rem;">$1</mark>', $content);
                                }
                                echo $content;
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
                    Ops! Não encontramos nada para "<?php echo get_search_query(); ?>"
                </h2>
                <p style="color: #666; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Tente usar palavras-chave diferentes ou mais gerais. Que tal pesquisar por:
                    <strong>unidade injetora</strong>, <strong>reparação</strong>, <strong>diesel</strong> ou <strong>CAT</strong>?
                </p>
                
                <!-- Sugestões de busca -->
                <div style="margin-bottom: 2rem;">
                    <p style="margin-bottom: 1rem; font-weight: bold;">Sugestões de busca:</p>
                    <div style="display: flex; gap: 0.5rem; justify-content: center; flex-wrap: wrap;">
                        <a href="<?php echo home_url('/?s=unidade+injetora'); ?>" class="btn btn-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem;">
                            Unidade Injetora
                        </a>
                        <a href="<?php echo home_url('/?s=reparação'); ?>" class="btn btn-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem;">
                            Reparação
                        </a>
                        <a href="<?php echo home_url('/?s=curso'); ?>" class="btn btn-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem;">
                            Curso
                        </a>
                        <a href="<?php echo home_url('/?s=CAT'); ?>" class="btn btn-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem;">
                            CAT
                        </a>
                    </div>
                </div>
                
                <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                    Voltar ao Início
                </a>
            </div>
        <?php endif; ?>

        <!-- CTA Section -->
        <div style="background: linear-gradient(135deg, var(--brand-dark), var(--brand-brown)); color: white; padding: 3rem 2rem; border-radius: 1rem; text-align: center; margin: 3rem 0;">
            <h3 style="font-size: 1.75rem; margin-bottom: 1rem; color: white;">
                Interessado no <span style="color: var(--primary);">Curso de Reparação de Unidade Injetora?</span>
            </h3>
            <p style="margin-bottom: 2rem; font-size: 1.125rem;">
                Não encontrou o que procurava? Fale diretamente conosco e tire todas suas dúvidas sobre o curso!
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo get_whatsapp_link('Olá! Não encontrei o que procurava no site. Gostaria de saber mais sobre o curso de reparação de unidade injetora.'); ?>" class="btn btn-primary">
                    📱 Falar no WhatsApp
                </a>
                <a href="/#plans" class="btn btn-secondary">
                    Ver Planos do Curso
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>