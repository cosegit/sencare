<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* site/accueil.html.twig */
class __TwigTemplate_322d3cb8e48f14051c1eadf8492e715e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Accueil' => [$this, 'block_Accueil'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/accueil.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "site/accueil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_Accueil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Accueil"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Accueil"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "

    <!-- Hero Start -->
    <div id=\"carouselExampleCaptions\" class=\"carousel carousel-fade slide\" data-bs-ride=\"carousel\"
         data-bs-pause=\"false\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\"
                    aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\"
                    aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\"
                    aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item position-relative active\" data-bs-interval=\"5000\">
                <div class=\"carousel-img\">
                    <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_1.jpg"), "html", null, true);
        yield "\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">Bienvenu chez
                                        Sencare.</h5>
                                    <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">La meilleure
                                        solution de soins de santé près de chez vous.</h1>
                                    ";
        // line 36
        yield "                                    ";
        // line 37
        yield "                                    ";
        // line 38
        yield "                                    ";
        // line 39
        yield "                                    ";
        // line 40
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
                <div class=\"carousel-img\">
                    <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_2.jpg"), "html", null, true);
        yield "\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">Bienvenu chez
                                        Sencare.</h5>
                                    <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">
                                        Votre oasis de bien-être et de soins de santé de qualité.
                                    </h1>
                                    ";
        // line 63
        yield "                                    ";
        // line 64
        yield "                                    ";
        // line 65
        yield "                                    ";
        // line 66
        yield "                                    ";
        // line 67
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
                <div class=\"carousel-img\">
                    <img src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_3.jpg"), "html", null, true);
        yield "\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">Bienvenu chez
                                        Sencare.</h5>
                                    <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">
                                        Votre santé entre des mains expertes et bienveillantes.
                                    </h1>
                                    ";
        // line 90
        yield "                                    ";
        // line 91
        yield "                                    ";
        // line 92
        yield "                                    ";
        // line 93
        yield "                                    ";
        // line 94
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\"
                data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\"
                data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class=\"container-fluid py-5 mt-5\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/snc.jpg"), "html", null, true);
        yield "\"
                             style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">A propos de
                            nous!</h5>
                        <h1 class=\"display-4\">Les Meilleurs Soins Médicaux Pour Vous et Votre Famille</h1>
                    </div>
                    <p>
                        SEN'Care, c'est bien plus qu'un simple service médical à domicile. En effet, il incarne une
                        véritable passerelle vers le bien-être, offrant aux patients la possibilité de maintenir leur
                        traitement prescrit dans le confort de leur foyer. Grâce à une équipe dévouée et compétente,
                        nous assurons une continuité des soins, qu'il s'agisse d'un suivi régulier ou d'une assistance
                        ponctuelle.
                    </p>
                    <div class=\"row g-3 pt-3\">
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-user-md text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Médecins<small class=\"d-block text-primary\">Qualifiés</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-procedures text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Services<small class=\"d-block text-primary\">d'Urgence</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-microscope text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Tests<small class=\"d-block text-primary\">Précis</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-ambulance text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Ambulance<small class=\"d-block text-primary\">Gratuite</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Nos Services</h5>
                <h1 class=\"display-4\">Services Médicaux d'Excellence</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-user-md text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Soins Généraux</h4>
                        <p class=\"m-0\">
                            Nous fournissons une gamme complète de soins médicaux pour répondre à vos besoins de santé
                            quotidiens.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-procedures text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Soins Palliatif</h4>
                        <p class=\"m-0\">
                            Nous offrons des soins palliatifs de haute qualité pour améliorer la qualité de vie des
                            patients atteints de maladies graves, en leur apportant confort et soutien.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-stethoscope text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Pansement</h4>
                        <p class=\"m-0\">
                            Nos professionnels de santé sont experts dans le changement et la gestion des pansements
                            pour assurer une guérison optimale.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-ambulance text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Retour à Domicile</h4>
                        <p class=\"m-0\">
                            Nous facilitons un retour à domicile en toute sécurité après une hospitalisation, avec un
                            suivi médical approprié.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-pills text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Prévenir la Perte d’Autonomie</h4>
                        <p class=\"m-0\">
                            Nos programmes sont conçus pour aider à maintenir l'indépendance et prévenir la perte
                            d'autonomie chez nos patients âgés.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-microscope text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Injection et Perfusion</h4>
                        <p class=\"m-0\">
                            Nous offrons des services d'injections et de perfusions administrés par des infirmières
                            qualifiées, en toute sécurité et confort.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-6 mb-5 mb-lg-0 mt-5\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Rendez-vous !</h5>
                        <h1 class=\"display-4\">Prendre Rendez-vous !</h1>
                    </div>
                    <p class=\"text-white mb-5\">
                        Chez Sencare, nous offrons une gamme complète de services de santé pour répondre aux besoins de
                        nos patients avec compassion et expertise.
                    </p>
                    ";
        // line 289
        yield "                    ";
        // line 290
        yield "                </div>
                <div class=\"col-lg-6\" id=\"urgence\">
                    <div class=\"bg-white text-center rounded p-5\">
                        <h1 class=\"mb-4\">Prendre Rendez-vous</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Sélectionnez le département</option>
                                        <option value=\"1\">Department 1</option>
                                        <option value=\"2\">Department 2</option>
                                        <option value=\"3\">Department 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Sélectionnez un docteur</option>
                                        <option value=\"1\">Doctor 1</option>
                                        <option value=\"2\">Doctor 2</option>
                                        <option value=\"3\">Doctor 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\"
                                           placeholder=\"votre nom svpl...\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\"
                                           placeholder=\"votre email svpl...\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                               class=\"form-control bg-light border-0 datetimepicker-input\"
                                               placeholder=\"Choisissez la date\" data-target=\"#date\"
                                               data-toggle=\"datetimepicker\"
                                               style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"time\" id=\"time\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                               class=\"form-control bg-light border-0 datetimepicker-input\"
                                               placeholder=\"Choisissez L'heure\" data-target=\"#time\"
                                               data-toggle=\"datetimepicker\"
                                               style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Envoyer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    ";
        // line 355
        yield "    ";
        // line 356
        yield "    ";
        // line 357
        yield "    ";
        // line 358
        yield "    ";
        // line 359
        yield "    ";
        // line 360
        yield "    ";
        // line 361
        yield "    ";
        // line 362
        yield "    ";
        // line 363
        yield "    ";
        // line 364
        yield "    ";
        // line 365
        yield "    ";
        // line 366
        yield "    ";
        // line 367
        yield "    ";
        // line 368
        yield "    ";
        // line 369
        yield "    ";
        // line 370
        yield "    ";
        // line 371
        yield "    ";
        // line 372
        yield "    ";
        // line 373
        yield "    ";
        // line 374
        yield "    ";
        // line 375
        yield "    ";
        // line 376
        yield "    ";
        // line 377
        yield "    ";
        // line 378
        yield "    ";
        // line 379
        yield "    ";
        // line 380
        yield "    ";
        // line 381
        yield "    ";
        // line 382
        yield "    ";
        // line 383
        yield "    ";
        // line 384
        yield "    ";
        // line 385
        yield "    ";
        // line 386
        yield "    ";
        // line 387
        yield "    ";
        // line 388
        yield "    ";
        // line 389
        yield "    ";
        // line 390
        yield "    ";
        // line 391
        yield "    ";
        // line 392
        yield "    ";
        // line 393
        yield "    ";
        // line 394
        yield "    ";
        // line 395
        yield "    ";
        // line 396
        yield "    ";
        // line 397
        yield "    ";
        // line 398
        yield "    ";
        // line 399
        yield "    ";
        // line 400
        yield "    ";
        // line 401
        yield "    ";
        // line 402
        yield "    ";
        // line 403
        yield "    ";
        // line 404
        yield "    ";
        // line 405
        yield "    ";
        // line 406
        yield "    ";
        // line 407
        yield "    ";
        // line 408
        yield "    ";
        // line 409
        yield "    ";
        // line 410
        yield "    ";
        // line 411
        yield "    ";
        // line 412
        yield "    ";
        // line 413
        yield "    ";
        // line 414
        yield "    ";
        // line 415
        yield "    ";
        // line 416
        yield "    ";
        // line 417
        yield "    ";
        // line 418
        yield "    ";
        // line 419
        yield "    ";
        // line 420
        yield "    ";
        // line 421
        yield "    ";
        // line 422
        yield "    ";
        // line 423
        yield "    ";
        // line 424
        yield "    ";
        // line 425
        yield "    ";
        // line 426
        yield "    ";
        // line 427
        yield "    ";
        // line 428
        yield "    ";
        // line 429
        yield "    ";
        // line 430
        yield "    ";
        // line 431
        yield "    ";
        // line 432
        yield "    ";
        // line 433
        yield "    ";
        // line 434
        yield "    ";
        // line 435
        yield "    ";
        // line 436
        yield "    ";
        // line 437
        yield "    ";
        // line 438
        yield "    ";
        // line 439
        yield "    ";
        // line 440
        yield "    ";
        // line 441
        yield "    ";
        // line 442
        yield "    ";
        // line 443
        yield "    ";
        // line 444
        yield "    ";
        // line 445
        yield "    ";
        // line 446
        yield "    ";
        // line 447
        yield "    ";
        // line 448
        yield "    ";
        // line 449
        yield "    ";
        // line 450
        yield "

    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Nos Docteurs</h5>
                <h1 class=\"display-4\">Professionnels de Santé Qualifiés.</h1>
            </div>
            <div class=\"owl-carousel team-carousel position-relative\">
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-1.jpg"), "html", null, true);
        yield "\"
                                 style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum
                                    dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i
                                            class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-2.jpg"), "html", null, true);
        yield "\"
                                 style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum
                                    dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i
                                            class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-3.jpg"), "html", null, true);
        yield "\"
                                 style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum
                                    dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i
                                            class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->




    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Testimonial</h5>
                <h1 class=\"display-4\">Ce que les patients disent de nous</h1>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"owl-carousel testimonial-carousel\">
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\"
                                     src=\"";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/testimonial-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\"
                                     style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\"
                                     src=\"";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/testimonial-2.jpg"), "html", null, true);
        yield "\" alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\"
                                     style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\"
                                     src=\"";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/testimonial-3.jpg"), "html", null, true);
        yield "\" alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\"
                                     style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "site/accueil.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  811 => 585,  792 => 569,  773 => 553,  728 => 511,  701 => 487,  674 => 463,  659 => 450,  657 => 449,  655 => 448,  653 => 447,  651 => 446,  649 => 445,  647 => 444,  645 => 443,  643 => 442,  641 => 441,  639 => 440,  637 => 439,  635 => 438,  633 => 437,  631 => 436,  629 => 435,  627 => 434,  625 => 433,  623 => 432,  621 => 431,  619 => 430,  617 => 429,  615 => 428,  613 => 427,  611 => 426,  609 => 425,  607 => 424,  605 => 423,  603 => 422,  601 => 421,  599 => 420,  597 => 419,  595 => 418,  593 => 417,  591 => 416,  589 => 415,  587 => 414,  585 => 413,  583 => 412,  581 => 411,  579 => 410,  577 => 409,  575 => 408,  573 => 407,  571 => 406,  569 => 405,  567 => 404,  565 => 403,  563 => 402,  561 => 401,  559 => 400,  557 => 399,  555 => 398,  553 => 397,  551 => 396,  549 => 395,  547 => 394,  545 => 393,  543 => 392,  541 => 391,  539 => 390,  537 => 389,  535 => 388,  533 => 387,  531 => 386,  529 => 385,  527 => 384,  525 => 383,  523 => 382,  521 => 381,  519 => 380,  517 => 379,  515 => 378,  513 => 377,  511 => 376,  509 => 375,  507 => 374,  505 => 373,  503 => 372,  501 => 371,  499 => 370,  497 => 369,  495 => 368,  493 => 367,  491 => 366,  489 => 365,  487 => 364,  485 => 363,  483 => 362,  481 => 361,  479 => 360,  477 => 359,  475 => 358,  473 => 357,  471 => 356,  469 => 355,  403 => 290,  401 => 289,  231 => 121,  202 => 94,  200 => 93,  198 => 92,  196 => 91,  194 => 90,  177 => 75,  167 => 67,  165 => 66,  163 => 65,  161 => 64,  159 => 63,  142 => 48,  132 => 40,  130 => 39,  128 => 38,  126 => 37,  124 => 36,  108 => 22,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block Accueil %}active{% endblock %}

