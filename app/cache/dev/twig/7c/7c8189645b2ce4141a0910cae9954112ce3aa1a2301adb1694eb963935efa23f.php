<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3e16cb522bd40d5ad7cbf7412fd3b4839bf7b32851dc95c96fc25973e4a1e3ad extends Twig_Template
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
        $__internal_9b048c6976cea3184d1b916777959e5e3acb934485b448120e05af2e14a4b208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b048c6976cea3184d1b916777959e5e3acb934485b448120e05af2e14a4b208->enter($__internal_9b048c6976cea3184d1b916777959e5e3acb934485b448120e05af2e14a4b208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b048c6976cea3184d1b916777959e5e3acb934485b448120e05af2e14a4b208->leave($__internal_9b048c6976cea3184d1b916777959e5e3acb934485b448120e05af2e14a4b208_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46df36313a56dcf71c3e9105cb46ba4bd0cae597c6584e22c89567f2d95a70aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46df36313a56dcf71c3e9105cb46ba4bd0cae597c6584e22c89567f2d95a70aa->enter($__internal_46df36313a56dcf71c3e9105cb46ba4bd0cae597c6584e22c89567f2d95a70aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46df36313a56dcf71c3e9105cb46ba4bd0cae597c6584e22c89567f2d95a70aa->leave($__internal_46df36313a56dcf71c3e9105cb46ba4bd0cae597c6584e22c89567f2d95a70aa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c689efa8b6868ebcdd357d7ef01be3e5445fb53421fd0b5a577b8b7bfef7132c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c689efa8b6868ebcdd357d7ef01be3e5445fb53421fd0b5a577b8b7bfef7132c->enter($__internal_c689efa8b6868ebcdd357d7ef01be3e5445fb53421fd0b5a577b8b7bfef7132c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c689efa8b6868ebcdd357d7ef01be3e5445fb53421fd0b5a577b8b7bfef7132c->leave($__internal_c689efa8b6868ebcdd357d7ef01be3e5445fb53421fd0b5a577b8b7bfef7132c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_283253b412bd0c128e7dfb0edc184ae60b0d634c5ad330ece5372864902be7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283253b412bd0c128e7dfb0edc184ae60b0d634c5ad330ece5372864902be7f2->enter($__internal_283253b412bd0c128e7dfb0edc184ae60b0d634c5ad330ece5372864902be7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_283253b412bd0c128e7dfb0edc184ae60b0d634c5ad330ece5372864902be7f2->leave($__internal_283253b412bd0c128e7dfb0edc184ae60b0d634c5ad330ece5372864902be7f2_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/dev/PrestaShop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
