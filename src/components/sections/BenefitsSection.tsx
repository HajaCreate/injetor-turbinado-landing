import { Card, CardContent } from "@/components/ui/card";
import { CheckCircle, Wrench, DollarSign, Users, Award, Clock } from "lucide-react";
const BenefitsSection = () => {
  const benefits = [{
    icon: <Wrench className="w-12 h-12 text-primary" />,
    title: "Técnicas Profissionais",
    description: "Domine os métodos mais avançados de diagnóstico e reparo de unidades injetoras utilizados pelos melhores profissionais do mercado."
  }, {
    icon: <DollarSign className="w-12 h-12 text-primary" />,
    title: "Aumento de Renda",
    description: "Especialistas em unidades injetoras ganham até 300% mais que mecânicos convencionais. Torne-se referência no seu mercado."
  }, {
    icon: <Users className="w-12 h-12 text-primary" />,
    title: "Grupo VIP de Alunos",
    description: "Faça parte de uma comunidade exclusiva para trocar experiências, tirar dúvidas e fazer networking com outros profissionais."
  }, {
    icon: <Award className="w-12 h-12 text-primary" />,
    title: "Apostila Técnica Completa",
    description: "Receba material didático especializado com todas as informações técnicas, diagramas e procedimentos detalhados."
  }, {
    icon: <Clock className="w-12 h-12 text-primary" />,
    title: "Acesso Vitalício",
    description: "Tenha acesso para sempre ao conteúdo completo, atualizações e novas aulas que forem adicionadas ao curso."
  }, {
    icon: <CheckCircle className="w-12 h-12 text-primary" />,
    title: "Garantia de Resultado",
    description: "30 dias de garantia incondicional. Se não ficar satisfeito, devolvemos 100% do seu investimento."
  }];
  return <section id="benefits" className="py-20 bg-gradient-subtle">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-foreground">
            Por que Escolher Nosso <span className="drop-shadow-sm font-black text-[#71440c]">Curso?</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Mais que um curso, é uma transformação profissional completa que vai elevar 
            seu conhecimento e sua renda a um novo patamar.
          </p>
        </div>
        
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {benefits.map((benefit, index) => <Card key={index} className="group hover:shadow-elegant transition-all duration-300 hover:-translate-y-2 border-0 bg-card/80 backdrop-blur-sm">
              <CardContent className="p-8 text-center">
                <div className="mb-6 flex justify-center">
                  {benefit.icon}
                </div>
                <h3 className="text-xl font-bold mb-4 text-card-foreground">
                  {benefit.title}
                </h3>
                <p className="text-muted-foreground leading-relaxed">
                  {benefit.description}
                </p>
              </CardContent>
            </Card>)}
        </div>
      </div>
    </section>;
};
export default BenefitsSection;