{% block body %}


    <!-- Hero Start -->
    <div id=\"carouselExampleCaptions\" class=\"carousel carousel-fade slide\" data-bs-ride=\"carousel\"
         data-bs-pause=\"false\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\"
                    aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\"
                    aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\"
                    aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item position-relative active\" data-bs-interval=\"5000\">
                <div class=\"carousel-img\">
                    <img src=\"{{ asset('images/slide_1.jpg') }}\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">Bienvenu chez
                                        Sencare.</h5>
                                    <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">La meilleure
                                        solution de soins de santé près de chez vous.</h1>
                                    {#                            <div class=\"pt-2\">#}
                                    {#                                <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Find Doctor</a>#}
                                    {#                                <a href=\"\"#}
                                    {#                                   class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Appointment</a>#}
                                    {#                            </div>#}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
                <div class=\"carousel-img\">
                    <img src=\"{{ asset('images/slide_2.jpg') }}\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">Bienvenu chez
                                        Sencare.</h5>
                                    <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">
                                        Votre oasis de bien-être et de soins de santé de qualité.
                                    </h1>
                                    {#                            <div class=\"pt-2\">#}
                                    {#                                <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Find Doctor</a>#}
                                    {#                                <a href=\"\"#}
                                    {#                                   class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Appointment</a>#}
                                    {#                            </div>#}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
                <div class=\"carousel-img\">
                    <img src=\"{{ asset('images/slide_3.jpg') }}\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">Bienvenu chez
                                        Sencare.</h5>
                                    <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">
                                        Votre santé entre des mains expertes et bienveillantes.
                                    </h1>
                                    {#                            <div class=\"pt-2\">#}
                                    {#                                <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Find Doctor</a>#}
                                    {#                                <a href=\"\"#}
                                    {#                                   class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Appointment</a>#}
                                    {#                            </div>#}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\"
                data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\"
                data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class=\"container-fluid py-5 mt-5\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('images/snc.jpg') }}\"
                             style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">A propos de
                            nous!</h5>
                        <h1 class=\"display-4\">Les Meilleurs Soins Médicaux Pour Vous et Votre Famille</h1>
                    </div>
                    <p>
                        SEN'Care, c'est bien plus qu'un simple service médical à domicile. En effet, il incarne une
                        véritable passerelle vers le bien-être, offrant aux patients la possibilité de maintenir leur
                        traitement prescrit dans le confort de leur foyer. Grâce à une équipe dévouée et compétente,
                        nous assurons une continuité des soins, qu'il s'agisse d'un suivi régulier ou d'une assistance
                        ponctuelle.
                    </p>
                    <div class=\"row g-3 pt-3\">
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-user-md text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Médecins<small class=\"d-block text-primary\">Qualifiés</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-procedures text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Services<small class=\"d-block text-primary\">d'Urgence</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-microscope text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Tests<small class=\"d-block text-primary\">Précis</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-ambulance text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Ambulance<small class=\"d-block text-primary\">Gratuite</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Nos Services</h5>
                <h1 class=\"display-4\">Services Médicaux d'Excellence</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-user-md text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Soins Généraux</h4>
                        <p class=\"m-0\">
                            Nous fournissons une gamme complète de soins médicaux pour répondre à vos besoins de santé
                            quotidiens.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-procedures text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Soins Palliatif</h4>
                        <p class=\"m-0\">
                            Nous offrons des soins palliatifs de haute qualité pour améliorer la qualité de vie des
                            patients atteints de maladies graves, en leur apportant confort et soutien.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-stethoscope text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Pansement</h4>
                        <p class=\"m-0\">
                            Nos professionnels de santé sont experts dans le changement et la gestion des pansements
                            pour assurer une guérison optimale.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-ambulance text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Retour à Domicile</h4>
                        <p class=\"m-0\">
                            Nous facilitons un retour à domicile en toute sécurité après une hospitalisation, avec un
                            suivi médical approprié.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-pills text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Prévenir la Perte d’Autonomie</h4>
                        <p class=\"m-0\">
                            Nos programmes sont conçus pour aider à maintenir l'indépendance et prévenir la perte
                            d'autonomie chez nos patients âgés.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-microscope text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Injection et Perfusion</h4>
                        <p class=\"m-0\">
                            Nous offrons des services d'injections et de perfusions administrés par des infirmières
                            qualifiées, en toute sécurité et confort.
                        </p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-6 mb-5 mb-lg-0 mt-5\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Rendez-vous !</h5>
                        <h1 class=\"display-4\">Prendre Rendez-vous !</h1>
                    </div>
                    <p class=\"text-white mb-5\">
                        Chez Sencare, nous offrons une gamme complète de services de santé pour répondre aux besoins de
                        nos patients avec compassion et expertise.
                    </p>
                    {#                    <a class=\"btn btn-dark rounded-pill py-3 px-5 me-3\" href=\"\">Find Doctor</a>#}
                    {#                    <a class=\"btn btn-outline-dark rounded-pill py-3 px-5\" href=\"\">Read More</a>#}
                </div>
                <div class=\"col-lg-6\" id=\"urgence\">
                    <div class=\"bg-white text-center rounded p-5\">
                        <h1 class=\"mb-4\">Prendre Rendez-vous</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Sélectionnez le département</option>
                                        <option value=\"1\">Department 1</option>
                                        <option value=\"2\">Department 2</option>
                                        <option value=\"3\">Department 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Sélectionnez un docteur</option>
                                        <option value=\"1\">Doctor 1</option>
                                        <option value=\"2\">Doctor 2</option>
                                        <option value=\"3\">Doctor 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\"
                                           placeholder=\"votre nom svpl...\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\"
                                           placeholder=\"votre email svpl...\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                               class=\"form-control bg-light border-0 datetimepicker-input\"
                                               placeholder=\"Choisissez la date\" data-target=\"#date\"
                                               data-toggle=\"datetimepicker\"
                                               style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"time\" id=\"time\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                               class=\"form-control bg-light border-0 datetimepicker-input\"
                                               placeholder=\"Choisissez L'heure\" data-target=\"#time\"
                                               data-toggle=\"datetimepicker\"
                                               style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Envoyer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    {#    <!-- Pricing Plan Start -->#}
    {#    <div class=\"container-fluid py-5\">#}
    {#        <div class=\"container\">#}
    {#            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">#}
    {#                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Medical Packages</h5>#}
    {#                <h1 class=\"display-4\">Awesome Medical Programs</h1>#}
    {#            </div>#}
    {#            <div class=\"owl-carousel price-carousel position-relative\" style=\"padding: 0 45px 45px 45px;\">#}
    {#                <div class=\"bg-light rounded text-center\">#}
    {#                    <div class=\"position-relative\">#}
    {#                        <img class=\"img-fluid rounded-top\" src=\"{{ asset('images/price-1.jpg') }}\" alt=\"\">#}
    {#                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"#}
    {#                             style=\"background: rgba(29, 42, 77, .8);\">#}
    {#                            <h3 class=\"text-white\">Pregnancy Care</h3>#}
    {#                            <h1 class=\"display-4 text-white mb-0\">#}
    {#                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>49<small#}
    {#                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/#}
    {#                                    Year</small>#}
    {#                            </h1>#}
    {#                        </div>#}
    {#                    </div>#}
    {#                    <div class=\"text-center py-5\">#}
    {#                        <p>Emergency Medical Treatment</p>#}
    {#                        <p>Highly Experienced Doctors</p>#}
    {#                        <p>Highest Success Rate</p>#}
    {#                        <p>Telephone Service</p>#}
    {#                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>#}
    {#                    </div>#}
    {#                </div>#}
    {#                <div class=\"bg-light rounded text-center\">#}
    {#                    <div class=\"position-relative\">#}
    {#                        <img class=\"img-fluid rounded-top\" src=\"{{ asset('images/price-2.jpg') }}\" alt=\"\">#}
    {#                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"#}
    {#                             style=\"background: rgba(29, 42, 77, .8);\">#}
    {#                            <h3 class=\"text-white\">Health Checkup</h3>#}
    {#                            <h1 class=\"display-4 text-white mb-0\">#}
    {#                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>99<small#}
    {#                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/#}
    {#                                    Year</small>#}
    {#                            </h1>#}
    {#                        </div>#}
    {#                    </div>#}
    {#                    <div class=\"text-center py-5\">#}
    {#                        <p>Emergency Medical Treatment</p>#}
    {#                        <p>Highly Experienced Doctors</p>#}
    {#                        <p>Highest Success Rate</p>#}
    {#                        <p>Telephone Service</p>#}
    {#                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>#}
    {#                    </div>#}
    {#                </div>#}
    {#                <div class=\"bg-light rounded text-center\">#}
    {#                    <div class=\"position-relative\">#}
    {#                        <img class=\"img-fluid rounded-top\" src=\"{{ asset('images/price-3.jpg') }}\" alt=\"\">#}
    {#                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"#}
    {#                             style=\"background: rgba(29, 42, 77, .8);\">#}
    {#                            <h3 class=\"text-white\">Dental Care</h3>#}
    {#                            <h1 class=\"display-4 text-white mb-0\">#}
    {#                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>149<small#}
    {#                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/#}
    {#                                    Year</small>#}
    {#                            </h1>#}
    {#                        </div>#}
    {#                    </div>#}
    {#                    <div class=\"text-center py-5\">#}
    {#                        <p>Emergency Medical Treatment</p>#}
    {#                        <p>Highly Experienced Doctors</p>#}
    {#                        <p>Highest Success Rate</p>#}
    {#                        <p>Telephone Service</p>#}
    {#                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>#}
    {#                    </div>#}
    {#                </div>#}
    {#                <div class=\"bg-light rounded text-center\">#}
    {#                    <div class=\"position-relative\">#}
    {#                        <img class=\"img-fluid rounded-top\" src=\"{{ asset('images/price-4.jpg') }}\" alt=\"\">#}
    {#                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"#}
    {#                             style=\"background: rgba(29, 42, 77, .8);\">#}
    {#                            <h3 class=\"text-white\">Operation & Surgery</h3>#}
    {#                            <h1 class=\"display-4 text-white mb-0\">#}
    {#                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>199<small#}
    {#                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/#}
    {#                                    Year</small>#}
    {#                            </h1>#}
    {#                        </div>#}
    {#                    </div>#}
    {#                    <div class=\"text-center py-5\">#}
    {#                        <p>Emergency Medical Treatment</p>#}
    {#                        <p>Highly Experienced Doctors</p>#}
    {#                        <p>Highest Success Rate</p>#}
    {#                        <p>Telephone Service</p>#}
    {#                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>#}
    {#                    </div>#}
    {#                </div>#}
    {#            </div>#}
    {#        </div>#}
    {#    </div>#}
    {#    <!-- Pricing Plan End -->#}


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Nos Docteurs</h5>
                <h1 class=\"display-4\">Professionnels de Santé Qualifiés.</h1>
            </div>
            <div class=\"owl-carousel team-carousel position-relative\">
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-1.jpg') }}\"
                                 style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum
                                    dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i
                                            class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-2.jpg') }}\"
                                 style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum
                                    dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i
                                            class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-3.jpg') }}\"
                                 style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum
                                    dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i
                                            class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i
                                            class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->




    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Testimonial</h5>
                <h1 class=\"display-4\">Ce que les patients disent de nous</h1>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"owl-carousel testimonial-carousel\">
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\"
                                     src=\"{{ asset('images/testimonial-1.jpg') }}\" alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\"
                                     style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\"
                                     src=\"{{ asset('images/testimonial-2.jpg') }}\" alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\"
                                     style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\"
                                     src=\"{{ asset('images/testimonial-3.jpg') }}\" alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\"
                                     style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

{% endblock %}", "site/accueil.html.twig", "C:\\wamp64\\www\\sencare\\templates\\site\\accueil.html.twig");
    }
}
