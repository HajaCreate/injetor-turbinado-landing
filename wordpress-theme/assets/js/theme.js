/**
 * Theme JavaScript - Funcionalidades interativas
 */

(function($) {
    'use strict';

    // Executa quando o DOM estiver pronto
    $(document).ready(function() {
        
        // Smooth scrolling para links âncora
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            var target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 80
                }, 800, 'easeInOutCubic');
            }
        });

        // Adiciona classe específica para botões de scroll
        $('.hero-btn-scroll, .cta-btn-scroll').on('click', function(e) {
            e.preventDefault();
            
            var targetId = $(this).attr('href');
            var target = $(targetId);
            
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 1000, 'easeInOutCubic');
            }
        });

        // Animação de entrada para cards
        function animateCards() {
            $('.benefit-card, .unit-card, .plan-card, .testimonial-card').each(function() {
                var $card = $(this);
                var elementTop = $card.offset().top;
                var elementBottom = elementTop + $card.outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $card.addClass('animate-in');
                }
            });
        }

        // Executa animação no scroll
        $(window).on('scroll', function() {
            animateCards();
        });

        // Executa animação inicial
        animateCards();

        // Efeito parallax suave no hero
        $(window).scroll(function() {
            var scrolled = $(this).scrollTop();
            var parallax = $('.hero-bg-image');
            var speed = 0.5;

            if (parallax.length) {
                parallax.css('transform', 'translateY(' + -(scrolled * speed) + 'px)');
            }
        });

        // Contador animado para estatísticas
        function animateCounters() {
            $('.hero-stat-number').each(function() {
                var $this = $(this);
                var targetText = $this.text();
                var targetNumber = parseInt(targetText.replace(/[^0-9]/g, ''));
                var suffix = targetText.replace(/[0-9]/g, '');
                
                if (!$this.data('animated') && targetNumber > 0) {
                    $this.data('animated', true);
                    
                    $({ counter: 0 }).animate({ counter: targetNumber }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.counter) + suffix);
                        },
                        complete: function() {
                            $this.text(targetText);
                        }
                    });
                }
            });
        }

        // Trigger counter animation quando visível
        $(window).on('scroll', function() {
            var heroStats = $('.hero-stats');
            if (heroStats.length && heroStats.offset().top < $(window).scrollTop() + $(window).height()) {
                animateCounters();
            }
        });

        // Tracking de cliques para analytics
        $('.btn').on('click', function() {
            var buttonText = $(this).text().trim();
            var buttonClass = $(this).attr('class');
            
            // Google Analytics 4
            if (typeof gtag !== 'undefined') {
                gtag('event', 'click', {
                    'event_category': 'Button',
                    'event_label': buttonText,
                    'value': 1
                });
            }

            // Facebook Pixel
            if (typeof fbq !== 'undefined') {
                fbq('track', 'Lead', {
                    content_name: buttonText,
                    content_category: 'Button Click'
                });
            }
        });

        // WhatsApp e telefone tracking
        $('a[href^="https://wa.me"], a[href^="tel:"]').on('click', function() {
            var linkType = $(this).attr('href').startsWith('https://wa.me') ? 'WhatsApp' : 'Phone';
            
            if (typeof gtag !== 'undefined') {
                gtag('event', 'contact', {
                    'event_category': 'Contact',
                    'event_label': linkType,
                    'value': 1
                });
            }

            if (typeof fbq !== 'undefined') {
                fbq('track', 'Contact', {
                    content_name: linkType
                });
            }
        });

        // Lazy loading para imagens
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src || img.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Otimização de performance - debounce scroll
        let scrollTimer = null;
        $(window).on('scroll', function() {
            if (scrollTimer !== null) {
                clearTimeout(scrollTimer);
            }
            scrollTimer = setTimeout(function() {
                // Código de scroll otimizado aqui
            }, 150);
        });

        // Acessibilidade - navegação por teclado
        $('.btn, a').on('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                $(this)[0].click();
            }
        });

        // Preloader simples
        $(window).on('load', function() {
            $('body').addClass('loaded');
        });

    });

    // Função para easing customizado
    $.easing.easeInOutCubic = function(x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t + 2) + b;
    };

})(jQuery);

// Funcionalidades sem jQuery para melhor performance
document.addEventListener('DOMContentLoaded', function() {
    
    // Service Worker para cache offline (Progressive Web App)
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js')
            .then(function(registration) {
                console.log('SW registrado com sucesso:', registration.scope);
            })
            .catch(function(error) {
                console.log('Falha no registro do SW:', error);
            });
    }

    // Schema markup dinâmico
    const courseSchema = {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "Curso de Reparação de Unidade Injetora",
        "description": "Curso profissionalizante completo para reparação de unidades injetoras",
        "provider": {
            "@type": "Organization",
            "name": document.title
        },
        "offers": {
            "@type": "Offer",
            "price": "497",
            "priceCurrency": "BRL"
        }
    };

    const script = document.createElement('script');
    script.type = 'application/ld+json';
    script.text = JSON.stringify(courseSchema);
    document.head.appendChild(script);

});

// Intersection Observer para animações
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');
        }
    });
}, observerOptions);

// Observa elementos para animação
document.querySelectorAll('.benefit-card, .unit-card, .plan-card, .testimonial-card').forEach(el => {
    observer.observe(el);
});

// CSS animations via JavaScript
const style = document.createElement('style');
style.textContent = `
    .animate-in {
        animation: slideInUp 0.6s ease-out forwards;
    }
    
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .lazy {
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .loaded .lazy {
        opacity: 1;
    }
`;
document.head.appendChild(style);