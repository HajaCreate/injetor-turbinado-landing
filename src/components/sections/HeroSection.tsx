import { HeroButton } from "@/components/ui/hero-button";
import heroImage from "@/assets/hero-image.jpg";

const HeroSection = () => {
  const scrollToPlans = () => {
    document.getElementById('plans')?.scrollIntoView({ behavior: 'smooth' });
  };

  return (
    <section className="relative min-h-screen flex items-center justify-center bg-gradient-hero overflow-hidden pt-16 md:pt-0">
      {/* Background Image */}
      <div className="absolute inset-0 z-0">
        <img 
          src={heroImage} 
          alt="Reparação de Unidade Injetora" 
          className="w-full h-full object-cover opacity-20"
        />
        <div className="absolute inset-0 bg-gradient-hero/80" />
      </div>
      
      {/* Content */}
      <div className="relative z-10 container mx-auto px-4 text-center text-white">
        <div className="max-w-4xl mx-auto">
          <h1 className="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Domine a <span className="text-primary drop-shadow-lg font-black">Reparação de Unidade Injetora</span> 
            com o Especialista do Mercado
          </h1>
          
          <p className="text-xl md:text-2xl mb-8 text-gray-200 max-w-3xl mx-auto leading-relaxed">
            Aprenda as técnicas profissionais que transformaram centenas de mecânicos em 
            <strong> especialistas requisitados</strong> no mercado de reparação de sistemas de injeção
          </p>
          
          <div className="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
            <HeroButton 
              onClick={scrollToPlans}
              className="w-full sm:w-auto"
            >
              Escolha Seu Plano Ideal
            </HeroButton>
            
            <HeroButton 
              variant="secondary"
              className="w-full sm:w-auto"
              onClick={() => document.getElementById('benefits')?.scrollIntoView({ behavior: 'smooth' })}
            >
              Conhecer os Benefícios
            </HeroButton>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto text-center">
            <div className="bg-black/40 backdrop-blur-sm p-6 rounded-lg border border-primary/30">
              <div className="text-3xl font-bold text-primary drop-shadow-lg mb-2">500+</div>
              <div className="text-sm text-white font-medium">Alunos Formados</div>
            </div>
            <div className="bg-black/40 backdrop-blur-sm p-6 rounded-lg border border-primary/30">
              <div className="text-3xl font-bold text-primary drop-shadow-lg mb-2">15+</div>
              <div className="text-sm text-white font-medium">Anos de Experiência</div>
            </div>
            <div className="bg-black/40 backdrop-blur-sm p-6 rounded-lg border border-primary/30">
              <div className="text-3xl font-bold text-primary drop-shadow-lg mb-2">98%</div>
              <div className="text-sm text-white font-medium">Taxa de Satisfação</div>
            </div>
          </div>
        </div>
      </div>
      
      {/* Scroll Indicator */}
      <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div className="w-6 h-10 border-2 border-white rounded-full flex justify-center">
          <div className="w-1 h-3 bg-white rounded-full mt-2"></div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;