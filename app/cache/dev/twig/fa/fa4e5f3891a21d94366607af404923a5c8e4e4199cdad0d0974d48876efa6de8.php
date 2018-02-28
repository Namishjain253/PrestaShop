<?php

/* PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig */
class __TwigTemplate_0d074161fe765a703b63d0260cc093767427b014d6c174b6cc149b8e38245902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3372cf789b28cf8b2c4fbf7454f6daac2f1c90da31ed8accb66124d4471f74e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3372cf789b28cf8b2c4fbf7454f6daac2f1c90da31ed8accb66124d4471f74e6->enter($__internal_3372cf789b28cf8b2c4fbf7454f6daac2f1c90da31ed8accb66124d4471f74e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig"));

        // line 25
        echo "<div class=\"modal fade\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\">
    <div class=\"modal-dialog ";
        // line 26
        if (array_key_exists("class", $context)) {
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        }
        echo "\">
        <div class=\"modal-content\">
            ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "
            ";
        // line 40
        if (array_key_exists("progressbar", $context)) {
            // line 41
            echo "                <div class=\"modal-body\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["progressbar"] ?? $this->getContext($context, "progressbar")), "id", array()), "html", null, true);
            echo "\">
                    <div class=\"float-right progress-details-text\" default-value=\"";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["progressbar"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["progressbar"] ?? null), "label", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing...", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing...", array(), "Admin.Global"))), "html", null, true);
            echo "\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["progressbar"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["progressbar"] ?? null), "label", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing...", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing...", array(), "Admin.Global"))), "html", null, true);
            echo "
                    </div>
                    <div class=\"progress active progress-striped\" style=\"display: block; width: 100%\">
                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0%\">
                            <span>0 %</span>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 52
        echo "
            ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "        </div>
    </div>
</div>
<script>
    \$(document).ready(function() {
        var closable = ";
        // line 76
        if ((array_key_exists("closable", $context) && (($context["closable"] ?? $this->getContext($context, "closable")) == true))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
        \$('#";
        // line 77
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "').modal({
            backdrop: (closable ? true : 'static'),
            keyboard: closable,
            closable: closable,
            show: false
        });
    });
