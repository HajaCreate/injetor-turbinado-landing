import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { HeroButton } from "@/components/ui/hero-button";
import { Label } from "@/components/ui/label";
import { MapPin, Phone, Mail, Clock } from "lucide-react";
import { useState } from "react";

const ContactSection = () => {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    phone: "",
    message: ""
  });

  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    const { name, value } = e.target;
    setFormData(prev => ({
      ...prev,
      [name]: value
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    
    // Aqui você pode integrar com seu sistema de contato
    const whatsappMessage = `Olá! Tenho interesse no curso de Reparação de Unidade Injetora.%0A%0ANome: ${formData.name}%0AEmail: ${formData.email}%0ATelefone: ${formData.phone}%0AMensagem: ${formData.message}`;
    
    window.open(`https://wa.me/5511999999999?text=${whatsappMessage}`, '_blank');
  };

  return (
    <section id="contact" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-foreground">
            Entre em <span className="text-primary">Contato</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Tem dúvidas sobre o curso? Nossa equipe está pronta para ajudar você 
            a escolher o melhor plano e esclarecer todas as suas questões.
          </p>
        </div>
        
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
          {/* Contact Form */}
          <Card className="shadow-elegant">
            <CardHeader>
              <CardTitle className="text-2xl font-bold text-center">
                Envie sua Mensagem
              </CardTitle>
            </CardHeader>
            <CardContent>
              <form onSubmit={handleSubmit} className="space-y-6">
                <div>
                  <Label htmlFor="name">Nome Completo *</Label>
                  <Input
                    id="name"
                    name="name"
                    value={formData.name}
                    onChange={handleInputChange}
                    placeholder="Seu nome completo"
                    required
                    className="mt-2"
                  />
                </div>
                
                <div>
                  <Label htmlFor="email">E-mail *</Label>
                  <Input
                    id="email"
                    name="email"
                    type="email"
                    value={formData.email}
                    onChange={handleInputChange}
                    placeholder="seu@email.com"
                    required
                    className="mt-2"
                  />
                </div>
                
                <div>
                  <Label htmlFor="phone">WhatsApp *</Label>
                  <Input
                    id="phone"
                    name="phone"
                    type="tel"
                    value={formData.phone}
                    onChange={handleInputChange}
                    placeholder="(11) 99999-9999"
                    required
                    className="mt-2"
                  />
                </div>
                
                <div>
                  <Label htmlFor="message">Mensagem</Label>
                  <Textarea
                    id="message"
                    name="message"
                    value={formData.message}
                    onChange={handleInputChange}
                    placeholder="Conte-nos mais sobre sua dúvida ou interesse..."
                    className="mt-2 min-h-[120px]"
                  />
                </div>
                
                <HeroButton type="submit" className="w-full">
                  📧 Enviar Mensagem
                </HeroButton>
                
                <p className="text-sm text-muted-foreground text-center">
                  * Campos obrigatórios. Responderemos em até 2 horas.
                </p>
              </form>
            </CardContent>
          </Card>
          
          {/* Contact Info */}
          <div className="space-y-8">
            <Card className="shadow-brand">
              <CardContent className="p-8">
                <div className="flex items-start gap-4">
                  <Phone className="w-8 h-8 text-primary flex-shrink-0 mt-1" />
                  <div>
                    <h3 className="font-bold text-lg mb-2">Telefone / WhatsApp</h3>
                    <p className="text-muted-foreground mb-2">
                      Fale conosco diretamente via telefone ou WhatsApp
                    </p>
                    <p className="font-semibold text-primary text-lg">
                      (11) 99999-9999
                    </p>
                  </div>
                </div>
              </CardContent>
            </Card>
            
            <Card className="shadow-brand">
              <CardContent className="p-8">
                <div className="flex items-start gap-4">
                  <Mail className="w-8 h-8 text-primary flex-shrink-0 mt-1" />
                  <div>
                    <h3 className="font-bold text-lg mb-2">E-mail</h3>
                    <p className="text-muted-foreground mb-2">
                      Envie sua dúvida por e-mail
                    </p>
                    <p className="font-semibold text-primary text-lg">
                      contato@reparacaoinjetora.com.br
                    </p>
                  </div>
                </div>
              </CardContent>
            </Card>
            
            <Card className="shadow-brand">
              <CardContent className="p-8">
                <div className="flex items-start gap-4">
                  <Clock className="w-8 h-8 text-primary flex-shrink-0 mt-1" />
                  <div>
                    <h3 className="font-bold text-lg mb-2">Horário de Atendimento</h3>
                    <div className="space-y-1 text-muted-foreground">
                      <p>Segunda a Sexta: 8h às 18h</p>
                      <p>Sábado: 8h às 12h</p>
                      <p>Domingo: Fechado</p>
                    </div>
                    <p className="text-sm text-primary mt-2 font-semibold">
                      ⚡ Resposta rápida via WhatsApp
                    </p>
                  </div>
                </div>
              </CardContent>
            </Card>
            
            <Card className="shadow-brand">
              <CardContent className="p-8">
                <div className="flex items-start gap-4">
                  <MapPin className="w-8 h-8 text-primary flex-shrink-0 mt-1" />
                  <div>
                    <h3 className="font-bold text-lg mb-2">Localização</h3>
                    <p className="text-muted-foreground">
                      Atendemos todo o Brasil através de nosso curso online. 
                      Suporte técnico disponível em todo território nacional.
                    </p>
                  </div>
                </div>
              </CardContent>
            </Card>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContactSection;