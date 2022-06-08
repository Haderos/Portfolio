<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
    <title>Pernes Florian | Developer Full Stack & UX Designer</title>
    <link rel="icon" type="image/jpg" href="./images/memoji-2.png" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/af5476175e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
          crossorigin="anonymous"/>
</head>
<body class="card-footer">
<div id="langDiv">
    <?php $lang = $_GET['lang'];
    if(empty($lang)) {
        $lang = 'fr';
    }
    include "./lang/lang_".$lang.".php"; ?>
</div>
<!--Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-color">
    <div class="container-fluid nav-font pt-1">
        <a class="navbar-brand nav-name offset-lg-2 col-lg-2" onclick="navto('divhome')">Florian Pernes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon position-relative justify-content-sm-end"></span>
        </button>
        <div class="collapse navbar-collapse col-8 pe-5 justify-content-between" id="navbarNav">
            <ul class="navbar-nav justify-content-center col-lg-8 col-xl-6">
                <li class="nav-item" onclick="navto('divhome')">
                    <a class="nav-link active" aria-current="page"><?= _HOME ?></a>
                </li>
                <li class="nav-item" onclick="navto('divservices')">
                    <a class="nav-link active" aria-current="page"><?= _SERVICES ?></a>
                </li>
                <li class="nav-item" onclick="navto('divproject')">
                    <a class="nav-link active"><?= _PROJECTS ?></a>
                </li>
                <li class="nav-item" onclick="navto('divabout')">
                    <a class="nav-link active"><?= _ABOUT ?></a>
                </li>
                <li class="nav-item" onclick="navto('divcontact')">
                    <a class="nav-link active"><?= _CONTACT ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">CV</a>
                </li>
            </ul>
            <div class="d-none d-lg-block pe-5">
                <a onclick="changeLang()" style="cursor: pointer" id="flagLang" data-lang="<?= $lang ?>">
                    <img src="/images/<?= ($lang == 'fr' ? 'en' : 'fr') ?>.svg" style="width: 24px; height: 24px;" id="langImg">
                </a>
            </div>
        </div>
    </div>
</nav>

