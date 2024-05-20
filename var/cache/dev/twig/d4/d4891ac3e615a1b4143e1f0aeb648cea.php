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
        yield "

    <!-- About Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/about.jpg"), "html", null, true);
        yield "\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">About Us</h5>
                        <h1 class=\"display-4\">Best Medical Care For Yourself and Your Family</h1>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                    <div class=\"row g-3 pt-3\">
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-user-md text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Qualified<small class=\"d-block text-primary\">Doctors</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-procedures text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Emergency<small class=\"d-block text-primary\">Services</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-microscope text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Accurate<small class=\"d-block text-primary\">Testing</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-ambulance text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Free<small class=\"d-block text-primary\">Ambulance</small></h6>
                            </div>
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
                <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Find A Doctor</h5>
                <h1 class=\"display-4 mb-4\">Find A Healthcare Professionals</h1>
                <h5 class=\"text-white fw-normal\">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class=\"mx-auto\" style=\"width: 100%; max-width: 600px;\">
                <div class=\"input-group\">
                    <select class=\"form-select border-primary w-25\" style=\"height: 60px;\">
                        <option selected>Department</option>
                        <option value=\"1\">Department 1</option>
                        <option value=\"2\">Department 2</option>
                        <option value=\"3\">Department 3</option>
                    </select>
                    <input type=\"text\" class=\"form-control border-primary w-50\" placeholder=\"Keyword\">
                    <button class=\"btn btn-dark border-0 w-25\">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Our Doctors</h5>
                <h1 class=\"display-4\">Qualified Healthcare Professionals</h1>
            </div>
            <div class=\"owl-carousel team-carousel position-relative\">
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-1.jpg"), "html", null, true);
        yield "\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-2.jpg"), "html", null, true);
        yield "\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team-3.jpg"), "html", null, true);
        yield "\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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
        return array (  225 => 128,  203 => 109,  181 => 90,  100 => 12,  90 => 4,  80 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block About %}active{% endblock %}
{% block body %}


    <!-- About Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('images/about.jpg') }}\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">About Us</h5>
                        <h1 class=\"display-4\">Best Medical Care For Yourself and Your Family</h1>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                    <div class=\"row g-3 pt-3\">
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-user-md text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Qualified<small class=\"d-block text-primary\">Doctors</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-procedures text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Emergency<small class=\"d-block text-primary\">Services</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-microscope text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Accurate<small class=\"d-block text-primary\">Testing</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-ambulance text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Free<small class=\"d-block text-primary\">Ambulance</small></h6>
                            </div>
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
                <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Find A Doctor</h5>
                <h1 class=\"display-4 mb-4\">Find A Healthcare Professionals</h1>
                <h5 class=\"text-white fw-normal\">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class=\"mx-auto\" style=\"width: 100%; max-width: 600px;\">
                <div class=\"input-group\">
                    <select class=\"form-select border-primary w-25\" style=\"height: 60px;\">
                        <option selected>Department</option>
                        <option value=\"1\">Department 1</option>
                        <option value=\"2\">Department 2</option>
                        <option value=\"3\">Department 3</option>
                    </select>
                    <input type=\"text\" class=\"form-control border-primary w-50\" placeholder=\"Keyword\">
                    <button class=\"btn btn-dark border-0 w-25\">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Our Doctors</h5>
                <h1 class=\"display-4\">Qualified Healthcare Professionals</h1>
            </div>
            <div class=\"owl-carousel team-carousel position-relative\">
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-1.jpg') }}\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-2.jpg') }}\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"{{ asset('images/team-3.jpg') }}\" style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

{% endblock %}
", "site/about.html.twig", "C:\\wamp64\\www\\sencare\\templates\\site\\about.html.twig");
    }
}
