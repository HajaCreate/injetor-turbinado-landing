import HeroSection from "@/components/sections/HeroSection";
import VSLSection from "@/components/sections/VSLSection";
import BenefitsSection from "@/components/sections/BenefitsSection";
import UnitsSection from "@/components/sections/UnitsSection";
import PlansSection from "@/components/sections/PlansSection";
import TestimonialsSection from "@/components/sections/TestimonialsSection";
import CTASection from "@/components/sections/CTASection";
import Footer from "@/components/sections/Footer";

const Index = () => {
  return (
    <div className="min-h-screen">
      <HeroSection />
      <VSLSection />
      <BenefitsSection />
      <UnitsSection />
      <PlansSection />
      <TestimonialsSection />
      <CTASection />
      <Footer />
    </div>
  );
};

export default Index;