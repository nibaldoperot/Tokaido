<?php

/* @Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/plugins/error/pages */
class __TwigTemplate_2307547794cfafdcc64da12f85a2ad4401cd8a3a16c119d1887bd706d099a1b3 extends Twig_Template
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
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

", "@Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/plugins/error/pages", "");
    }
}
