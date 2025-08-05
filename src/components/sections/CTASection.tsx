import { HeroButton } from "@/components/ui/hero-button";
import { Clock, Shield, Star } from "lucide-react";

const CTASection = () => {
  const scrollToPlans = () => {
    document.getElementById('plans')?.scrollIntoView({ behavior: 'smooth' });
  };

  return (
    <section className="py-20 bg-gradient-hero relative overflow-hidden">
      <div className="absolute inset-0 bg-gradient-hero/90"></div>
      
      <div className="container mx-auto px-4 relative z-10">
        <div className="max-w-4xl mx-auto text-center text-white">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 leading-tight">
            Não Perca Esta <span className="text-primary">Oportunidade Única!</span>
          </h2>
          
          <p className="text-xl md:text-2xl mb-8 text-gray-200 leading-relaxed">
            Vagas limitadas para garantir qualidade do atendimento e suporte personalizado. 
            <strong> Garante já sua vaga</strong> e transforme sua carreira profissional!
          </p>
          
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div className="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
              <Clock className="w-12 h-12 text-primary mx-auto mb-4" />
              <h3 className="font-bold text-lg mb-2">Oferta Limitada</h3>
              <p className="text-sm text-gray-200">Preços promocionais válidos apenas para as primeiras 50 inscrições</p>
            </div>
            
            <div className="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
              <Shield className="w-12 h-12 text-primary mx-auto mb-4" />
              <h3 className="font-bold text-lg mb-2">Garantia Total</h3>
              <p className="text-sm text-gray-200">30 dias para testar. Se não gostar, devolvemos 100% do valor</p>
            </div>
            
            <div className="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
              <Star className="w-12 h-12 text-primary mx-auto mb-4" />
              <h3 className="font-bold text-lg mb-2">Acesso Imediato</h3>
              <p className="text-sm text-gray-200">Comece hoje mesmo! Acesso liberado automaticamente após o pagamento</p>
            </div>
          </div>
          
          <div className="space-y-6">
            <HeroButton 
              onClick={scrollToPlans}
              className="text-xl px-12 py-8"
            >
              🚀 Quero Garantir Minha Vaga Agora!
            </HeroButton>
            
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <HeroButton 
                variant="secondary"
                onClick={() => window.open('https://wa.me/5511999999999', '_blank')}
              >
                💬 Falar no WhatsApp
              </HeroButton>
              
              <HeroButton 
                variant="secondary"
                onClick={() => window.open('tel:+5511999999999', '_self')}
              >
                📞 Ligar Agora
              </HeroButton>
            </div>
          </div>
          
          <div className="mt-12 text-center">
            <p className="text-sm text-gray-300 mb-4">
              ⚠️ <strong>ATENÇÃO:</strong> Devido à alta demanda, estamos limitando as vagas para garantir 
              a qualidade do suporte. Não perca sua chance!
            </p>
            
            <div className="inline-flex items-center gap-2 bg-primary/20 text-primary px-6 py-3 rounded-full font-semibold">
              <Clock className="w-5 h-5" />
              Últimas 12 vagas disponíveis
            </div>
          </div>
        </div>
      </div>
      
      {/* Decorative elements */}
      <div className="absolute top-0 left-0 w-32 h-32 bg-primary/20 rounded-full blur-3xl animate-pulse"></div>
      <div className="absolute bottom-0 right-0 w-40 h-40 bg-primary/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </section>
  );
};

export default CTASection;