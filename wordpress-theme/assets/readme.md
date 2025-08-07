# Pasta Assets do Tema

Esta pasta contém todos os assets (recursos) do tema WordPress:

## Estrutura:

### `/css/`
- `theme-custom.css` - Estilos adicionais específicos do tema

### `/js/`
- `theme.js` - JavaScript principal do tema com funcionalidades interativas

### `/images/`
- `hero-image.jpg` - Imagem principal do hero
- `/units/` - Imagens das unidades injetoras
- `/icons/` - Ícones utilizados no tema

## Copiando Assets do Site Lovable

Para utilizar as imagens do site Lovable criado, copie os seguintes arquivos:

### Do diretório `src/assets/` para `wordpress-theme/assets/images/`:
- `hero-image.jpg`
- `units/cat-3126.jpg`
- `units/cat-c15-c18.jpg`
- `units/cat-c7-c9.jpg`
- `units/daf.jpg`
- `units/iveco-ui.jpg`
- `units/mercedes-up.jpg`
- `units/scania-ui.jpg`
- `units/volvo-d12-ac.jpg`
- `units/volvo-d12-d.jpg`
- `units/volvo-d13.jpg`

### Como copiar:

1. **Via terminal/comando:**
```bash
cp -r src/assets/* wordpress-theme/assets/images/
```

2. **Via interface gráfica:**
- Navegue até a pasta `src/assets/`
- Selecione todos os arquivos
- Copie para `wordpress-theme/assets/images/`

3. **Via FTP (se for para servidor):**
- Faça upload de todos os arquivos da pasta `src/assets/` para `/wordpress-theme/assets/images/` no servidor

## Estrutura Final Esperada:

```
wordpress-theme/assets/
├── css/
│   └── theme-custom.css
├── js/
│   └── theme.js
├── images/
│   ├── hero-image.jpg
│   └── units/
│       ├── cat-3126.jpg
│       ├── cat-c15-c18.jpg
│       ├── cat-c7-c9.jpg
│       ├── daf.jpg
│       ├── iveco-ui.jpg
│       ├── mercedes-up.jpg
│       ├── scania-ui.jpg
│       ├── volvo-d12-ac.jpg
│       ├── volvo-d12-d.jpg
│       └── volvo-d13.jpg
└── readme.md
```

## Otimização de Imagens

Para melhor performance, recomenda-se:

1. **Comprimir imagens:**
   - Use ferramentas como TinyPNG ou ImageOptim
   - Hero image: máximo 1920x1080px, qualidade 80%
   - Unit images: máximo 800x600px, qualidade 75%

2. **Formatos modernos:**
   - Considere converter para WebP para navegadores compatíveis
   - Mantenha JPEG como fallback

3. **Responsive images:**
   - Crie versões em diferentes tamanhos
   - Use `srcset` no HTML para imagens responsivas