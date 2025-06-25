// Toggle menú móvil
document.getElementById('navToggle')?.addEventListener('click', () => {
    document.getElementById('mainNav')?.classList.toggle('nav--open')
})

// Switch de tema
document.getElementById('themeSwitch')?.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark')
})
