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

/* site/specialistes.html.twig */
class __TwigTemplate_74da6b90648a693098a61ca8876f7c9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specialistes' => [$this, 'block_specialistes'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/specialistes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/specialistes.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "site/specialistes.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_specialistes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specialistes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specialistes"));

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
        yield "    <div class=\"container-fluid py-5 mb-5 page-header-specialite\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-5 text-white fw-bold mt-5 mb-3 animated fadeIn\">
                        ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Spécialistes"), "html", null, true);
        yield "
                    </h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center\">
                            <li class=\"breadcrumb-item\">
                                <a class=\"text-white\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">
                                    ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accueil"), "html", null, true);
        yield "
                                </a>
                            </li>
                            <li class=\"breadcrumb-item text-white\">
                                ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Spécialistes"), "html", null, true);
        yield "
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <h1>
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
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-1.avif"), "html", null, true);
        yield "\"
                                     style=\"object-fit: cover;\">
                            </div>
                            <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                                <div class=\"mt-auto p-4\">
                                    <h3>SAMBA FALL</h3>
                                    <h6 class=\"fw-normal fst-italic text-primary mb-4\"> Specialiste Cardiologue</h6>
                                    <p class=\"m-0\"></p>
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
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-2.avif"), "html", null, true);
        yield "\"
                                     style=\"object-fit: cover;\">
                            </div>
                            <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                                <div class=\"mt-auto p-4\">
                                    <h3>ANTA DIOP </h3>
                                    <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cancerologue</h6>
                                    <p class=\"m-0\"></p>
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
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-3.avif"), "html", null, true);
        yield "\"
                                     style=\"object-fit: cover;\">
                            </div>
                            <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                                <div class=\"mt-auto p-4\">
                                    <h3>FATOU DIOP</h3>
                                    <h6 class=\"fw-normal fst-italic text-primary mb-4\">Medecin General</h6>
                                    <p class=\"m-0\"></p>
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
    </h1>

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
        return "site/specialistes.html.twig";
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
        return array (  191 => 87,  164 => 63,  138 => 40,  116 => 21,  109 => 17,  105 => 16,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block specialistes %}active{% endblock %}

{% block body %}
    <div class=\"container-fluid py-5 mb-5 page-header-specialite\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-5 text-white fw-bold mt-5 mb-3 animated fadeIn\">
                        {{ \"Spécialistes\"|trans }}
                    </h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center\">
                            <li class=\"breadcrumb-item\">
                                <a class=\"text-white\" href=\"{{ path('Accueil') }}\">
                                    {{ \"Accueil\"|trans }}
                                </a>
                            </li>
                            <li class=\"breadcrumb-item text-white\">
                                {{ \"Spécialistes\"|trans }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <h1>
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
                                <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-1.avif') }}\"
                                     style=\"object-fit: cover;\">
                            </div>
                            <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                                <div class=\"mt-auto p-4\">
                                    <h3>SAMBA FALL</h3>
                                    <h6 class=\"fw-normal fst-italic text-primary mb-4\"> Specialiste Cardiologue</h6>
                                    <p class=\"m-0\"></p>
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
                                <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-2.avif') }}\"
                                     style=\"object-fit: cover;\">
                            </div>
                            <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                                <div class=\"mt-auto p-4\">
                                    <h3>ANTA DIOP </h3>
                                    <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cancerologue</h6>
                                    <p class=\"m-0\"></p>
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
                                <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-3.avif') }}\"
                                     style=\"object-fit: cover;\">
                            </div>
                            <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                                <div class=\"mt-auto p-4\">
                                    <h3>FATOU DIOP</h3>
                                    <h6 class=\"fw-normal fst-italic text-primary mb-4\">Medecin General</h6>
                                    <p class=\"m-0\"></p>
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
    </h1>

{% endblock %}", "site/specialistes.html.twig", "C:\\wamp64\\www\\sencare\\templates\\site\\specialistes.html.twig");
    }
}
