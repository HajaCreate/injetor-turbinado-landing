import { Separator } from "@/components/ui/separator";

const Footer = () => {
  return (
    <footer className="bg-gradient-hero text-white py-16">
      <div className="container mx-auto px-4">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
          {/* Brand */}
          <div className="md:col-span-2">
            <h3 className="text-2xl font-bold text-primary mb-4">
              Reparação de Unidade Injetora
            </h3>
            <p className="text-gray-300 mb-6 leading-relaxed">
              O curso mais completo do mercado para formação de especialistas 
              em reparação de unidades injetoras. Transforme sua carreira e 
              multiplique sua renda com conhecimento de qualidade.
            </p>
            <div className="flex gap-4">
              <a 
                href="https://wa.me/5511999999999" 
                target="_blank"
                rel="noopener noreferrer"
                className="bg-primary text-primary-foreground px-4 py-2 rounded-lg hover:bg-primary/90 transition-colors"
              >
                WhatsApp
              </a>
              <a 
                href="tel:+5511999999999"
                className="bg-secondary text-secondary-foreground px-4 py-2 rounded-lg hover:bg-secondary/90 transition-colors"
              >
                Telefone
              </a>
            </div>
          </div>
          
          {/* Quick Links */}
          <div>
            <h4 className="font-bold text-lg mb-4">Links Rápidos</h4>
            <ul className="space-y-2 text-gray-300">
              <li>
                <a href="#benefits" className="hover:text-primary transition-colors">
                  Benefícios
                </a>
              </li>
              <li>
                <a href="#plans" className="hover:text-primary transition-colors">
                  Planos
                </a>
              </li>
              <li>
                <a href="#contact" className="hover:text-primary transition-colors">
                  Contato
                </a>
              </li>
              <li>
                <a href="#" className="hover:text-primary transition-colors">
                  Depoimentos
                </a>
              </li>
            </ul>
          </div>
          
          {/* Contact Info */}
          <div>
            <h4 className="font-bold text-lg mb-4">Contato</h4>
            <ul className="space-y-2 text-gray-300">
              <li>📱 (11) 99999-9999</li>
              <li>📧 contato@reparacaoinjetora.com.br</li>
              <li>🕒 Seg-Sex: 8h às 18h</li>
              <li>🕒 Sáb: 8h às 12h</li>
            </ul>
          </div>
        </div>
        
        <Separator className="bg-white/20 mb-8" />
        
        <div className="flex flex-col md:flex-row justify-between items-center gap-4">
          <div className="text-gray-300 text-sm">
            © 2024 Reparação de Unidade Injetora. Todos os direitos reservados.
          </div>
          
          <div className="flex gap-6 text-sm text-gray-300">
            <a href="#" className="hover:text-primary transition-colors">
              Política de Privacidade
            </a>
            <a href="#" className="hover:text-primary transition-colors">
              Termos de Uso
            </a>
            <a href="#" className="hover:text-primary transition-colors">
              FAQ
            </a>
          </div>
        </div>
        
        <div className="text-center mt-8 text-gray-400 text-sm">
          <p>🔒 Site seguro - Seus dados estão protegidos</p>
          <p className="mt-2">✅ Empresa registrada e licenciada para atividades educacionais</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;