/* =========================================================
    utilidades DOM
   ========================================================= */
const $    = s => document.querySelector(s);
const $$   = s => document.querySelectorAll(s);
const on   = (el, ev, fn) => el && el.addEventListener(ev, fn);
const cls  = (el, c, t = false) => el?.classList[t ? 'toggle' : 'add'](c);

/* =========================================================
    1. Toggle menú móvil
   ========================================================= */
on($('#navToggle'), 'click', () => cls($('#mainNav'), 'nav--open', true));

/* =========================================================
    2. Tema claro / oscuro con localStorage
   ========================================================= */
const THEME_KEY = 'eestn1-theme';
const root      = document.documentElement;
const saved     = localStorage.getItem(THEME_KEY);       // 'light' | 'dark' | null

if (saved) root.classList.toggle('dark', saved === 'dark');

on($('#themeSwitch'), 'click', () => {
    const dark = root.classList.toggle('dark');
    localStorage.setItem(THEME_KEY, dark ? 'dark' : 'light');
});

/* =========================================================
    3. Carrusel de especialidades
   ========================================================= */
const slides   = $$('.js-carousel .specialties__slide');
const prevBtn  = $('.js-prev');
const nextBtn  = $('.js-next');

let index = 0;
let auto  = null;
const INTERVAL = 5000;   // ms

const show = i => {
    slides[index]?.classList.remove('is-active');
    index = (i + slides.length) % slides.length;
    slides[index].classList.add('is-active');
};

const startAuto = () => auto = setInterval(() => show(index + 1), INTERVAL);
const stopAuto  = () => clearInterval(auto);

on(prevBtn, 'click', () => show(index - 1));
on(nextBtn, 'click', () => show(index + 1));

slides.forEach(slide => {
  on(slide, 'mouseenter', stopAuto);   // pausa al poner el mouse
  on(slide, 'mouseleave', startAuto);  // reanuda al salir
});

if (slides.length) startAuto();

/* =========================================================
    Fin de app.js
   ========================================================= */
