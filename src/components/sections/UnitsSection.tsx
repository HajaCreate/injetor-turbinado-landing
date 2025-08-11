import { Card, CardContent } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Wrench, Truck, Building2 } from "lucide-react";

// Import das imagens das unidades
import mercedesInjector from "@/assets/units/mercedes-injector-new.jpg";
import ivecoUi from "@/assets/units/iveco-ui.jpg";
import scaniaUi from "@/assets/units/scania-ui.jpg";
import volvoD12Ac from "@/assets/units/volvo-d12-ac.jpg";
import volvoD12D from "@/assets/units/volvo-d12-d.jpg";
import volvoD13 from "@/assets/units/volvo-d13.jpg";
import daf from "@/assets/units/daf.jpg";
import catC7C9 from "@/assets/units/cat-c7-c9.jpg";
import catC15C18 from "@/assets/units/cat-c15-c18.jpg";
import cat3126 from "@/assets/units/cat-3126.jpg";
const UnitsSection = () => {
  const units = [
  // Linha Rodoviária
  {
    name: "Unidade UP Mercedes",
    category: "Rodoviária",
    description: "Sistema de injeção eletrônica Mercedes",
    applications: ["Caminhões Mercedes", "Veículos comerciais"],
    icon: <Truck className="w-8 h-8" />,
    image: mercedesInjector
  }, {
    name: "Unidade UI Iveco",
    category: "Rodoviária",
    description: "Sistema de injeção Iveco",
    applications: ["Iveco Daily", "Caminhões leves"],
    icon: <Truck className="w-8 h-8" />,
    image: ivecoUi
  }, {
    name: "Unidade UI Scania",
    category: "Rodoviária",
    description: "Sistema de injeção Scania",
    applications: ["Scania R-Series", "Caminhões pesados"],
    icon: <Truck className="w-8 h-8" />,
    image: scaniaUi
  }, {
    name: "Unidade EUI Volvo D12 A/C",
    category: "Rodoviária",
    description: "Sistema EUI Volvo D12 com A/C",
    applications: ["Volvo FH", "Volvo FM"],
    icon: <Truck className="w-8 h-8" />,
    image: volvoD12Ac
  }, {
    name: "Unidade EUI Volvo D12 D",
    category: "Rodoviária",
    description: "Sistema EUI Volvo D12 versão D",
    applications: ["Volvo FH", "Volvo FM"],
    icon: <Truck className="w-8 h-8" />,
    image: volvoD12D
  }, {
    name: "Unidade EUI Volvo D13",
    category: "Rodoviária",
    description: "Sistema EUI Volvo D13",
    applications: ["Volvo FH", "Volvo FMX"],
    icon: <Truck className="w-8 h-8" />,
    image: volvoD13
  }, {
    name: "Unidade DAF",
    category: "Rodoviária",
    description: "Sistema de injeção DAF",
    applications: ["DAF XF", "DAF CF"],
    icon: <Truck className="w-8 h-8" />,
    image: daf
  },
  // Linha CAT
  {
    name: "Caterpillar C7/C9",
    category: "CAT",
    description: "Sistema HEUI Caterpillar C7 e C9",
    applications: ["Escavadeiras CAT", "Tratores CAT"],
    icon: <Building2 className="w-8 h-8" />,
    image: catC7C9
  }, {
    name: "Caterpillar C15/C18",
    category: "CAT",
    description: "Sistema ACERT Caterpillar C15 e C18",
    applications: ["Mineração", "Construção pesada"],
    icon: <Building2 className="w-8 h-8" />,
    image: catC15C18
  }, {
    name: "Caterpillar 3126",
    category: "CAT",
    description: "Sistema eletrônico CAT 3126",
    applications: ["Ônibus", "Caminhões médios"],
    icon: <Building2 className="w-8 h-8" />,
    image: cat3126
  }];
  return <section className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <div className="inline-flex items-center gap-2 bg-secondary text-secondary-foreground px-4 py-2 rounded-full font-semibold mb-6 shadow-lg">
            <Wrench className="w-5 h-5" />
            Unidades Injetoras do Curso
          </div>
          
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-foreground">
            <span className="drop-shadow-sm font-black text-[#71440c]">10 Unidades Injetoras</span> que Você Vai Dominar
          </h2>
          
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Aprenda a reparar as principais unidades injetoras do mercado, 
            desde sistemas rodoviários até equipamentos Caterpillar especializados.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 max-w-7xl mx-auto">
          {units.map((unit, index) => <Card key={index} className="relative overflow-hidden transition-all duration-300 hover:shadow-elegant hover:-translate-y-1 border-border hover:border-primary/50">
              <CardContent className="p-0">
                {/* Imagem da unidade */}
                <div className="relative h-48 overflow-hidden">
                  <img src={unit.image} alt={unit.name} className="w-full h-full object-cover" />
                  <Badge className={`absolute top-3 left-3 ${unit.category === 'CAT' ? 'bg-accent text-accent-foreground' : 'bg-secondary text-secondary-foreground'}`}>
                    {unit.category}
                  </Badge>
                </div>
                
                {/* Conteúdo do card */}
                <div className="p-6 text-center">
                  <h3 className="text-lg font-bold text-card-foreground mb-3">
                    {unit.name}
                  </h3>
                  
                  <p className="text-sm text-muted-foreground mb-4">
                    {unit.description}
                  </p>
                  
                  <div className="space-y-1">
                    {unit.applications.map((app, appIndex) => <p key={appIndex} className="text-xs text-card-foreground font-medium">
                        • {app}
                      </p>)}
                  </div>
                </div>
              </CardContent>
            </Card>)}
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
    </section>;
};
export default UnitsSection;