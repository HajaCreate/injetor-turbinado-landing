import { Button } from "@/components/ui/button";
import { cn } from "@/lib/utils";
import { forwardRef } from "react";

interface HeroButtonProps extends React.ButtonHTMLAttributes<HTMLButtonElement> {
  variant?: "primary" | "secondary";
  size?: "default" | "lg";
}

const HeroButton = forwardRef<HTMLButtonElement, HeroButtonProps>(
  ({ className, variant = "primary", size = "lg", ...props }, ref) => {
    return (
      <Button
        ref={ref}
        className={cn(
          "font-bold transition-all duration-300 transform hover:scale-105 shadow-brand hover:shadow-elegant",
          variant === "primary" && "bg-primary text-primary-foreground hover:bg-primary/90",
          variant === "secondary" && "bg-secondary text-secondary-foreground hover:bg-secondary/90",
          size === "lg" && "px-8 py-6 text-lg",
          className
        )}
        {...props}
      />
    );
  }
);

HeroButton.displayName = "HeroButton";

export { HeroButton };