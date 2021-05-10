const btn = document.querySelector('.p-nav-title');
const nav = document.querySelector('aside');
 
btn.addEventListener('click', () => {
  nav.classList.toggle('open-menu')
});