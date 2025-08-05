import { Card, CardContent } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Wrench, Truck, Building2 } from "lucide-react";

const UnitsSection = () => {
  const units = [
    {
      name: "Bosch CP1",
      category: "Rodoviária",
      description: "Sistema Common Rail de primeira geração",
      applications: ["Caminhões Mercedes", "Iveco Daily"],
      icon: <Truck className="w-8 h-8" />
    },
    {
      name: "Bosch CP3",
      category: "Rodoviária", 
      description: "Sistema Common Rail avançado",
      applications: ["Volvo FH", "Scania R-Series"],
      icon: <Truck className="w-8 h-8" />
    },
    {
      name: "Delphi DFP1",
      category: "Rodoviária",
      description: "Sistema de injeção eletrônica",
      applications: ["Ford Cargo", "VW Constellation"],
      icon: <Truck className="w-8 h-8" />
    },
    {
      name: "Denso HP3",
      category: "Rodoviária",
      description: "Injeção de alta pressão",
      applications: ["Hino", "Toyota Dyna"],
      icon: <Truck className="w-8 h-8" />
    },
    {
      name: "Siemens VDO",
      category: "Rodoviária",
      description: "Sistema de injeção Continental",
      applications: ["MAN TGX", "DAF XF"],
      icon: <Truck className="w-8 h-8" />
    },
    {
      name: "CAT C7 HEUI",
      category: "CAT",
      description: "Sistema hidráulico eletrônico",
      applications: ["Escavadeiras CAT", "Tratores CAT"],
      icon: <Building2 className="w-8 h-8" />
    },
    {
      name: "CAT C9 ACERT",
      category: "CAT", 
      description: "Tecnologia ACERT avançada",
      applications: ["Retroescavadeiras", "Compactadores"],
      icon: <Building2 className="w-8 h-8" />
    },
    {
      name: "CAT C13 ACERT",
      category: "CAT",
      description: "Motor pesado ACERT",
      applications: ["Caminhões fora de estrada", "Geradores"],
      icon: <Building2 className="w-8 h-8" />
    },
    {
      name: "CAT 3126B",
      category: "CAT",
      description: "Sistema eletrônico HEUI",
      applications: ["Ônibus", "Caminhões médios"],
      icon: <Building2 className="w-8 h-8" />
    },
    {
      name: "CAT C15 ACERT",
      category: "CAT",
      description: "Motor de alta performance",
      applications: ["Mineração", "Construção pesada"],
      icon: <Building2 className="w-8 h-8" />
    }
  ];

  return (
    <section className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <div className="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-2 rounded-full font-semibold mb-6">
            <Wrench className="w-5 h-5" />
            Unidades Injetoras do Curso
          </div>
          
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-foreground">
            <span className="text-primary">10 Unidades Injetoras</span> que Você Vai Dominar
          </h2>
          
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Aprenda a reparar as principais unidades injetoras do mercado, 
            desde sistemas rodoviários até equipamentos Caterpillar especializados.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 max-w-7xl mx-auto">
          {units.map((unit, index) => (
            <Card 
              key={index}
              className="relative overflow-hidden transition-all duration-300 hover:shadow-elegant hover:-translate-y-1 border-border hover:border-primary/50"
            >
              <CardContent className="p-6 text-center">
                <Badge 
                  className={`mb-4 ${
                    unit.category === 'CAT' 
                      ? 'bg-accent text-accent-foreground' 
                      : 'bg-secondary text-secondary-foreground'
                  }`}
                >
                  {unit.category}
                </Badge>
                
                <div className="text-primary mb-4 flex justify-center">
                  {unit.icon}
                </div>
                
                <h3 className="text-lg font-bold text-card-foreground mb-3">
                  {unit.name}
                </h3>
                
                <p className="text-sm text-muted-foreground mb-4">
                  {unit.description}
                </p>
                
                <div className="space-y-1">
                  {unit.applications.map((app, appIndex) => (
                    <p key={appIndex} className="text-xs text-card-foreground font-medium">
                      • {app}
                    </p>
                  ))}
                </div>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="text-center mt-12">
          <div className="inline-flex items-center gap-4 bg-card border border-border rounded-lg p-6 max-w-2xl mx-auto">
            <div className="text-primary">
              <Wrench className="w-12 h-12" />
            </div>
            <div className="text-left">
              <h3 className="text-lg font-bold text-card-foreground mb-2">
                Técnicas Universais
              </h3>
              <p className="text-muted-foreground">
                Além dessas 10 unidades específicas, você aprenderá técnicas que podem ser aplicadas 
                em dezenas de outros modelos e sistemas similares.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default UnitsSection;