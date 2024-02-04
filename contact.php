<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- IconScout -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <title>Burst</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">
          <i class="uil uil-fire icon__logo"></i>
          Burst
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav__item">
              <a href="index.php#home" class="nav__link active-link">
                <i class="uil uil-estate nav__icon"></i> Home
              </a>
            </li>
            <li class="nav__item">
              <a href="index.php#about" class="nav__link">
                <i class="uil uil-user nav__icon"></i> Sobre
              </a>
            </li>
            <li class="nav__item">
              <a href="index.php#skills" class="nav__link">
                <i class="uil uil-file-alt nav__icon"></i> Habilidades
              </a>
            </li>
            <li class="nav__item">
              <a href="index.php#services" class="nav__link">
                <i class="uil uil-briefcase-alt nav__icon"></i> Serviços
              </a>
            </li>
            <li class="nav__item">
              <a href="index.php#portfolio" class="nav__link">
                <i class="uil uil-scenery nav__icon"></i> Projetos
              </a>
            </li>
            <li class="nav__item">
              <a href="contact.php" class="nav__link">
                <i class="uil uil-message nav__icon"></i> Contato
              </a>
            </li>
            <li class="nav__item">
              <a href="./php/login.php" class="nav__link">
                <i class="uil uil-signout login__icon"></i>
                <span id="loginText" class="nav__text">Deslogar</span>
              </a>
            </li>
          </ul>
          <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <div class="nav_btns">
          <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-apps"></i>
          </div>
        </div>
      </nav>
    </header>

    <!-- Main -->
    <main class="main">
      <!-- Section Contact -->
      <section class="contact section" id="contact">
        <h2 class="section__title">Contato</h2>
        <span class="section__subtitle">Solicite um orçamento!</span>

        <div class="contact__container container grid">
          <div>
            <div class="contact__information">
              <i class="uil uil-phone-alt contact__icon"></i>

              <div>
                <h3 class="contact__title">Telefone</h3>
                <span class="contatc__subtitle">(21) 99324-9645</span>
              </div>
            </div>

            <div class="contact__information">
              <i class="uil uil-envelope contact__icon"></i>

              <div>
                <h3 class="contact__title">E-mail</h3>
                <span class="contatc__subtitle">burst@hotmail.com</span>
              </div>
            </div>

            <div class="contact__information">
              <i class="uil uil-map-marker contact__icon"></i>

              <div>
                <h3 class="contact__title">Localização</h3>
                <span class="contatc__subtitle">Rio de Janeiro, RJ</span>
              </div>
            </div>
          </div>

          <form
            action=""
            method="POST"
            class="contact__form grid"
            id="contactForm"
            onsubmit="return handleFormSubmit(event)"
          >
            <div class="contact__inputs grid">
              <div class="contact__content">
                <label for="" class="contact__label">Nome</label>
                <input type="text" name="nome" class="contact__input" />
              </div>

              <div class="contact__content">
                <label for="" class="contact__label">E-mail</label>
                <input type="email" name="email" class="contact__input" />
              </div>
            </div>

            <div class="contact__content">
              <label for="" class="contact__label">Projeto</label>
              <input type="text" name="projeto" class="contact__input" />
            </div>

            <div class="contact__content">
              <label for="" class="contact__label">Mensagem</label>
              <textarea
                name="mensagem"
                id=""
                cols="0"
                rows="7"
                class="contact__input"
              ></textarea>
            </div>

            <div>
            <a href="#" class="button button--flex" id="submitButton">
              Solicitar orçamento
              <i class="uil uil-message button__icon"></i>
            </a>
            </div>

            <input type="hidden" name="_subject" value="Novo Orçamento!">
            <input type="hidden" name="_next" value="">
            <input type="text" name="_honey" style="display:none">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_template" value="table">
          </form>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer__bg">
        <div class="footer__container container grid">
          <div>
            <h1 class="footer__title">
              <i class="uil uil-fire"></i>
              Burst
            </h1>
            <span class="footer__subtitle">Agência de Marketing</span>
          </div>

          <ul class="footer__links">
            <li>
              <a href="index.php#services" class="footer__link">Serviços</a>
            </li>
            <li>
              <a href="index.php#portfolio" class="footer__link">Projetos</a>
            </li>
            <li>
              <a href="contact.php" class="footer__link">Contato</a>
            </li>
          </ul>

          <div class="footer__socials">
            <a
              href="http://facebook.com"
              target="_blank"
              class="footer__social"
            >
              <i class="uil uil-facebook"></i>
            </a>
            <a
              href="http://instagram.com"
              target="_blank"
              class="footer__social"
            >
              <i class="uil uil-instagram"></i>
            </a>
            <a
              href="https://br.linkedin.com/"
              target="_blank"
              class="footer__social"
            >
              <i class="uil uil-linkedin"></i>
            </a>
          </div>
        </div>

        <p class="footer__copy">
          &#169; Todos os direitos reservados à Pedro Cantanhêde
        </p>
      </div>
    </footer>

    <!-- Scroll to Top -->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!-- Swiper -->
    <script src="./assets/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="./assets/js/main.js"></script>

    <script>
      document.getElementById('submitButton').addEventListener('click', function (event) {
        
        event.preventDefault();

        alert("E-mail enviado com sucesso!");

        fetch('https://formsubmit.co/pedrohc.cantanhede@gmail.com', {
            method: 'POST',
            body: new FormData(document.getElementById('contactForm')),
        })
        .then(response => {
            console.log(response);
        })
        .catch(error => {
            console.error(error);
        });
      });
  </script>
  </body>
</html>
