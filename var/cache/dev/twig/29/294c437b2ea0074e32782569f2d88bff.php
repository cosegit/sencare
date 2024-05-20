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
    <div id=\"carouselExampleCaptions\" class=\"carousel carousel-fade slide\" data-bs-ride=\"carousel\" data-bs-pause=\"false\">
    <div class=\"carousel-indicators\">
        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
    </div>
    <div class=\"carousel-inner\">
        <div class=\"carousel-item position-relative active\" data-bs-interval=\"5000\">
            <div class=\"carousel-img\">
                <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_1.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid w-100 animated fadIn position-absolute\">
            </div>
            <div class=\"container-fluid py-5\">
                <div class=\"container py-5\">
                    <div class=\"row justify-content-start text-carousel position-absolute\">
                        <div class=\"col-lg-8 text-center text-lg-start\">
                            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                style=\"border-color: rgba(256, 256, 256, .3) !important;\">Welcome To Medinova</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">Best Healthcare Solution In Your City</h1>
                            <div class=\"pt-2\">
                                <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Find Doctor</a>
                                <a href=\"\"
                                   class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
            <div class=\"carousel-img\">
                <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_2.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid position-absolute w-100\">
            </div>
            <div class=\"container-fluid py-5\">
                <div class=\"container py-5\">
                    <div class=\"row justify-content-start text-carousel position-absolute\">
                        <div class=\"col-lg-8 text-center text-lg-start\">
                            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                style=\"border-color: rgba(256, 256, 256, .3) !important;\">Welcome To Medinova</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">Best Healthcare Solution In Your City</h1>
                            <div class=\"pt-2\">
                                <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Find Doctor</a>
                                <a href=\"\"
                                   class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
            <div class=\"carousel-img\">
                <img src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide_3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid position-absolute animated fadIn w-100\">
            </div>
            <div class=\"container-fluid py-5\">
                <div class=\"container py-5\">
                    <div class=\"row justify-content-start text-carousel position-absolute\">
                        <div class=\"col-lg-8 text-center text-lg-start\">
                            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                style=\"border-color: rgba(256, 256, 256, .3) !important;\">Welcome To Medinova</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">Best Healthcare Solution In Your City</h1>
                            <div class=\"pt-2\">
                                <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Find Doctor</a>
                                <a href=\"\"
                                   class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
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
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/about.jpg"), "html", null, true);
        yield "\"
                             style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">About Us</h5>
                        <h1 class=\"display-4\">Best Medical Care For Yourself and Your Family</h1>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor
                        voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum
                        et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur
                        takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore.
                        Amet erat amet et magna</p>
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


    <!-- Services Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Services</h5>
                <h1 class=\"display-4\">Excellent Medical Services</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-user-md text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Emergency Care</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Operation & Surgery</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Outdoor Checkup</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Ambulance Service</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Medicine & Pharmacy</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Blood Testing</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Appointment</h5>
                        <h1 class=\"display-4\">Make An Appointment For Your Family</h1>
                    </div>
                    <p class=\"text-white mb-5\">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum.
                        Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero
                        eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit.
                        Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class=\"btn btn-dark rounded-pill py-3 px-5 me-3\" href=\"\">Find Doctor</a>
                    <a class=\"btn btn-outline-dark rounded-pill py-3 px-5\" href=\"\">Read More</a>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"bg-white text-center rounded p-5\">
                        <h1 class=\"mb-4\">Book An Appointment</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Choose Department</option>
                                        <option value=\"1\">Department 1</option>
                                        <option value=\"2\">Department 2</option>
                                        <option value=\"3\">Department 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Select Doctor</option>
                                        <option value=\"1\">Doctor 1</option>
                                        <option value=\"2\">Doctor 2</option>
                                        <option value=\"3\">Doctor 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Your Name\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Your Email\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                               class=\"form-control bg-light border-0 datetimepicker-input\"
                                               placeholder=\"Date\" data-target=\"#date\" data-toggle=\"datetimepicker\"
                                               style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"time\" id=\"time\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                               class=\"form-control bg-light border-0 datetimepicker-input\"
                                               placeholder=\"Time\" data-target=\"#time\" data-toggle=\"datetimepicker\"
                                               style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Make An Appointment
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
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Medical Packages</h5>
                <h1 class=\"display-4\">Awesome Medical Programs</h1>
            </div>
            <div class=\"owl-carousel price-carousel position-relative\" style=\"padding: 0 45px 45px 45px;\">
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/price-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"
                             style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Pregnancy Care</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>49<small
                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/price-2.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"
                             style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Health Checkup</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>99<small
                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/price-3.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"
                             style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Dental Care</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>149<small
                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/price-4.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"
                             style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Operation & Surgery</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>199<small
                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
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
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Our Doctors</h5>
                <h1 class=\"display-4\">Qualified Healthcare Professionals</h1>
            </div>
            <div class=\"owl-carousel team-carousel position-relative\">
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=\"";
        // line 421
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
        // line 445
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
        // line 469
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


    <!-- Search Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Find A Doctor</h5>
                <h1 class=\"display-4 mb-4\">Find A Healthcare Professionals</h1>
                <h5 class=\"text-white fw-normal\">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos
                    sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
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


    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Testimonial</h5>
                <h1 class=\"display-4\">Patients Say About Our Services</h1>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"owl-carousel testimonial-carousel\">
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\"
                                     src=\"";
        // line 535
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
        // line 551
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
        // line 567
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


    <!-- Blog Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Blog Post</h5>
                <h1 class=\"display-4\">Our Latest Medical Blog Posts</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"";
        // line 598
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
        yield "\" width=\"25\"
                                     height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"";
        // line 619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog-2.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
        yield "\" width=\"25\"
                                     height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog-3.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"";
        // line 648
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
        yield "\" width=\"25\"
                                     height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


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
        return array (  791 => 648,  780 => 640,  764 => 627,  753 => 619,  737 => 606,  726 => 598,  692 => 567,  673 => 551,  654 => 535,  585 => 469,  558 => 445,  531 => 421,  492 => 385,  468 => 364,  444 => 343,  420 => 322,  193 => 98,  152 => 60,  128 => 39,  104 => 18,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block Accueil %}active{% endblock %}

