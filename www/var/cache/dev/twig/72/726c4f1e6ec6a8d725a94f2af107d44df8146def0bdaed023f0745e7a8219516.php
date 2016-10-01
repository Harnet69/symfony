<?php

/* base.html.twig */
class __TwigTemplate_19a4c49bd6393d345519e69a12a38ab54df7a7c70c38b221ec6da67cecbac128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf5da4401f987882bf58521f0c2dab818493e7d6c865db152a847a8dfa235c9d = $this->env->getExtension("native_profiler");
        $__internal_bf5da4401f987882bf58521f0c2dab818493e7d6c865db152a847a8dfa235c9d->enter($__internal_bf5da4401f987882bf58521f0c2dab818493e7d6c865db152a847a8dfa235c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bf5da4401f987882bf58521f0c2dab818493e7d6c865db152a847a8dfa235c9d->leave($__internal_bf5da4401f987882bf58521f0c2dab818493e7d6c865db152a847a8dfa235c9d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28067cbcce4c6b35d764e73f9bf321e8ec9a2b4cca42143ded9d7795b936f035 = $this->env->getExtension("native_profiler");
        $__internal_28067cbcce4c6b35d764e73f9bf321e8ec9a2b4cca42143ded9d7795b936f035->enter($__internal_28067cbcce4c6b35d764e73f9bf321e8ec9a2b4cca42143ded9d7795b936f035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_28067cbcce4c6b35d764e73f9bf321e8ec9a2b4cca42143ded9d7795b936f035->leave($__internal_28067cbcce4c6b35d764e73f9bf321e8ec9a2b4cca42143ded9d7795b936f035_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2424bcabed6136d3c39a8968c6e522d62dbed4b512bf5af7aa7412ded46bd58c = $this->env->getExtension("native_profiler");
        $__internal_2424bcabed6136d3c39a8968c6e522d62dbed4b512bf5af7aa7412ded46bd58c->enter($__internal_2424bcabed6136d3c39a8968c6e522d62dbed4b512bf5af7aa7412ded46bd58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2424bcabed6136d3c39a8968c6e522d62dbed4b512bf5af7aa7412ded46bd58c->leave($__internal_2424bcabed6136d3c39a8968c6e522d62dbed4b512bf5af7aa7412ded46bd58c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd3ec1d76c1ca4394ed334059bb49c78f0b84c7673d8e47e783f16fd5112afbc = $this->env->getExtension("native_profiler");
        $__internal_cd3ec1d76c1ca4394ed334059bb49c78f0b84c7673d8e47e783f16fd5112afbc->enter($__internal_cd3ec1d76c1ca4394ed334059bb49c78f0b84c7673d8e47e783f16fd5112afbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd3ec1d76c1ca4394ed334059bb49c78f0b84c7673d8e47e783f16fd5112afbc->leave($__internal_cd3ec1d76c1ca4394ed334059bb49c78f0b84c7673d8e47e783f16fd5112afbc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19a3a1c552d2095c405618bfe66e60f762292b49ad3ef45cd205fe6d7e50149e = $this->env->getExtension("native_profiler");
        $__internal_19a3a1c552d2095c405618bfe66e60f762292b49ad3ef45cd205fe6d7e50149e->enter($__internal_19a3a1c552d2095c405618bfe66e60f762292b49ad3ef45cd205fe6d7e50149e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_19a3a1c552d2095c405618bfe66e60f762292b49ad3ef45cd205fe6d7e50149e->leave($__internal_19a3a1c552d2095c405618bfe66e60f762292b49ad3ef45cd205fe6d7e50149e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
