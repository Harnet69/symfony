<?php

/* post/new.html.twig */
class __TwigTemplate_5a5bcad82497f8133908ff7beb36647400afc9dff1e42aaeb4a7399375c35d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0c25337141831ea901b734ef9f5e2d307c4897ecbedaa9fe3b778823a2f625d = $this->env->getExtension("native_profiler");
        $__internal_e0c25337141831ea901b734ef9f5e2d307c4897ecbedaa9fe3b778823a2f625d->enter($__internal_e0c25337141831ea901b734ef9f5e2d307c4897ecbedaa9fe3b778823a2f625d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c25337141831ea901b734ef9f5e2d307c4897ecbedaa9fe3b778823a2f625d->leave($__internal_e0c25337141831ea901b734ef9f5e2d307c4897ecbedaa9fe3b778823a2f625d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c21599892ce4cd9b0fc667d11a6361027fac09b832287ecce67aa11b6fbb7c6 = $this->env->getExtension("native_profiler");
        $__internal_5c21599892ce4cd9b0fc667d11a6361027fac09b832287ecce67aa11b6fbb7c6->enter($__internal_5c21599892ce4cd9b0fc667d11a6361027fac09b832287ecce67aa11b6fbb7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5c21599892ce4cd9b0fc667d11a6361027fac09b832287ecce67aa11b6fbb7c6->leave($__internal_5c21599892ce4cd9b0fc667d11a6361027fac09b832287ecce67aa11b6fbb7c6_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
