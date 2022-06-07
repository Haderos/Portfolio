
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mili Pernia Gonzalez | Front-End Developer</title>
    <link rel="icon" type="image/jpg" href="/images/icon-2.PNG" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap"
            rel="stylesheet"
    />
    <script
            src="https://kit.fontawesome.com/af5476175e.js"
            crossorigin="anonymous"
    ></script>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
            crossorigin="anonymous"
    />
</head>
<body class="card-footer">
<!--Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-color">
    <div class="container-fluid nav-font pt-1">
        <div
                class="col-2 d-none d-sm-none d-md-none d-lg-none d-xl-block"
        ></div>
        <div
                class="col-1 d-none d-sm-nonce d-md-none d-lg-block d-xl-none"
        ></div>
        <a class="navbar-brand col-2 nav-name" href="#main">
            Mili Pernia Gonzalez</a
        >
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
          <span
                  class="navbar-toggler-icon position-relative justify-content-sm-end"
          ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item services">
                    <a class="nav-link active" aria-current="page" href="#services"
                    >Services</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#project">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#about">About me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#contact">Contact</a>
                </li>
                <li class="nav-item work-link d-none d-lg-block">
                    <a class="nav-link work-link-color" href="/contact.html"
                    >Work request <i class="fas fa-chevron-right ps-1"></i
                        ></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Background container-->
<div class="container-fluid background-main" id="main">
    <!--Main image-->
    <div class="container">
        <div class="row icon-margin">
            <div class="col" align="center">
                <img
                        class="img-fluid icon mt-5"
                        src="/images/icon-1.png"
                        alt="Image of Mili Pernia Gonzalez"
                />
            </div>
        </div>
    </div>

    <!--Name-->
    <div class="container position-relative move-name d-none d-lg-block">
        <div class="row row-cols-auto">
            <div class="col-1 d-md-block d-none d-lg-none"></div>
            <div class="col-sm-2 d-lg-block d-md-none"></div>
            <div class="row name-card">
                <div class="col-sm-1 col-sm-4">
                    <h3 class="pt-4 d-none d-lg-block hand">👋</h3>
                    <h3 class="pt-1 d-sm-none hand">👋</h3>
                </div>
                <div class="col-sm-1 col-sm-6 p-2">
                    Hi! I am <span class="name">Mili</span>
                </div>
            </div>
        </div>
    </div>

    <!--UI designer-->
    <div class="container position-relative d-none d-lg-block ui-design-card">
        <div class="row row-cols-auto">
            <div class="col-7"></div>
            <div class="col skills-bubble name-card">UI Designer 📐</div>
        </div>
    </div>

    <!--2D Artist-->
    <div class="container position-relative d-none d-lg-block artist-move">
        <div class="row row-cols-auto">
            <div class="col-6 d-none d-sm-none d-md-block d-lg-block"></div>
            <div class="col artist name-card">2D Artist 🎨</div>
        </div>
    </div>

    <!--Name card for mobile-->
    <div class="container d-block d-lg-none">
        <div class="row row-cols-auto">
            <div class="col-3"></div>
            <div class="col-6" align="center">
                <div class="col-sm-1 col-sm-6 p-2 salute" align="center">
                    👋 Hi! I am <span class="name">Mili</span>
                </div>
            </div>
        </div>
    </div>
    <!--Tittle-->
    <div class="container position-relative moving-tittle">
        <div class="row">
            <!--Name Card for Mobile-->
            <div class="col-12">
                <h1 class="tittle d-sm-block d-md-none d-lg-block" align="center">
                    React / Front-End Developer
                </h1>
                <h2
                        class="tittle-smaller d-none d-sm-none d-md-block d-lg-none"
                        align="center"
                >
                    React | Front-End Developer
                </h2>
            </div>
            <div class="col-12 based-in" align="center">
                <h2 class="size-based">Based in Orlando, United States.</h2>
            </div>
        </div>
    </div>

    <!--Button Let's work-->
    <div class="container button-lets-work">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6" align="center">
                <a
                        href="/contact.html"
                        class="nav-link work-link-color lets-work mb-3"
                >Let's work! ></a
                >
            </div>

            <!--Line vertical-->
            <div class="col-3"></div>
            <div class="container d-flex justify-content-center">
                <div class="line"></div>
            </div>
        </div>
    </div>
</div>

