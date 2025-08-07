<?php
/**
 * Template principal do tema
 */

get_header(); ?>

<?php if (is_front_page() || get_post_meta(get_the_ID(), '_is_homepage', true)): ?>
    <!-- Página Inicial Completa -->
    <?php get_template_part('template-parts/hero-section'); ?>
    <?php get_template_part('template-parts/benefits-section'); ?>
    <?php get_template_part('template-parts/units-section'); ?>
    <?php get_template_part('template-parts/plans-section'); ?>
    <?php get_template_part('template-parts/testimonials-section'); ?>
    <?php get_template_part('template-parts/cta-section'); ?>
    
<?php else: ?>
    <!-- Conteúdo padrão para outras páginas -->
    <main class="main-content py-20">
        <div class="container">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('card mb-8'); ?>>
                        <?php if (has_post_thumbnail()): ?>
                            <div class="post-thumbnail mb-6">
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-auto rounded-lg')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <header class="post-header mb-6">
                            <h1 class="post-title text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                            
                            <?php if (is_single()): ?>
                                <div class="post-meta text-muted-foreground mb-4">
                                    <time datetime="<?php echo get_the_date('c'); ?>" class="published">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                    <?php if (get_the_author()): ?>
                                        <span class="author"> por <?php the_author(); ?></span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </header>
                        
                        <div class="post-content">
                            <?php
                            if (is_single() || is_page()) {
                                the_content();
                            } else {
                                the_excerpt();
                                ?>
                                <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia Mais</a></p>
                                <?php
                            }
                            ?>
                        </div>
                        
                        <?php if (is_single()): ?>
                            <footer class="post-footer mt-8 pt-8 border-t border-border">
                                <?php if (has_category() || has_tag()): ?>
                                    <div class="post-taxonomy mb-4">
                                        <?php if (has_category()): ?>
                                            <p class="categories mb-2">
                                                <strong>Categorias:</strong> <?php the_category(', '); ?>
                                            </p>
                                        <?php endif; ?>
                                        
                                        <?php if (has_tag()): ?>
                                            <p class="tags">
                                                <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                
                                <?php
                                // Navegação entre posts
                                $prev_post = get_previous_post();
                                $next_post = get_next_post();
                                if ($prev_post || $next_post): ?>
                                    <nav class="post-navigation flex justify-between">
                                        <?php if ($prev_post): ?>
                                            <a href="<?php echo get_permalink($prev_post); ?>" class="prev-post btn btn-secondary">
                                                ← <?php echo get_the_title($prev_post); ?>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <?php if ($next_post): ?>
                                            <a href="<?php echo get_permalink($next_post); ?>" class="next-post btn btn-secondary">
                                                <?php echo get_the_title($next_post); ?> →
                                            </a>
                                        <?php endif; ?>
                                    </nav>
                                <?php endif; ?>
                            </footer>
                        <?php endif; ?>
                    </article>
                    
                    <?php
                    // Comentários
                    if (is_single() && (comments_open() || get_comments_number())):
                        comments_template();
                    endif;
                    ?>
                    
                <?php endwhile; ?>
                
                <?php
                // Paginação
                if (!is_single() && !is_page()):
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => '← Anterior',
                        'next_text' => 'Próximo →',
                        'class'     => 'pagination flex justify-center space-x-4 mt-8'
                    ));
                endif;
                ?>
                
            <?php else: ?>
                <div class="no-posts text-center">
                    <h2 class="text-2xl font-bold mb-4">Nenhum conteúdo encontrado</h2>
                    <p class="text-muted-foreground mb-6">
                        Desculpe, mas não foi possível encontrar o conteúdo solicitado.
                    </p>
                    
                    <?php if (is_search()): ?>
                        <p class="mb-6">
                            Você pesquisou por: <strong><?php echo get_search_query(); ?></strong>
                        </p>
                        <p class="mb-6">Tente refinar sua busca ou navegue pelas categorias.</p>
                    <?php endif; ?>
                    
                    <a href="<?php echo home_url('/'); ?>" class="btn btn-primary">
                        Voltar à Página Inicial
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </main>
    
    <?php if (is_active_sidebar('sidebar-1')): ?>
        <aside class="sidebar py-20 bg-gradient-subtle">
            <div class="container">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        </aside>
    <?php endif; ?>
    
<?php endif; ?>

<?php get_footer(); ?>