<!--Background container-->
<div class="container-fluid background-main" id="divhome">
    <!--Main image-->
    <div class="container">
        <div class="row icon-margin">
            <div class="col" align="center">
                <img class="img-fluid icon mt-5" src="/images/icon-1.png" alt="Image of Pernes Florian"/>
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
                    <?= _HI ?> <span class="name">Florian</span>
                </div>
            </div>
        </div>
    </div>

    <!--UI designer-->
    <div class="container position-relative d-none d-lg-block ui-design-card">
        <div class="row row-cols-auto">
            <div class="col-7"></div>
            <div class="col skills-bubble name-card"><?= _UXDESIGNER ?> 📐</div>
        </div>
    </div>

    <!--2D Artist-->
    <div class="container position-relative d-none d-lg-block artist-move">
        <div class="row row-cols-auto">
            <div class="col-6 d-none d-sm-none d-md-block d-lg-block"></div>
            <div class="col artist name-card"><?= _ILLUSTRATOR ?> 🎨</div>
        </div>
    </div>

    <!--Name card for mobile-->
    <div class="container d-block d-lg-none">
        <div class="row row-cols-auto">
            <div class="col-3"></div>
            <div class="col-6" align="center">
                <div class="col-sm-1 col-sm-6 p-2 salute" align="center">
                    👋 <?= _HI ?> <span class="name">Florian</span>
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
                    <?= _JOB ?>
                </h1>
                <h2 class="tittle-smaller d-none d-sm-none d-md-block d-lg-none" align="center">
                    <?= _JOB ?>
                </h2>
            </div>
            <div class="col-12 based-in" align="center">
                <h2 class="size-based"><?= _BASED ?>.</h2>
            </div>
        </div>
    </div>

    <!--Button Let's work-->
    <div class="container button-lets-work">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6" align="center">
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
                <?= _LEARN ?>.
            </h3>
        </div>
        <div class="col-12">
            <h3 align="center" class="size-quote second-part-quote">
                <?= _PLACE ?>.
            </h3>
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
        <div class="line-horizontal purple" id="divservices"></div>
    </div>
    <div class="container d-flex justify-content-start">
        <div class="col-1"></div>
        <div class="line-vertical purple adjust"></div>
    </div>
    <!--Tittles-->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-6">
            <h2 class="services-head pt-3"><?= _MYSKILLS ?></h2>
        </div>
        <div class="col-5"></div>
        <!--New row-->
        <div class="col-1"></div>
        <div class="col-6">
            <h3 class="tittle-services pe-lg-4"><?= _TOOLBOX ?>.</h3>
        </div>

        <!--Icon-->
        <div class="col-5"></div>
        <div class="col-2 ms-4"></div>
        <div class="col-6">
            <img class="img-fluid memoji"
                 src="./images/memoji-2.png"
                 alt="Memoji of Florian"/>
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
                    <i class="fas fa-palette js"></i>
                </div>
                <div class="col">
                    <i class="fab fa-figma github"></i>
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
                    <i class="fas fa-palette js-mobile"></i>
                </div>
                <div class="col-2 size-skill-mobile">
                    <i class="fab fa-figma github-mobile"></i>
                </div>
            </div>
        </div>
        <!--Skills grid-->
        <div class="container-fluid">
            <div class="row">
                <!--Developer skills-->
                <div class="offset-lg-7 col-sm-5 skill first-space" align="left">
                    <div class="container card-skills w-75">
                        <i class="fas fa-mouse-pointer pe-1 mouse"></i>
                        <span class="developer-tittle"><?= _DEVELOPERSKILLS ?></span>
                        <div class="col description-skill developer-skills" align="left">
                         <?= _DEVELOPERDESCRIPTION ?>.
                        </div>
                    </div>
                </div>
                <!--UI Design-->
                <div class="offset-lg-7 col-sm-5 skill second-space" align="left">
                    <div class="container card-skills w-75">
                        <i class="fas fa-object-ungroup pe-1 design"></i>
                        <span class="ui-tittle"><?= _UXDESIGN ?></span>
                        <div class="col description-skill ui-design" align="left">
                            <?= _UXDESIGNDESCRIPTION ?>.
                        </div>
                    </div>
                </div>
                <!--2D artist-->
                <div class="offset-lg-7 col-sm-5 skill third-space" align="left">
                    <div class="container card-skills w-75">
                        <i class="fas fa-paint-brush pe-1 art"></i>
                        <span class="artist-tittle"><?= _ILLUSTRATOR ?></span>
                        <div class="col description-skill artist-description" align="left">
                            <?= _ILLUSTRATORDESCRIPTION ?>.
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
                <div class="line-blue-vertical space-line-projects d-none d-sm-none d-md-none d-lg-block"></div>
            </div>
            <div class="col-6"></div>
            <!--Horizontal line-->
            <div class="col-2 d-none d-sm-none d-md-none d-lg-block">
                <div class="line-horizontal-project blue"></div>
            </div>
            <!--Vertical Line-->
            <div class="col-10 ms-2 d-block d-sm-block d-xl-block">
                <div class="line-blue-vertical projects-margin" id="divproject"></div>
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
                <h3 class="project-tittle"><?= _MYPROJECTS ?></h3>
            </div>
            <div class="col-1"></div>
            <div class="col-10 d-flex justify-content-center">
                <h4 class="best-work"><?= _SELECTIONPROJECTS ?>.</h4>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <h5 class="comment-work">(<?= _INCLUDEWEB ?>)</h5>
            </div>

            <!--1st project-->
            <div class="col-12 col-lg-6 padding-img-left" align="center">
                <a href="" target="_blank">
                    <img class="project-one img-fluid" src="./images/1.png" alt="<?= _ENIGMA ?>" /></a>
            </div>

            <!--2nd project-->
            <div class="col-12 col-lg-6 padding-img-left" align="center">
                <a href="" target="_blank">
                    <img class="project-one img-fluid" src="./images/2.png" alt="<?= _OPARTY ?>"/></a>
            </div>

            <!--Message at the bottom-->
            <div class="col-12 d-flex justify-content-center" align="center">
                <p class="curious-message"><?= _CURIOUS?> ?</p>
            </div>
            <div class="col-12 d-flex justify-content-center visit-position">
                <a href="https://github.com/milicodes" target="_blank">
                    <p class="visit-message"><?= _GITHUB ?></p>
                </a>
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
                <div class="line-yellow-vertical space-line-projects" id="divabout"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3 class="about-me-tittle"><?= _ABOUTME ?></h3>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <h3 class="tittle-services mt-3"><?= _WELCOME ?></h3>
            </div>
            <!--Cards of About me-->
            <div class="row margin-cards col-12 col-lg-8">
                <div class="col-12 col-sm-6">
                    <div class="card shadow-pink mb-4 mb-lg0">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-yellow"><?= _EDUCATION ?></h5>
                            <p class="card-info">
                                <?= _EDUCATIONDESCRIPTION ?>.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Illustration-->
                <div class="col-12 col-sm-6">
                    <div class="card shadow-blue mb-4 mb-lg0">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-blue"><?= _ILLUSTRATION ?></h5>
                            <p class="card-info">
                                <?= _ILLUSTRATIONDESCRIPTION ?>.
                            </p>
                        </div>
                    </div>
                </div>
                <!--2nd row of cards-->
                <div class="col-12 col-sm-6">
                    <div class="card shadow-purple mb-4 mb-lg0">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-purple"><?= _HUMAN ?></h5>
                            <p class="card-info">
                                <?= _HUMANDESCRIPTION ?>.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Music-->
                <div class="col-12 col-sm-6">
                    <div class="card shadow-green mb-4 mb-lg0">
                        <div class="card-body" align="center">
                            <h5 class="card-title card-green"><?= _GAMING ?></h5>
                            <p class="card-info">
                                <?= _GAMINGDESCRIPTION ?>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Memoji About me-->
    <div class="container d-none d-lg-block">
        <div class="row d-flex justify-content-end">
            <div class="col-3 moving-memoji">
                <img src="./images/memoji-1.png" class="memoji-about img-fluid" alt="icon of Florian"/>
            </div>
        </div>
    </div>
    <!--Memoji about me for mobile-->
    <div class="container">
        <div class="row d-flex justify-content-center d-block d-sm-block d-md-none" align="center">
            <div class="col-12 memoji-mobile">
                <img src="./images/memoji-1.png" class="img-fluid" alt="icon of Florian"/>
            </div>
        </div>
    </div>
    <!--About me quote-->
    <div class="container moving-quote-mobile">
        <div class="row" align="center">
            <div class="col-12 d-flex justify-content-center" align="center">
                <h3 class="about-me-quote"><?= _QUOTE ?>.</h3>
            </div>
            <div class="col-12 moving-click d-flex justify-content-center" align="center">
                <p class="color-gradient-yellow">
                   <?= _MORE ?>
                    <a href="https://www.linkedin.com/in/fpernes" target="_blank" class="link-linkedin">Linkedin</a>
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
            <div class="line-footer" id="divcontact"></div>
        </div>
        <div class="col-12 padding-footer">
            <h3 align="center" class="size-quote second-part-quote mobile-size-footer">
                <?= _IDEA ?> ?
            </h3>
            <div class="col-12" align="center">
                <form action="/contact.html">
                    <button type="submit" value="Go to Contact page" class="btn btn-outline-primary">
                        <?= _CONTACTME ?> <i class="fas fa-chevron-right ps-1"></i>
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
            <p class="footer-description">©2022 Pernes Florian</p>
        </div>
        <div class="col-2">
            <p class="footer-description"><?= _JOB ?></p>
        </div>
        <div class="col-6" align="center">
            <a href="https://github.com/Haderos" target="_blank" class="footer-description">Github</a>
            <a href="mailto:flo.pernes@gmail.com" class="footer-description">Email</a>
            <a href="https://www.linkedin.com/in/fpernes" target="_blank" class="footer-description">LinkedIn</a>
            <a href="https://www.instagram.com/artofhade/" target="_blank" class="footer-description">Instagram</a>
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
<script>
    function changeLang() {
        var lang = $("#flagLang").attr('data-lang');
        if(lang == 'fr') {
            window.location.replace("?lang=en");
        } else {
            window.location.replace("?lang=fr");
        }
    }
</script>
</body>
</html>
p