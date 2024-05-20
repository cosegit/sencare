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

/* layout.html.twig */
class __TwigTemplate_1132169dedbb75d9066b2a75d3de1f93 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'photobox_css' => [$this, 'block_photobox_css'],
            'Accueil' => [$this, 'block_Accueil'],
            'About' => [$this, 'block_About'],
            'specialistes' => [$this, 'block_specialistes'],
            'service' => [$this, 'block_service'],
            'contact' => [$this, 'block_contact'],
            'body' => [$this, 'block_body'],
            'photobox_js' => [$this, 'block_photobox_js'],
            'scroll' => [$this, 'block_scroll'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"title\" content=\"SenCare\">
    <meta name=\"description\" content=\"Specialisée dans l´application des soins à domicile\">
    <meta name=\"author\" content=\"EUCLIDES\">
    <meta name=\"keywords\" content=\"SenCare, clinique, santé, soins, domicile\">
    <title>SenCare - ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specialisée dans l´application des soins à domicile"), "html", null, true);
        yield "</title>

    <!-- Favicon -->
    <link href=\"imgages/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css\" rel=\"stylesheet\">
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('photobox_css', $context, $blocks);
        // line 31
        yield "
    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- Site Stylesheet -->
    <link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    ";
        // line 37
        yield "</head>
<body>
<!-- Topbar Start -->
<div class=\"container-fluid py-2 border-bottom d-none d-lg-block\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 text-center text-lg-start mb-2 mb-lg-0\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-decoration-none text-body pe-3\" href=\"\"><i class=\"bi bi-telephone me-2\"></i>+012 345 6789</a>
                    <span class=\"text-body\">|</span>
                    <a class=\"text-decoration-none text-body px-3\" href=\"\"><i class=\"bi bi-envelope me-2\"></i>info@example.com</a>
                </div>
            </div>
            <div class=\"col-md-6 text-center text-lg-end\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-body px-2\" href=\"\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a class=\"text-body px-2\" href=\"\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a class=\"text-body px-2\" href=\"\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                    <a class=\"text-body px-2\" href=\"\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                    <a class=\"text-body ps-2\" href=\"\">
                        <i class=\"fab fa-youtube\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class=\"container-fluid sticky-top bg-white shadow-sm\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0\">
            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\" class=\"navbar-brand\">
                <h1 class=\"m-0 text-uppercase text-primary\">
                    <i class=\"fa fa-clinic-medical me-2\"></i>
                    SenCare
                </h1>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\" class=\"nav-link  ";
        yield from $this->unwrap()->yieldBlock('Accueil', $context, $blocks);
        yield "\">Accueil</a>
                        <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\" class=\"nav-link ";
        yield from $this->unwrap()->yieldBlock('About', $context, $blocks);
        yield "\">A propos</a>
                        <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Specialistes");
        yield "\" class=\"nav-link ";
        yield from $this->unwrap()->yieldBlock('specialistes', $context, $blocks);
        yield "\">Spécialistes</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Service");
        yield "\" class=\"nav-link ";
        yield from $this->unwrap()->yieldBlock('service', $context, $blocks);
        yield "\">Service</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Consultation");
        yield "\" class=\"dropdown-item\">Consultation</a>
                                <a href=\"#\" class=\"dropdown-item\">Traitement</a>
                                <a href=\"#\" class=\"dropdown-item\">Opérations</a>
                                <a href=\"#\" class=\"dropdown-item\">Rendez vous</a>
                            </div>
                        </div>
                        <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\" class=\"nav-link ";
        yield from $this->unwrap()->yieldBlock('contact', $context, $blocks);
        yield "\">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>

";
        // line 108
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 111
        yield "

