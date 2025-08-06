import { Card, CardContent } from "@/components/ui/card";
import { Star, Quote } from "lucide-react";

const TestimonialsSection = () => {
  const testimonials = [
    {
      name: "Carlos Silva",
      profession: "Mecânico Especializado",
      location: "São Paulo - SP",
      text: "Depois do curso, minha renda triplicou! Hoje sou referência em reparação de unidades injetoras na minha região. O investimento se pagou em menos de 2 meses.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face"
    },
    {
      name: "João Pereira", 
      profession: "Dono de Oficina",
      location: "Minas Gerais - MG",
      text: "Consegui agregar um serviço de alto valor na minha oficina. Agora atendo frotas inteiras e tenho fila de espera. Recomendo para todos que querem crescer profissionalmente.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face"
    },
    {
      name: "Roberto Santos",
      profession: "Técnico Autônomo", 
      location: "Rio de Janeiro - RJ",
      text: "Curso completo e muito prático! Aprendi técnicas que nem imaginava que existiam. Hoje trabalho com equipamentos CAT e ganho muito mais que antes.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1560250097-0b93528c311a?w=150&h=150&fit=crop&crop=face"
    },
    {
      name: "Anderson Lima",
      profession: "Mecânico Industrial",
      location: "Bahia - BA", 
      text: "O professor é muito experiente e explica de forma clara. Consegui emprego numa empresa multinacional logo após terminar o curso. Valeu cada centavo!",
      rating: 5,
      image: "https://images.unsplash.com/photo-1519345182560-3f2917c472ef?w=150&h=150&fit=crop&crop=face"
    },
    {
      name: "Marcos Oliveira",
      profession: "Especialista em Frotas",
      location: "Paraná - PR",
      text: "Curso superou todas as expectativas! Metodologia excelente e suporte sempre disponível. Hoje atendo grandes transportadoras e minha agenda está sempre cheia.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&h=150&fit=crop&crop=face"
    },
    {
      name: "Paulo Costa",
      profession: "Mecânico Sênior",
      location: "Goiás - GO",
      text: "Finalmente encontrei um curso que ensina de verdade! Técnicas profissionais que fazem a diferença no dia a dia. Recomendo sem hesitar!",
      rating: 5,
      image: "https://images.unsplash.com/photo-1507591064344-4c6ce005b128?w=150&h=150&fit=crop&crop=face"
    }
  ];

  const renderStars = (rating: number) => {
    return Array.from({ length: rating }, (_, i) => (
      <Star key={i} className="w-5 h-5 fill-primary text-primary" />
    ));
  };

  return (
    <section className="py-20 bg-gradient-subtle">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-foreground">
            O que Nossos <span className="text-secondary drop-shadow-sm font-black">Alunos Dizem</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Histórias reais de transformação profissional. Veja como o curso 
            mudou a carreira destes profissionais.
          </p>
        </div>
        
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <Card key={index} className="hover:shadow-elegant transition-all duration-300 hover:-translate-y-2 border-0 bg-card/90 backdrop-blur-sm">
              <CardContent className="p-8">
                <div className="flex items-center mb-4">
                  {renderStars(testimonial.rating)}
                </div>
                
                <Quote className="w-8 h-8 text-primary mb-4 opacity-60" />
                
                <p className="text-card-foreground mb-6 leading-relaxed italic">
                  "{testimonial.text}"
                </p>
                
                <div className="flex items-center gap-4">
                  <img 
                    src={testimonial.image} 
                    alt={testimonial.name}
                    className="w-12 h-12 rounded-full object-cover"
                  />
                  <div>
                    <h4 className="font-bold text-card-foreground">
                      {testimonial.name}
                    </h4>
                    <p className="text-sm text-muted-foreground">
                      {testimonial.profession}
                    </p>
                    <p className="text-xs text-muted-foreground">
                      {testimonial.location}
                    </p>
                  </div>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>
        
        <div className="text-center mt-12">
          <div className="inline-flex items-center gap-4 bg-card/80 backdrop-blur-sm p-6 rounded-lg shadow-brand">
            <div className="text-center">
              <div className="text-3xl font-bold text-primary mb-1">4.9/5</div>
              <div className="flex justify-center mb-1">
                {renderStars(5)}
              </div>
              <div className="text-sm text-muted-foreground">Nota média</div>
            </div>
            <div className="h-12 w-px bg-border"></div>
            <div className="text-center">
              <div className="text-3xl font-bold text-primary mb-1">500+</div>
              <div className="text-sm text-muted-foreground">Alunos satisfeitos</div>
            </div>
            <div className="h-12 w-px bg-border"></div>
            <div className="text-center">
              <div className="text-3xl font-bold text-primary mb-1">98%</div>
              <div className="text-sm text-muted-foreground">Recomendariam</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TestimonialsSection;