const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);

  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      nav.classList.toggle("show");
    });
  }
};

showMenu('nav-toggle', 'nav-menu');

const navLinks = document.querySelectorAll(".nav__link"),
  nav = document.getElementById("nav-menu");

function linkAction() {
  navMenu.classList.remove("show");
}
navLink.forEach(n => n.addEventListener('click' , linkAction));

const sections = document.querySelectorAll('section[id]')  //seleccionar todos los elementos que tengan un id
window.addEventListener('scroll', scrollActive);

function scrollActive() {
    const scrollY = window.scrollY; //posicion del scroll
    sections.forEach(current => {
        const sectionHeight = current.offsetHeight; //alto de la seccion
        const sectionTop = current.offsetTop -50; //posicion de la seccion
        sectionId = current.getAttribute('id'); //id de la seccion

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('.nav__menu a[href=*#' + sectionId + ']').classList.add('active');
        }else{
            document.querySelector('.nav__menu a[href=*#' + sectionId + ']').classList.remove('active');
        }
    })
}

window.onscroll = () => {
    const nav = document.getElementById('header');
    if (this.scrollY >= 200) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header'); //si se desplaza mas de 200px, se agrega la clase scroll-header

    }
}