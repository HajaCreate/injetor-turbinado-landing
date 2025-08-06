<?php get_header(); ?>

<main class="section">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header" style="text-align: center; margin-bottom: 3rem;">
                    <h1 class="entry-title section-title"><?php the_title(); ?></h1>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div style="margin: 2rem 0;">
                            <?php the_post_thumbnail('large', array('style' => 'max-width: 100%; height: auto; border-radius: 1rem;')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="entry-meta" style="color: #666; font-size: 0.875rem;">
                        <span>Publicado em <?php echo get_the_date(); ?></span>
                        <?php if (get_the_author()) : ?>
                            <span> por <?php the_author(); ?></span>
                        <?php endif; ?>
                    </div>
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

                <footer class="entry-footer" style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #eee; text-align: center;">
                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                        echo '<div style="margin-bottom: 1rem;">';
                        echo '<strong>Categorias: </strong>';
                        foreach ($categories as $category) {
                            echo '<span style="background: var(--muted); padding: 0.25rem 0.75rem; border-radius: 1rem; margin-right: 0.5rem; font-size: 0.875rem;">';
                            echo esc_html($category->name);
                            echo '</span>';
                        }
                        echo '</div>';
                    }
                    
                    $tags = get_the_tags();
                    if ($tags) {
                        echo '<div>';
                        echo '<strong>Tags: </strong>';
                        foreach ($tags as $tag) {
                            echo '<span style="background: var(--primary); color: var(--brand-dark); padding: 0.25rem 0.75rem; border-radius: 1rem; margin-right: 0.5rem; font-size: 0.875rem;">';
                            echo esc_html($tag->name);
                            echo '</span>';
                        }
                        echo '</div>';
                    }
                    ?>
                </footer>
            </article>

            <!-- Navegação entre posts -->
            <nav class="post-navigation" style="margin: 3rem 0; display: flex; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                
                <?php if ($prev_post) : ?>
                    <a href="<?php echo get_permalink($prev_post); ?>" class="btn btn-secondary" style="flex: 1; max-width: 300px; text-align: center;">
                        ← <?php echo esc_html($prev_post->post_title); ?>
                    </a>
                <?php endif; ?>
                
                <?php if ($next_post) : ?>
                    <a href="<?php echo get_permalink($next_post); ?>" class="btn btn-secondary" style="flex: 1; max-width: 300px; text-align: center;">
                        <?php echo esc_html($next_post->post_title); ?> →
                    </a>
                <?php endif; ?>
            </nav>

            <!-- CTA para o curso -->
            <div style="background: linear-gradient(135deg, var(--brand-dark), var(--brand-brown)); color: white; padding: 3rem 2rem; border-radius: 1rem; text-align: center; margin: 3rem 0;">
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; color: white;">
                    Interessado no <span style="color: var(--primary);">Curso de Reparação de Unidade Injetora?</span>
                </h3>
                <p style="margin-bottom: 2rem; font-size: 1.125rem;">
                    Transforme sua carreira profissional e aumente sua renda em até 300%!
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo get_whatsapp_link('Olá! Vi o artigo sobre ' . get_the_title() . ' e gostaria de saber mais sobre o curso.'); ?>" class="btn btn-primary">
                        📱 Falar no WhatsApp
                    </a>
                    <a href="/#plans" class="btn btn-secondary">
                        Ver Planos do Curso
                    </a>
                </div>
            </div>

            <!-- Comentários -->
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