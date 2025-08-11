const VSLSection = () => {
  return (
    <section className="py-16 md:py-24 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto text-center">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
            Descubra Como <span className="text-primary">Transformar Sua Carreira</span>
          </h2>
          <p className="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">
            Assista ao vídeo exclusivo e veja como centenas de mecânicos mudaram suas vidas 
            dominando a reparação de unidades injetoras
          </p>
          
          <div className="relative w-full max-w-3xl mx-auto aspect-video bg-black rounded-lg overflow-hidden shadow-2xl">
            <iframe
              src="https://www.youtube.com/embed/M3LlqfZUiyI"
              title="VSL - Reparação de Unidade Injetora"
              className="w-full h-full"
              frameBorder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowFullScreen
            />
          </div>
          
          <div className="mt-8 text-center">
            <p className="text-sm text-muted-foreground mb-4">
              ⏱️ <strong>Apenas 15 minutos</strong> que podem mudar sua carreira para sempre
            </p>
            <div className="flex justify-center items-center gap-4 text-sm text-muted-foreground">
              <div className="flex items-center gap-2">
                <div className="w-2 h-2 bg-primary rounded-full"></div>
                <span>Conteúdo Exclusivo</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="w-2 h-2 bg-primary rounded-full"></div>
                <span>Sem Compromisso</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="w-2 h-2 bg-primary rounded-full"></div>
                <span>100% Gratuito</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default VSLSection;