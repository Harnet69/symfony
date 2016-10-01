<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09c619487296f2112f594b5a67d4b0bf4c81da1abefd6b35b4c37c4f60189f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd1e4e5d3cfe7064163dc6f4cbe1eebfb5a2f26453f1d252cf9a25bbc7c4730f = $this->env->getExtension("native_profiler");
        $__internal_cd1e4e5d3cfe7064163dc6f4cbe1eebfb5a2f26453f1d252cf9a25bbc7c4730f->enter($__internal_cd1e4e5d3cfe7064163dc6f4cbe1eebfb5a2f26453f1d252cf9a25bbc7c4730f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd1e4e5d3cfe7064163dc6f4cbe1eebfb5a2f26453f1d252cf9a25bbc7c4730f->leave($__internal_cd1e4e5d3cfe7064163dc6f4cbe1eebfb5a2f26453f1d252cf9a25bbc7c4730f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a55a2a3a1ba18a77403be5cae4bc8e081fcf8669b2adbe4687beb517e2cab98 = $this->env->getExtension("native_profiler");
        $__internal_3a55a2a3a1ba18a77403be5cae4bc8e081fcf8669b2adbe4687beb517e2cab98->enter($__internal_3a55a2a3a1ba18a77403be5cae4bc8e081fcf8669b2adbe4687beb517e2cab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a55a2a3a1ba18a77403be5cae4bc8e081fcf8669b2adbe4687beb517e2cab98->leave($__internal_3a55a2a3a1ba18a77403be5cae4bc8e081fcf8669b2adbe4687beb517e2cab98_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc4b4be5be13e935a4afc52d982c6a48fa57fac04b08dcf983694a1e5fe98c71 = $this->env->getExtension("native_profiler");
        $__internal_fc4b4be5be13e935a4afc52d982c6a48fa57fac04b08dcf983694a1e5fe98c71->enter($__internal_fc4b4be5be13e935a4afc52d982c6a48fa57fac04b08dcf983694a1e5fe98c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc4b4be5be13e935a4afc52d982c6a48fa57fac04b08dcf983694a1e5fe98c71->leave($__internal_fc4b4be5be13e935a4afc52d982c6a48fa57fac04b08dcf983694a1e5fe98c71_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3c0fd30839fdccc5f7d721e5831618f9b1303d86a49010ec2e3dc7d241af6ac = $this->env->getExtension("native_profiler");
        $__internal_f3c0fd30839fdccc5f7d721e5831618f9b1303d86a49010ec2e3dc7d241af6ac->enter($__internal_f3c0fd30839fdccc5f7d721e5831618f9b1303d86a49010ec2e3dc7d241af6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f3c0fd30839fdccc5f7d721e5831618f9b1303d86a49010ec2e3dc7d241af6ac->leave($__internal_f3c0fd30839fdccc5f7d721e5831618f9b1303d86a49010ec2e3dc7d241af6ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
