<?php

/* C:\xampp\htdocs/themes/demo/layouts/amugraphics_layout.htm */
class __TwigTemplate_87aa62f87fadbc51f92e8c5453b997ab5954e69b637a0d61963151c910f923de extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "|AMU-Graphics</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/grayscale.css"));
        // line 17
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/font-awesome/css/font-awesome.min.css"));
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">
    
    ";
        // line 35
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 36
        echo "    
<!-- jQuery -->
    <script src=\"";
        // line 38
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/bootstrap.min.js", 2 => "assets/javascript/jquery.easing.min.js", 3 => "assets/javascript/grayscale.js"));
        // line 42
        echo "\"></script>


    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/themes/demo/layouts/amugraphics_layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 42,  69 => 38,  65 => 36,  63 => 35,  45 => 20,  40 => 17,  38 => 15,  32 => 12,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>{{ this.page.title }}|AMU-Graphics</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ ['assets/css/bootstrap.min.css',*/
/*                     'assets/css/grayscale.css'*/
/*                     ]|theme }}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="{{['assets/font-awesome/css/font-awesome.min.css']|theme}}" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">*/
/*     */
/*     {% page %}*/
/*     */
/* <!-- jQuery -->*/
/*     <script src="{{['assets/javascript/jquery.js',*/
/*                     'assets/javascript/bootstrap.min.js',*/
/*                     'assets/javascript/jquery.easing.min.js',*/
/*                     'assets/javascript/grayscale.js'*/
/*     ]|theme}}"></script>*/
/* */
/* */
/*     <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->*/
/*     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
