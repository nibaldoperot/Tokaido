<?php

/* @Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/03.contacto */
class __TwigTemplate_7c539f0f5109df5c585b240d34f0af9d6f4eac7f5532b03d435e51748f8ec08b extends Twig_Template
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
        echo "<h1>Contacto</h1>
<h2>Abierto los 7 días de la semana full delivery</h2>
<p>===</p>
<blockquote>
<h4>Paga con todo medio de pago</h4>
</blockquote>
<p>===</p>
<blockquote>
<h4>Te Esperamos</h4>
</blockquote>
<p>No paramos, nuestro local se encuentra en el corazón de la comuna de San Bernardo, y aborda comunas como, Calera de Tango, El Bosque, Nos. Tenemos delivery todos los días y también todo los medios de pago. Anímate y haz tú pedido.  </p>
<table>
<thead>
<tr>
<th>Día(s)</th>
<th>Horario</th>
</tr>
</thead>
<tbody>
<tr>
<td>Lunes a Jueves</td>
<td>12:00 a 23:30</td>
</tr>
<tr>
<td>Viernes y Sábado</td>
<td>12:00 a 01:30</td>
</tr>
<tr>
<td>Domingo</td>
<td>12:00 a 23:30</td>
</tr>
</tbody>
</table>
<h2>Formulario</h2>
";
        // line 35
        $this->loadTemplate("forms/form.html.twig", "@Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/03.contacto", 35)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("contact-form")))));
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/03.contacto";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 35,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contacto</h1>
<h2>Abierto los 7 días de la semana full delivery</h2>
<p>===</p>
<blockquote>
<h4>Paga con todo medio de pago</h4>
</blockquote>
<p>===</p>
<blockquote>
<h4>Te Esperamos</h4>
</blockquote>
<p>No paramos, nuestro local se encuentra en el corazón de la comuna de San Bernardo, y aborda comunas como, Calera de Tango, El Bosque, Nos. Tenemos delivery todos los días y también todo los medios de pago. Anímate y haz tú pedido.  </p>
<table>
<thead>
<tr>
<th>Día(s)</th>
<th>Horario</th>
</tr>
</thead>
<tbody>
<tr>
<td>Lunes a Jueves</td>
<td>12:00 a 23:30</td>
</tr>
<tr>
<td>Viernes y Sábado</td>
<td>12:00 a 01:30</td>
</tr>
<tr>
<td>Domingo</td>
<td>12:00 a 23:30</td>
</tr>
</tbody>
</table>
<h2>Formulario</h2>
{% include \"forms/form.html.twig\" with {form: forms('contact-form')} %}", "@Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/03.contacto", "");
    }
}