{% block body %}


    <!-- Hero Start -->
    <div id=\"carouselExampleCaptions\" class=\"carousel carousel-fade slide\" data-bs-ride=\"carousel\" data-bs-pause=\"false\">
    <div class=\"carousel-indicators\">
        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
    </div>
    <div class=\"carousel-inner\">
        <div class=\"carousel-item position-relative active\" data-bs-interval=\"5000\">
            <div class=\"carousel-img\">
                <img src=\"{{ asset('images/slide_1.jpg') }}\" alt=\"\" class=\"img-fluid w-100 animated fadIn position-absolute\">
            </div>
            <div class=\"container-fluid py-5\">
                <div class=\"container py-5\">
                    <div class=\"row justify-content-start text-carousel position-absolute\">
                        <div class=\"col-lg-8 text-center text-lg-start\">
                            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                style=\"border-color: rgba(256, 256, 256, .3) !important;\">Welcome To Medinova</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">Best Healthcare Solution In Your City</h1>
                            <div class=\"pt-2\">
                                <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Find Doctor</a>
                                <a href=\"\"
                                   class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
            <div class=\"carousel-img\">
                <img src=\"{{ asset('images/slide_2.jpg') }}\" alt=\"\" class=\"img-fluid position-absolute w-100\">
            </div>
            <div class=\"container-fluid py-5\">
                <div class=\"container py-5\">
                    <div class=\"row justify-content-start text-carousel position-absolute\">
                        <div class=\"col-lg-8 text-center text-lg-start\">
                            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                style=\"border-color: rgba(256, 256, 256, .3) !important;\">Welcome To Medinova</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">Best Healthcare Solution In Your City</h1>
                            <div class=\"pt-2\">
                                <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Find Doctor</a>
                                <a href=\"\"
                                   class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"carousel-item position-relative\" data-bs-interval=\"5000\">
            <div class=\"carousel-img\">
                <img src=\"{{ asset('images/slide_3.jpg') }}\" alt=\"\" class=\"img-fluid position-absolute animated fadIn w-100\">
            </div>
            <div class=\"container-fluid py-5\">
                <div class=\"container py-5\">
                    <div class=\"row justify-content-start text-carousel position-absolute\">
                        <div class=\"col-lg-8 text-center text-lg-start\">
                            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 animated zoomIn delay-1s\"
                                style=\"border-color: rgba(256, 256, 256, .3) !important;\">Welcome To Medinova</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn delay-1s\">Best Healthcare Solution In Your City</h1>
                            <div class=\"pt-2\">
                                <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Find Doctor</a>
                                <a href=\"\"
                                   class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2 animated zoomIn delay-2s\">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
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
                        <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('images/about.jpg') }}\"
                             style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">About Us</h5>
                        <h1 class=\"display-4\">Best Medical Care For Yourself and Your Family</h1>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor
                        voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum
                        et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur
                        takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore.
                        Amet erat amet et magna</p>
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


    <!-- Services Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Services</h5>
                <h1 class=\"display-4\">Excellent Medical Services</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-user-md text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Emergency Care</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Operation & Surgery</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Outdoor Checkup</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Ambulance Service</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Medicine & Pharmacy</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                        <h4 class=\"mb-3\">Blood Testing</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                            elitr dolor amet sit</p>
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
                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Appointment</h5>
                        <h1 class=\"display-4\">Make An Appointment For Your Family</h1>
                    </div>
                    <p class=\"text-white mb-5\">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum.
                        Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero
                        eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit.
                        Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class=\"btn btn-dark rounded-pill py-3 px-5 me-3\" href=\"\">Find Doctor</a>
                    <a class=\"btn btn-outline-dark rounded-pill py-3 px-5\" href=\"\">Read More</a>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"bg-white text-center rounded p-5\">
                        <h1 class=\"mb-4\">Book An Appointment</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Choose Department</option>
                                        <option value=\"1\">Department 1</option>
                                        <option value=\"2\">Department 2</option>
                                        <option value=\"3\">Department 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Select Doctor</option>
                                        <option value=\"1\">Doctor 1</option>
                                        <option value=\"2\">Doctor 2</option>
                                        <option value=\"3\">Doctor 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Your Name\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Your Email\"
                                           style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                               class=\"form-control bg-light border-0 datetimepicker-input\"
                                               placeholder=\"Date\" data-target=\"#date\" data-toggle=\"datetimepicker\"
                                               style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"time\" id=\"time\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                               class=\"form-control bg-light border-0 datetimepicker-input\"
                                               placeholder=\"Time\" data-target=\"#time\" data-toggle=\"datetimepicker\"
                                               style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Make An Appointment
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
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Medical Packages</h5>
                <h1 class=\"display-4\">Awesome Medical Programs</h1>
            </div>
            <div class=\"owl-carousel price-carousel position-relative\" style=\"padding: 0 45px 45px 45px;\">
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"{{ asset('images/price-1.jpg') }}\" alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"
                             style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Pregnancy Care</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>49<small
                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"{{ asset('images/price-2.jpg') }}\" alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"
                             style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Health Checkup</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>99<small
                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"{{ asset('images/price-3.jpg') }}\" alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"
                             style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Dental Care</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>149<small
                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=\"{{ asset('images/price-4.jpg') }}\" alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\"
                             style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Operation & Surgery</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>199<small
                                        class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
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
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Our Doctors</h5>
                <h1 class=\"display-4\">Qualified Healthcare Professionals</h1>
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


    <!-- Search Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Find A Doctor</h5>
                <h1 class=\"display-4 mb-4\">Find A Healthcare Professionals</h1>
                <h5 class=\"text-white fw-normal\">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos
                    sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
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


    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Testimonial</h5>
                <h1 class=\"display-4\">Patients Say About Our Services</h1>
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


    <!-- Blog Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Blog Post</h5>
                <h1 class=\"display-4\">Our Latest Medical Blog Posts</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"{{ asset('images/blog-1.jpg') }}\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"{{ asset('images/user.jpg') }}\" width=\"25\"
                                     height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"{{ asset('images/blog-2.jpg') }}\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"{{ asset('images/user.jpg') }}\" width=\"25\"
                                     height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"{{ asset('images/blog-3.jpg') }}\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"{{ asset('images/user.jpg') }}\" width=\"25\"
                                     height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


{% endblock %}", "site/accueil.html.twig", "C:\\wamp64\\www\\sencare\\templates\\site\\accueil.html.twig");
    }
}