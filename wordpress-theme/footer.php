<?php
/**
 * Footer do tema
 */
?>

        </div><!-- #content -->
        
        <footer id="colophon" class="site-footer py-16 bg-gradient-subtle text-white">
            <div class="container">
                <div class="footer-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                    <!-- Informações da Empresa -->
                    <div class="footer-section">
                        <h3 class="text-xl font-bold mb-4 text-brand-yellow">
                            <?php bloginfo('name'); ?>
                        </h3>
                        <p class="text-gray-300 mb-4">
                            O curso mais completo de reparação de unidades injetoras do mercado. 
                            Transforme sua carreira e aumente sua renda.
                        </p>
                        
                        <?php if (get_theme_option('contact_email')): ?>
                            <p class="mb-2">
                                <strong>Email:</strong> 
                                <a href="mailto:<?php echo esc_attr(get_theme_option('contact_email')); ?>" 
                                   class="text-brand-yellow hover:text-white transition-colors">
                                    <?php echo esc_html(get_theme_option('contact_email')); ?>
                                </a>
                            </p>
                        <?php endif; ?>
                        
                        <?php if (get_theme_option('phone_number')): ?>
                            <p class="mb-2">
                                <strong>Telefone:</strong> 
                                <a href="tel:+55<?php echo clean_phone_number(get_theme_option('phone_number')); ?>" 
                                   class="text-brand-yellow hover:text-white transition-colors">
                                    <?php echo esc_html(get_theme_option('phone_number')); ?>
                                </a>
                            </p>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Links Rápidos -->
                    <div class="footer-section">
                        <h4 class="text-lg font-semibold mb-4 text-brand-yellow">Links Rápidos</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_class'     => 'footer-menu space-y-2',
                            'container'      => false,
                            'fallback_cb'    => 'footer_default_menu',
                        ));
                        ?>
                    </div>
                    
                    <!-- Contato Rápido -->
                    <div class="footer-section">
                        <h4 class="text-lg font-semibold mb-4 text-brand-yellow">Contato Rápido</h4>
                        <div class="space-y-3">
                            <?php
                            $whatsapp = clean_phone_number(get_theme_option('whatsapp_number', '5511999999999'));
                            $phone = get_theme_option('phone_number', '(11) 99999-9999');
                            ?>
                            
                            <a href="https://wa.me/<?php echo $whatsapp; ?>?text=<?php echo urlencode('Olá! Gostaria de saber mais sobre o curso de reparação de unidades injetoras.'); ?>" 
                               target="_blank" 
                               rel="noopener"
                               class="btn btn-primary w-full flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                                <span>WhatsApp</span>
                            </a>
                            
                            <a href="tel:+55<?php echo clean_phone_number($phone); ?>" 
                               class="btn btn-secondary w-full flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                                <span>Ligar Agora</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Widget Area -->
                    <?php if (is_active_sidebar('footer-1')): ?>
                        <div class="footer-section">
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Linha divisória -->
                <div class="border-t border-gray-600 pt-8">
                    <div class="footer-bottom grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <!-- Copyright -->
                        <div class="copyright text-gray-300">
                            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
                        </div>
                        
                        <!-- Links legais -->
                        <div class="legal-links text-right">
                            <div class="flex flex-wrap justify-end space-x-4 text-sm">
                                <a href="<?php echo home_url('/politica-de-privacidade/'); ?>" 
                                   class="text-gray-300 hover:text-brand-yellow transition-colors">
                                    Política de Privacidade
                                </a>
                                <a href="<?php echo home_url('/termos-de-uso/'); ?>" 
                                   class="text-gray-300 hover:text-brand-yellow transition-colors">
                                    Termos de Uso
                                </a>
                                <a href="<?php echo home_url('/faq/'); ?>" 
                                   class="text-gray-300 hover:text-brand-yellow transition-colors">
                                    FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Informações adicionais -->
                    <div class="additional-info mt-6 text-center text-sm text-gray-400">
                        <p class="mb-2">
                            <span class="inline-flex items-center space-x-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/>
                                </svg>
                                <span>Site 100% seguro e protegido</span>
                            </span>
                        </p>
                        <p>
                            CNPJ: 00.000.000/0001-00 | Razão Social: Empresa de Cursos Técnicos LTDA
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- #page -->
    
    <?php wp_footer(); ?>
    
    <!-- Botão flutuante do WhatsApp -->
    <div id="whatsapp-float" class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/<?php echo $whatsapp; ?>?text=<?php echo urlencode('Olá! Gostaria de saber mais sobre o curso de reparação de unidades injetoras.'); ?>" 
           target="_blank" 
           rel="noopener"
           class="whatsapp-float-btn flex items-center justify-center w-16 h-16 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 animate-pulse">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
            </svg>
        </a>
    </div>
</body>
</html>

<?php
// Menu padrão do footer caso não tenha menu cadastrado
function footer_default_menu() {
    echo '<ul class="footer-menu space-y-2">';
    echo '<li><a href="' . home_url('/') . '#hero" class="text-gray-300 hover:text-brand-yellow transition-colors">Início</a></li>';
    echo '<li><a href="' . home_url('/') . '#benefits" class="text-gray-300 hover:text-brand-yellow transition-colors">Benefícios</a></li>';
    echo '<li><a href="' . home_url('/') . '#units" class="text-gray-300 hover:text-brand-yellow transition-colors">Unidades</a></li>';
    echo '<li><a href="' . home_url('/') . '#plans" class="text-gray-300 hover:text-brand-yellow transition-colors">Planos</a></li>';
    echo '<li><a href="' . home_url('/') . '#testimonials" class="text-gray-300 hover:text-brand-yellow transition-colors">Depoimentos</a></li>';
    echo '</ul>';
}

// Custom Nav Walker para estilizar os menus
class Custom_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';
        
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        
        $output .= $indent . '<li' . $id . $class_names .'>';
        
        $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target     ) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn        ) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url        ) .'"' : '';
        
        $item_output = isset($args->before) ? $args->before ?? '' : '';
        $item_output .= '<a' . $attributes .' class="text-foreground hover:text-primary transition-colors font-medium">';
        $item_output .= (isset($args->link_before) ? $args->link_before ?? '' : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after ?? '' : '');
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after ?? '' : '';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
?>