<!--Quote-->
<div class="container-fluid quote hide-me" id="quote">
    <div class="container d-flex justify-content-center">
        <div class="line-yellow"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 align="center" class="size-quote first-part-quote">
                Is not just what it looks like and feels like.
            </h3>
        </div>
        <div class="col-12">
            <h3 align="center" class="size-quote second-part-quote">
                Is how it works.
            </h3>
            <p align="center" class="steve-jobs">- Steve Jobs</p>
        </div>
    </div>
    <!--Line vertically-->
    <div class="container d-flex justify-content-center">
        <div class="line-purple"></div>
    </div>
</div>

<!--Skills container-->
<div class="container-fluid services-space">
    <!--Line guidance-->
    <div class="container d-flex justify-content-start">
        <div class="col-1"></div>
        <div class="line-horizontal purple" id="services"></div>
    </div>
    <div class="container d-flex justify-content-start">
        <div class="col-1"></div>
        <div class="line-vertical purple adjust"></div>
    </div>
    <!--Tittles-->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-6">
            <h2 class="services-head pt-3">My services</h2>
        </div>
        <div class="col-5"></div>
        <!--New row-->
        <div class="col-1"></div>
        <div class="col-6">
            <h3 class="tittle-services">The most creative intuitive workmate.</h3>
        </div>

        <!--Icon-->
        <div class="col-5"></div>
        <div class="col-2 ms-4"></div>
        <div class="col-6">
            <img
                    class="img-fluid memoji"
                    src="https://s3.amazonaws.com/shecodesio-production/uploads/files/000/018/574/original/icon_2.PNG?1633824030"
                    alt="Memoji of Mili"
            />
        </div>

        <!--Icons around-->

        <div class="container icons-first d-none d-sm-block">
            <div class="row">
                <div class="col-1 me-4"></div>
                <div class="col-3">
                    <i class="fas fa-code code"></i>
                </div>
                <div class="col-1 ms-1">
                    <i class="fab fa-bootstrap bootstrap"></i>
                </div>
            </div>
        </div>
        <div class="container d-none d-sm-block">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-2">
                    <i class="fab fa-js-square js"></i>
                </div>
                <div class="col">
                    <i class="fab fa-github github"></i>
                </div>
            </div>
        </div>
        <!--Icons skills for mobile-->
        <div class="container d-block d-sm-none">
            <div class="row d-flex justify-content-center">
                <div class="col-2 size-skill-mobile">
                    <i class="fas fa-code code-mobile"></i>
                </div>
                <div class="col-2 size-skill-mobile">
                    <i class="fab fa-bootstrap bootstrap-mobile floating"></i>
                </div>
                <div class="col-2 size-skill-mobile">
                    <i class="fab fa-js-square js-mobile"></i>
                </div>
                <div class="col-2 size-skill-mobile">
                    <i class="fab fa-github github-mobile"></i>
                </div>
            </div>
        </div>
        <!--Skills grid-->
        <div class="container-fluid">
            <div class="row">
                <!--Developer skills-->
                <div class="col-6 ms-5"></div>
                <div class="col-sm-5 skill first-space" align="left">
                    <div class="container card-skills w-75">
                        <i class="fas fa-mouse-pointer pe-1 mouse"></i>
                        <span class="developer-tittle">Developer Skills</span>
                        <div
                                class="col description-skill developer-skills"
                                align="left"
                        >
                            A great knowledge of HTML / CSS, Javascript and React.js. I make
                            responsive applications with Bootstrap with interactive UI's designs.
                        </div>
                    </div>
                </div>
                <!--UI Design-->
                <div class="col-6 ms-5"></div>
                <div class="col-sm-5 skill second-space" align="left">
                    <div class="container card-skills w-75">
                        <i class="fas fa-object-ungroup pe-1 design"></i>
                        <span class="ui-tittle">UI Design</span>
                        <div class="col description-skill ui-design" align="left">
                            A love for design and a good eye for creativity. I have
                            proficiency in wireframing, color theory and visual
                            communication.
                        </div>
                    </div>
                </div>
                <!--2D artist-->
                <div class="col-6 ms-5"></div>
                <div class="col-sm-5 skill third-space" align="left">
                    <div class="container card-skills w-75">
                        <i class="fas fa-paint-brush pe-1 art"></i>
                        <span class="artist-tittle">2D Artist</span>
                        <div
                                class="col description-skill artist-description"
                                align="left"
                        >
                            5+ years of digital illustration experience, mastering
                            techniques in Photoshop and Procreate.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Line vertically-->
    <div class="container">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-1 ms-2">
                <div
                        class="
                line-blue-vertical
                space-line-projects
                d-none d-sm-none d-md-none d-lg-block
              "
                ></div>
            </div>
            <div class="col-6"></div>
            <!--Horizontal line-->
            <div class="col-2 d-none d-sm-none d-md-none d-lg-block">
                <div class="line-horizontal-project blue"></div>
            </div>
            <!--Vertical Line-->
            <div class="col-10 ms-2 d-block d-sm-block d-xl-block">
                <div class="line-blue-vertical projects-margin" id="project"></div>
            </div>
        </div>
    </div>
    <!--Space-->
    <div class="container moving-project-one">
        <div class="row"></div>
    </div>
    <!--My Projects container-->
    <div class="container-fluid moving-up-projects moving-project-one">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3 class="project-tittle">My projects</h3>
            </div>
            <div class="col-1"></div>
            <div class="col-10 d-flex justify-content-center">
                <h4 class="best-work">A selection of my best projects.</h4>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <h5 class="comment-work">(including this website)</h5>
            </div>
            <!--1st project-->

            <div class="col-4 d-none d-lg-block d-xl-block padding-img-left" align="center">
                <a href="https://www.certifiedveggies.com" target="_blank">
                    <img class="project-one img-fluid" src="./images/5.png" alt="Certified Veggies NFT website" /></a>
            </div>
            <!--1st project mobile-->
            <div class="
                          col-12
                          d-flex
                          justify-content-center
                          d-block d-lg-none
                          project-padding
                        " align="center">
                <a href="https://laughing-agnesi-abec67.netlify.app" target="_blank">
                    <img class="project-two img-fluid" src="./images/4.png" alt="Dictionary App project" />
                </a>
            </div>
            <!--2nd project-->

            <div class="col-4 d-none d-lg-block d-xl-block padding-img-left" align="center">
                <a
                        href="https://laughing-agnesi-abec67.netlify.app"
                        target="_blank"
                >
                    <img
                            class="project-one img-fluid"
                            src="./images/4.png"
                            alt="Dictionary App project"
                    /></a>
            </div>
            <!--2nd project mobile-->
            <div
                    class="
              col-12
              d-flex
              justify-content-center
              d-block d-lg-none
              project-padding
            "
                    align="center"
            >
                <a
                        href="https://laughing-agnesi-abec67.netlify.app"
                        target="_blank"
                >
                    <img
                            class="project-two img-fluid"
                            src="./images/4.png"
                            alt="Dictionary App project"
                    />
                </a>
            </div>
            <!--3rd Project-->
            <div class="col-4 d-none d-lg-block d-xl-block padding-img-right" align="center">
                <a
                        href="https://quizzical-roentgen-f3fd6b.netlify.app/"
                        target="_blank"
                >
                    <img
                            class="project-two img-fluid"
                            src="./images/3.png"
                            alt="Weather React project"
                    />
                </a>
            </div>
            <!--3rd project mobile-->
            <div
                    class="
              col-12
              d-flex
              justify-content-center
              d-md-block d-lg-none d-xl-none
              project-padding
            "
                    align="center"
            >
                <a
                        href="https://quizzical-roentgen-f3fd6b.netlify.app/"
                        target="_blank"
                >
                    <img
                            class="project-two img-fluid"
                            src="./images/3.png"
                            alt="Weather React project"
                    />
                </a>
            </div>
            <!--4th Project-->
            <div class="col-12 d-none d-lg-block d-xl-block padding-img-right" align="center">
                <a
                        href="https://www.shecodes.io/workshops/shecodes-plus-e97de30a-83ab-4a9d-a11c-2d346438a9bd/projects/494427"
                        target="_blank"
                >
                    <img
                            class="project-three img-fluid"
                            src="
            https://s3.amazonaws.com/shecodesio-production/uploads/files/000/018/934/original/project2.jpeg?1634303899"
                            alt="Weather Vanilla Javascript project"
                    />
                </a>
            </div>
            <!--4th project mobile-->
            <div
                    class="
              col-12
              d-flex
              justify-content-center
              d-md-block d-lg-none d-xl-none
              project-padding
            "
                    align="center"
            >
                <a
                        href="https://www.shecodes.io/workshops/shecodes-plus-e97de30a-83ab-4a9d-a11c-2d346438a9bd/projects/494427"
                        target="_blank"
                >
                    <img
                            class="project-two-mobile img-fluid"
                            src="
