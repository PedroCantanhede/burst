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
              <a href="#home" class="nav__link active-link">
                <i class="uil uil-estate nav__icon"></i> Home
              </a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">
                <i class="uil uil-user nav__icon"></i> Sobre
              </a>
            </li>
            <li class="nav__item">
              <a href="#skills" class="nav__link">
                <i class="uil uil-file-alt nav__icon"></i> Habilidades
              </a>
            </li>
            <li class="nav__item">
              <a href="#services" class="nav__link">
                <i class="uil uil-briefcase-alt nav__icon"></i> Serviços
              </a>
            </li>
            <li class="nav__item">
              <a href="#portfolio" class="nav__link">
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
      <!-- Home -->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__content grid">
            <div class="home__social">
              <a
                href="https://www.facebook.com/"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-facebook-f"></i>
              </a>
              <a
                href="https://www.instagram.com/"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-instagram"></i>
              </a>
              <a
                href="https://br.linkedin.com/"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-linkedin"></i>
              </a>
            </div>

            <div class="home__img">
              <img
                src="./assets/img/vector-home.png"
                alt="Equipe elaborando estratégia de marketing"
              />
            </div>

            <div class="home__data">
              <h1 class="home__title">
                Bem-vindo à <span class="home__span">Burst</span>!
              </h1>
              <h3 class="home__subtitle">Agência de Marketing Inteligente</h3>
              <p class="home__description">
                Buscamos proporcionar experiências humanizadas, gerando
                oportunidades de negócio e impulsionando suas vendas de maneira
                eficaz.
              </p>
              <a href="contact.php" class="button button--flex">
                Solicitar orçamento <i class="uil uil-message button__icon"></i>
              </a>
            </div>
          </div>

          <div class="home__scroll">
            <a href="#about" class="home__scroll-button button--flex">
              <i class="uil uil-mouse-alt home__scroll-mouse"></i>
              <span class="home__scroll-name">Rolar pra baixo</span>
              <i class="uil uil-arrow-down home__scroll-arrow"></i>
            </a>
          </div>
        </div>
      </section>

      <!-- Section About -->
      <section class="about section" id="about">
        <h2 class="section__title">Sobre</h2>
        <span class="section__subtitle">Conheça o dono da Burst</span>

        <div class="about__container container grid">
          <img src="assets/img/about.jpg" alt="" class="about__img" />

          <div class="about__data">
            <p class="about__description">
              Em Novembro de 2018, Pedro Cantanhêde, recém-formado pelo Cefet
              RJ, uniu sua paixão pela programação e expertise em marketing
              digital. Desde então, temos prosperado, oferecendo soluções
              inovadoras e consolidando nossa posição no mercado.
            </p>

            <div class="about__info">
              <div class="">
                <span class="about__info-title">05+</span>
                <span class="about__info-name"
                  >Anos de <br />
                  experiencia</span
                >
              </div>
              <div class="">
                <span class="about__info-title">32+</span>
                <span class="about__info-name"
                  >Projetos <br />
                  concluídos</span
                >
              </div>
              <div class="">
                <span class="about__info-title">12+</span>
                <span class="about__info-name"
                  >Empresas <br />
                  parceiras</span
                >
              </div>
            </div>

            <div class="about__buttons">
              <a
                href="https://www.linkedin.com/in/pedro-cantanhede/"
                target="_blank"
                class="button button--flex"
              >
                Saiba mais <i class="uil uil-search button__icon"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Skills -->
      <section class="skills section" id="skills">
        <h2 class="section__title">Habilidades</h2>
        <span class="section__subtitle">Equipe técnica</span>

        <div class="skills__container container grid">
          <div class="">
            <!-- Marketer -->
            <div class="skills__content skills__close">
              <div class="skills__header">
                <i class="uil uil-chart-line skills__icon"></i>

                <div class="">
                  <h1 class="skills__titles">Marketer</h1>
                  <span class="skills__subtitle">7 funcionários</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Redator/Produtor</h3>
                    <span class="skills__number">3 pessoas</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__php"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Analista SEO</h3>
                    <span class="skills__number">1 pessoas</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__node"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Gerente Trade</h3>
                    <span class="skills__number">1 pessoas</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__firebase"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Especialista em E-commerce</h3>
                    <span class="skills__number">2 pessoas</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__python"></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Desenvolvedor -->
            <div class="skills__content skills__open">
              <div class="skills__header">
                <i class="uil uil-arrow skills__icon"></i>

                <div class="">
                  <h1 class="skills__titles">Desenvolvedor</h1>
                  <span class="skills__subtitle">8 funcionários</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Front-end</h3>
                    <span class="skills__number">3 pessoas</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__html"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Back-end</h3>
                    <span class="skills__number">5 pessoas</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__css"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="">
            <!-- Design -->
            <div class="skills__content skills__close">
              <div class="skills__header">
                <i class="uil uil-swatchbook skills__icon"></i>

                <div class="">
                  <h1 class="skills__titles">Design</h1>
                  <span class="skills__subtitle">8 funcionários</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Design Gráfico Digital</h3>
                    <span class="skills__number">3 pessoas</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__figma"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Design de Produto</h3>
                    <span class="skills__number">2 pessoas</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__sketch"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Design de Animação</h3>
                    <span class="skills__number">3 pessoas</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__photoshop"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Journey -->
      <section class="journey section">
        <h2 class="section__title">Jornada</h2>
        <span class="section__subtitle">Nossos passos até hoje</span>

        <div class="journey__container container">
          <div class="journey__tabs">
            <div
              class="journey__button button--flex journey__active"
              data-target="#company"
            >
              <i class="uil uil-fire journey__icon"></i>
              Companhia
            </div>

            <div
              class="journey__button button--flex"
              data-target="#partnerships"
            >
              <i class="uil uil-briefcase-alt journey__icon"></i>
              Parcerias
            </div>
          </div>

          <div class="journey__sections">
            <!-- Journey Content 1 -->
            <div
              class="journey__content journey__active"
              data-content
              id="company"
            >
              <!-- Journey 1 -->
              <div class="journey__data">
                <div class="">
                  <h3 class="journey__title">Início da Burst</h3>
                  <span class="journey__subtitle">Registro da empresa</span>
                  <div class="journey__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2018
                  </div>
                </div>

                <div class="">
                  <span class="journey__rounder"></span>
                  <span class="journey__line"></span>
                </div>
              </div>

              <!-- Journey 2 -->
              <div class="journey__data">
                <div class=""></div>

                <div class="">
                  <span class="journey__rounder"></span>
                  <span class="journey__line"></span>
                </div>

                <div class="">
                  <h3 class="journey__title">Equipes Implementadas</h3>
                  <span class="journey__subtitle"
                    >Marketer, design e desenvolvedor</span
                  >
                  <div class="journey__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2020
                  </div>
                </div>
              </div>

              <!-- Journey 3 -->
              <div class="journey__data">
                <div class="">
                  <h3 class="journey__title">Prêmio de Conquista</h3>
                  <span class="journey__subtitle"
                    >GPTW - Melhores Empresas para trabalhar</span
                  >
                  <div class="journey__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2022
                  </div>
                </div>

                <div class="">
                  <span class="journey__rounder"></span>
                  <span class="journey__line"></span>
                </div>
              </div>

              <!-- Journey 4 -->
              <div class="journey__data">
                <div class=""></div>

                <div class="">
                  <span class="journey__rounder"></span>
                </div>

                <div class="">
                  <h3 class="journey__title">Atualmente</h3>
                  <span class="journey__subtitle">Somos +23 funcionários</span>
                  <div class="journey__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2023
                  </div>
                </div>
              </div>
            </div>

            <!-- Journey Content 2 -->
            <div class="journey__content" data-content id="partnerships">
              <!-- Journey 1 -->
              <div class="journey__data">
                <div class="">
                  <h3 class="journey__title">Primeira Parceria</h3>
                  <span class="journey__subtitle"
                    >Conseguimos apoio da Rocketseat</span
                  >
                  <div class="journey__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2019
                  </div>
                </div>

                <div class="">
                  <span class="journey__rounder"></span>
                  <span class="journey__line"></span>
                </div>
              </div>

              <!-- Journey 2 -->
              <div class="journey__data">
                <div class=""></div>

                <div class="">
                  <span class="journey__rounder"></span>
                  <span class="journey__line"></span>
                </div>

                <div class="">
                  <h3 class="journey__title">Recebemos Investimento</h3>
                  <span class="journey__subtitle"
                    >GitHub, P2W e Spotify se tornaram patrocinadores</span
                  >
                  <div class="journey__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2021
                  </div>
                </div>
              </div>

              <!-- Journey 3 -->
              <div class="journey__data">
                <div class="">
                  <h3 class="journey__title">Fidelizamos Parceiros</h3>
                  <span class="journey__subtitle"
                    >Globo, Alura, Stone, Icatu, Rocketseat, GitHub, P2W,
                    Spotify e Twitch são nossas parcerias atualmente.
                  </span>
                  <div class="journey__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2023
                  </div>
                </div>

                <div class="">
                  <span class="journey__rounder"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Services -->
      <section class="services section" id="services">
        <h2 class="section__title">Serviços</h2>
        <span class="section__subtitle">O que oferecemos</span>

        <div class="services__container container grid">
          <!-- Services 1 -->
          <div class="services__content">
            <div>
              <i class="uil uil-lightbulb-alt services__icon"></i>
              <h3 class="services__title">
                Marketing <br />
                Digital
              </h3>
            </div>
            <span
              class="button button--flex button--small button--link services__button"
            >
              Ver mais
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Marketing <br />
                  Digital
                </h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Realizamos análise de cenário.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Elaboramos planejamento estratégico.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Estratégia de benchmarking.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Mensurar resultados.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Services 2 -->
          <div class="services__content">
            <div>
              <i class="uil uil-icons services__icon"></i>
              <h3 class="services__title">
                Identidade <br />
                Visual
              </h3>
            </div>
            <span
              class="button button--flex button--small button--link services__button"
            >
              Ver mais
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Identidade <br />
                  Visual
                </h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Sintetização do conceito e personalidade.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Elementos a compor sua marca.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Originalidade para sua marca.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Foco na primeira impressão do cliente.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Services 3 -->
          <div class="services__content">
            <div>
              <i class="uil uil-pen services__icon"></i>
              <h3 class="services__title">
                Marca & <br />
                Design
              </h3>
            </div>
            <span
              class="button button--flex button--small button--link services__button"
            >
              Ver mais
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Marca & <br />
                  Design
                </h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Parte estética da marca.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Apoio nos elementos visuais.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Criação do logotipo, das cores e das tipografias.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Criação de materais com fotos e vídeos.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Services 4 -->
          <div class="services__content">
            <div>
              <i class="uil uil-user-square services__icon"></i>
              <h3 class="services__title">
                Mídias <br />
                Sociais
              </h3>
            </div>
            <span
              class="button button--flex button--small button--link services__button"
            >
              Ver mais
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Mídias <br />
                  Sociais
                </h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Gestão das redes sociais.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Processo de potencialização de consumidores.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Presença digital em todas as redes.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Social Awareness nas postagens.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Services 5 -->
          <div class="services__content">
            <div>
              <i class="uil uil-brackets-curly services__icon"></i>
              <h3 class="services__title">
                Criação <br />
                de Site
              </h3>
            </div>
            <span
              class="button button--flex button--small button--link services__button"
            >
              Ver mais
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Criação <br />
                  de Site
                </h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Desenvolvimento de site para a companhia.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Criação de plataforma e-commerce.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Hotsites, landing pages e blogs para campanhas.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>
                      Design responsivo, compatível com dispositivos móveis.
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Services 6 -->
          <div class="services__content">
            <div>
              <i class="uil uil-wrench services__icon"></i>
              <h3 class="services__title">
                Técnica <br />
                SEO
              </h3>
            </div>
            <span
              class="button button--flex button--small button--link services__button"
            >
              Ver mais
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Técnica <br />
                  SEO
                </h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Search Engine Optimization – SEO.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Aumento nos resultados orgânicos dos buscadores.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Melhores práticas para otimização do site.</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Aumentar o número de visitas ao site</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Portfolio -->
      <section class="portfolio section" id="portfolio">
        <h2 class="section__title">Projetos</h2>
        <span class="section__subtitle">Trabalhos mais recentes</span>

        <div class="portfolio__container container swiper-container">
          <div class="swiper-wrapper">
            <!-- Portfolio 1 -->
            <div class="portfolio__content grid swiper-slide">
              <img
                src="assets/img/portfolio1.jpg"
                alt=""
                class="portfolio__img"
              />

              <div class="portfolio__data">
                <h3 class="portfolio__title">Plataforma de Evento</h3>
                <p class="portfolio__description">
                  Aplicação de plataforma de evento onde o usuário pode se
                  inscrever e acessar as aulas.
                </p>
                <a
                  href="https://event-platform-sigma-olive.vercel.app/"
                  target="_blank"
                  class="button button--flex button--small portfolio__button"
                >
                  Demo
                  <i class="uil uil-arrow-right button__icon"></i>
                </a>
              </div>
            </div>

            <!-- Portfolio 2 -->
            <div class="portfolio__content grid swiper-slide">
              <img
                src="assets/img/portfolio2.jpg"
                alt=""
                class="portfolio__img"
              />

              <div class="portfolio__data">
                <h3 class="portfolio__title">Lofi - Beats</h3>
                <p class="portfolio__description">
                  Player de música desenvolvido para escutar seu Lo-Fi.
                </p>
                <a
                  href="https://lofi-player-music.netlify.app/"
                  target="_blank"
                  class="button button--flex button--small portfolio__button"
                >
                  Demo
                  <i class="uil uil-arrow-right button__icon"></i>
                </a>
              </div>
            </div>

            <!-- Portfolio 3 -->
            <div class="portfolio__content grid swiper-slide">
              <img
                src="assets/img/portfolio3.jpg"
                alt=""
                class="portfolio__img"
              />

              <div class="portfolio__data">
                <h3 class="portfolio__title">COVID-19</h3>
                <p class="portfolio__description">
                  Site informativo sobre todos os cuidados necessários com a
                  COVID-19
                </p>
                <a
                  href="https://infos-covid19.netlify.app/"
                  target="_blank"
                  class="button button--flex button--small portfolio__button"
                >
                  Demo
                  <i class="uil uil-arrow-right button__icon"></i>
                </a>
              </div>
            </div>

            <!-- Portfolio 4 -->
            <div class="portfolio__content grid swiper-slide">
              <img
                src="assets/img/portfolio4.jpg"
                alt=""
                class="portfolio__img"
              />

              <div class="portfolio__data">
                <h3 class="portfolio__title">Churrascômetro</h3>
                <p class="portfolio__description">
                  Sistema que calcula a quantidade necessária de comida e bebida
                  para um churrasco.
                </p>
                <a
                  href="https://churrascometro-app.netlify.app/"
                  target="_blank"
                  class="button button--flex button--small portfolio__button"
                >
                  Demo
                  <i class="uil uil-arrow-right button__icon"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Add Arrows -->
          <div class="swiper-button-next">
            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
          </div>

          <div class="swiper-button-prev">
            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
          </div>

          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <!-- Section Project -->
      <section class="project section">
        <div class="project__bg">
          <div class="project__container container grid">
            <div class="project__data">
              <h2 class="project__title">
                Já é <span class="project__span">cliente</span>? Faça login e
                pegue seu desconto.
              </h2>
              <p class="project__description">
                Solicite seu orçamento tendo feito login e receba
                <span class="project__span">15% de desconto</span>.
              </p>
              <a
                href="./php/login.php"
                class="button button--flex button--white"
              >
                Logar
                <i class="uil uil-message project__icon button__icon"></i>
              </a>
            </div>

            <img src="assets/img/project.png" alt="" class="project__img" />
          </div>
        </div>
      </section>

      <!-- Testimonial -->
      <section class="testimonial section">
        <h2 class="section__title">Clientes</h2>
        <span class="section__subtitle">Depoimentos recentes</span>

        <div class="testimonial__container container swiper-container">
          <div class="swiper-wrapper">
            <!-- Testimonial 1 -->
            <div class="testimonial__content swiper-slide">
              <div class="testimonial__data">
                <div class="testimonial__header">
                  <img
                    src="assets/img/testimonial1.jpg"
                    alt=""
                    class="testimonial__img"
                  />

                  <div>
                    <h3 class="testimonial__name">FunkyBlackCat</h3>
                    <span class="testimonial__client">Cliente</span>
                  </div>
                </div>
                <div>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                </div>
              </div>

              <p class="testimonial__description">
                Estou extremamente satisfeito com o serviço entregue. Qualidade
                excepcional, atenção impecável e resultados além das
                expectativas. Recomendo sem hesitação!
              </p>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial__content swiper-slide">
              <div class="testimonial__data">
                <div class="testimonial__header">
                  <img
                    src="assets/img/testimonial2.jpg"
                    alt=""
                    class="testimonial__img"
                  />

                  <div>
                    <h3 class="testimonial__name">Danyel Sena</h3>
                    <span class="testimonial__client">Cliente</span>
                  </div>
                </div>
                <div>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                </div>
              </div>

              <p class="testimonial__description">
                Mídiaaa! Não poderia estar mais satisfeito com a criação da
                minha marca. Recebi todo suporte da Burst em todo processo.
                Recomendo esses caras!
              </p>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial__content swiper-slide">
              <div class="testimonial__data">
                <div class="testimonial__header">
                  <img
                    src="assets/img/testimonial3.jpg"
                    alt=""
                    class="testimonial__img"
                  />

                  <div>
                    <h3 class="testimonial__name">Yullinha</h3>
                    <span class="testimonial__client">Cliente</span>
                  </div>
                </div>
                <div>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                </div>
              </div>

              <p class="testimonial__description">
                Agradeço de coração todo apoio oferecido pela Burst! Desde a
                construção da minha marca até o desenvolvimento do site com
                perfeição.
              </p>
            </div>
          </div>

          <!--Add pagination-->
          <div class="swiper-pagination swiper-pagination-testimonial"></div>
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
              <a href="#services" class="footer__link">Serviços</a>
            </li>
            <li>
              <a href="#portfolio" class="footer__link">Projetos</a>
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
  </body>
</html>
