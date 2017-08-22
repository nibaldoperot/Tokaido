<?php

/* @Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/01.home/_welcome */
class __TwigTemplate_7211d682695df26cbac9f9861094a1ed7ebbb4f91f812e6397897559f71eec6a extends Twig_Template
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
        echo "<div class=\"\">
        <h1>Bienvenido</h1>
<p>===</p>
<p>Bienvenido al mejor sushi de la zona sur, enteráte de nuestra carta actualizada y de las promociones que tenemos para ti,
recuerda que tenemos delivery los 7 días de la semana y que puedes pagar con todo medio de pago.</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/01.home/_welcome";
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
        return new Twig_Source("<div class=\"\">
        <h1>Bienvenido</h1>
<p>===</p>
<p>Bienvenido al mejor sushi de la zona sur, enteráte de nuestra carta actualizada y de las promociones que tenemos para ti,
recuerda que tenemos delivery los 7 días de la semana y que puedes pagar con todo medio de pago.</p>
</div>
", "@Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/01.home/_welcome", "");
    }
}
