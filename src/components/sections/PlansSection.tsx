import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { HeroButton } from "@/components/ui/hero-button";
import { Badge } from "@/components/ui/badge";
import { CheckCircle, Star } from "lucide-react";
const PlansSection = () => {
  const plans = [{
    name: "Linha Rodoviária",
    subtitle: "Especialização em veículos rodoviários",
    price: "R$ 497",
    originalPrice: "R$ 697",
    description: "Domine completamente a reparação de unidades injetoras para caminhões, ônibus e veículos pesados rodoviários.",
    features: ["20+ horas de aulas práticas", "Diagnóstico avançado de falhas", "Técnicas de desmontagem e montagem", "Calibração e teste de funcionamento", "Mercedes, Iveco, Scania, Volvo, Daf", "Certificado de conclusão", "Acesso vitalício ao conteúdo"],
    isPopular: false,
    buttonText: "Começar Agora"
  }, {
    name: "Linha CAT",
    subtitle: "Especialização em equipamentos Caterpillar",
    price: "R$ 597",
    originalPrice: "R$ 897",
    description: "Torne-se especialista em unidades injetoras de equipamentos Caterpillar, um dos mercados mais valorizados.",
    features: ["25+ horas de aulas práticas", "Foco em equipamentos CAT", "Tecnologias exclusivas CAT", "Ferramentas especializadas", "Diagnóstico computadorizado", "Suporte técnico por 120 dias", "Certificado especializado CAT", "Acesso vitalício ao conteúdo"],
    isPopular: false,
    buttonText: "Escolher CAT"
  }, {
    name: "Completo: Rodoviária + CAT",
    subtitle: "Formação completa e mais valorizada",
    price: "R$ 797",
    originalPrice: "R$ 1.394",
    description: "A formação mais completa do mercado! Domine tanto a linha rodoviária quanto CAT e torne-se o profissional mais requisitado.",
    features: ["45+ horas de aulas práticas", "Ambas as especializações", "Bônus exclusivos", "Acesso prioritário a atualizações", "Grupo VIP de alunos", "Suporte técnico por 180 dias", "Dupla certificação", "Garantia estendida de 60 dias", "Acesso vitalício ao conteúdo"],
    isPopular: true,
    buttonText: "Quero o Completo",
    discount: "43% OFF"
  }];
  const handlePlanSelection = (planName: string) => {
    // Aqui você pode integrar com seu sistema de pagamento
    console.log(`Plano selecionado: ${planName}`);
    // Exemplo: window.open('sua-url-de-checkout', '_blank');
  };
  return <section id="plans" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-foreground">
            Escolha o <span className="text-primary">Plano Ideal</span> para Você
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto mb-8">
            Investimento que se paga em poucos serviços. Escolha sua especialização 
            e comece a faturar mais ainda hoje.
          </p>
          
          <div className="inline-flex items-center gap-2 text-[#71440c] px-6 py-3 rounded-full font-semibold bg-amber-100">
            <Star className="w-5 h-5" />
            Oferta por tempo limitado - Últimas vagas!
          </div>
        </div>
        
        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
          {plans.map((plan, index) => <Card key={index} className={`relative overflow-hidden transition-all duration-300 hover:shadow-elegant hover:-translate-y-2 ${plan.isPopular ? 'border-primary shadow-brand scale-105 lg:scale-110' : 'border-border hover:border-primary/50'}`}>
              {plan.isPopular && <div className="absolute top-0 left-0 right-0 bg-primary text-primary-foreground text-center py-2 font-bold">
                  <Star className="w-4 h-4 inline mr-2" />
                  MAIS ESCOLHIDO
                </div>}
              
              {plan.discount && <Badge className="absolute top-4 right-4 bg-destructive text-destructive-foreground font-bold text-sm">
                  {plan.discount}
                </Badge>}
              
              <CardHeader className={`text-center ${plan.isPopular ? 'pt-12' : 'pt-8'}`}>
                <CardTitle className="text-2xl font-bold text-card-foreground mb-2">
                  {plan.name}
                </CardTitle>
                <p className="text-muted-foreground mb-4">{plan.subtitle}</p>
                
                <div className="mb-4">
                  <div className="flex items-center justify-center gap-2 mb-2">
                    <span className="text-sm text-muted-foreground line-through">
                      {plan.originalPrice}
                    </span>
                  </div>
                  <div className="text-4xl font-bold text-primary">
                    {plan.price}
                  </div>
                  <div className="text-sm text-muted-foreground">
                    ou 12x sem juros
                  </div>
                </div>
                
                <p className="text-card-foreground">{plan.description}</p>
              </CardHeader>
              
              <CardContent className="px-8 pb-8">
                <ul className="space-y-3 mb-8">
                  {plan.features.map((feature, featureIndex) => <li key={featureIndex} className="flex items-start gap-3">
                      <CheckCircle className="w-5 h-5 text-primary flex-shrink-0 mt-0.5" />
                      <span className="text-card-foreground">{feature}</span>
                    </li>)}
                </ul>
                
                <HeroButton className="w-full" variant={plan.isPopular ? "primary" : "secondary"} onClick={() => handlePlanSelection(plan.name)}>
                  {plan.buttonText}
                </HeroButton>
                
                <p className="text-xs text-muted-foreground text-center mt-4">
                  ✅ Garantia de 30 dias • ✅ Acesso imediato
                </p>
              </CardContent>
            </Card>)}
        </div>
        
        <div className="text-center mt-12">
          <p className="text-lg text-muted-foreground mb-4">
            Ainda tem dúvidas? Fale conosco no WhatsApp
          </p>
          <HeroButton variant="secondary" onClick={() => window.open('https://wa.me/5511999999999', '_blank')}>
            💬 Tirar Dúvidas no WhatsApp
          </HeroButton>
        </div>
      </div>
    </section>;
};
export default PlansSection;