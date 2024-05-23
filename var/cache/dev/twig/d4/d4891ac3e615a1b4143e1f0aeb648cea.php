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

/* site/about.html.twig */
class __TwigTemplate_dab167b14dc84f8d65a3759a0a8ff7bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'About' => [$this, 'block_About'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "site/about.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_About($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "About"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "About"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <!-- Header Start -->
    <div class=\"container-fluid py-5 mb-5 page-header-care\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-5 text-primary fw-bold mt-5 mb-3 animated fadeIn\">
                        ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A propos"), "html", null, true);
        yield "
                    </h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center\">
                            <li class=\"breadcrumb-item\">
                                <a class=\"\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">
                                    ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accueil"), "html", null, true);
        yield "
                                </a>
                            </li>
                            <li class=\"breadcrumb-item text-primary\">
                                ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A propos"), "html", null, true);
        yield "
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/snc.jpg"), "html", null, true);
        yield "\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">A propos de nous</h5>
                        <h1 class=\"display-4\">Nous sommes la pour vos soins medicaux à domicile</h1>
                    </div>
                    <p class=\"about\">SEN'Care, c'est bien plus qu'un simple service médical à domicile. En effet, il incarne une véritable passerelle vers le bien-être, offrant aux patients la possibilité de maintenir leur traitement prescrit dans le confort de leur foyer. Grâce à une équipe dévouée et compétente, nous assurons une continuité des soins, qu'il s'agisse d'un suivi régulier ou d'une assistance ponctuelle. Notre mission va au-delà de la simple prise en charge médicale ; nous aspirons à créer une communauté solidaire, où chaque individu peut s'épanouir dans un environnement propice à sa santé et à son épanouissement personnel. Avec SEN'Care, nous façonnons un avenir où le bien-être est accessible à tous, où la santé devient une priorité partagée par chacun.</p>
                    <div class=\"row g-3 pt-3\">
                        <div class=\"col-sm-3 col-6\">
                            <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Specialistes");
        yield "\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-user-md text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Qualifier<small class=\"d-block text-primary\">Docteurs</small></h6>
                            </div>
                            </a>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <a href=\"urgence\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-procedures text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Urgences<small class=\"d-block text-primary\">Services</small></h6>
                            </div>
                            </a>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-microscope text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Adapte<small class=\"d-block text-primary\">Materiel</small></h6>
                            </div>
                            </a>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-ambulance text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Libre<small class=\"d-block text-primary\">Ambulance</small></h6>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Search Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Sencare</h5>
                <h1 class=\"display-4 mb-4\">Sauvons des vies </h1>
                <h5 class=\"text-white fw-normal about\">Notre objectif principal est d'améliorer la santé et le bien-être de nos patients tout en leur offrant une expérience client exceptionnelle.</h5>
                <h5 class=\"text-white fw-normal about\">Notre mission est de fournir des services médicaux de haute qualité en mettant l'accent sur la commodité, l'accessibilité et la confidentialité pour nos patients. Nous nous engageons à faciliter la vie de nos patients en offrant des solutions innovantes telles que la prise de rendez-vous en ligne et la numérisation des dossiers médicaux.</h5>
            </div>
";
        // line 107
        yield "        </div>
    </div>
    <!-- Search End -->




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
        return "site/about.html.twig";
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
        return array (  207 => 107,  180 => 71,  169 => 63,  150 => 47,  136 => 36,  117 => 20,  110 => 16,  106 => 15,  98 => 10,  90 => 4,  80 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block About %}active{% endblock %}
{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid py-5 mb-5 page-header-care\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-5 text-primary fw-bold mt-5 mb-3 animated fadeIn\">
                        {{ \"A propos\"|trans }}
                    </h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center\">
                            <li class=\"breadcrumb-item\">
                                <a class=\"\" href=\"{{ path('Accueil') }}\">
                                    {{ \"Accueil\"|trans }}
                                </a>
                            </li>
                            <li class=\"breadcrumb-item text-primary\">
                                {{ \"A propos\"|trans }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('images/snc.jpg') }}\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">A propos de nous</h5>
                        <h1 class=\"display-4\">Nous sommes la pour vos soins medicaux à domicile</h1>
                    </div>
                    <p class=\"about\">SEN'Care, c'est bien plus qu'un simple service médical à domicile. En effet, il incarne une véritable passerelle vers le bien-être, offrant aux patients la possibilité de maintenir leur traitement prescrit dans le confort de leur foyer. Grâce à une équipe dévouée et compétente, nous assurons une continuité des soins, qu'il s'agisse d'un suivi régulier ou d'une assistance ponctuelle. Notre mission va au-delà de la simple prise en charge médicale ; nous aspirons à créer une communauté solidaire, où chaque individu peut s'épanouir dans un environnement propice à sa santé et à son épanouissement personnel. Avec SEN'Care, nous façonnons un avenir où le bien-être est accessible à tous, où la santé devient une priorité partagée par chacun.</p>
                    <div class=\"row g-3 pt-3\">
                        <div class=\"col-sm-3 col-6\">
                            <a href=\"{{ path('Specialistes') }}\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-user-md text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Qualifier<small class=\"d-block text-primary\">Docteurs</small></h6>
                            </div>
                            </a>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <a href=\"urgence\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-procedures text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Urgences<small class=\"d-block text-primary\">Services</small></h6>
                            </div>
                            </a>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <a href=\"{{ path('Accueil') }}\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-microscope text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Adapte<small class=\"d-block text-primary\">Materiel</small></h6>
                            </div>
                            </a>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <a href=\"{{ path('Accueil') }}\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-ambulance text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Libre<small class=\"d-block text-primary\">Ambulance</small></h6>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Search Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Sencare</h5>
                <h1 class=\"display-4 mb-4\">Sauvons des vies </h1>
                <h5 class=\"text-white fw-normal about\">Notre objectif principal est d'améliorer la santé et le bien-être de nos patients tout en leur offrant une expérience client exceptionnelle.</h5>
                <h5 class=\"text-white fw-normal about\">Notre mission est de fournir des services médicaux de haute qualité en mettant l'accent sur la commodité, l'accessibilité et la confidentialité pour nos patients. Nous nous engageons à faciliter la vie de nos patients en offrant des solutions innovantes telles que la prise de rendez-vous en ligne et la numérisation des dossiers médicaux.</h5>
            </div>
{#            <div class=\"mx-auto\" style=\"width: 100%; max-width: 600px;\">#}
{#                <div class=\"input-group\">#}
{#                    <select class=\"form-select border-primary w-25\" style=\"height: 60px;\">#}
{#                        <option selected>Department</option>#}
{#                        <option value=\"1\">Department 1</option>#}
{#                        <option value=\"2\">Department 2</option>#}
{#                        <option value=\"3\">Department 3</option>#}
{#                    </select>#}
{#                    <input type=\"text\" class=\"form-control border-primary w-50\" placeholder=\"Keyword\">#}
{#                    <button class=\"btn btn-dark border-0 w-25\">Search</button>#}
{#                </div>#}
{#            </div>#}
        </div>
    </div>
    <!-- Search End -->




{% endblock %}
", "site/about.html.twig", "C:\\wamp64\\www\\sencare\\templates\\site\\about.html.twig");
    }
}