https://s3.amazonaws.com/shecodesio-production/uploads/files/000/018/934/original/project2.jpeg?1634303899"
                            alt="Weather Vanilla Javascript project"
                    />
                </a>
            </div>

            <!--Message at the bottom-->
            <div class="col-12 d-flex justify-content-center" align="center">
                <p class="curious-message">Curious about the process?</p>
            </div>
            <div class="col-12 d-flex justify-content-center visit-position">
                <a href="https://github.com/milicodes" target="_blank"
                ><p class="visit-message">Visit my Github</p></a
                >
            </div>
        </div>
    </div>

    <!--Vertical Line-->
    <div class="container">
        <div class="row">
            <div class="col-12"></div>
        </div>
    </div>
    <!--About me -->
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div
                        class="line-yellow-vertical space-line-projects"
                        id="about"
                ></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3 class="about-me-tittle">About me</h3>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <h3 class="tittle-services mt-3">Welcome to Mili's World</h3>
            </div>
            <!--Cards of About me-->
            <div class="row margin-cards">
                <div class="col-sm-4 d-block d-sm-none d-md-none d-lg-block">
                    <div class="card shadow-pink">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-yellow">Education</h5>
                            <p class="card-info">
                                Certificated React Developer by SheCodes Workshops in
                                2021 - 2022
                            </p>
                        </div>
                    </div>
                </div>
                <!--Sm for landscape-->
                <div class="col-sm-6 d-none d-sm-block d-md-none">
                    <div class="card shadow-pink">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-yellow">Education</h5>
                            <p class="card-info">
                                Certificated Front-End-Developer by SheCodes Workshops in
                                2021
                            </p>
                        </div>
                    </div>
                </div>
                <!--Mobile version -->
                <div class="col-sm-6 d-none d-md-block d-lg-none">
                    <div class="card shadow-pink">
                        <div class="card-body landscape-padding" align="center">
                            <h5 class="card-title card-yellow">Education</h5>
                            <p class="card-info">
                                Certificated Front-End-Developer by SheCodes Workshops in
                                2021
                            </p>
                        </div>
                    </div>
                </div>
                <!--Illustration-->
                <div class="col-sm-4 d-block d-sm-none d-md-none d-lg-block">
                    <div class="card shadow-blue">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-blue">Illustration</h5>
                            <p class="card-info">
                                Freelancer illustrator since 2018. A love for portraits and
                                character design
                            </p>
                        </div>
                    </div>
                </div>
                <!--Sm for landscape-->
                <div class="col-sm-6 d-none d-sm-block d-md-none">
                    <div class="card shadow-blue">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-blue">Illustration</h5>
                            <p class="card-info">
                                Freelancer illustrator since 2018. A love for portraits and
                                character design
                            </p>
                        </div>
                    </div>
                </div>
                <!--Mobile version-->
                <div class="col-sm-6 d-none d-md-block d-lg-none">
                    <div class="card shadow-blue">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-blue">Illustration</h5>
                            <p class="card-info">
                                Freelancer illustrator since 2018. A love for portraits and
                                character design
                            </p>
                        </div>
                    </div>
                </div>
                <div
                        class="col-sm-4 d-block d-sm-none d-md-none d-lg-block"
                        align="center"
                ></div>
                <!--2nd row of cards-->
                <div
                        class="
                col-sm-4
                margin-second-cards
                d-block d-sm-none d-md-none d-lg-block
              "
                >
                    <div class="card shadow-purple">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-purple">Influencer</h5>
                            <p class="card-info">
                                Created a plataform on Instagram to share coding tips, tutorials and promote tech products (@mili.codes)
                            </p>
                        </div>
                    </div>
                </div>

                <!--Sm for landscape-->
                <div
                        class="col-sm-6 margin-second-cards d-none d-sm-block d-md-none"
                >
                    <div class="card shadow-purple">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-purple">Influencer</h5>
                            <p class="card-info">
                                Created a plataform on Instagram to share coding tips, tutorials and promote tech products (@mili.codes)
                            </p>
                        </div>
                    </div>
                </div>
                <!--Mobile Version-->
                <div
                        class="col-sm-6 margin-second-cards d-none d-md-block d-lg-none"
                >
                    <div class="card shadow-purple">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-purple">Influencer</h5>
                            <p class="card-info">
                                Created a plataform on Instagram to share coding tips, tutorials and promote tech products (@mili.codes)
                            </p>
                        </div>
                    </div>
                </div>
                <!--Music-->
                <div
                        class="
                col-sm-4
                margin-second-cards
                d-block d-sm-none d-md-none d-lg-block
              "
                >
                    <div class="card shadow-green">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-green">Music & Games</h5>
                            <p class="card-info">
                                Songwritter, pianist and singer in my freetime. I also enjoy
                                playing videogames as a hobby
                            </p>
                        </div>
                    </div>
                </div>
                <!--sm for landscape-->
                <div
                        class="col-sm-6 margin-second-cards d-none d-sm-block d-md-none"
                >
                    <div class="card shadow-green">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-green">Music & Games</h5>
                            <p class="card-info">
                                Songwritter, pianist and singer in my freetime. I also enjoy
                                playing videogames as a hobby
                            </p>
                        </div>
                    </div>
                </div>
                <!--Mobile Version-->
                <div
                        class="col-sm-6 margin-second-cards d-none d-md-block d-lg-none"
                >
                    <div class="card shadow-green">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-green">Music & Games</h5>
                            <p class="card-info">
                                Songwritter, pianist and singer in my freetime. I also enjoy
                                playing videogames as a hobby
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
    <!--Memoji About me-->
    <div class="container d-none d-lg-block">
        <div class="row d-flex justify-content-end">
            <div class="col-3 moving-memoji">
                <img
                        src="https://s3.amazonaws.com/shecodesio-production/uploads/files/000/019/464/original/icon_3.PNG?1634855683"
                        class="memoji-about img-fluid"
                        alt="icon of Mili"
                />
            </div>
        </div>
    </div>
    <!--Memoji about me for mobile-->
    <div class="container">
        <div
                class="row d-flex justify-content-center d-block d-sm-block d-md-none"
                align="center"
        >
            <div class="col-12 memoji-mobile">
                <img
                        src="https://s3.amazonaws.com/shecodesio-production/uploads/files/000/019/464/original/icon_3.PNG?1634855683"
                        class="img-fluid"
                        alt="icon of Mili"
                />
            </div>
        </div>
    </div>
    <!--About me quote-->
    <div class="container moving-quote-mobile">
        <div class="row" align="center">
            <div class="col-12 d-flex justify-content-center" align="center">
                <h3 class="about-me-quote">Multitalented. Intuitive. Dedicated.</h3>
            </div>
            <div
                    class="col-12 moving-click d-flex justify-content-center"
                    align="center"
            >
                <p class="color-gradient-yellow">
                    Wanna know more? Visit my
                    <a
                            href="https://www.instagram.com/mili.codes/"
                            target="_blank"
                            class="link-insta"
                    >Instagram</a
                    >
                </p>
            </div>
        </div>
    </div>