</script>
";
        
        $__internal_3372cf789b28cf8b2c4fbf7454f6daac2f1c90da31ed8accb66124d4471f74e6->leave($__internal_3372cf789b28cf8b2c4fbf7454f6daac2f1c90da31ed8accb66124d4471f74e6_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_0920f0e93db9239a67f7ad870469b138753530598aab1bc525f0172af2bab1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0920f0e93db9239a67f7ad870469b138753530598aab1bc525f0172af2bab1a3->enter($__internal_0920f0e93db9239a67f7ad870469b138753530598aab1bc525f0172af2bab1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "                ";
        if (array_key_exists("title", $context)) {
            // line 30
            echo "                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
            // line 31
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</h4>
                        ";
            // line 32
            if ((array_key_exists("closable", $context) && (($context["closable"] ?? $this->getContext($context, "closable")) == true))) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
            }
            // line 33
            echo "                    </div>
                ";
        }
        // line 35
        echo "            ";
        
        $__internal_0920f0e93db9239a67f7ad870469b138753530598aab1bc525f0172af2bab1a3->leave($__internal_0920f0e93db9239a67f7ad870469b138753530598aab1bc525f0172af2bab1a3_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_16be41e20559e3fb8fda8a7d8c99a154ecefcd2105524fe50b7bfdd1bcbff27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16be41e20559e3fb8fda8a7d8c99a154ecefcd2105524fe50b7bfdd1bcbff27b->enter($__internal_16be41e20559e3fb8fda8a7d8c99a154ecefcd2105524fe50b7bfdd1bcbff27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "            ";
        
        $__internal_16be41e20559e3fb8fda8a7d8c99a154ecefcd2105524fe50b7bfdd1bcbff27b->leave($__internal_16be41e20559e3fb8fda8a7d8c99a154ecefcd2105524fe50b7bfdd1bcbff27b_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $__internal_df3ff7e014730ce80d2ac12b2e3c0187ed46daa7c5bfdaaa931bf49bf471428c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3ff7e014730ce80d2ac12b2e3c0187ed46daa7c5bfdaaa931bf49bf471428c->enter($__internal_df3ff7e014730ce80d2ac12b2e3c0187ed46daa7c5bfdaaa931bf49bf471428c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 54
        echo "                ";
        if (array_key_exists("actions", $context)) {
            // line 55
            echo "                    <div class=\"modal-footer\">
                        ";
            // line 56
            if ((array_key_exists("closable", $context) && (($context["closable"] ?? $this->getContext($context, "closable")) == true))) {
                // line 57
                echo "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-lg\" data-dismiss=\"modal\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", array(), "Admin.Actions"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 59
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 60
                echo "                            ";
                if (($this->getAttribute($context["action"], "type", array(), "any", true, true) && ($this->getAttribute($context["action"], "type", array()) == "link"))) {
                    // line 61
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "href", array()), "#")) : ("#")), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "class", array()), "btn")) : ("btn")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "label", array()), "Label is missing")) : ("Label is missing")), "html", null, true);
                    echo "</a>
                            ";
                } elseif (($this->getAttribute(                // line 62
$context["action"], "type", array(), "any", true, true) && ($this->getAttribute($context["action"], "type", array()) == "button"))) {
                    // line 63
                    echo "                                <button type=\"button\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "value", array()), "")) : ("")), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "class", array()), "btn")) : ("btn")), "html", null, true);
                    echo "\">
                                    ";
                    // line 64
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "label", array()), "Label is missing")) : ("Label is missing")), "html", null, true);
                    echo "
                                </button>
                            ";
                }
                // line 67
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                    </div>
                ";
        }
        // line 70
        echo "            ";
        
        $__internal_df3ff7e014730ce80d2ac12b2e3c0187ed46daa7c5bfdaaa931bf49bf471428c->leave($__internal_df3ff7e014730ce80d2ac12b2e3c0187ed46daa7c5bfdaaa931bf49bf471428c_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 70,  208 => 68,  202 => 67,  196 => 64,  189 => 63,  187 => 62,  178 => 61,  175 => 60,  170 => 59,  164 => 57,  162 => 56,  159 => 55,  156 => 54,  150 => 53,  143 => 38,  137 => 37,  130 => 35,  126 => 33,  122 => 32,  118 => 31,  115 => 30,  112 => 29,  106 => 28,  90 => 77,  82 => 76,  75 => 71,  73 => 53,  70 => 52,  58 => 43,  54 => 42,  49 => 41,  47 => 40,  44 => 39,  42 => 37,  39 => 36,  37 => 28,  30 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
<div class=\"modal fade\" id=\"{{ id }}\" tabindex=\"-1\">
    <div class=\"modal-dialog {% if class is defined %}{{ class }}{% endif %}\">
        <div class=\"modal-content\">
            {% block header %}
                {% if title is defined %}
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">{{ title }}</h4>
                        {% if closable is defined and closable == true %}<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>{% endif %}
                    </div>
                {% endif %}
            {% endblock %}

            {% block content %}
            {% endblock %}

            {% if progressbar is defined %}
                <div class=\"modal-body\" id=\"{{ progressbar.id }}\">
                    <div class=\"float-right progress-details-text\" default-value=\"{{ progressbar.label|default('Processing...'|trans({}, 'Admin.Global')) }}\">
                        {{ progressbar.label|default('Processing...'|trans({}, 'Admin.Global')) }}
                    </div>
                    <div class=\"progress active progress-striped\" style=\"display: block; width: 100%\">
                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0%\">
                            <span>0 %</span>
                        </div>
                    </div>
                </div>
            {% endif %}

            {% block footer %}
                {% if actions is defined %}
                    <div class=\"modal-footer\">
                        {% if closable is defined and closable == true %}
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-lg\" data-dismiss=\"modal\">{{ 'Close'|trans({}, 'Admin.Actions') }}</button>
                        {% endif %}
                        {% for action in actions %}
                            {% if action.type is defined and action.type == 'link' %}
                                <a href=\"{{ action.href|default('#') }}\" class=\"{{ action.class|default('btn') }}\">{{ action.label|default('Label is missing') }}</a>
                            {% elseif action.type is defined and action.type == 'button' %}
                                <button type=\"button\" value=\"{{ action.value|default('') }}\" class=\"{{ action.class|default('btn') }}\">
                                    {{ action.label|default('Label is missing') }}
                                </button>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    </div>
</div>
<script>
    \$(document).ready(function() {
        var closable = {% if closable is defined and closable == true %}true{% else %}false{% endif %};
        \$('#{{ id }}').modal({
            backdrop: (closable ? true : 'static'),
            keyboard: closable,
            closable: closable,
            show: false
        });
    });
</script>
", "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "/var/www/html/dev/PrestaShop/src/PrestaShopBundle/Resources/views/Admin/Helpers/bootstrap_popup.html.twig");
    }
}
