    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3><?php bloginfo('name'); ?></h3>
                    <p>
                        Especialistas em formação profissional para reparação de unidades injetoras. 
                        Mais de 15 anos transformando carreiras no setor automotivo.
                    </p>
                    <p>
                        <strong>Horário de Atendimento:</strong><br>
                        Segunda a Sexta: 8h às 18h<br>
                        Sábado: 8h às 12h
                    </p>
                </div>
                
                <div class="footer-section">
                    <h3>Contato</h3>
                    <p>📱 WhatsApp: <a href="https://wa.me/5511999999999">(11) 99999-9999</a></p>
                    <p>📞 Telefone: <a href="tel:+5511999999999">(11) 99999-9999</a></p>
                    <p>✉️ Email: <a href="mailto:contato@cursounidadeinjetora.com.br">contato@cursounidadeinjetora.com.br</a></p>
                    <p>📍 São Paulo - SP</p>
                </div>
                
                <div class="footer-section">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="#benefits">Benefícios do Curso</a></li>
                        <li><a href="#units">Unidades do Curso</a></li>
                        <li><a href="#plans">Planos e Preços</a></li>
                        <li><a href="#testimonials">Depoimentos</a></li>
                        <li><a href="https://wa.me/5511999999999">Falar com Consultor</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Garantias</h3>
                    <ul>
                        <li>✅ Satisfação 100% Garantida</li>
                        <li>✅ Certificado Reconhecido</li>
                        <li>✅ Suporte Técnico Especializado</li>
                        <li>✅ Material Didático Incluído</li>
                        <li>✅ Acesso Vitalício ao Conteúdo</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
                <p>
                    <a href="/politica-privacidade">Política de Privacidade</a> | 
                    <a href="/termos-uso">Termos de Uso</a> | 
                    <a href="/perguntas-frequentes">FAQ</a>
                </p>
                <p style="margin-top: 1rem; font-size: 0.875rem;">
                    🔒 Site Seguro - SSL Certificado | 🏢 CNPJ: XX.XXX.XXX/0001-XX | 📋 Licença de Funcionamento: XXXXX
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Smooth scroll para links internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Analytics - Google Tag Manager (substitua GTM-XXXXXXX pelo seu ID)
        /*
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-XXXXXXX');
        */

        // Facebook Pixel (substitua 123456789 pelo seu ID)
        /*
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '123456789');
        fbq('track', 'PageView');
        */

        // WhatsApp Click Tracking
        document.querySelectorAll('a[href*="wa.me"]').forEach(link => {
            link.addEventListener('click', function() {
                // Google Analytics event (se estiver usando)
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'click', {
                        event_category: 'WhatsApp',
                        event_label: 'Header Button'
                    });
                }
                // Facebook Pixel event (se estiver usando)
                if (typeof fbq !== 'undefined') {
                    fbq('track', 'Contact');
                }
            });
        });

        // Phone Click Tracking
        document.querySelectorAll('a[href^="tel:"]').forEach(link => {
            link.addEventListener('click', function() {
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'click', {
                        event_category: 'Phone',
                        event_label: 'Phone Call'
                    });
                }
                if (typeof fbq !== 'undefined') {
                    fbq('track', 'Contact');
                }
            });
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>