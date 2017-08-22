<?php

/* @Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/01.home/_gallery */
class __TwigTemplate_fa2ba8ca127a64989e2a577507196515a3a3b0cc2039cb9768c263604ff7cfa0 extends Twig_Template
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
        <!-- Slider main container -->
<div class=\"swiper-container\">
    <!-- Additional required wrapper -->
    <div class=\"swiper-wrapper\">
        <!-- Slides -->
        <div class=\"swiper-slide\"><img src=\"/gallery/1.jpeg\"/></div>
        <div class=\"swiper-slide\"><img src=\"/gallery/3.png\"/></div>
        <div class=\"swiper-slide\"><img src=\"/gallery/4.png\"/></div>
        <div class=\"swiper-slide\"><img src=\"/gallery/5.png\"/></div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class=\"swiper-pagination\"></div>

    <!-- If we need navigation buttons -->
    <div class=\"swiper-button-prev\"></div>
    <div class=\"swiper-button-next\"></div>

    <!-- If we need scrollbar -->
    <div class=\"swiper-scrollbar\"></div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/01.home/_gallery";
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
        <!-- Slider main container -->
<div class=\"swiper-container\">
    <!-- Additional required wrapper -->
    <div class=\"swiper-wrapper\">
        <!-- Slides -->
        <div class=\"swiper-slide\"><img src=\"/gallery/1.jpeg\"/></div>
        <div class=\"swiper-slide\"><img src=\"/gallery/3.png\"/></div>
        <div class=\"swiper-slide\"><img src=\"/gallery/4.png\"/></div>
        <div class=\"swiper-slide\"><img src=\"/gallery/5.png\"/></div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class=\"swiper-pagination\"></div>

    <!-- If we need navigation buttons -->
    <div class=\"swiper-button-prev\"></div>
    <div class=\"swiper-button-next\"></div>

    <!-- If we need scrollbar -->
    <div class=\"swiper-scrollbar\"></div>
</div>
</div>
", "@Page:/var/www/html/_Utilidades/_Grav/_Tokaido/user/pages/01.home/_gallery", "");
    }
}