<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-light mt-5 py-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Get In Touch</h4>
                <p class=\"mb-4\">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary me-3\"></i>123 Street, New York, USA</p>
                <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary me-3\"></i>info@example.com</p>
                <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary me-3\"></i>+012 345 67890</p>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Quick Links</h4>
                <div class=\"d-flex flex-column justify-content-start\">
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Home</a>
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>About Us</a>
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Our Services</a>
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Meet The Team</a>
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Latest Blog</a>
                    <a class=\"text-light\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Contact Us</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Lien Utiles</h4>
                <div class=\"d-flex flex-column justify-content-start\">
                    <a class=\"text-light mb-2\" href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\"><i class=\"fa fa-angle-right me-2\"></i>Accueil</a>
                    <a class=\"text-light mb-2\" href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\"><i class=\"fa fa-angle-right me-2\"></i>A propos</a>
                    <a class=\"text-light mb-2\" href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Specialistes");
        yield "\"><i class=\"fa fa-angle-right me-2\"></i>Specialistes</a>
                    <a class=\"text-light mb-2\" href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Service");
        yield "\"><i class=\"fa fa-angle-right me-2\"></i>Services</a>
                    <a class=\"text-light mb-2\" href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Consultation");
        yield "\"><i class=\"fa fa-angle-right me-2\"></i>Consultation</a>
                    <a class=\"text-light\" href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\"><i class=\"fa fa-angle-right me-2\"></i>Contact</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Newsletter</h4>
                <form action=\"\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control p-3 border-0\" placeholder=\"Your Email Address\">
                        <button class=\"btn btn-primary\">Sign Up</button>
                    </div>
                </form>
                <h6 class=\"text-primary text-uppercase mt-5 mb-5\">Follow Us</h6>
                <div class=\"d-flex\">
                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid copyright px-0\">
    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
        <div class=\"py-4 px-5 text-center text-md-start text-light\">
            <p class=\"mb-0\">&copy; 2024 Sencare, ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tout droits réservés."), "html", null, true);
        yield "</p>
        </div>
        <div class=\"py-4 px-5 bg-secondaire footer-shape position-relative text-center text-md-end\">
            <p class=\"mb-0 text-primaire\">
                Designed By
                <a class=\"fw-bold text-primaire\" href=\"https://euclideservices.com\" target=\"_blank\">EUCLIDES</a>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->

<a href=\"#\" class=\"back-to-top\">
    <i class=\"fa-solid fa-angles-up\"></i>
</a>

<!-- JavaScript Libraries -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\" async></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js\" async></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.45/moment-timezone.min.js\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js\" ></script>
";
        // line 200
        yield from $this->unwrap()->yieldBlock('photobox_js', $context, $blocks);
        // line 201
        yield "
