<?php get_header(); ?>

<main class="section">
    <div class="container" style="text-align: center; padding: 3rem 0;">
        <div style="max-width: 600px; margin: 0 auto;">
            <!-- Ícone de erro 404 -->
            <div style="font-size: 8rem; color: var(--primary); margin-bottom: 2rem; font-weight: bold;">
                404
            </div>
            
            <h1 class="section-title" style="margin-bottom: 1rem;">
                Página <span style="color: var(--primary);">Não Encontrada</span>
            </h1>
            
            <p style="font-size: 1.125rem; color: #666; margin-bottom: 3rem; line-height: 1.6;">
                Ops! Parece que a página que você está procurando não existe ou foi movida. 
                Mas não se preocupe, temos várias outras opções para você!
            </p>
            
            <!-- Formulário de busca -->
            <div style="margin-bottom: 3rem;">
                <h3 style="margin-bottom: 1rem; color: var(--foreground);">Tente uma busca:</h3>
                <form role="search" method="get" action="<?php echo home_url('/'); ?>" style="display: flex; gap: 0.5rem; max-width: 400px; margin: 0 auto;">
                    <input 
                        type="search" 
                        placeholder="Digite sua busca..." 
                        name="s" 
                        style="flex: 1; padding: 0.75rem; border: 2px solid var(--border); border-radius: 0.5rem; font-size: 1rem;"
                    >
                    <button type="submit" class="btn btn-primary" style="padding: 0.75rem 1.5rem;">
                        Buscar
                    </button>
                </form>
            </div>
            
            <!-- Links úteis -->
            <div style="margin-bottom: 3rem;">
                <h3 style="margin-bottom: 1.5rem; color: var(--foreground);">Ou acesse diretamente:</h3>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                        🏠 Página Inicial
                    </a>
                    <a href="/#benefits" class="btn btn-secondary">
                        🎯 Benefícios do Curso
                    </a>
                    <a href="/#plans" class="btn btn-secondary">
                        💰 Planos e Preços
                    </a>
                    <a href="/#units" class="btn btn-secondary">
                        🔧 Unidades do Curso
                    </a>
                </div>
            </div>
            
            <!-- Sugestões de páginas populares -->
            <div style="background: var(--muted); padding: 2rem; border-radius: 1rem; margin-bottom: 3rem;">
                <h3 style="margin-bottom: 1.5rem; color: var(--foreground);">Páginas mais acessadas:</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; text-align: left;">
                    <div>
                        <h4 style="color: var(--primary); margin-bottom: 0.5rem;">📚 Sobre o Curso</h4>
                        <p style="font-size: 0.875rem; color: #666;">Conheça nossa metodologia exclusiva</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary); margin-bottom: 0.5rem;">🏆 Depoimentos</h4>
                        <p style="font-size: 0.875rem; color: #666;">Histórias de sucesso dos nossos alunos</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary); margin-bottom: 0.5rem;">❓ FAQ</h4>
                        <p style="font-size: 0.875rem; color: #666;">Perguntas frequentes sobre o curso</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary); margin-bottom: 0.5rem;">📞 Contato</h4>
                        <p style="font-size: 0.875rem; color: #666;">Fale conosco diretamente</p>
                    </div>
                </div>
            </div>
            
            <!-- CTA de contato -->
            <div style="background: linear-gradient(135deg, var(--brand-dark), var(--brand-brown)); color: white; padding: 3rem 2rem; border-radius: 1rem;">
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; color: white;">
                    Não encontrou o que procurava? <span style="color: var(--primary);">Fale Conosco!</span>
                </h3>
                <p style="margin-bottom: 2rem; font-size: 1.125rem;">
                    Nossa equipe está pronta para ajudar você a encontrar exatamente o que precisa sobre o curso.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo get_whatsapp_link('Olá! Não consegui encontrar uma página no site. Vocês podem me ajudar?'); ?>" class="btn btn-primary">
                        📱 WhatsApp
                    </a>
                    <a href="tel:+<?php echo get_phone_number(); ?>" class="btn btn-secondary">
                        📞 Ligar Agora
                    </a>
                    <a href="mailto:<?php echo get_contact_email(); ?>" class="btn btn-secondary">
                        ✉️ Enviar Email
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>