<?php

/* C:\xampp\htdocs/themes/demo/pages/index.htm */
class __TwigTemplate_d12cb52e3da6885a83126f0a443a45f55b2acad6e4ebcdf36ee5430f0315b880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Navigation -->
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <img src=\"";
        // line 5
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/images/logo.png"));
        echo "\"/>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
                <ul class=\"nav navbar-nav\">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#download\">Portfolio</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class=\"intro\">
        <div class=\"intro-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h1 class=\"brand-heading\">Umagraphics</h1>
                        <p class=\"intro-text\"></p>
                        <a href=\"#about\" class=\"btn btn-circle page-scroll\">
                            <i class=\"fa fa-angle-double-down animated\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id=\"about\" class=\"container content-section text-center\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>About Grayscale</h2>
                <p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href=\"http://startbootstrap.com/template-overviews/grayscale/\">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                <p>This theme features stock photos by <a href=\"http://gratisography.com/\">Gratisography</a> along with a custom Google Maps skin courtesy of <a href=\"http://snazzymaps.com/\">Snazzy Maps</a>.</p>
                <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id=\"download\" class=\"content-section text-center\">
        <div class=\"download-section\">
            <div class=\"container\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href=\"http://startbootstrap.com/template-overviews/grayscale/\" class=\"btn btn-default btn-lg\">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id=\"contact\" class=\"container content-section text-center\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href=\"mailto:feedback@startbootstrap.com\">feedback@startbootstrap.com</a>
                </p>
                <ul class=\"list-inline banner-social-buttons\">
                    <li>
                        <a href=\"https://twitter.com/SBootstrap\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-twitter fa-fw\"></i> <span class=\"network-name\">Twitter</span></a>
                    </li>
                    <li>
                        <a href=\"https://github.com/IronSummitMedia/startbootstrap\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-github fa-fw\"></i> <span class=\"network-name\">Github</span></a>
                    </li>
                    <li>
                        <a href=\"https://plus.google.com/+Startbootstrap/posts\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-google-plus fa-fw\"></i> <span class=\"network-name\">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id=\"map\"></div>

    <!-- Footer -->
    <footer>
        <div class=\"container text-center\">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/themes/demo/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <!-- Navigation -->*/
/*     <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <img src="{{['assets/images/logo.png']|theme }}"/>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse navbar-right navbar-main-collapse">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <!-- Hidden li included to remove active class from about link when scrolled up past about section -->*/
/*                     <li class="hidden">*/
/*                         <a href="#page-top"></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#about">About</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#download">Portfolio</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#contact">Contact</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/*     <!-- Intro Header -->*/
/*     <header class="intro">*/
/*         <div class="intro-body">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-8 col-md-offset-2">*/
/*                         <h1 class="brand-heading">Umagraphics</h1>*/
/*                         <p class="intro-text"></p>*/
/*                         <a href="#about" class="btn btn-circle page-scroll">*/
/*                             <i class="fa fa-angle-double-down animated"></i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <!-- About Section -->*/
/*     <section id="about" class="container content-section text-center">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2">*/
/*                 <h2>About Grayscale</h2>*/
/*                 <p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>*/
/*                 <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>*/
/*                 <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <!-- Download Section -->*/
/*     <section id="download" class="content-section text-center">*/
/*         <div class="download-section">*/
/*             <div class="container">*/
/*                 <div class="col-lg-8 col-lg-offset-2">*/
/*                     <h2>Download Grayscale</h2>*/
/*                     <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>*/
/*                     <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <!-- Contact Section -->*/
/*     <section id="contact" class="container content-section text-center">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2">*/
/*                 <h2>Contact Start Bootstrap</h2>*/
/*                 <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>*/
/*                 <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>*/
/*                 </p>*/
/*                 <ul class="list-inline banner-social-buttons">*/
/*                     <li>*/
/*                         <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <!-- Map Section -->*/
/*     <div id="map"></div>*/
/* */
/*     <!-- Footer -->*/
/*     <footer>*/
/*         <div class="container text-center">*/
/*             <p>Copyright &copy; Your Website 2014</p>*/
/*         </div>*/
/*     </footer>*/