<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
";
        // line 215
        yield from $this->unwrap()->yieldBlock('scroll', $context, $blocks);
        // line 218
        yield "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 30
    public function block_photobox_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "photobox_css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "photobox_css"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 89
    public function block_Accueil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Accueil"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Accueil"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 90
    public function block_About($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "About"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "About"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 91
    public function block_specialistes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specialistes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specialistes"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 93
    public function block_service($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "service"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "service"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 101
    public function block_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 109
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 200
    public function block_photobox_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "photobox_js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "photobox_js"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 215
    public function block_scroll($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scroll"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scroll"));

        // line 216
        yield "
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
        return "layout.html.twig";
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
        return array (  553 => 216,  543 => 215,  523 => 200,  511 => 109,  501 => 108,  481 => 101,  461 => 93,  441 => 91,  421 => 90,  401 => 89,  381 => 30,  368 => 218,  366 => 215,  362 => 213,  357 => 211,  353 => 210,  349 => 209,  345 => 208,  341 => 207,  337 => 206,  330 => 201,  328 => 200,  294 => 168,  266 => 143,  262 => 142,  258 => 141,  254 => 140,  250 => 139,  246 => 138,  217 => 111,  215 => 108,  203 => 101,  194 => 95,  187 => 93,  180 => 91,  174 => 90,  168 => 89,  154 => 78,  111 => 37,  107 => 35,  102 => 33,  98 => 31,  96 => 30,  85 => 22,  81 => 21,  68 => 11,  56 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"{{ app.request.locale }}\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"title\" content=\"SenCare\">
    <meta name=\"description\" content=\"Specialisée dans l´application des soins à domicile\">
    <meta name=\"author\" content=\"EUCLIDES\">
    <meta name=\"keywords\" content=\"SenCare, clinique, santé, soins, domicile\">
    <title>SenCare - {{ \"Specialisée dans l´application des soins à domicile\"|trans }}</title>

    <!-- Favicon -->
    <link href=\"imgages/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css\" rel=\"stylesheet\">
    {% block photobox_css %} {% endblock %}

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Site Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    {#        <link href=\"{{ asset('css/style.min.css') }}\" rel=\"stylesheet\">#}
</head>
<body>
<!-- Topbar Start -->
<div class=\"container-fluid py-2 border-bottom d-none d-lg-block\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 text-center text-lg-start mb-2 mb-lg-0\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-decoration-none text-body pe-3\" href=\"\"><i class=\"bi bi-telephone me-2\"></i>+012 345 6789</a>
                    <span class=\"text-body\">|</span>
                    <a class=\"text-decoration-none text-body px-3\" href=\"\"><i class=\"bi bi-envelope me-2\"></i>info@example.com</a>
                </div>
            </div>
            <div class=\"col-md-6 text-center text-lg-end\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-body px-2\" href=\"\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a class=\"text-body px-2\" href=\"\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a class=\"text-body px-2\" href=\"\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                    <a class=\"text-body px-2\" href=\"\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                    <a class=\"text-body ps-2\" href=\"\">
                        <i class=\"fab fa-youtube\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class=\"container-fluid sticky-top bg-white shadow-sm\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0\">
            <a href=\"{{ path('Accueil') }}\" class=\"navbar-brand\">
                <h1 class=\"m-0 text-uppercase text-primary\">
                    <i class=\"fa fa-clinic-medical me-2\"></i>
                    SenCare
                </h1>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"{{ path('Accueil') }}\" class=\"nav-link  {% block Accueil %} {% endblock %}\">Accueil</a>
                        <a href=\"{{ path('About') }}\" class=\"nav-link {% block About %} {% endblock %}\">A propos</a>
                        <a href=\"{{ path('Specialistes') }}\" class=\"nav-link {% block specialistes %} {% endblock %}\">Spécialistes</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"{{ path('Service') }}\" class=\"nav-link {% block service %} {% endblock %}\">Service</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"{{ path('Consultation') }}\" class=\"dropdown-item\">Consultation</a>
                                <a href=\"#\" class=\"dropdown-item\">Traitement</a>
                                <a href=\"#\" class=\"dropdown-item\">Opérations</a>
                                <a href=\"#\" class=\"dropdown-item\">Rendez vous</a>
                            </div>
                        </div>
                        <a href=\"{{ path('Contact') }}\" class=\"nav-link {% block contact %} {% endblock %}\">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>

{% block body %}

{% endblock %}


<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-light mt-5 py-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Get In Touch</h4>
                <p class=\"mb-4\">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary me-3\"></i>123 Street, New York, USA</p>
                <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary me-3\"></i>info@example.com</p>
                <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary me-3\"></i>+012 345 67890</p>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Quick Links</h4>
                <div class=\"d-flex flex-column justify-content-start\">
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Home</a>
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>About Us</a>
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Our Services</a>
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Meet The Team</a>
                    <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Latest Blog</a>
                    <a class=\"text-light\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Contact Us</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Lien Utiles</h4>
                <div class=\"d-flex flex-column justify-content-start\">
                    <a class=\"text-light mb-2\" href=\"{{ path('Accueil') }}\"><i class=\"fa fa-angle-right me-2\"></i>Accueil</a>
                    <a class=\"text-light mb-2\" href=\"{{ path('About') }}\"><i class=\"fa fa-angle-right me-2\"></i>A propos</a>
                    <a class=\"text-light mb-2\" href=\"{{ path('Specialistes') }}\"><i class=\"fa fa-angle-right me-2\"></i>Specialistes</a>
                    <a class=\"text-light mb-2\" href=\"{{ path('Service') }}\"><i class=\"fa fa-angle-right me-2\"></i>Services</a>
                    <a class=\"text-light mb-2\" href=\"{{ path('Consultation') }}\"><i class=\"fa fa-angle-right me-2\"></i>Consultation</a>
                    <a class=\"text-light\" href=\"{{ path('Contact') }}\"><i class=\"fa fa-angle-right me-2\"></i>Contact</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Newsletter</h4>
                <form action=\"\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control p-3 border-0\" placeholder=\"Your Email Address\">
                        <button class=\"btn btn-primary\">Sign Up</button>
                    </div>
                </form>
                <h6 class=\"text-primary text-uppercase mt-5 mb-5\">Follow Us</h6>
                <div class=\"d-flex\">
                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid copyright px-0\">
    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
        <div class=\"py-4 px-5 text-center text-md-start text-light\">
            <p class=\"mb-0\">&copy; 2024 Sencare, {{ \"Tout droits réservés.\"|trans }}</p>
        </div>
        <div class=\"py-4 px-5 bg-secondaire footer-shape position-relative text-center text-md-end\">
            <p class=\"mb-0 text-primaire\">
                Designed By
                <a class=\"fw-bold text-primaire\" href=\"https://euclideservices.com\" target=\"_blank\">EUCLIDES</a>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->

<a href=\"#\" class=\"back-to-top\">
    <i class=\"fa-solid fa-angles-up\"></i>
</a>

<!-- JavaScript Libraries -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\" async></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js\" async></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.45/moment-timezone.min.js\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js\" ></script>
{#<script src=\"https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.8.0/countUp.min.js\"></script>#}
{% block photobox_js %} {% endblock %}

<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('lib/owlcarousel/owl.carousel.js') }}\"></script>
<script src=\"{{ asset('lib/tempusdominus/js/moment.min.js') }}\"></script>
<script src=\"{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
<script src=\"{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>

<script src=\"{{ asset('js/main.js') }}\"></script>
{#<script src=\"{{ asset('js/main.min.js')}}\"></script>#}
{% block scroll %}

{% endblock %}

</body>
</html>", "layout.html.twig", "C:\\wamp64\\www\\sencare\\templates\\layout.html.twig");
    }
}
