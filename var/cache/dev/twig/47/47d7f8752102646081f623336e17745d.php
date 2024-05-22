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

/* site/contact.html.twig */
class __TwigTemplate_a6ea28fe069808864605f757bebd8b43 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contact' => [$this, 'block_contact'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/contact.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "site/contact.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

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
    <div class=\"container-fluid py-5 mb-5 page-header-contact\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-5 text-primary fw-bold mt-5 mb-3 animated fadeIn\">
                        ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact"), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact"), "html", null, true);
        yield "
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Contact Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Contact</h5>
                <h1 class=\"display-4\">N'hesitez pas a Nous contactez</h1>
            </div>
            <div class=\"row g-5 mb-5\">
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-location-arrow text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">123 Street, New York, USA</h6>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-phone text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">+221 77 781 29 06</h6>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-envelope-open text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">sencare@gmail.com</h6>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\" style=\"height: 500px;\">
                    <div class=\"position-relative h-100\">
";
        // line 69
        yield "                        <iframe  class=\"position-relative w-100 h-100\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15434.037743651617!2d-17.275554806591764!3d14.740304907000539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2ssn!4v1716388713046!5m2!1sfr!2ssn\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center position-relative\" style=\"margin-top: -200px; z-index: 1;\">
                <div class=\"col-lg-8\">
                    <div class=\"bg-white rounded p-5 m-5 mb-0\">
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Nom\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Sujet\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control bg-light border-0\" rows=\"5\" placeholder=\"Message\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




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
        return "site/contact.html.twig";
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
        return array (  165 => 69,  117 => 20,  110 => 16,  106 => 15,  98 => 10,  90 => 4,  80 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block contact %}active{% endblock %}
{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid py-5 mb-5 page-header-contact\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-5 text-primary fw-bold mt-5 mb-3 animated fadeIn\">
                        {{ \"Contact\"|trans }}
                    </h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center\">
                            <li class=\"breadcrumb-item\">
                                <a class=\"\" href=\"{{ path('Accueil') }}\">
                                    {{ \"Accueil\"|trans }}
                                </a>
                            </li>
                            <li class=\"breadcrumb-item text-primary\">
                                {{ \"Contact\"|trans }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Contact Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Contact</h5>
                <h1 class=\"display-4\">N'hesitez pas a Nous contactez</h1>
            </div>
            <div class=\"row g-5 mb-5\">
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-location-arrow text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">123 Street, New York, USA</h6>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-phone text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">+221 77 781 29 06</h6>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-envelope-open text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">sencare@gmail.com</h6>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\" style=\"height: 500px;\">
                    <div class=\"position-relative h-100\">
{#                        <iframe class=\"position-relative w-100 h-100\"#}
{#                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"#}
{#                                frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"#}
{#                                tabindex=\"0\"></iframe>#}
                        <iframe  class=\"position-relative w-100 h-100\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15434.037743651617!2d-17.275554806591764!3d14.740304907000539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2ssn!4v1716388713046!5m2!1sfr!2ssn\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center position-relative\" style=\"margin-top: -200px; z-index: 1;\">
                <div class=\"col-lg-8\">
                    <div class=\"bg-white rounded p-5 m-5 mb-0\">
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Nom\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Sujet\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control bg-light border-0\" rows=\"5\" placeholder=\"Message\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




{% endblock %}
", "site/contact.html.twig", "C:\\wamp64\\www\\sencare\\templates\\site\\contact.html.twig");
    }
}
