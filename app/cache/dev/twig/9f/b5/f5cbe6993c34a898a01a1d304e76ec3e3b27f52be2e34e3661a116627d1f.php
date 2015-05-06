<?php

/* TFTennisFilterBundle:Security:login.html.twig */
class __TwigTemplate_9fb5f5cbe6993c34a898a01a1d304e76ec3e3b27f52be2e34e3661a116627d1f extends Twig_Template
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

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href=\" ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tftennisfilter/css/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tftennisfilter/css/bower_components/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Custom CSS -->
    <link href=\" ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tftennisfilter/css/dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\" ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tftennisfilter/css/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Please Sign In</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                            <fieldset>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Pseudo\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" autofocus/>
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" />
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\">Login</button>
                                <!-- <a href=\"index.html\" class=\"btn btn-lg btn-success btn-block\">Login</a> -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    
    
     <!-- <script src=\"../bower_components/jquery/dist/jquery.min.js\"></script> -->

    <!-- Bootstrap Core JavaScript -->
     <!-- <script src=\"../bower_components/bootstrap/dist/js/bootstrap.min.js\"></script> -->

    <!-- Metis Menu Plugin JavaScript -->
     <!-- <script src=\"../bower_components/metisMenu/dist/metisMenu.min.js\"></script> -->

    <!-- Custom Theme JavaScript -->
     <!-- <script src=\"../dist/js/sb-admin-2.js\"></script> -->

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "TFTennisFilterBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 48,  77 => 45,  53 => 24,  47 => 21,  41 => 18,  35 => 15,  19 => 1,);
    }
}
