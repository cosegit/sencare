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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_1.avif"), "html", null, true);
        yield "\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">
                                        Soins à domicile.
                                    </h5>
                                    <h1 class=\"display-1 carou text-white mb-md-4 animated zoomIn delay-1s\">La meilleure
                                        solution de soins de santé chez vous.</h1>
                                    ";
        // line 37
        yield "                                    ";
        // line 38
        yield "                                    ";
        // line 39
        yield "                                    ";
        // line 40
        yield "                                    ";
        // line 41
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
                <div class=\"carousel-img\">
                    <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_2.avif"), "html", null, true);
        yield "\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">
                                        Excellence et Qualité.
                                    </h5>
                                    <h1 class=\"display-1 carou text-white mb-md-4 animated zoomIn delay-1s\">
                                        Votre oasis de bien-être et de soins de qualité.
                                    </h1>
                                    ";
        // line 65
        yield "                                    ";
        // line 66
        yield "                                    ";
        // line 67
        yield "                                    ";
        // line 68
        yield "                                    ";
        // line 69
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
                <div class=\"carousel-img\">
                    <img src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_3.avif"), "html", null, true);
        yield "\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">
                                        Accompagnement médicale.
                                    </h5>
                                    <h1 class=\"display-1 carou text-white mb-md-4 animated zoomIn delay-1s\">
                                        Votre santé entre des mains expertes et bienveillantes.
                                    </h1>
                                    ";
        // line 93
        yield "                                    ";
        // line 94
        yield "                                    ";
        // line 95
        yield "                                    ";
        // line 96
        yield "                                    ";
        // line 97
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
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/snc.avif "), "html", null, true);
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
                    <p class=\"about\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SOINS");
        yield "\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PALLIATIFS");
        yield "\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PANSEMENTS");
        yield "\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DOMICILE");
        yield "\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AUTONOMIE");
        yield "\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"";
        // line 267
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PERFUSION");
        yield "\">
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
                    <p class=\"text-white mb-5 about\">
                        Chez Sencare, nous offrons une gamme complète de services de santé pour répondre aux besoins de
                        nos patients avec compassion et expertise.
                    </p>
                    ";
        // line 292
        yield "                    ";
        // line 293
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
                                           placeholder=\"nom\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\"
                                           placeholder=\"email\"
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


        <!-- Pricing Plan Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
                <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Demande d'urgence</h5>
                    <h1 class=\"display-4\">Formulaire demande d'urgence</h1>
                </div>
                <div class=\"row gx-5\">
                    <div class=\"col-lg-3\">

                    </div>
                    <div class=\"col-lg-7\" id=\"urgence\">
                        <div class=\"bg-primary text-center rounded p-5\">
                            <h1 class=\"mb-4 text-white\">Demande d'urgence !</h1>
                            <form>
                                <div class=\"row g-3\">
                                    <div class=\"col-lg-12 col-sm-6\">
                                        <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"nom\" style=\"height: 55px;\">
                                    </div>
                                    <div class=\"col-lg-12 col-sm-6\">
                                        <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"prénom\" style=\"height: 55px;\">
                                    </div>
                                    <div class=\"col-lg-12 col-sm-6\">
                                        <input type=\"number\" class=\"form-control bg-light border-0\" placeholder=\"téléphone\" style=\"height: 55px;\">
                                    </div>
                                    <div class=\"col-lg-12 col-sm-6\">
                                        <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Adresse\" style=\"height: 55px;\">
                                    </div>
                                    <div class=\"col-12\">
                                        <button class=\"btn btn-primary w-100 py-3 text-white\" type=\"submit\">
                                            Envoyer
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Nos Professionnels</h5>
                <h1 class=\"display-4\">Professionnels de Santé Qualifiés.</h1>
            </div>
            <div class=\"owl-carousel team-carousel position-relative\">
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-1.avif"), "html", null, true);
        yield "\" style=\"object-fit: cover;\">
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
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-2.avif"), "html", null, true);
        yield "\" style=\"object-fit: cover;\">
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
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-3.avif"), "html", null, true);
        yield "\" style=\"object-fit: cover;\">
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
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/testimonial-1.avif"), "html", null, true);
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
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/testimonial-2.avif"), "html", null, true);
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
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/testimonial-3.avif"), "html", null, true);
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
        return array (  678 => 530,  659 => 514,  640 => 498,  596 => 457,  570 => 434,  544 => 411,  424 => 293,  422 => 292,  395 => 267,  377 => 252,  359 => 237,  341 => 222,  323 => 207,  305 => 192,  234 => 124,  205 => 97,  203 => 96,  201 => 95,  199 => 94,  197 => 93,  179 => 77,  169 => 69,  167 => 68,  165 => 67,  163 => 66,  161 => 65,  143 => 49,  133 => 41,  131 => 40,  129 => 39,  127 => 38,  125 => 37,  108 => 22,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
                    <img src=\"{{ asset('images/slide_1.avif') }}\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">
                                        Soins à domicile.
                                    </h5>
                                    <h1 class=\"display-1 carou text-white mb-md-4 animated zoomIn delay-1s\">La meilleure
                                        solution de soins de santé chez vous.</h1>
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
                    <img src=\"{{ asset('images/slide_2.avif') }}\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">
                                        Excellence et Qualité.
                                    </h5>
                                    <h1 class=\"display-1 carou text-white mb-md-4 animated zoomIn delay-1s\">
                                        Votre oasis de bien-être et de soins de qualité.
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
                    <img src=\"{{ asset('images/slide_3.avif') }}\" alt=\"\"
                         class=\"img-fluid w-100 animated fadIn position-absolute\">
                </div>
                <div class=\"container-fluid py-5\">
                    <div class=\"carousel-overlay\">
                        <div class=\"container py-5\">
                            <div class=\"row justify-content-start text-carousel position-absolute\">
                                <div class=\"col-lg-8 text-center text-lg-start\">
                                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                        style=\"border-color: rgba(256, 256, 256, .3) !important;\">
                                        Accompagnement médicale.
                                    </h5>
                                    <h1 class=\"display-1 carou text-white mb-md-4 animated zoomIn delay-1s\">
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
                        <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('images/snc.avif ') }}\"
                             style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">A propos de
                            nous!</h5>
                        <h1 class=\"display-4\">Les Meilleurs Soins Médicaux Pour Vous et Votre Famille</h1>
                    </div>
                    <p class=\"about\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"{{ path('SOINS') }}\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"{{ path('PALLIATIFS') }}\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"{{ path('PANSEMENTS') }}\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"{{ path('DOMICILE') }}\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"{{ path('AUTONOMIE') }}\">
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
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"{{ path('PERFUSION') }}\">
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
                    <p class=\"text-white mb-5 about\">
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
                                           placeholder=\"nom\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\"
                                           placeholder=\"email\"
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


        <!-- Pricing Plan Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
                <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Demande d'urgence</h5>
                    <h1 class=\"display-4\">Formulaire demande d'urgence</h1>
                </div>
                <div class=\"row gx-5\">
                    <div class=\"col-lg-3\">

                    </div>
                    <div class=\"col-lg-7\" id=\"urgence\">
                        <div class=\"bg-primary text-center rounded p-5\">
                            <h1 class=\"mb-4 text-white\">Demande d'urgence !</h1>
                            <form>
                                <div class=\"row g-3\">
                                    <div class=\"col-lg-12 col-sm-6\">
                                        <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"nom\" style=\"height: 55px;\">
                                    </div>
                                    <div class=\"col-lg-12 col-sm-6\">
                                        <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"prénom\" style=\"height: 55px;\">
                                    </div>
                                    <div class=\"col-lg-12 col-sm-6\">
                                        <input type=\"number\" class=\"form-control bg-light border-0\" placeholder=\"téléphone\" style=\"height: 55px;\">
                                    </div>
                                    <div class=\"col-lg-12 col-sm-6\">
                                        <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Adresse\" style=\"height: 55px;\">
                                    </div>
                                    <div class=\"col-12\">
                                        <button class=\"btn btn-primary w-100 py-3 text-white\" type=\"submit\">
                                            Envoyer
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Nos Professionnels</h5>
                <h1 class=\"display-4\">Professionnels de Santé Qualifiés.</h1>
            </div>
            <div class=\"owl-carousel team-carousel position-relative\">
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-1.avif') }}\" style=\"object-fit: cover;\">
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
                            <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-2.avif') }}\" style=\"object-fit: cover;\">
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
                            <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-3.avif') }}\" style=\"object-fit: cover;\">
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
                                     src=\"{{ asset('images/testimonial-1.avif') }}\" alt=\"\">
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
                                     src=\"{{ asset('images/testimonial-2.avif') }}\" alt=\"\">
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
                                     src=\"{{ asset('images/testimonial-3.avif') }}\" alt=\"\">
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
