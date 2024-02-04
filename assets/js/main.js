/* --------------------------------- Menu Show Y Hidden ---------------------------------*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle')
      navClose = document.getElementById('nav-close')

/* ----- Menu Show ----- */
/* Valida se existe constante */
if(navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}

/* ----- Menu Hidden ----- */
/* Valida se existe constante */
if(navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

/* --------------------------------- Remove Menu Mobilee ---------------------------------*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // Quando clicamos em cada nav__link, removemos a classe show-menu
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/* --------------------------------- Accordion Skills ---------------------------------*/

const skillsContent = document.getElementsByClassName('skills__content'),
      skillsHeader = document.querySelectorAll('.skills__header')

function toggleSkills() {
    let itemClass = this.parentNode.className

    for(i = 0; i < skillsContent.length; i++) {
        skillsContent[i].className = 'skills__content skills__close'
    }
    if(itemClass === 'skills__content skills__close') {
        this.parentNode.className = 'skills__content skills__open'
    }
}

skillsHeader.forEach((el) => {
    el.addEventListener('click', toggleSkills)
})

/* --------------------------------- Qualification Tabs ---------------------------------*/

const tabs = document.querySelectorAll('[data-target]'),
      tabContents = document.querySelectorAll('[data-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.target)

    tabContents.forEach(tabContent => {
      tabContent.classList.remove('journey__active')
    })
    target.classList.add('journey__active')

    tabs.forEach(tab => {
      tab.classList.remove('journey__active')
    })
    tab.classList.add('journey__active')
  })
})

/* --------------------------------- Services Modal ---------------------------------*/

const modalViews = document.querySelectorAll('.services__modal'),
      modalBtns = document.querySelectorAll('.services__button'),
      modalCloses = document.querySelectorAll('.services__modal-close')

let modal = function(modalClick) {
    modalViews[modalClick].classList.add('active-modal')
}

modalBtns.forEach((modalBtn, i) => {
  modalBtn.addEventListener('click', () => {
    modal(i)
  })
})

modalCloses.forEach((modalClose) => {
  modalClose.addEventListener('click', () => {
    modalViews.forEach((modalView) => {
      modalView.classList.remove('active-modal')
    })
  })
})

/* --------------------------------- Portfolio Swiper  ---------------------------------*/

let swiperPortfolio = new Swiper('.portfolio__container', {
  cssMode: true,
  loop: true,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  /* mousewheel: true,
  keyboard: true, */
});

/* --------------------------------- Testimonial ---------------------------------*/

let swiperTestimonial = new Swiper('.testimonial__container', {

  loop: true,
  grabCursor: true,
  spaceBetween: 48,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  breakpoints: {
    568: {
      slidesPerView: 2
    }
  }

  /* mousewheel: true,
  keyboard: true, */
});


/* --------------------------------- Scroll Sections Active Link ---------------------------------*/

const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)


/* --------------------------------- Change Background Header ---------------------------------*/

function scrollHeader(){
  const nav = document.getElementById('header')
  // Quando a rolagem for maior que 200 de altura da janela de visualização, adicione a classe scroll-header 
  if(this.scrollY >= 80) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)


/* --------------------------------- Show Scroll Up ---------------------------------*/ 

function scrollUp(){
  const scrollUp = document.getElementById('scroll-up');
  // Quando a rolagem for superior a 560 de altura da janela de visualização, adicione a classe show-scroll à tag a com a classe scroll-top
  if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

document.addEventListener('DOMContentLoaded', function() {
  // Obtém o caminho da URL da página atual
  var path = window.location.pathname;

  // Obtém o nome do arquivo da URL
  var page = path.split('/').pop();

  // Remove a classe 'active-link' de todos os links do menu
  document.querySelectorAll('.nav__link').forEach(function(link) {
    link.classList.remove('active-link');
  });

  // Verifica se o nome do arquivo corresponde a 'contact.php'
  if (page === 'contact.php') {
    // Se sim, adiciona a classe 'active-link' ao link de Contato
    document.querySelector('.nav__link[href="contact.php"]').classList.add('active-link');
  } else {
    // Caso contrário, adiciona a classe 'active-link' ao link de Home (ou a página atual)
    document.querySelector('.nav__link[href="#' + page.replace('.php', '') + '"]').classList.add('active-link');
  }
});