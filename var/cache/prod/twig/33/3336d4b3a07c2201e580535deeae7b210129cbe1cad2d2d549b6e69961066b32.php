<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_ae66559ae4342be94e52c30ce2318d2586c84c3efd2318de2b13726453d5620c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\rest_api\\src\\UserBundle/Resources/views/Default/index.html.twig");
    }
}
