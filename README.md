<h1 align="center">
  E.E.S.T. N.º 1 – Refactor 2025
</h1>

<p align="center">
  <em>Modernización del sitio web de la Escuela de Educación Secundaria Técnica N.º 1 “Manuel Belgrano” (Tres de Febrero, AR).</em>
</p>

<p align="center">
  <a href="#características">Características</a> •
  <a href="#estructura">Estructura</a> •
  <a href="	#cambios-principales-vs-legacy">Cambios</a> •
  <a href="#instalación">Instalación</a> •
  <a href="#desarrollo">Flujo de trabajo</a> •
  <a href="#créditos">Créditos</a>
</p>

---

## 📌 Estado del proyecto

| Rama | Descripción |
|------|-------------|
| **`legacy`** | Código original (HTML + CSS plano, sin responsive). |
| **`main`**  | Versión 2025 : HTML5, CSS custom-prop, JS ES6, accesibilidad AA. |
| _feature/*_ | Módulos de trabajo (“historia”, “especialidades”, “contacto”…). |

> **⬆️ Último merge:** `feat/animaciones` → `main` (animaciones finales, WebP, a11y).

---

## ✨ Características

- **Mobile-first + Dark Mode** con persistencia `localStorage`.
- **Optimización de medios**: imágenes `.webp`, `loading="lazy"`, vídeos responsivos.
- **Accesibilidad** AA (WCAG 2.1): uso de `aria-label`, contraste 4.5:1, compatibilidad *prefers-reduced-motion*.
- **Animaciones sutiles**: hero slow-zoom, scroll-reveal, carrusel slide-fade.
- **JS vanilla ES6**: toggle de menú, carrusel autoplay/hover-pause.
- **Estructura modular** (`/public`, `/src`, includes PHP) lista para SSR o static hosting.
- Preparado para **CI/CD** (scripts NPM) y **linters** (Prettier + ESLint).

---

---

## 📝 Cambios principales vs. `legacy`

| Área | Antes (`legacy`) | Ahora (`main`) |
|------|------------------|----------------|
| **Estructura de archivos** | Organizado por carpetas, archivos.php y multiples hojas de estilo. | Estructura similar, pero reduciendo todo a un index.php y styles.css (SPA)|
| **Semántica HTML** | 4-5 `<h1>` por página, div-soup, poca semántica`. | Jerarquía H1-H3 correcta, `header / main / footer`, listas semánticas. |
| **Responsive design** | Maquetación fija `960 px`; se desborda en móvil. | **Mobile-first**, grid / flex, unidades fluidas, `clamp()`. |
| **Navegación** | Barra horizontal que colapsa; sin menu desplegable en dispositivos móviles. | **Menú hamburguesa** con slide-panel + submenú hover en desktop. |
| **Dark Mode** | Tema oscuro existente y funcional | Tema oscuro ligeramente mejorado para el contraste |
| **Imágenes** | `.png` pesados, sin `loading="lazy"`. | `.webp` optimizados (-65 % peso), lazy-loading. |
| **Recursos multimedia** | Vídeos fijos `640×480`. | Contenedores *responsive* (`aspect-ratio`, object-fit). |
| **Performance** | Lighthouse ≈ 40; sin compresión, CSS bloqueante. | Lighthouse ≥ 90; hojas minificadas, recursos diferidos. |
| **Accesibilidad** | Baja accesibilidad, sin `aria-label`, sin `alt`. | WCAG AA contraste 4.5 : 1, `alt`, `aria-label`, motion-reduced. |
| **Interactividad JS** | jQuery 1.x; sin toggle menú. | **Vanilla ES6** (modal nav, carrusel autoplay/hover-pause, Dark Mode, toggle menu hamburguesa). |
| **Animaciones** | Ninguna. | Hero slow-zoom, scroll-reveal, botones lift, carrusel fade-slide. |
| **Optimización** | Sin Gzip/WebP. | WebP, cache-busting, preload de fuentes `Isocpeur`. |
| **Tooling & QA** | Sin formateo ni linters. | Prettier + ESLint, scripts NPM para `dev / build / lint`. |

> **PR final:** _feat/animaciones → main_ (squash-merge de 7 commits).

---


## 📂 Estructura

```text
├─ public/                        # Páginas PHP finales
│  ├─ index.php
│  ├─ historia.php
│  ├─ ciclo-basico.php
│  ├─ informatica.php
│  ├─ programacion.php
│  ├─ mmo.php
│  ├─ contacto.php
│  └─ inscripcion.php
├─ src/
│  ├─ assets/
│  │  ├─ img/         *.webp
│  │  ├─ videos/      *.mp4
│  │  └─ fonts/
│  ├─ styles/
│  │  └─ styles.css
│  ├─ scripts/
│  │  └─ app.js
│  └─ includes/
│     ├─ header.php
│     └─ footer.php
├─ docs/                          # PDFs de inscripción, etc.
├─ legacy/                        # Dump original intacto
└─ README.md
```

## ⚙️ Instalación

```bash
# 1) Clona el repo
git clone https://github.com/<user>/proyecto-web-escuela.git
cd proyecto-web-escuela

# 2) Instala dependencias de desarrollo
npm install          # prettier, eslint, vite/lite-server (opcional)

# 3) Lanza servidor local con recarga
npm run dev
```
---

## 🛠️ Desarrollo

| Script            | Descripción                                                     |
|-------------------|-----------------------------------------------------------------|
| `php -S localhost:8000 -t public` | Sirve el sitio en <http://localhost:8000> (no requiere Node). |
| `npm run dev`     | *(opcional)* Live-reload con **vite / lite-server** si agregás un `package.json`. |
| `npm run lint`    | Linter + Prettier para formatear (solo en entorno dev). |

> **Nota:** los scripts NPM son opcionales; el sitio funciona con PHP puro.  
> Si solo querés verlo, basta el servidor embebido de PHP.

---

## 🤝 Contribuciones

1. **Fork** y creá una rama: `git checkout -b feat/<nombre>`.  
2. Serví el proyecto en local (`php -S …`) y realizá cambios atómicos.  
3. Asegurate de mantener:</br>
   - Accesibilidad AA (contrast checker).  
   - Lighthouse ≥ 90 % performance.  
4. **Pull Request** contra `main`:</br>
   - Título claro + descripción de “qué” y “por qué”.  
   - Screenshots o GIF si afecta UI.  
5. El PR se integra vía **squash-merge** para mantener un historial limpio.

---

## 🎓 Créditos

| Rol / Recurso | Autor / Fuente |
|---------------|----------------|
| Desarrollo web completo | **ValenWebDev** |
| Contenido original | E.E.S.T. N.º 1 “Manuel Belgrano” |
| Iconografía | [FontAwesome 6](https://fontawesome.com/) |

---