</div>
<!--Footer-->
<div class="container-fluid background-footer">
    <div class="row">
        <!--Line-->
        <div class="container d-flex justify-content-center">
            <div class="line-footer" id="contact"></div>
        </div>
        <div class="col-12 padding-footer">
            <h3
                    align="center"
                    class="size-quote second-part-quote mobile-size-footer"
            >
                Let's work together!
            </h3>
            <div class="col-12" align="center">
                <form action="/contact.html">
                    <button
                            type="submit"
                            value="Go to Contact page"
                            class="btn btn-outline-primary"
                    >
                        Contact me <i class="fas fa-chevron-right ps-1"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Footer links-->
<div class="container-fluid border-top-footer">
    <div class="row">
        <div class="col-4">
            <p class="footer-description">©2022 Mili Pernia Gonzalez</p>
        </div>
        <div class="col-2">
            <p class="footer-description">React Developer, Influencer,
                3D/UI Designer</p>
        </div>
        <div class="col-6" align="center">
            <a
                    href="https://github.com/milicodes/portfolio-project"
                    target="_blank"
                    class="footer-description"
            >Github</a
            >
            <a href="mailto:dev.milicodes@gmail.com" class="footer-description"
            >Email</a
            >
            <a
                    href="https://www.linkedin.com/in/milagros-pernia-gonzalez-282ba8217/"
                    target="_blank"
                    class="footer-description"
            >LinkedIn</a
            >
            <a
                    href="https://www.instagram.com/mili.codes/"
                    target="_blank"
                    class="footer-description"
            >Instagram</a
            >
        </div>
    </div>
</div>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/javascript/jsc.js"></script>
</body>
</html>
